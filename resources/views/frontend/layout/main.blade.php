<!doctype html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />
  <link rel="stylesheet" media="print" onload="this.onload=null;this.media='all';" id="ao_optimized_gfonts"
    href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100i%2C200%2C200i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i%7CKarma%3A300%2Cregular%2C500%2C600%2C700%7CKarma%3A300%2Cregular%2C500%2C600%2C700%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;display=swap">

  {{-- FancyBox --}}
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

  <meta property="og:url" content="{{ config('app.url') }}" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="{{ Voyager::setting('site.title') }}" />
  <meta property="og:description" content="{{ Voyager::setting('site.description') }}" />
  <meta property="og:image" content="{{ Voyager::image(setting('site.logo')) }}" />

  <link media="all"
    href="{{ asset('content/cache/autoptimize/11/css/autoptimize_bb289624c9f954628a9bf59da916c413.css') }}"
    rel="stylesheet">
  <link media="only screen and (max-width: 768px)"
    href="{{ asset('content/cache/autoptimize/11/css/autoptimize_645e25746732f92ab8912b8a07744c57.css') }}"
    rel="stylesheet">
  <title>{{ Voyager::setting('site.title') }}</title>
  {{--
  <link href='https://fonts.gstatic.com/' crossorigin='anonymous' rel='preconnect' /> --}}
  {{-- <script type="text/javascript">
    window._wpemojiSettings={"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/ryancv.bslthemes.com\/lawyer\/wp-includes\/js\/wp-emoji-release.min.js"}};
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\u2b1b","\ud83d\udc26\u200b\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
  </script> --}}
  <style id='wp-emoji-styles-inline-css' type='text/css'>
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 .07em !important;
      vertical-align: -.1em !important;
      background: 0 0 !important;
      padding: 0 !important
    }
  </style>
  <style id='classic-theme-styles-inline-css' type='text/css'>
    .wp-block-button__link {
      color: #fff;
      background-color: #32373c;
      border-radius: 9999px;
      box-shadow: none;
      text-decoration: none;
      padding: calc(.667em + 2px) calc(1.333em + 2px);
      font-size: 1.125em
    }

    .wp-block-file__button {
      background: #32373c;
      color: #fff;
      text-decoration: none
    }
  </style>
  <link rel='stylesheet' id='bslthms-advanced-btns-style-css' href='{{ asset('
    assests/bslthms-advanced-btns/assets/style.css') }}' type='text/css' media='all' />
  <style id='ryancv-abp-custom-inline-css' type='text/css'>
    .canvas.canvas-boxes {
      background-color: #252121 !important
    }

    .canvas.canvas-boxes .culd {
      border-color: #353234 !important
    }

    body.body-style-dark .canvas.canvas-boxes {
      background-color:  !important
    }

    body.body-style-dark .canvas.canvas-boxes .culd {
      border-color:  !important
    }
  </style>
  <style id='woocommerce-inline-inline-css' type='text/css'>
    .woocommerce form .form-row .required {
      visibility: visible
    }
  </style>
  <link rel='stylesheet' id='ryancv-dark-css' href='{{ asset(' content/themes/ryancv/assets/css/light.css') }}'
    type='text/css' media='all' />
  <link rel='stylesheet' href='{{ asset('
    content/cache/autoptimize/11/css/autoptimize_single_c4cb8ce92895c980d522733035579fbf.css') }}'
    id='elementor-post-5-css' type='text/css' media='all' />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <script type="text/javascript" src="{{ asset('includes/js/jquery/jquery.min.j') }}s" id="jquery-core-js"></script>
  {{-- <script type="text/javascript" id="wc-add-to-cart-js-extra">
    var wc_add_to_cart_params={"ajax_url":"\/lawyer\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/lawyer\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/ryancv.bslthemes.com\/lawyer\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
  </script> --}}
  {{-- <script type="text/javascript" id="woocommerce-js-extra">
    var woocommerce_params={"ajax_url":"\/lawyer\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/lawyer\/?wc-ajax=%%endpoint%%"};
  </script> --}}
  <link rel="alternate" type="application/json+oembed"
    href="{{ asset('json/oembed/1.0/embed35da.json?url=https%3A%2F%2Fryancv.bslthemes.com%2Flawyer%2F') }}" />
  <link rel="alternate" type="text/xml+oembed"
    href="{{ asset('json/oembed/1.0/embed8797?url=https%3A%2F%2Fryancv.bslthemes.com%2Flawyer%2F&amp;format=xml') }}" />
  <link rel="stylesheet" href="{{ asset('font/css/font-awesome.min.css') }}">
  <style>
    .preloader .spinner .double-bounce1,
    .preloader .spinner .double-bounce2,
    .lnk:hover .arrow:before,
    .button:hover .arrow:before,
    .lnk:hover .arrow:after,
    .button:hover .arrow:after,
    .resume-items .resume-item.active .date:before,
    .skills-list ul li .progress .percentage,
    .single-post-text ul>li:before,
    .comment-text ul>li:before,
    .content-sidebar .main-menu ul li.page_item_has_children.current_page_item>a:before,
    .content-sidebar .main-menu ul li.page_item_has_children.current_page_item>a:after,
    .content-sidebar .main-menu ul li.page_item_has_children:hover>a:before,
    .content-sidebar .main-menu ul li.page_item_has_children:hover>a:after,
    .content-sidebar .main-menu ul li.page_item_has_children.current_page_parent>a:before,
    .content-sidebar .main-menu ul li.page_item_has_children.current_page_parent>a:after,
    .content-sidebar .main-menu ul li.page_item_has_children.current_page_ancestor>a:before,
    .content-sidebar .main-menu ul li.page_item_has_children.current_page_ancestor>a:after,
    .content-sidebar .close:hover:before,
    .content-sidebar .close:hover:after,
    .header .menu-btn:hover span,
    .header .menu-btn:hover span:before,
    .header .menu-btn:hover span:after,
    .info-list ul li strong,
    .profile .main-menu ul li.page_item_has_children.current_page_item>a:before,
    .profile .main-menu ul li.page_item_has_children.current_page_item>a:after,
    .profile .main-menu ul li.page_item_has_children:hover>a:before,
    .profile .main-menu ul li.page_item_has_children:hover>a:after,
    .profile .main-menu ul li.page_item_has_children.current_page_parent>a:before,
    .profile .main-menu ul li.page_item_has_children.current_page_parent>a:after,
    .profile .main-menu ul li.page_item_has_children.current_page_ancestor>a:before,
    .profile .main-menu ul li.page_item_has_children.current_page_ancestor>a:after,
    .service-items .service-item .icon,
    .revs-carousel .owl-dot.active,
    .custom-content-reveal span.custom-content-close,
    .fc-calendar .fc-row>div.fc-today,
    .fc-calendar .fc-content:hover span.fc-date,
    .fc-calendar .fc-row>div.fc-today span.fc-date,
    .skills-list.dotted ul li .progress .percentage .da span,
    .preloader .spinner.default-circle:before,
    .preloader .spinner.default-circle:after,
    .preloader .spinner.clock:before,
    .preloader .spinner.box-rotation:after,
    .header .cart-btn .cart-icon .cart-count,
    .woocommerce span.onsale,
    .woocommerce #respond input#submit.alt,
    .woocommerce a.button.alt,
    .woocommerce button.button.alt,
    .woocommerce input.button.alt,
    .woocommerce #respond input#submit.alt:hover,
    .woocommerce a.button.alt:hover,
    .woocommerce button.button.alt:hover,
    .woocommerce input.button.alt:hover,
    .woocommerce ul.products li.product .button.add_to_cart_button.added,
    .popup-box .preloader .spinner.default-circle:before,
    .popup-box .preloader .spinner.default-circle:after,
    .popup-box .preloader-popup .spinner.default-circle:before,
    .popup-box .preloader-popup .spinner.default-circle:after,
    .single-post-text ul>li:before,
    .comment-text ul>li:before,
    .blog-content ul>li:before,
    .revs-carousel .swiper-pagination-bullet.swiper-pagination-bullet-active,
    .woocommerce #respond input#submit,
    .woocommerce a.button,
    .woocommerce button.button,
    .woocommerce input.button .woocommerce-mini-cart__buttons #respond input#submit,
    .woocommerce-mini-cart__buttons a.button,
    .woocommerce-mini-cart__buttons button.button,
    .woocommerce-mini-cart__buttons input.button,
    .woocommerce .woocommerce-ordering select,
    .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
    .woocommerce a.remove:hover,
    .solid-icons-style .service-items .service-item .icon,
    .solid-icons-style .pricing-items .pricing-item .icon,
    .solid-icons-style .fuct-items .fuct-item .icon,
    .solid-icons-style .resume-title .icon,
    .solid-icons-style .skill-title .icon,
    .card-started .profile .lnk.solid-style .ion,
    .header .top-menu.menu-minimal ul li a .name,
    .resume-items.line-timeline .resume-item.active:before,
    .theme-style-dark .resume-items.line-timeline .resume-item.active:before {
      background-color: #b59c62
    }

    .lnk:hover,
    .button:hover,
    .lnk:hover .ion,
    .button:hover .ion,
    a,
    a:hover,
    input:focus,
    textarea:focus,
    .header .top-menu ul li:hover a,
    .header .top-menu ul li.active a,
    .header .top-menu ul li.current-menu-item a,
    .header .top-menu ul li:hover a .icon,
    .header .top-menu ul li.active a .icon,
    .header .top-menu ul li:hover a .link,
    .header .top-menu ul li.active a .link,
    .header .top-menu ul li.current-menu-item a .icon,
    .header .top-menu ul li.current-menu-item a .link,
    .header .profile .subtitle,
    .card-started .profile .subtitle,
    .card-started .profile .social a:hover .ion,
    .card-started .profile .social a:hover .fab,
    .card-started .profile .social a:hover .fas,
    .pricing-items .pricing-item .icon,
    .fuct-items .fuct-item .icon,
    .resume-title .icon,
    .skill-title .icon,
    .resume-items .resume-item.active .date,
    .content.works .filter-menu .f_btn.active,
    .box-item:hover .desc .name,
    .single-post-text p a,
    .comment-text p a,
    .post-text-bottom span.cat-links a,
    .post-text-bottom .tags-links a,
    .post-text-bottom .tags-links span,
    .page-numbers.current,
    .page-links a,
    .post-comments .post-comment .desc .name,
    .post-comments .post-comment .desc span.comment-reply a:hover,
    .content-sidebar .main-menu ul li.current_page_item>a,
    .content-sidebar .main-menu ul li:hover>a,
    .content-sidebar .main-menu ul li.current_page_parent>a,
    .content-sidebar .main-menu ul li.current_page_ancestor>a,
    .content-sidebar .widget ul li a:hover,
    .content-sidebar .tagcloud a,
    .card-started .profile .subtitle,
    .card-started .profile .typed-cursor,
    .content .title .first-word,
    .content .title:first-letter,
    .content .title .first-letter:first-letter,
    .content-sidebar h2.widget-title .first-word,
    .content-sidebar h2.widget-title:first-letter,
    .content-sidebar h2.widget-title .first-letter:first-letter,
    .box-item .date,
    .profile .main-menu ul li.current-menu-item a,
    .profile .main-menu ul li.current_page_item>a,
    .profile .main-menu ul li:hover>a,
    .profile .main-menu ul li.current_page_parent>a,
    .profile .main-menu ul li.current_page_ancestor>a,
    .custom-header nav span:before,
    .fc-calendar .fc-row>div.fc-content:hover:after,
    .skills-list.list ul li .name:before,
    .preloader .spinner.recursive-circle,
    .woocommerce nav.woocommerce-pagination ul li a:focus,
    .woocommerce nav.woocommerce-pagination ul li a:hover,
    .woocommerce nav.woocommerce-pagination ul li span.current,
    .woocommerce .star-rating,
    strong.woocommerce-review__author,
    .woocommerce-message:before,
    .single-post-text p a,
    .comment-text p a,
    .blog-content p a,
    .minimal-icons-style .service-items .service-item .icon,
    .minimal-icons-style .pricing-items .pricing-item .icon,
    .minimal-icons-style .fuct-items .fuct-item .icon,
    .minimal-icons-style .resume-title .icon,
    .minimal-icons-style .skill-title .icon,
    .border-icons-style .service-items .service-item .icon,
    .border-icons-style .pricing-items .pricing-item .icon,
    .border-icons-style .fuct-items .fuct-item .icon,
    .border-icons-style .resume-title .icon,
    .border-icons-style .skill-title .icon,
    .lnk:hover .ion,
    .button:hover .ion,
    .lnk:hover .fa,
    .button:hover .fa,
    .revs-two-item .star-rating i {
      color: #b59c62
    }

    .pricing-items .pricing-item .icon svg,
    .fuct-items .fuct-item .icon svg,
    .resume-title .icon svg,
    .skill-title .icon svg,
    .minimal-icons-style .service-items .service-item .icon svg,
    .minimal-icons-style .pricing-items .pricing-item .icon svg,
    .minimal-icons-style .fuct-items .fuct-item .icon svg,
    .minimal-icons-style .resume-title .icon svg,
    .minimal-icons-style .skill-title .icon svg,
    .border-icons-style .service-items .service-item .icon svg,
    .border-icons-style .pricing-items .pricing-item .icon svg,
    .border-icons-style .fuct-items .fuct-item .icon svg,
    .border-icons-style .resume-title .icon svg,
    .border-icons-style .skill-title .icon svg {
      fill: #b59c62
    }

    .content .title .first-word,
    .content .title:first-letter,
    .content .title .first-letter:first-letter,
    .content-sidebar h2.widget-title .first-word,
    .content-sidebar h2.widget-title:first-letter,
    .content-sidebar h2.widget-title .first-letter:first-letter,
    .content .post-comments .title_inner:first-letter,
    .content .post-comments .title .first-letter:first-letter {
      color: #b59c62 !important
    }

    .theme-style-blured.theme-style-cyber .content .title:after,
    .theme-style-blured.theme-style-cyber .border-line-v:before,
    .theme-style-blured.theme-style-cyber .border-line-v:after,
    .theme-style-blured.theme-style-cyber .border-line-h:after,
    .theme-style-blured.theme-style-cyber .lnks:before {
      background: #b59c62 !important
    }

    .textured-icons-style .service-items .service-item .icon,
    .textured-icons-style .pricing-items .pricing-item .icon,
    .textured-icons-style .fuct-items .fuct-item .icon,
    .textured-icons-style .resume-title .icon,
    .textured-icons-style .skill-title .icon {
      color: #b59c62
    }

    .textured-icons-style .service-items .service-item .icon svg,
    .textured-icons-style .pricing-items .pricing-item .icon svg,
    .textured-icons-style .fuct-items .fuct-item .icon svg,
    .textured-icons-style .resume-title .icon svg,
    .textured-icons-style .skill-title .icon svg {
      fill: #b59c62
    }

    .card-started .profile .image:before,
    .content .title:before,
    .box-item .image .info:before,
    .content-sidebar h2.widget-title:before {
      background: -moz-linear-gradient(-45deg, rgba(181, 156, 98, .15) 0%, rgba(181, 156, 98, .01) 100%);
      background: -webkit-linear-gradient(-45deg, rgba(181, 156, 98, .15) 0%, rgba(181, 156, 98, .01) 100%);
      background: linear-gradient(135deg, rgba(181, 156, 98, .15) 0%, rgba(181, 156, 98, .01) 100%)
    }

    .card-started:after {
      background: -moz-linear-gradient(-45deg, rgba(181, 156, 98, .4) 0%, rgba(181, 156, 98, .01) 100%);
      background: -webkit-linear-gradient(-45deg, rgba(181, 156, 98, .4) 0%, rgba(181, 156, 98, .01) 100%);
      background: linear-gradient(135deg, rgba(181, 156, 98, .4) 0%, rgba(181, 156, 98, .01) 100%)
    }

    .box-item .image .info:before {
      background: -moz-linear-gradient(-45deg, rgba(181, 156, 98, .5) 0%, rgba(181, 156, 98, .01) 100%);
      background: -webkit-linear-gradient(-45deg, rgba(181, 156, 98, .5) 0%, rgba(181, 156, 98, .01) 100%);
      background: linear-gradient(135deg, rgba(181, 156, 98, .5) 0%, rgba(181, 156, 98, .01) 100%)
    }

    .card-started .profile .slide {
      background-color: rgba(181, 156, 98, .1)
    }

    .pricing-items .pricing-item .feature-list ul li strong {
      background: rgba(181, 156, 98, .15)
    }

    .cursor {
      background-color: rgba(181, 156, 98, .25)
    }

    .cursor.cursor-zoom {
      border-color: rgba(181, 156, 98, 1)
    }

    @media (min-width:1120px) {
      .container.layout-futurism-style .header:before {
        border-color: #b59c62
      }
    }

    input:focus,
    textarea:focus,
    .revs-carousel .owl-dots .owl-dot,
    .custom-header,
    .post-text-bottom .tags-links a,
    .post-text-bottom .tags-links span,
    .content-sidebar .tagcloud a,
    .resume-items .resume-item.active .date,
    .box-item .date,
    .content.skills .skills-list.circles .progress .bar,
    .content.skills .skills-list.circles .progress .fill,
    .preloader .spinner.clock,
    .preloader .spinner.box-rotation,
    .skills-list.circles .progress .bar,
    .skills-list.circles .progress.p51 .fill,
    .skills-list.circles .progress.p52 .fill,
    .skills-list.circles .progress.p53 .fill,
    .skills-list.circles .progress.p54 .fill,
    .skills-list.circles .progress.p55 .fill,
    .skills-list.circles .progress.p56 .fill,
    .skills-list.circles .progress.p57 .fill,
    .skills-list.circles .progress.p58 .fill,
    .skills-list.circles .progress.p59 .fill,
    .skills-list.circles .progress.p60 .fill,
    .skills-list.circles .progress.p61 .fill,
    .skills-list.circles .progress.p62 .fill,
    .skills-list.circles .progress.p63 .fill,
    .skills-list.circles .progress.p64 .fill,
    .skills-list.circles .progress.p65 .fill,
    .skills-list.circles .progress.p66 .fill,
    .skills-list.circles .progress.p67 .fill,
    .skills-list.circles .progress.p68 .fill,
    .skills-list.circles .progress.p69 .fill,
    .skills-list.circles .progress.p70 .fill,
    .skills-list.circles .progress.p71 .fill,
    .skills-list.circles .progress.p72 .fill,
    .skills-list.circles .progress.p73 .fill,
    .skills-list.circles .progress.p74 .fill,
    .skills-list.circles .progress.p75 .fill,
    .skills-list.circles .progress.p76 .fill,
    .skills-list.circles .progress.p77 .fill,
    .skills-list.circles .progress.p78 .fill,
    .skills-list.circles .progress.p79 .fill,
    .skills-list.circles .progress.p80 .fill,
    .skills-list.circles .progress.p81 .fill,
    .skills-list.circles .progress.p82 .fill,
    .skills-list.circles .progress.p83 .fill,
    .skills-list.circles .progress.p84 .fill,
    .skills-list.circles .progress.p85 .fill,
    .skills-list.circles .progress.p86 .fill,
    .skills-list.circles .progress.p87 .fill,
    .skills-list.circles .progress.p88 .fill,
    .skills-list.circles .progress.p89 .fill,
    .skills-list.circles .progress.p90 .fill,
    .skills-list.circles .progress.p91 .fill,
    .skills-list.circles .progress.p92 .fill,
    .skills-list.circles .progress.p93 .fill,
    .skills-list.circles .progress.p94 .fill,
    .skills-list.circles .progress.p95 .fill,
    .skills-list.circles .progress.p96 .fill,
    .skills-list.circles .progress.p97 .fill,
    .skills-list.circles .progress.p98 .fill,
    .skills-list.circles .progress.p99 .fill,
    .skills-list.circles .progress.p100 .fill,
    .revs-carousel .swiper-pagination-bullet,
    .border-icons-style .service-items .service-item .icon,
    .border-icons-style .pricing-items .pricing-item .icon,
    .border-icons-style .fuct-items .fuct-item .icon,
    .border-icons-style .resume-title .icon,
    .border-icons-style .skill-title .icon {
      border-color: #b59c62
    }

    .preloader .spinner.recursive-circle,
    .preloader .spinner.recursive-circle:after {
      border-color: #b59c62;
      border-top-color: transparent
    }

    blockquote {
      border-left-color: #b59c62
    }

    .preloader .spinner.simple-circle {
      border-right-color: #b59c62
    }

    .preloader .spinner.quantum-spinner,
    .preloader .spinner.quantum-spinner:before,
    .preloader .spinner.quantum-spinner:after {
      border-top-color: #b59c62
    }

    .mode-switch-btn .mode-swich-label:hover svg path,
    .mode-switch-btn .tgl:checked+.mode-swich-label:hover svg path,
    .card-started .profile .social a:hover .ion path,
    .card-started .profile .social a:hover .fab path,
    .card-started .profile .social a:hover .fas path {
      fill: #b59c62
    }

    .rprof-before path,
    .rprof-after path {
      fill: #b59c62
    }

    .body-style-dark .content .title,
    .body-style-dark .service-items .service-item .name {
      color: rgba(255, 255, 255, .85)
    }

    body.body-style-dark {
      color: rgba(255, 255, 255, .55)
    }

    body.body-style-dark .content .title .first-word,
    body.body-style-dark .content .title:first-letter,
    body.body-style-dark .content .title .first-letter:first-letter,
    body.body-style-dark .content-sidebar h2.widget-title .first-word,
    body.body-style-dark .content-sidebar h2.widget-title:first-letter,
    body.body-style-dark .content-sidebar h2.widget-title .first-letter:first-letter,
    body.body-style-dark .content .post-comments .title_inner:first-letter,
    body.body-style-dark .content .post-comments .title .first-letter:first-letter {
      color: #b59c62 !important
    }

    body {
      font-family: 'Karma'
    }

    .content .title {
      font-family: 'Karma'
    }

    body .header .menu-btn,
    body .card-started .profile,
    body .card-started .profile .slide:before,
    body .card-started .profile .slide:after,
    body .card-inner,
    body .card-inner:before,
    body .card-inner:after,
    body .skills-list.circles .progress:after,
    body .mfp-wrap.popup-box-inline,
    body .info-list ul li strong:after,
    body .content-sidebar,
    body .profile .main-menu-fixed:before,
    body .header .cart-btn,
    body .header .cart-btn .cart-widget,
    body .header .top-menu,
    body .header .mode-switch-btn,
    body .content-sidebar .close,
    body .custom-footer,
    body .menu-centered.header,
    body .layout-futurism-style .menu-centered.header:after,
    body .theme-style-blured .menu-centered.header:after {
      background: #fff
    }

    body .header .cart-btn .cart-widget:before {
      border-right-color: #fff
    }

    body .card-started .profile .image img {
      border-color: #fff
    }

    body .theme-style-blured .card-inner {
      background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 75%, rgba(255, 255, 255, 1) 100%) !important;
      background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 75%, rgba(255, 255, 255, 1) 100%) !important
    }

    body.body-style-gradient .theme-style-blured .menu-centered.header:after {
      background: -webkit-linear-gradient(top, rgba(255, 255, 255, .7) 75%, rgba(255, 255, 255, 1) 100%) !important;
      background: linear-gradient(to bottom, rgba(255, 255, 255, .7) 75%, rgba(255, 255, 255, 1) 100%) !important
    }

    body .textured-icons-style .service-items .service-item .icon,
    body .textured-icons-style .pricing-items .pricing-item .icon,
    body .textured-icons-style .fuct-items .fuct-item .icon,
    body .textured-icons-style .resume-title .icon,
    body .textured-icons-style .skill-title .icon {
      background-color: #fff !important
    }

    body .rprof-after path:nth-child(3) {
      fill: #fff
    }

    @media (max-width:680px) {
      body .header {
        background-color: #fff
      }
    }

    @media (max-width:680px) {
      body .header .top-menu ul.menu {
        background-color: #fff
      }

      body .theme-style-textured .header .top-menu ul.menu {
        background-color: transparent
      }
    }

    body.body-style-dark .header .menu-btn,
    body.body-style-dark .card-started .profile,
    body.body-style-dark .card-started .profile .slide:before,
    body.body-style-dark .card-started .profile .slide:after,
    body.body-style-dark .card-inner,
    body.body-style-dark .card-inner:before,
    body.body-style-dark .card-inner:after,
    body.body-style-dark .skills-list.circles .progress:after,
    body.body-style-dark .mfp-wrap.popup-box-inline,
    body.body-style-dark .info-list ul li strong:after,
    body.body-style-dark .content-sidebar,
    body.body-style-dark .profile .main-menu-fixed:before,
    body.body-style-dark .header .cart-btn,
    body.body-style-dark .header .cart-btn .cart-widget,
    body.body-style-dark .header .top-menu,
    body.body-style-dark .header .mode-switch-btn,
    body.body-style-dark .content-sidebar .close,
    body.body-style-dark .custom-footer,
    body.body-style-dark .menu-centered.header,
    body.body-style-dark .layout-futurism-style .menu-centered.header:after,
    body.body-style-dark .theme-style-blured .menu-centered.header:after {
      background: #31313a
    }

    body.body-style-dark .header .cart-btn .cart-widget:before {
      border-right-color: #31313a
    }

    body.body-style-dark .card-started .profile .image img {
      border-color: #31313a
    }

    body.body-style-dark .theme-style-blured .card-inner {
      background: -webkit-linear-gradient(top, rgba(49, 49, 58, 0) 75%, rgba(49, 49, 58, 1) 100%) !important;
      background: linear-gradient(to bottom, rgba(49, 49, 58, 0) 75%, rgba(49, 49, 58, 1) 100%) !important
    }

    body.body-style-dark.body-style-gradient .theme-style-blured .menu-centered.header:after {
      background: -webkit-linear-gradient(top, rgba(49, 49, 58, .5) 75%, rgba(49, 49, 58, 1) 100%) !important;
      background: linear-gradient(to bottom, rgba(49, 49, 58, .5) 75%, rgba(49, 49, 58, 1) 100%) !important
    }

    body.body-style-dark .textured-icons-style .service-items .service-item .icon,
    body.body-style-dark .textured-icons-style .pricing-items .pricing-item .icon,
    body.body-style-dark .textured-icons-style .fuct-items .fuct-item .icon,
    body.body-style-dark .textured-icons-style .resume-title .icon,
    body.body-style-dark .textured-icons-style .skill-title .icon {
      background-color: #31313a !important
    }

    body.body-style-dark .rprof-after path:nth-child(3) {
      fill: #31313a
    }

    @media (max-width:680px) {
      body.body-style-dark .header {
        background-color: #31313a
      }
    }

    @media (max-width:680px) {
      body.body-style-dark .header .top-menu ul.menu {
        background-color: #31313a
      }

      body.body-style-dark .theme-style-textured .header .top-menu ul.menu {
        background-color: transparent
      }
    }

    body.body-style-dark .header .menu-btn,
    body.body-style-dark .card-started .profile,
    body.body-style-dark .card-started .profile .slide:before,
    body.body-style-dark .card-started .profile .slide:after,
    body.body-style-dark .card-inner,
    body.body-style-dark .card-inner:before,
    body.body-style-dark .card-inner:after,
    body.body-style-dark .skills-list.circles .progress:after,
    body.body-style-dark .mfp-wrap.popup-box-inline,
    body.body-style-dark .info-list ul li strong:after,
    body.body-style-dark .content-sidebar,
    body.body-style-dark .profile .main-menu-fixed:before,
    body.body-style-dark .header .cart-btn,
    body.body-style-dark .header .cart-btn .cart-widget,
    body.body-style-dark .header .top-menu,
    body.body-style-dark .header .mode-switch-btn,
    body.body-style-dark .content-sidebar .close,
    body.body-style-dark .custom-footer,
    body.body-style-dark .menu-centered.header,
    body.body-style-dark .layout-futurism-style .menu-centered.header:after,
    body.body-style-dark .theme-style-blured .menu-centered.header:after {
      background: #31313a
    }

    body.body-style-dark .header .cart-btn .cart-widget:before {
      border-right-color: #31313a
    }

    body.body-style-dark .card-started .profile .image img {
      border-color: #31313a
    }

    body.body-style-dark .theme-style-blured .card-inner {
      background: -webkit-linear-gradient(top, rgba(49, 49, 58, 0) 75%, rgba(49, 49, 58, 1) 100%) !important;
      background: linear-gradient(to bottom, rgba(49, 49, 58, 0) 75%, rgba(49, 49, 58, 1) 100%) !important
    }

    body.body-style-dark.body-style-gradient .theme-style-blured .menu-centered.header:after {
      background: -webkit-linear-gradient(top, rgba(49, 49, 58, .5) 75%, rgba(49, 49, 58, 1) 100%) !important;
      background: linear-gradient(to bottom, rgba(49, 49, 58, .5) 75%, rgba(49, 49, 58, 1) 100%) !important
    }

    body.body-style-dark .textured-icons-style .service-items .service-item .icon,
    body.body-style-dark .textured-icons-style .pricing-items .pricing-item .icon,
    body.body-style-dark .textured-icons-style .fuct-items .fuct-item .icon,
    body.body-style-dark .textured-icons-style .resume-title .icon,
    body.body-style-dark .textured-icons-style .skill-title .icon {
      background-color: #31313a !important
    }

    body.body-style-dark .rprof-after path:nth-child(3) {
      fill: #31313a
    }

    @media (max-width:680px) {
      body.body-style-dark .header {
        background-color: #31313a
      }
    }

    @media (max-width:680px) {
      body.body-style-dark .header .top-menu ul.menu {
        background-color: #31313a
      }

      body.body-style-dark .theme-style-textured .header .top-menu ul.menu {
        background-color: transparent
      }
    }

    .card-started .profile .image img,
    .card-started .profile .image:before {
      -webkit-border-radius: 100%;
      border-radius: 100%
    }

    .card-started .profile .image:before,
    .content .title:before,
    .content-sidebar h2.widget-title:before {
      display: none
    }
  </style><noscript>
    <style>
      .woocommerce-product-gallery {
        opacity: 1 !important
      }
    </style>
  </noscript>
  {{--
  <meta name="generator"
    content="Elementor 3.20.4; features: e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-swap">
  --}}
  <link rel="icon" href="{{ Voyager::image(setting('site.logo')) }}" sizes="32x32" />
  <link rel="icon" href="{{ Voyager::image(setting('site.logo')) }}" sizes="192x192" />
  <link rel="apple-touch-icon" href="{{ Voyager::image(setting('site.logo')) }}" />
  {{--
  <meta name="msapplication-TileImage"
    content="https://ryancv.bslthemes.com/lawyer/wp-content/uploads/sites/11/2023/04/cropped-logo4n-270x270.png" /> --}}
  {{-- <style type="text/css" id="wp-custom-css">
    .client-items .client-item img,
    .resume-items .resume-item .image img {
      filter: contrast(0)
    }
  </style> --}}
  <style>
    .one-page-menu-item>span .icon {
      margin: 0 auto;
      position: relative;
      top: 0;
      left: 0;
      display: block;
      width: 40px;
      height: 30px;
      font-size: 20px;
      color: #323232;
      line-height: 30px;
    }
  </style>
  @yield('extra-css')
