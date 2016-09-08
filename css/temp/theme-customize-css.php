/*
 * 
 * THEME FONTS
 *
 */

/*
 * 
 * LOCATION:
 * /var/www/production.townsquareinteractive.com/docs/current//wp-content/themes/beacon-theme_san-antonio/
 */

/*
 * 
 * Theme Fonts:
 * /var/www/production.townsquareinteractive.com/docs/current//wp-content/themes/beacon-theme_san-antonio/cnf/defaults/theme_fonts.json
 */

/*
 * 
 * Font Types:
 * /var/www/production.townsquareinteractive.com/docs/current//wp-content/themes/beacon-easton/cnf/defaults/theme-font-types.json
 */


/* FONTS:
body: Array
(
    [label] => Lato
    [is-header-font] => 1
    [is-body-font] => 1
    [is-logo-font] => 1
    [is-feature-font] => 1
    [font-family] => 'Lato'
    [google] => Lato:300,400,700,900,300italic,400italic,700italic,900italic
)
hdrs: Array
(
    [label] => Lato
    [is-header-font] => 1
    [is-body-font] => 1
    [is-logo-font] => 1
    [is-feature-font] => 1
    [font-family] => 'Lato'
    [google] => Lato:300,400,700,900,300italic,400italic,700italic,900italic
)
feat: Array
(
    [label] => Lato
    [is-header-font] => 1
    [is-body-font] => 1
    [is-logo-font] => 1
    [is-feature-font] => 1
    [font-family] => 'Lato'
    [google] => Lato:300,400,700,900,300italic,400italic,700italic,900italic
)
logo: */


@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic);

    body.beacon{font-family:'Lato',Helvetica,Arial,sans-serif;font-weight:normal;}
    #wrapper h1,
    #wrapper h2,
    #wrapper h3,
    #wrapper h4,
    #wrapper h5,
    #wrapper h6,
    #wrapper dt,
    #wrapper th,
    #wrapper .gce-list-title,
    .type_list .the_list_item li:before {font-family:'Lato',Helvetica,Arial,sans-serif;}

    #wrapper .type_gallery .hero .the_list_item_headline,
    #wrapper .type_gallery .no_image .the_list_item_headline,
    #wrapper .type_photo_grid .hero .the_list_item_headline,
    #wrapper .type_photo_grid .no_image .the_list_item_headline{font-family:'Lato';}
    
/*
 * 
 * THEME COLORS
 *
 */

/*
 * 
 * Theme Colors:
 * /var/www/production.townsquareinteractive.com/docs/current//wp-content/themes/beacon-theme_san-antonio/cnf/defaults/theme_colors.json
 */


/*
 * 
 * Theme CSS Colors:
 * /var/www/production.townsquareinteractive.com/docs/current//wp-content/themes/beacon-theme_san-antonio/css/theme_colors.css
 */

/*Array
(
    [color_1] => #000000
    [color_2] => #575757
    [color_3a] => #ca0202
    [color_3] => #d12304
    [color_4] => #ffffff
    [color_5] => #ffffff
    [color_6] => #ffffff
    [color_7] => #f1bf0b
    [color_8] => #ffffff
    [color_9] => #ffffff
    [color_12] => #ffffff
    [color_13] => #ff8859
    [color_21] => rgba(0,0,0,.2);background-color:#000000\9
    [color_14] => #ffffff
    [color_15] => #000000
    [color_16] => #674b59
    [color_17] => rgba(0,0,0,0.35);background-color:#000000\9
    [color_18] => rgba(255,255,255,1);background-color:#ffffff\9
    [color_19] => #ededed
    [color_20] => #5a1601
)
*/
/*
 * 
 * Theme Background:
 * /var/www/production.townsquareinteractive.com/docs/current//wp-content/themes/beacon-theme_san-antonio/cnf/defaults/theme_background.json
 */

