if("undefined"==typeof _the_theme)var _the_theme=new Object;_the_theme.slides=[],jQuery(window).load(function(){_the_theme.posContainer(),_the_theme.fadeNavIn(),_the_theme.MobileContacts()}),jQuery(document).ready(function(){function e(e){var s,i;return s=e.data("settings"),i={},e.find(".the_list_item").length>1&&(i={active:"undefined"==typeof s.enableplaystop?!1:s.enableplaystop>0,effect:"undefined"==typeof s.effect?"slide":s.effect,interval:"undefined"==typeof s.interval||s.interval<=0?5e3:1e3*parseFloat(s.interval),auto:"undefined"==typeof s.autoplay?!1:s.autoplay>0,swap:"undefined"==typeof s.swapplaystop?!1:s.swapplaystop>0,pauseOnHover:"undefined"==typeof s.pauseonhover||s.pauseonhover<=0?!1:parseInt(s.pauseonhover),restartDelay:"undefined"==typeof s.restartdelay||s.restartdelay<=0?2500:1e3*parseFloat(s.restartDelay)}),i}_the_theme.mobileView();var s=b2b.isTablet;s&&(jQuery("body").addClass("isTablet"),jQuery("html").addClass("mobileview"));var i=b2b.isMobile&&!b2b.isTablet;i&&(jQuery("body").addClass("isMobile"),jQuery("html").addClass("mobileview")),jQuery(".square_1_1 .slides").each(function(){var s=jQuery(this);_the_theme.slides.push(s.slidesjs({play:e(s),width:1060,height:1060}))}),jQuery(".round_1_1 .slides").each(function(){var s=jQuery(this);_the_theme.slides.push(s.slidesjs({play:e(s),width:1060,height:1060}))}),jQuery(".portrait_3_4 .slides").each(function(){var s=jQuery(this);_the_theme.slides.push(s.slidesjs({play:e(s),width:1060,height:1413}))}),jQuery(".landscape_4_3 .slides").each(function(){var s=jQuery(this);_the_theme.slides.push(s.slidesjs({play:e(s),width:1060,height:795}))}),jQuery(".portrait_2_3 .slides").each(function(){var s=jQuery(this);_the_theme.slides.push(s.slidesjs({play:e(s),width:1060,height:1590}))}),jQuery(".landscape_3_2 .slides,.scaled_to_fit_3_2 .slides").each(function(){var s=jQuery(this);_the_theme.slides.push(s.slidesjs({play:e(s),width:1060,height:706}))}),jQuery(".widescreen_2-4_1 .slides,.scaled_to_fit_2-4_1 .slides").each(function(){var s=jQuery(this);_the_theme.slides.push(s.slidesjs({play:e(s),width:1060,height:i?880:440}))}),jQuery(".widescreen_16_9 .slides").each(function(){var s=jQuery(this);_the_theme.slides.push(s.slidesjs({play:e(s),width:1060,height:i?1192:596}))}),jQuery(".img-widescreen_2-4_1 .slides,.no_sizing .slides").each(function(){var s=jQuery(this);_the_theme.slides.push(s.slidesjs({play:e(s),width:1060,height:440}))}),jQuery(".img-widescreen_16_9 .slides").each(function(){var s=jQuery(this);_the_theme.slides.push(s.slidesjs({play:e(s),width:1060,height:596}))}),jQuery(".no_set_height .slides").each(function(){var s=jQuery(this);_the_theme.slides.push(s.slidesjs({play:e(s),width:1060,height:1372}))}),jQuery(".no_set_width_4_3 .slides").each(function(){var s=jQuery(this);_the_theme.slides.push(s.slidesjs({play:e(s),width:1060,height:i?1192:596}))}),jQuery(".no_set_width_1_1 .slides").each(function(){var s=jQuery(this);_the_theme.slides.push(s.slidesjs({play:e(s),width:1060,height:1060}))}),jQuery(".slides").each(function(){var e=jQuery(this),s=e.find(".the_list_item").length;2>s?e.addClass("single"):e.removeClass("single")}),jQuery(".slidesjs-pagination").each(function(){var e=jQuery(this),s=e.find("li").length;2>s&&(e.remove(),jQuery(".slidesjs-navigation").remove(),jQuery(".slidesjs-control").unbind("touchmove"))}),jQuery("#searchsubmit").val("u"),jQuery(".share-trigger").click(function(){jQuery("body").toggleClass("show-share")}),jQuery(".close-share").click(function(){jQuery("body").toggleClass("show-share")}),jQuery(".multi-contact-link").click(function(){jQuery("body").toggleClass("show-contacts")}),jQuery(".close-contacts").click(function(){jQuery("body").toggleClass("show-contacts")}),jQuery(".type_gallery .caption").click(function(){jQuery(this).toggleClass("caption-show")}),jQuery(".type_photo_grid .the_list_item.yes_desc").click(function(){jQuery(this).toggleClass("caption-show")}),jQuery(".b2b-form select").removeClass("tsq-custom-select"),jQuery(".type_photo_grid .the_list_item.yes_desc").each(function(){var e=jQuery(this).find(".the_list_item_desc").height();jQuery(this).find(".the_item_link").height(function(s,i){return i+e})}),jQuery(".sa-menu-trigger").click(function(){jQuery("body").toggleClass("sa-show-menu")}),jQuery(".close-menu").click(function(){jQuery("body").toggleClass("sa-show-menu")}),_the_theme.Gallery2(),_the_theme.Gallery3()}),jQuery(window).resize(function(){_the_theme.posContainer(),_the_theme.mobileView(),_the_theme.MobileContacts()}),_the_theme.mobileView=function(){var e=jQuery(window).width(),s=jQuery("html");800>e?s.hasClass("mobileview")||b2b.isMobile||b2b.isTablet||s.addClass("mobileview"):!s.hasClass("mobileview")||b2b.isMobile||b2b.isTablet||s.removeClass("mobileview")},_the_theme.fadeNavIn=function(){jQuery("html").animate({opacity:1})},_the_theme.posContainer=function(){jQuery("#wrapper").css("paddingTop",jQuery("#the_header").outerHeight(!0))},_the_theme.MobileContacts=function(){var e=jQuery(".multi-contacts-wrap").detach(),s=jQuery("html");s.hasClass("mobileview")&&!s.hasClass("no-mediaqueries")?e.prependTo("#wrapper"):s.hasClass("mobileview")&&!s.hasClass("no-mediaqueries")||e.appendTo(".mobile-abovepost")},_the_theme.Gallery2=function(){jQuery(".type_gallery.g2 .slick-wrap").each(function(e,s){var i,t,l,o;i=jQuery(s).find(".slick-slides"),t=jQuery(s).find(".slick-nav"),l=i.prop("id"),o=t.prop("id"),i.on("init",function(e,i){jQuery(s).addClass("slides-init")}),i.slick({slidesToShow:1,slidesToScroll:1,arrows:!1,fade:!0,prevArrow:"<a class='slick-prev'>Previous</a>",nextArrow:"<a class='slick-next'>Next</a>",asNavFor:"#"+o}),t.slick({respondTo:"min",asNavFor:"#"+l,prevArrow:"<a class='slick-prev'>Previous</a>",nextArrow:"<a class='slick-next'>Next</a>",slidesToShow:9,slidesToScroll:1,arrows:!0,centerMode:!1,focusOnSelect:!0,infinite:!0,responsive:[{breakpoint:768,settings:{slidesToShow:7,slidesToScroll:1,arrows:!0,centerMode:!1,focusOnSelect:!0,infinite:!0}},{breakpoint:480,settings:{slidesToShow:5,slidesToScroll:1,arrows:!0,centerMode:!1,focusOnSelect:!0,infinite:!0}}]})})},_the_theme.Gallery3=function(){jQuery(".slick-carousel .slick-wrap").each(function(e,s){var i;i=jQuery(s).find(".slick-slides"),i.on("init",function(e,i){jQuery(s).addClass("slides-init")}),i.slick({respondTo:"min",prevArrow:"<a class='slick-prev'>Previous</a>",nextArrow:"<a class='slick-next'>Next</a>",slidesToShow:3,slidesToScroll:3,arrows:!0,dots:!0,centerMode:!1,focusOnSelect:!0,infinite:!0,autoplay:!0,pauseOnHover:!0,responsive:[{breakpoint:800,settings:{slidesToShow:2,slidesToScroll:2,arrows:!0,dots:!0,centerMode:!1,focusOnSelect:!0,infinite:!0,autoplay:!0,pauseOnHover:!0}},{breakpoint:568,settings:{slidesToShow:1,slidesToScroll:1,arrows:!0,dots:!0,centerMode:!1,focusOnSelect:!0,infinite:!0,autoplay:!0,pauseOnHover:!0}}]})})};