</head>

<body
  class="home page-template page-template-template-elementor-builder page-template-template-elementor-builder-php page page-id-139 theme-ryancv woocommerce-no-js elementor-default elementor-kit-5 elementor-page elementor-page-139">

  <div class="page page_wrap">

    <div class="preloader">
      <div class="centrize full-width">
        <div class="vertical-center">
          <div class="spinner clock"></div>
        </div>
      </div>
    </div>

    <div class="canvas canvas-boxes">
      <div class="culd"></div>
      <div class="culd"></div>
      <div class="culd"></div>
      <div class="culd"></div>
      <div class="culd"></div>
    </div>

    <div class="container opened layout-boxed-style solid-icons-style" data-animation-in="rotateInUpLeft"
      data-animation-out="rotateOutUpLeft">
      <header class="header w-btn-hide">
        <div class="profile">
          <div class="title">{{ $profile_infos->name }}</div>
          <div class="subtitle subtitle-typed">
            <div class="typing-title">
              @foreach($jobs as $job)
              <p>{{ $job->name }}</p>
              @endforeach
            </div> <span class="r-typed"></span>
          </div> <!-- profile socials -->
        </div> <!-- menu btn -->
        <div class="menu-btn btn-next-visible"><span></span></div> <!-- switch btn -->
        <div class="mode-switch-btn" data-ui="0"
          data-ui-dir="https://ryancv.bslthemes.com/lawyer/wp-content/themes/ryancv">
          <input class="tgl" id="mode-switch-radio" type="checkbox"> <label class="mode-swich-label"
            for="mode-switch-radio">
            <span class="sw-before">
              <svg xmlns="http://www.w3.org/2000/svg" width="22.22" height="22.313" viewbox="0 0 22.22 22.313">
                <path id="Light_Theme" data-name="Light Theme" fill="#fff"
                  d="M1752.49,105.511a5.589,5.589,0,0,0-3.94-1.655,5.466,5.466,0,0,0-3.94,1.655,5.61,5.61,0,0,0,3.94,9.566,5.473,5.473,0,0,0,3.94-1.653,5.643,5.643,0,0,0,1.65-3.957A5.516,5.516,0,0,0,1752.49,105.511Zm-1.06,6.85a4.1,4.1,0,0,1-5.76,0,4.164,4.164,0,0,1,0-5.788A4.083,4.083,0,0,1,1751.43,112.361Zm7.47-3.662h-2.27a0.768,0.768,0,0,0,0,1.536h2.27A0.768,0.768,0,0,0,1758.9,108.7Zm-10.35,8.12a0.777,0.777,0,0,0-.76.769v2.274a0.777,0.777,0,0,0,.76.767,0.786,0.786,0,0,0,.77-0.767v-2.274A0.786,0.786,0,0,0,1748.55,116.819Zm7.85-.531-1.62-1.624a0.745,0.745,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.625a0.747,0.747,0,0,0,1.06,0A0.759,0.759,0,0,0,1756.4,116.288ZM1748.55,98.3a0.777,0.777,0,0,0-.76.768v2.273a0.778,0.778,0,0,0,.76.768,0.787,0.787,0,0,0,.77-0.768V99.073A0.786,0.786,0,0,0,1748.55,98.3Zm7.88,3.278a0.744,0.744,0,0,0-1.06,0l-1.62,1.624a0.758,0.758,0,0,0,0,1.063,0.745,0.745,0,0,0,1.06,0l1.62-1.624A0.758,0.758,0,0,0,1756.43,101.583Zm-15.96,7.116h-2.26a0.78,0.78,0,0,0-.77.768,0.76,0.76,0,0,0,.77.768h2.26A0.768,0.768,0,0,0,1740.47,108.7Zm2.88,5.965a0.745,0.745,0,0,0-1.06,0l-1.62,1.624a0.759,0.759,0,0,0,0,1.064,0.747,0.747,0,0,0,1.06,0l1.62-1.625A0.758,0.758,0,0,0,1743.35,114.664Zm0-11.457-1.62-1.624a0.744,0.744,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.624a0.745,0.745,0,0,0,1.06,0A0.758,0.758,0,0,0,1743.35,103.207Z"
                  transform="translate(-1737.44 -98.313)"></path>
              </svg>
            </span>
            <span class="sw-after">
              <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewbox="0 0 23 23">
                <path id="Dark_Theme" data-name="Dark Theme" fill="#fff"
                  d="M1759.46,111.076a0.819,0.819,0,0,0-.68.147,8.553,8.553,0,0,1-2.62,1.537,8.167,8.167,0,0,1-2.96.531,8.655,8.655,0,0,1-8.65-8.682,9.247,9.247,0,0,1,.47-2.864,8.038,8.038,0,0,1,1.42-2.54,0.764,0.764,0,0,0-.12-1.063,0.813,0.813,0,0,0-.68-0.148,11.856,11.856,0,0,0-6.23,4.193,11.724,11.724,0,0,0,1,15.387,11.63,11.63,0,0,0,19.55-5.553A0.707,0.707,0,0,0,1759.46,111.076Zm-4.5,6.172a10.137,10.137,0,0,1-14.29-14.145,10.245,10.245,0,0,1,3.38-2.836c-0.14.327-.29,0.651-0.41,1.006a9.908,9.908,0,0,0-.56,3.365,10.162,10.162,0,0,0,10.15,10.189,9.776,9.776,0,0,0,3.49-.62,11.659,11.659,0,0,0,1.12-.473A10.858,10.858,0,0,1,1754.96,117.248Z"
                  transform="translate(-1737 -98)"></path>
              </svg>
            </span>
          </label>
        </div>
        <!-- menu -->
        <div class="top-menu top-menu-onepage">
          <div class="menu-main-menu-container">
            <ul id="menu-main-menu" class="menu">
              <li data-id="menu-item-107"
                class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-139 current_page_item">
                <a href="{{ url()->current() != config('app.url') ? config('app.url') . '/#home' : '#home' }}"
                  class="one-page-menu-item">
                  <span class="fa fa-user-circle-o icon" aria-hidden="true"></span>
                  <span class="name">About</span></a>
              </li>
              <li data-id="menu-item-108" class=" menu-item menu-item-type-post_type menu-item-object-page">
                <a href="{{ url()->current() != config('app.url') ? config('app.url') . '/#resume' : '#resume' }}"
                  class="one-page-menu-item">
                  <span class="fa fa-file-text-o icon" aria-hidden="true"></span>
                  <span class="name">Resume</span>
                </a>
              </li>
              <li data-id="menu-item-109" class=" menu-item menu-item-type-post_type menu-item-object-page">
                <a href="{{ url()->current() != config('app.url') ? config('app.url') . '/#works' : '#works' }}"
                  class="one-page-menu-item">
                  <span class="fa fa-picture-o icon" aria-hidden="true"></span>
                  <span class="name">Gallery</span>
                </a>
              </li>
              <li data-id="menu-item-110" class=" menu-item menu-item-type-post_type menu-item-object-page">
                <a href="{{ url()->current() != config('app.url') ? config('app.url') . '/#blog' : '#blog' }}"
                  class="one-page-menu-item">
                  <span class="fa fa-newspaper-o icon" aria-hidden="true"></span>
                  <span class="name">Articles</span>
                </a>
              </li>
              <li data-id="menu-item-111" class=" menu-item menu-item-type-post_type menu-item-object-page">
                <a href="{{ url()->current() != config('app.url') ? config('app.url') . '/#contact' : '#contact' }}"
                  class="one-page-menu-item">
                  <span class="fa fa-envelope icon" aria-hidden="true"></span>
                  <span class="name">Contact</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </header>

      <div class="card-started" id="home-card">
        <div class="profile no-photo rounded-style-1">
          <div class="profile-content">
            <div class="lazyload slide" data-bg="{{ Voyager::image($profile_infos->image) }}"
              style="{{ Voyager::image($profile_infos->image) }}">
            </div>
            <div class="title">{{ $profile_infos->name }}</div>
            <div class="subtitle subtitle-typed">
              <div class="typing-title">
                @foreach($jobs as $job)
                <p>{{ $job->name }}</p>
                @endforeach
              </div> <span class="r-typed"></span>
            </div> <!-- profile socials -->
            <div class="social">
              <a target="_blank" href="{{ Voyager::setting('site.facebook') }}" aria-label="fab fa-facebook-f">
                <span class="fa fab fa-facebook" aria-hidden="true"></span>
              </a>
              <a target="_blank" href="{{ Voyager::setting('site.website') }}" aria-label="fab fa-instagram-square">
                <span class="fa fab fa-building" aria-hidden="true"></span>
              </a>
              <a target="_blank" href="tel:{{ Voyager::setting('site.phone') }}" aria-label="fab fa-whatsapp-square"
                aria-hidden="true">
                <span class="fa fab fa-phone" aria-hidden="true"></span>
              </a>
            </div>
          </div>

          <!-- default menu -->

          <div class="main-menu-fixed">
            <div class="main-menu top-menu top-menu-onepage">
              <div class="menu-main-menu-container">
                <ul id="menu-main-menu" class="menu">
                  <li id="menu-item-107"
                    class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-107">
                    <a href="{{ url()->current() != config('app.url') ? config('app.url') . '/#home' : '#home' }}"
                      class="one-page-menu-item">
                      <span class="name">About</span></a>
                    </a>
                  </li>
                  <li id="menu-item-108"
                    class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-108">
                    <a href="{{ url()->current() != config('app.url') ? config('app.url') . '/#resume' : '#resume' }}"
                      class="one-page-menu-item">
                      <span class="name">Resume</span>
                    </a>
                  </li>
                  <li id="menu-item-109"
                    class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-109">
                    <a href="{{ url()->current() != config('app.url') ? config('app.url') . '/#works' : '#works' }}"
                      class="one-page-menu-item">
                      <span class="name">Gallery</span>
                    </a>
                  </li>
                  <li id="menu-item-110"
                    class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-110">
                    <a href="{{ url()->current() != config('app.url') ? config('app.url') . '/#blog' : '#blog' }}"
                      class="one-page-menu-item">
                      <span class="name">Articles</span>
                    </a>
                  </li>
                  <li id="menu-item-111"
                    class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-111">
                    <a href="{{ url()->current() != config('app.url') ? config('app.url') . '/#contact' : '#contact' }}"
                      class="one-page-menu-item">
                      <span class="name">Contact</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- menu button -->
          <div class="lnks">
            <div class="lnk lnk-view-menu"> <i class="fa fa-ellipsis-h" aria-hidden="true"></i> <span class="text"
                data-text-open="Close">Menu</span></div>
          </div>
        </div>
      </div>

      <div class="s_overlay"></div>

      @include('frontend.layout.sidebar')

      @yield('content')
    </div>
  </div>

  {{-- <div class="bsl-popup" data-theme="ryancv" data-category="wordpress">
    <div class="bsl-popup__buttons"></div>
    <div class="bsl-popup__content bsl-popup__content-related">
      <div class="bsl-popup__menu"></div>
      <div class="bsl-popup__tabs">
        <div class="bsl-popup__tab bsl-popup__tab-demo"></div>
        <div class="bsl-popup__tab bsl-popup__tab-all"></div>
        <div class="bsl-popup__tab bsl-popup__tab-related"></div>
      </div>
    </div>
    <div class="bsl-popup__content bsl-popup__content-help"></div>
  </div> --}}
  <noscript>
    <style>
      .lazyload {
        display: none
      }
    </style>
  </noscript>

  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js"></script>
  <script data-noptimize="1">
    window.lazySizesConfig=window.lazySizesConfig||{};window.lazySizesConfig.loadMode=1;
  </script>
  <script async data-noptimize="1" src="{{ asset('content/plugins/autoptimize/classes/external/js/lazysizes.min.js')
    }}"></script>
  {{-- <script type='text/javascript'>
    (function(){var c=document.body.className;c=c.replace(/woocommerce-no-js/,'woocommerce-js');document.body.className=c;})();
  </script> --}}
  <link rel='stylesheet' id='elementor-post-41-css' href='{{ asset('
    content/cache/autoptimize/11/css/autoptimize_single_2b0bc7f006c5b9d6190c9864622aa176.css') }}' type='text/css'
    media='all' />
  <link rel='stylesheet' id='elementor-post-53-css' href='{{ asset('
    content/cache/autoptimize/11/css/autoptimize_single_f2a825d973fcbe719b506d92090a9e95.css') }}' type='text/css'
    media='all' />
  <script type="text/javascript" src="{{ asset('bslthemes.com/bslthms-advanced-btns/assets/script.js') }}"
    id="bslthms-advanced-btns-script-js"></script>
  <script type="text/javascript" id="wc-order-attribution-js-extra">
    var wc_order_attribution={"params":{"lifetime":1.0e-5,"session":30,"ajaxurl":"https:\/\/ryancv.bslthemes.com\/lawyer\/wp-admin\/admin-ajax.php","prefix":"wc_order_attribution_","allowTracking":true},"fields":{"source_type":"current.typ","referrer":"current_add.rf","utm_campaign":"current.cmp","utm_source":"current.src","utm_medium":"current.mdm","utm_content":"current.cnt","utm_id":"current.id","utm_term":"current.trm","session_entry":"current_add.ep","session_start_time":"current_add.fd","session_pages":"session.pgs","session_count":"udata.vst","user_agent":"udata.uag"}};
  </script>
  <script type="text/javascript" id="ajax-portfolio-content-js-extra">
    var portfolio_ajax_loading_data={"url":"https:\/\/ryancv.bslthemes.com\/lawyer\/wp-admin\/admin-ajax.php"};
  </script>
  <script type="text/javascript" id="ryancv-blog-load-more-el-js-extra">
    var ajax_blog_infinite_scroll_data={"url":"https:\/\/ryancv.bslthemes.com\/lawyer\/wp-admin\/admin-ajax.php","max_num":"2","page_id":"50","order_by":"date","order":"desc","per_page":"4","source":"all","temp":"","cat_ids":""};
  </script>
  <script type="text/javascript" id="elementor-frontend-js-before">
    var elementorFrontendConfig={"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.20.4","is_static":false,"experimentalFeatures":{"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"e_font_icon_svg":true,"additional_custom_breakpoints":true,"e_swiper_latest":true,"block_editor_assets_optimize":true,"ai-layout":true,"landing-pages":true,"e_image_loading_optimization":true},"urls":{"assets":"https:\/\/ryancv.bslthemes.com\/lawyer\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":53,"title":"RyanCV%20%E2%80%93%20Lawyer%20Resume%20%26%20Personal%20Portfolio%20WordPress%20Theme%20%E2%80%93%20Premium%20digital%20solutions%20for%20your%20business%20by%20bslthemes%20Team","excerpt":"","featuredImage":false}};
  </script>
  <div class="cursor"></div>
  <script defer src="{{ asset('content/cache/autoptimize/11/js/autoptimize_1dfd82e48b8d1a31c2f0666ce2e09b63.js') }}">
  </script>
  @yield('extra-js')
</body>

</html>