/* SAN ANTONIO - GENERAL COLORS*/
body{background-color:#ffffff;background-image:url('https://zoinkzoink.github.io/sc/images/bkg-2.jpg');background-repeat:no-repeat;background-position:center top;background-attachment:;background-size: ;}

/*OVERRIDE BACKGROUND COLOR IF BACKGROUND IMAGE EXISTS WITH COLOR*/
body{}

/*COLOR_1 / HEADLINES*/
#container h1,
#container h2,
#container h3,
#container h4,
#container h5,
#container h6,
#container dt,
#container th,
#container h1 a,
#container h2 a,
#container h3 a,
#container h4 a,
#container h5 a,
#container h6 a,
#container dt a,
#container th a{color: #000000;}
::selection{background:#000000;}
::-moz-selection{background:#000000;}

/*COLOR_2 / TEXT*/
#container{color: #575757;}

/*COLOR_3a / LINKS*/
#container a{color: #ca0202;}
#wrapper .mobile-abovepost a{color:#ca0202;}
#wrapper .type_photo_grid .the_list_item.not_hero:not(.no_image) .the_list_item_heads .the_list_item_action a{color:#ca0202;}

/*COLOR_19 / CONTENT ITEM BKG*/
#container .type_reviews.well .the_list_item_desc {background-color:#ededed;}
#container .type_reviews.well .the_list_item_heads:after{border-right-color:#ededed;}
#container .type_testimonials.well .the_list_item:not(.hero) .the_list_item_heads:after{border-right-color:#ededed;}
#container .type_testimonials.well .the_list_item:not(.hero) .the_list_item_desc,
#container .section .type_gallery.well .slidesjs-pagination,
#container .section .well .type-post,
#container .section .type-post blockquote,
#container .well .the_list_wrap,
#container .list_block:not(.type_gallery).well .the_list .the_list_item:not(.hero){background-color:#ededed;}
#container .type_menu.m3:not(.well) .the_list_item:not(.hero) .the_list_item_headline span,
#container .type_menu.m3:not(.well) .the_list_item:not(.hero) .the_list_item_subheadline {background-color:rgba(255,255,255,1);background-color:#ffffff\9;}
#container .type_menu.m3.well .the_list_item .the_list_item_headline span,
#container .type_menu.m3.well .the_list_item .the_list_item_subheadline {background-color:#ededed;}

/*COLOR_3 & COLOR_4 / HERO COLORS*/
#wrapper #_the_map_wrapper .b2b-location h2,
#wrapper #_the_map_wrapper a,
#wrapper #_the_map_wrapper .b2b-location-see-more{color: #ffffff;}
#wrapper #_the_map_wrapper .b2b-location.wide ul,
#wrapper #_the_map_wrapper .b2b-location .b2b-location-items-container{background: #d12304;color: #ffffff;}
#wrapper #_the_map_wrapper .b2b-location.wide .b2b-location-items ul li:hover,
#wrapper #_the_map_wrapper .b2b-location .b2b-location-expand-icon{background: #ffffff;color: #d12304;}
#wrapper #_the_map_wrapper .b2b-location.wide .b2b-location-items ul li:hover *{color: #d12304;}
#wrapper #_the_map_wrapper .b2b-location.wide .b2b-location-items.show-details ul li:hover *{color: #ffffff;}
#wrapper #_the_map_wrapper .b2b-location .b2b-location-items ul li:hover .b2b-location-expand-icon{background: #d12304;color:#ffffff;}

#wrapper #_the_contactfrm_wrapper .b2b-form label span.required-icon{color:#000000;}
#wrapper #_the_contactfrm_wrapper label{color:#575757;}
#container #_the_contactfrm_wrapper .b2b-form .b2b-form-submit,
#container #_the_contactfrm_wrapper .b2b-form .b2b-form-submit span{color: #ffffff;}
#container #_the_contactfrm_wrapper .b2b-form .b2b-form-submit{background-color: #d12304;}
#container #_the_contactfrm_wrapper .b2b-form .b2b-form-submit:hover{background-color: #ffffff;color: #d12304;}
#container #_the_contactfrm_wrapper .b2b-form .b2b-form-submit:hover span{color: #d12304;}

#the_footer #_the_contactfrm_wrapper .b2b-form label span.required-icon{color:#ff8859;}
#the_footer #_the_contactfrm_wrapper label{color:#ffffff;}
#the_footer #_the_contactfrm_wrapper .b2b-form .b2b-form-submit,
#the_footer #_the_contactfrm_wrapper .b2b-form .b2b-form-submit span{color: #d12304;}
#the_footer #_the_contactfrm_wrapper .b2b-form .b2b-form-submit{background-color: #ffffff;}
#the_footer #_the_contactfrm_wrapper .b2b-form .b2b-form-submit:hover{background-color: #d12304;color: #ffffff;}
#the_footer #_the_contactfrm_wrapper .b2b-form .b2b-form-submit:hover span{color: #ffffff;}

#wrapper #container #_the_contactfrm_wrapper .b2b-form .b2b-form-submit,
#container .section .type_gallery .slidesjs-pagination a.accent_color_bg,
.slick-dots li.slick-active button{background-color: #d12304;color: #ffffff;}
#wrapper .the_list_item .the_list_item_action{background-color: #d12304;}
#wrapper .the_list_item .the_list_item_action a{color: #ffffff;}

#container .the_list_item .gform_wrapper .gform_page_footer input.button{background-color: #ffffff;color: #d12304;}
#container .the_list_item.hero .gform_wrapper .gform_page_footer input.button{background-color: #d12304;color: #ffffff;}
#container .the_list_item .gform_wrapper .percentbar_blue,
#container .the_list_item .gform_wrapper .gform_page_footer input[type=submit],
#container .the_list_item .gform_wrapper .gform_footer input.button,
#container .the_list_item .gform_footer input[type=submit]{background-color: #d12304;color: #ffffff;}

#container .the_list_item.hero .gform_wrapper .gf_progressbar_percentage,
#container .the_list_item.hero .gform_wrapper .gform_page_footer input[type=submit],
#container .the_list_item.hero .gform_wrapper .gform_footer input.button,
#container .the_list_item.hero .gform_footer input[type=submit]{background-color: #ffffff;color: #d12304;}

/*#container .section .list_block.type_article.a3 .the_list_item.not_hero.yes_link .banner_bkg{background-color: #d12304;}*/
#container .type_article.a3   .the_list_item.no_image .the_list_item_action,
#wrapper   .the_list_item.hero  .the_list_item_action,
#wrapper   .type_photo_grid     .the_list_item .the_list_item_action,
#wrapper   .type_gallery        .the_list_item.no_image .the_list_item_action{background-color: #ffffff;}
#container .type_article.a3   .the_list_item.no_image .the_list_item_action a,
#wrapper   .the_list_item.hero  .the_list_item_action a,
#wrapper   .type_photo_grid     .the_list_item .the_list_item_action a,
#wrapper   .type_gallery        .the_list_item.no_image .the_list_item_action a{color: #d12304;}

#container .type_article.a3 .banner_link a,
#container .the_list_item.hero a{color:#ffffff;}

#container .type_article.a1    .the_list_item.hero .the_list_wrap,
#container .type_article.a2    .the_list_item.hero .the_list_wrap,
#container .type_article.a3    .the_list_item,
#container .type_article.a3.well .the_list_item.not_hero:nth-of-type(1n),
#container .type_menu.m1      .the_list_item.hero .the_list_wrap,
#container .type_menu.m2      .the_list_item.hero,
#container .type_menu.m3      .the_list_item.hero,
#container .type_services.s1  .the_list_item.hero .the_list_wrap,
#container .type_services.s2  .the_list_item.hero,
#container .type_services.s3  .the_list_item.hero .the_list_wrap,
#container .type_testimonials .the_list_item.hero .the_list_item_desc,
#container .type_gallery      .the_list_item.no_image{background-color:#d12304;color:#ffffff;}

#container .the_list_item.hero .gform_wrapper h2.gsection_title,
#container .type_article .the_list_item.hero .the_list_item_headline,
#container .type_article .the_list_item.hero .the_list_item_subheadline,
#container .type_article.a3 .the_list_item .the_list_item_headline,
#container .type_article.a3 .the_list_item .the_list_item_subheadline,
#container .type_services.s1 .the_list_item.hero .the_list_item_headline,
#container .type_services.s1 .the_list_item.hero .the_list_item_subheadline,
#container .type_services.s2 .the_list_item.hero .the_list_item_headline,
#container .type_services.s2 .the_list_item.hero .the_list_item_subheadline,
#container .type_services.s3 .the_list_item.hero .the_list_item_headline,
#container .type_services.s3 .the_list_item.hero .the_list_item_subheadline,
#container .list_block tr.the_list_item.hero th,
#container .type_menu .the_list_item.hero .the_list_item_headline,
#container .type_menu .the_list_item.hero .the_list_item_subheadline,
#container .type_gallery .the_list_item.no_image .the_list_item_headline,
#container .type_gallery .the_list_item.no_image .the_list_item_subheadline,

#container .type_article .the_list_item.hero .the_list_item_headline a,
#container .type_article .the_list_item.hero .the_list_item_subheadline a,
#container .type_article.a3 .the_list_item .the_list_item_headline a,
#container .type_article.a3 .the_list_item .the_list_item_subheadline a,
#container .type_services.s1 .the_list_item.hero .the_list_item_headline a,
#container .type_services.s1 .the_list_item.hero .the_list_item_subheadline a,
#container .type_services.s2 .the_list_item.hero .the_list_item_headline a,
#container .type_services.s2 .the_list_item.hero .the_list_item_subheadline a,
#container .type_services.s3 .the_list_item.hero .the_list_item_headline a,
#container .type_services.s3 .the_list_item.hero .the_list_item_subheadline a,
#container .list_block tr.the_list_item.hero th a,
#container .type_menu .the_list_item.hero .the_list_item_headline a,
#container .type_menu .the_list_item.hero .the_list_item_subheadline a,
#container .type_gallery .the_list_item.no_image .the_list_item_headline a,
#container .type_gallery .the_list_item.no_image .the_list_item_subheadline a,

#container .type_gallery      .the_list_item.no_image .the_list_item_desc *{color:#ffffff;}
#container .type_testimonials .the_list_item.hero .the_list_item_heads:after{border-right-color:#d12304;}

#container .type_testimonials .the_list_item.not_hero .the_list_item_desc *,
#container .type_testimonials .the_list_item .the_list_item_headline,
#container .type_testimonials .the_list_item .the_list_item_subheadline,
#container .type_testimonials .the_list_item .the_list_item_headline a,
#container .type_testimonials .the_list_item .the_list_item_subheadline a{color: #575757;}

#container .type_services.s2  .the_list_item .the_services_number{background-color:#d12304;color:#ffffff;}
#container .type_services.s2  .the_list_item.hero .the_services_number{background-color:#ffffff;color:#d12304;}
#container .type_services.s1  .the_services_number:before{color:#d12304;}
#container .type_services.s1  .the_services_number:after{text-shadow:2px 1px 0 #d12304;color:#ffffff;}

#container .list_block_headline{color:#d12304;}

#container .type_photo_grid      .the_list_item .the_list_item_image:before,
#container .type_gallery .slides .the_list_item .caption:before{background-color:#d12304;color:#ffffff;}
#container .type_services.s1     .the_list_item_subheadline,
#container .type_services.s3     .the_list_item_subheadline{background-color:#d12304;color:#ffffff;}
#container .type_photo_grid      .the_list_item_image{background-color:#d12304;}
#container .type_photo_grid      .the_list_item.no_image .the_list_item_headline a,
#container .type_photo_grid      .the_list_item.no_image .the_list_item_headline,
#container .type_photo_grid      .the_list_item.no_image .the_list_item_subheadline a,
#container .type_photo_grid      .the_list_item.no_image .the_list_item_subheadline,
#container .type_photo_grid      .the_list_item.no_image .the_list_item_desc{color:#ffffff;}
#container .type_photo_grid      .the_list_item.no_image .the_list_item_desc{background-color:#d12304;}
#container .type_photo_grid      .the_list_item.no_image .the_list_item_image:before,
#container .type_photo_grid      .the_list_item.hero .the_list_text:before{background-color:#ffffff;color:#d12304;}
#container .type_photo_grid      .the_list_item.no_image .accent_color_bg{background-color: #ffffff;color: #d12304;}

#container .gce-list li{color:#d12304;}
#container .calendar-list-event{background-color:#d12304;color:#ffffff;}

.gce-list li{color:#d12304;}
#container .calendar-list-event .the_list_item_headline,
#container .calendar-list-event .the_list_item_subheadline,
#container .calendar-list-event a{color:#ffffff;}

#container .list_block.type_menu.m3 .the_list_item.hero .the_list_item_headline span{background-color:#d12304;}
#container .list_block.type_menu.m3 .the_list_item.hero .the_list_item_subheadline {background-color:#d12304;}

/*HEADER //////////////////////*/
#header_logo{border-color:#ffffff;}
#wrapper #_the_logo,
#wrapper #_the_logo a{color:#ffffff;}
#wrapper #_the_logo {color:#ffffff;}

#the_header .header_color{background-color: rgba(0,0,0,0.35);background-color:#000000\9;border-color:#ffffff;}

#wrapper .close-menu{background-color:#d12304;color:#ffffff;}
#wrapper .menu a{color:#ffffff;}
#wrapper .menu a:hover{color:#f1bf0b;}
#menu-holder .current-menu-item > a,
#the_header .menu .current-menu-item > a{color:#ffffff;}

#menu-holder li a:hover{color:#f1bf0b;}
#menu-holder-topBorder{background-color:#f1bf0b;}
#menu-holder{background-color:#674b59;}
#menu-holder .menu-item{background-color:#674b59;}
#menu-holder li a{color:#ffffff;}
#menu-holder{color:#ffffff;}

/*SHARE & CONTACT LIST //////////////////////*/
.header_share_wrap,
.header_share_wrap a,
.header_share_wrap a:before,
.header_share_wrap a:after{color:#ffffff;}
.header_share_wrap a:not(.phone):hover{background: #ffffff;color:#000000;}
.header_share_wrap a:not(.phone):hover:before,
.header_share_wrap a:not(.phone):hover:after{color:#000000;}
.header_share_wrap.dropdown-list,
.header_share_wrap.dropdown-list .share_icons{background-color:#000000;}

#wrapper .trigger{color:#ffffff;background-color:#d12304;color:#ffffff;}

/*FOOTER //////////////////////*/
#the_footer .footer_brand .share_icons a span{color:#ffffff;}
#wrapper .footer{color:#ffffff;}
#wrapper .footer a{color:#ff8859;}
#wrapper .footer #searchsubmit{background-color:#ff8859;}
#wrapper .footer_brand{background-color:rgba(0,0,0,0.35);background-color:#000000\9;}
#wrapper .footer{background-color:#5a1601;background-image:none;}
#wrapper .footer #searchsubmit{color:#5a1601;}
#wrapper .footer input,
#wrapper .footer select,
#wrapper .footer option,
#wrapper .footer textarea{color:#333;}
#wrapper .contact_column input,
#wrapper .contact_column select,
#wrapper .contact_column option,
#wrapper .contact_column textarea{color:#333;}

#the_footer .menu a{color:#ffffff;}
#the_footer .menu a:hover{color:#ff8859;}
#the_footer .menu .current-menu-item > a{color:#ff8859;}
#the_footer .social-media-links a{color:#ffffff;}
#the_footer .social-media-links a:hover{color:#ff8859;}

/*COLOR_18 / CONTENT BKG*/
#container .list_block tr.the_list_item{border-bottom:1px solid rgba(255,255,255,1);background-color:#ffffff\9;}
#wrapper .page_title,
#container .section .well .type-post blockquote,
#wrapper .content{background-color: rgba(255,255,255,1);background-color:#ffffff\9;}
#wrapper .full_width_content{background-color: rgba(255,255,255,1);background-color:#ffffff\9;}
#wrapper .content{background-color: rgba(255,255,255,1);background-color:#ffffff\9;}
#wrapper .mobile-abovepost{background-color: rgba(255,255,255,1);background-color:#ffffff\9;}

/*ITEM COLORS*/
#container .type_gallery .the_list_item_desc *,
#container .type_gallery .the_list_item_headline,
#container .type_gallery .the_list_item_subheadline,
#container .type_gallery .the_list_item_headline a,
#container .type_gallery .the_list_item_subheadline a{color:#f7f7f7;}

/*MODAL*/
.modal_content{background-color:#d12304;}
.modal_list_wrap{background-color:#ffffff;}
.modal_list .tsi-address a{background-color:#ffffff;}
.modal_list a{color:#d12304;}
.modal_content .modal_title,
.modal_content .modal_title{background:#d12304;color:#ffffff;}
.modal_content .modal_close{background:#ffffff;color:#d12304;}

/*PHONES /////////////////////// */
#wrapper.share-show .share_list{background:#ffffff;}
#wrapper.share-show .share_list a{color:#d12304;}
#wrapper.share-show .share_title,
#wrapper.share-show .share_title:hover{background:#000000;color:#ffffff;}
#wrapper.share-show .share_list a:hover{background:#ffffff;color:#d12304;}

#wrapper .mobile-abovepost .multi-contacts{background-color:#ffffff;}
#wrapper .mobile-abovepost .multi-contacts .tsi-address a{color:#d12304;background-color:#ffffff;}
#wrapper .mobile-abovepost .multi-contacts .tsi-phone a{color:#d12304;}
#wrapper .mobile-abovepost .multi-contacts .contacts-title{background:#000000;color:#ffffff;}

.isMobile #container .type_gallery.scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_headline,
.isMobile #container .type_gallery.scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_headline a,
.isMobile #container .type_gallery.scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_subheadline,
.isMobile #container .type_gallery.scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_subheadline a,
.isMobile #container .type_gallery.scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_desc *,
.isMobile #container .type_gallery.widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_headline,
.isMobile #container .type_gallery.widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_headline a,
.isMobile #container .type_gallery.widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_subheadline,
.isMobile #container .type_gallery.widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_subheadline a,
.isMobile #container .type_gallery.widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_desc *,
.isMobile #container .type_gallery.widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_headline,
.isMobile #container .type_gallery.widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_headline a,
.isMobile #container .type_gallery.widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_subheadline,
.isMobile #container .type_gallery.widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_subheadline a,
.isMobile #container .type_gallery.widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_desc *{color:#575757;}
.isMobile #container .type_gallery.scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_action,
.isMobile #container .type_gallery.widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_action,
.isMobile #container .type_gallery.widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_action{background-color: #d12304;}
.isMobile #container .type_gallery.scaled_to_fit_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_action a,
.isMobile #container .type_gallery.widescreen_16_9 .the_list_item:not(.no_image) .caption .the_list_item_action a,
.isMobile #container .type_gallery.widescreen_2-4_1 .the_list_item:not(.no_image) .caption .the_list_item_action a{color: #ffffff;}

/*REVIEWS*/
#container .type_reviews .hero .the_list_item_desc {background-color:#d12304;color:#ffffff;}
#container .type_reviews .hero .the_list_item_heads:after{border-right-color:#d12304;}
#container .type_reviews .hero .the_list_item_subheadline .icon-star{color:#ffffff;}

/*DESKTOP SMALL RES //////////////// */
@media only screen and (max-width: 800px) {
#wrapper .mobile-menu{background-color:#674b59;}
}

.isTablet #wrapper .mobile-menu,
.isMobile #wrapper .mobile-menu{background-color:#674b59;}

/*NEW GALLERIES*/
#container .section .type_gallery.g2 .the_gallery_item.yes_image .the_list_item_action{color: #ca0202;}
#container .section .type_gallery.g2 .the_gallery_item.no_image .the_list_item_action{background-color: #ffffff;color: #d12304;}
#container .section .type_gallery.g2 .caption:before{background-color: #ffffff;color: #d12304;}
#container .section .type_gallery.g2 .slick-nav .the_gallery_item.slick-slide:hover .caption,
#container .section .type_gallery.g2 .slick-nav .the_gallery_item.slick-current .caption{box-shadow:0 0 0 2px #ca0202;}
#container .section .type_gallery.g2 .slick-arrow{color: #ca0202;}
#container .section .type_gallery.g2 .slick-slides .the_gallery_item.no_image{background-color: #d12304;}
#container .section .type_gallery.g2 .slick-nav .the_gallery_item.no_image .the_list_text{background-color: #d12304;}
#container .section .type_gallery.g2 .the_gallery_item.no_image .the_list_item_action{background-color:#ffffff;}
#container .section .type_gallery.g2 .the_gallery_item.no_image .the_list_item_action a{color: #d12304;}

#container .section .type_testimonials.t2 .slick-prev,
#container .section .type_testimonials.t2 .slick-next{background-color: #ffffff;color: #d12304;}

#container .no_set_width_4_3 .the_list_item_image,
#container .no_set_width_1_1 .the_list_item_image{background-color: rgba(0,0,0,.2);background-color:#000000\9;}

body.mce-content-body div{background-color:rgba(0,0,0,0.35);background-color:#000000\9;color:#ffffff;}/* >>> <<< */