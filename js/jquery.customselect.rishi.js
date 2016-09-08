/*
author: rishi sharma | rishi.havoc@gmail.com

update history
9/14/2011 : added data-value options so that the value of select can be overridden by javascript. 
10/25/2011: - added click bindings to Document tag and use the event propagation to detect if the click is made on the select. if not, all other selects are hidden.
			- added keyboard support with up/down/enter keys for selection
10/31/2011: - removed keyboard enter bindings, since enter acts as a click when element is in focus
			- replaced the element with class "tsq-custom-select-click-handle" (the handle) from <em> to <button> : this will help the element to gain focus/tab when used in a form.
11/25/2011: - added keypresses for searching in the dropdown
1/1/2012:	- added input box for search. 
			- when handle receives the focus, the menu opens automatically.
			- in IE, selecting an element does not focusretain focus on the handle because of multiple focus bug.
1/19/2012	- added item creation callback. function is called after a LI is created and added to the list.
2/21/2012	- the dropdown menu hides when page is scrolled
*/
( function($, win){
				
	var defaultOptions = {
		ui:{
			customElem:'<div class="tsq-custom-select-front"><button type="button" class="tsq-custom-select-click-handle tsq-custom-select-menu-toggler">Select an Item</button><span class="tsq-custom-select-icon tsq-custom-select-menu-toggler"></span></div>',
			customElemList:'<div><input type="text" value="" class="custom-select-searchinput" style="border:1px solid #e1e1e1; width:99%; background:url(\'{{searchIconUrl}}\') no-repeat scroll 98% 50% #fff; text-transform:lowercase; "/><ul class="tsq-custom-select-item-list" tabindex="{{tabindex}}"></ul></div>',
			handleClass:'.tsq-custom-select-click-handle',
			handleIconClass:'.tsq-custom-select-icon',
			menuToggler:'.tsq-custom-select-menu-toggler',
			searchInput:'custom-select-searchinput',
			searchIconUrl:'https://tsm-images.s3.amazonaws.com/icons/search_icon.png',
			appendTo:'body'
		},

		changeCallback: function(){
		},
		optionClickCallback: function(){
		},
		itemCreationCallback:function( $listItem ){
		},
		applyWidthFix:0,
		isAnimating:0,
		lastSelected:$({})
	};

	$.customSelect = function( customOptions ){
		if( !customOptions.elem ){
			$.extend( true, defaultOptions, customOptions );
		}
		
		else{
			var options = $.extend( true, {}, defaultOptions, customOptions ),
				elem = options.elem,
				$elem = $(elem),
				elemCss = { 'display':'none' },
				$customElemListContainer = $( options.ui.customElemList.
										replace( '{{tabindex}}', $( '.tsq-custom-select-item-list' ).length + 1 ).
										replace( '{{searchIconUrl}}', options.ui.searchIconUrl )
									),
				/*$customElemList = $( options.ui.customElemList.
										replace( '{{tabindex}}', $( '.tsq-custom-select-item-list' ).length + 1 ).
										replace( '{{searchIconUrl}}', options.ui.searchIconUrl )
									),*/
				$customElemList = $customElemListContainer.find('ul'),
				$searchInput = $customElemListContainer.find( '.' + options.ui.searchInput ),
				customClass = $elem.data( 'customclass' ) || 0,
				customId = $elem.data( 'customid' ) || 0,
				defaultVal = ( typeof $elem.attr( 'data-value' ) === "undefined" ) ? 0 : ( '' + $elem.attr( 'data-value' ) ),
				$customElem = $( options.ui.customElem ),
				$listOptions = $elem.find( 'option' ),
				$handle = $customElem.find( options.ui.handleClass ),
				$handleIcon = $customElem.find( options.ui.handleIconClass ),
				proxyId = ( $elem.data( 'proxyid' ) ) ? $elem.data( 'proxyid' ) : 0,
				$appendTo = $( options.ui.appendTo ),
				//elemWidth = $elem.outerWidth(),
                elemWidth = $elem.width(),
				$win = $(window),
				tabindex, h, diff, top, searchCount, left, 

				showMenu = function(){
					if( !options.isAnimating ){
						options.isAnimating = 1;
						//$customElemListContainer.addClass( 'b2b-show-custom-select' ).find( 'a' ).removeClass( 'hover' );
						if( $customElemListContainer.data( 'curr' ) ){
							$customElemListContainer.data( 'curr' ).addClass( 'hover' );
							options.lastSelected = $customElemListContainer.data( 'curr' );
						}
						
						h = $customElemListContainer.height();
						left = typeof options.ui.appendToLeft === 'undefined' ? $customElem.offset().left : options.ui.appendToLeft;
						top = $customElem.offset().top + $customElem.height();// - $appendTo.offset().top;
						
						if( top + h - $win.scrollTop() > $win.height() ){
							top -= h + $customElem.height();
						}
						$customElemListContainer.css( { 'width':elemWidth, 'top':top, 'left':left, 'display':'block', 'height':1, 'overflow':'visible' } );
						$customElemList.css({'max-height':h, 'overflow-y':'auto'});
						$searchInput.val( '' );
						$customElemListContainer.stop(true,true).animate( { 'height':h }, { duration:200, easing:'easeOutCubic', complete:function(){
							options.isAnimating = 0;
							//$customElemList.focus();
							$customElemListContainer.addClass( 'b2b-show-custom-select' ).find( 'a' ).removeClass( 'hover' );
							$searchInput.focus();
						}});
						options.searchString = "";
						filterList( options.searchString );
					}
				},

				hideMenu = function(){
					if( !options.isAnimating ){
						options.isAnimating = 1;
						$customElemListContainer.removeClass( 'b2b-show-custom-select' );
						//$customElemList.stop(true,true).animate( { 'height':1 }, { duration:200, easing:'easeOutCubic', complete:function(){
							$customElemListContainer.css( { 'display':'none', 'height':h } );
							options.isAnimating = 0;
						//}});
					}
				},
				
				activateKeys = function(){
					$customElemListContainer.bind( 'keyup', function( e ){
						//38 up
						//40 down
						//13 = enter
						if( $(this).hasClass( 'b2b-show-custom-select' ) ){

							$customElemList.find( 'a' ).removeClass( 'hover' );
							$searchInput.val( $searchInput.val().replace( /\+/g,'' ) );
							
							if( $searchInput.val() === "" ){
								if( e.keyCode === 40 ){
									e.preventDefault();
									options.lastSelected = ( options.lastSelected.parent().next().length ) ? options.lastSelected.parent().next().find( 'a' ):$customElemList.find( 'li:first-child > a' );
									options.lastSelected.focus();
								}
								else if( e.keyCode === 38 ){
									e.preventDefault();
									options.lastSelected = ( options.lastSelected.parent().prev().length && options.lastSelected.parent().prev().find( 'a' ).length ) ? options.lastSelected.parent().prev().find( 'a' ):$customElemList.find( 'li:last-child > a' );
									options.lastSelected.focus();
								}
								else if( e.keyCode === 13 ){
									//rishi - dont need this, since when in focus, the Enter fires a click event! new findings!
									/*$handle.html( options.lastSelected.html() );
									hideMenu();
									$elem.val( options.lastSelected.attr( 'data-value' ) );
									$customElemList.data( 'curr', options.lastSelected );
									$elem.trigger( 'change.update-default' );
									options.optionClickCallback( options.lastSelected );
									$handle.focus();*/
								}
								else if( ( e.keyCode >= 48 && e.keyCode <= 57 ) || ( e.keyCode >= 65 && e.keyCode <= 90 ) || ( e.keyCode >= 96 && e.keyCode <= 106 ) || ( e.keyCode >= 109 && e.keyCode <=111 ) || ( e.keyCode >= 186 && e.keyCode <= 191 ) ){
									$searchInput.focus().val( String.fromCharCode(e.keyCode).toLowerCase() );
								}
							}
							else{
								if( e.keyCode === 13 && $customElemList.find( 'a:visible' ).length ){
									options.lastSelected.trigger( 'click' );
								}
							}
							/*if( e.keyCode === 8 ){
								e.preventDefault();
								options.searchString = options.searchString.slice( 0, options.searchString.length - 1 );
							}*/
							/*if( ( e.keyCode >= 48 && e.keyCode <= 57 ) || ( e.keyCode >= 65 && e.keyCode <= 90 ) || ( e.keyCode >= 97 && e.keyCode <= 122 ) || e.keyCode === 95 || e.keyCode === 45 || e.keyCode === 32){console.log('a');
								//console.log( String.fromCharCode(e.keyCode).toLowerCase() );
								//options.searchString += String.fromCharCode(e.keyCode).toLowerCase();
								$searchInput.focus().val( String.fromCharCode(e.keyCode).toLowerCase() );
							}*/
							//console.log(options.searchString);
							//$searchInput.val( options.searchString );
							//filterList( options.searchString );
							if( filterList( $searchInput.val().toLowerCase() ) ){
								options.lastSelected = $( $customElemList.find( 'a:visible' )[0] );
							}
							options.lastSelected.addClass( 'hover' );
						}
					});
				},

				filterList = function( str ){
					searchCount = 0;
					//$customElemList.find( "a" ).css({'display':'block'}).filter( ":not(:contains('" + str + "'))" ).css( { 'display':'none' } );	//more efficient, but does not match upper cases :(
					$customElemList.find( "a" ).css({'display':'block'}).each( function(){	//matches upper cases :)
						$this = $(this);
						if( $this.html().toLowerCase().search(str) === -1 ){
							$this.css({'display':'none'});
							searchCount++;
						}
					});
					return searchCount;
				},

				toggleMenu = function(){
					if( !$customElemListContainer.hasClass( 'b2b-show-custom-select' ) ){
						showMenu();
					}
					else{
						hideMenu();
					}
				};
			
			if( defaultVal ){
				$elem.val( defaultVal );
			}
			$listOptions.each( function( i ){
				var $optionItem = $(this),
					curr = 0,
					$li,
					last = ( i === $listOptions.length - 1 ) ? 'class="last"' : "";

				if($optionItem.is( ':selected' )){
					$handle.html( $optionItem.html() );
					curr = 1;
				}
				$li = $( '<li ' + last + '><a href="javascript:void(0);" data-value="' + $optionItem.attr( 'value' ) + '">' + $optionItem.text() + '</a></li>' );
				if( curr ){
					$li.find( 'a' ).addClass( 'hover' );
				}
				$customElemList.append( $li );
				options.itemCreationCallback( $li );
			});
			options.searchString = "";
			options.lastSelected = ( $customElemList.find( 'a.hover' ).length )?$customElemList.find( 'a.hover' ):$customElemList.find( 'li:first-child > a' );
			$customElemListContainer.data( 'curr', options.lastSelected ).css({'display':'none','position':'absolute'});
			$customElemList.css({'display':'block','position':'static'});
			//$customElem.addClass( elem.className ).append( $customElemList ).width( $elem.width() );
			$customElem.addClass( elem.className ).width( elemWidth );
			//$handle.width( elemWidth );
            $handle.css({'width':"100%"});
			//$handleIcon.width( elemWidth );
			if( proxyId ){
				$handle.attr( 'id', proxyId );
			}
			
			if( options.applyWidthFix ){
				elemCss.width = $elem.width();
			}
			$elem.css( elemCss ).after( $customElem ).bind( 'change.update-custom-select', function(){
				$handle.html( $elem.find('option:selected').html() );
			}).data( 'proxy', $customElem );//console.log(options.ui.appendTo);
			$customElemListContainer.css( { 'width':$elem.width(), 'top':$customElem.offset().top + $customElem.height(), 'left':$customElem.offset().left  } ).appendTo( $appendTo );
			
			if( customClass ){
				$customElemListContainer.addClass( customClass );
			}
			if( customId ){
				$customElemListContainer.attr( 'id', customId );
			}

			activateKeys();

			/*$customElem.bind( 'click', function(){
				toggleMenu();
			});*/
			$(document).bind( 'click.customselect', function( e ){
				var $elem = $(e.target);
				if( !$elem.hasClass( options.ui.searchInput ) ){
					if( $elem === $customElem || $customElem.find($elem).length ){
						toggleMenu();
					}
					else{
						hideMenu();
					}
				}
			});
			$win.bind( 'scroll', function(){
				hideMenu();
			});

			$handle.bind( 'focus.fresh', function( e ){
				if( !$customElemListContainer.hasClass( 'b2b-show-custom-select' ) ){
					$handle.trigger( 'click.customselect' );
				}
			});
			
			$customElemList.delegate( 'a:not(.exclude)', 'click', function(){
				var $selectedElem = $(this);
				$handle.html( $selectedElem.html() );
				toggleMenu();
				$elem.val( $selectedElem.attr( 'data-value' ) );
				$customElemListContainer.data( 'curr', $selectedElem );
				hideMenu();
				$elem.trigger('change.update-default');
				options.optionClickCallback( $selectedElem );
				if( !$.browser.msie ){
					$handle.trigger( 'focus.stale' );
				}
			}).delegate( 'a', 'mouseover', function(){
				$customElemList.find( 'a' ).removeClass( 'hover' );
				$(this).addClass( 'hover' );
				options.lastSelected = $(this);
			}).delegate( 'a', 'mouseout', function(){
				$(this).removeClass( 'hover' );
			}).bind( 'mouseout', function(){
				$customElemList.find( 'a' ).removeClass( 'hover' );
				options.lastSelected = options.lastSelected||$customElemListContainer.data( 'curr' );
				options.lastSelected.addClass( 'hover' );
			});
		}
	};

	$.fn.customSelect = function( customOptions ){
		return this.each( function(){
			customOptions = customOptions || {};
			customOptions.elem = this;
			$.customSelect( customOptions );
		});
	};

	if(!$.easing.easeInCubic){
		$.extend( $.easing, {
			easeInCubic: function (x, t, b, c, d) {
				return c*(t/=d)*t*t + b;
			}
		});
	}
	if(!$.easing.easeOutCubic){
		$.extend( $.easing, {
			easeOutCubic: function (x, t, b, c, d) {
				return c*((t=t/d-1)*t*t + 1) + b;
			}
		});
	}
}( jQuery, window ));