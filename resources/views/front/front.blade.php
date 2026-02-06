<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<head>

    <title>Grand Conference | Event Conference HTML Template</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">


    <link rel='stylesheet' href='{{ asset('/') }}js/plugins/revslider/public/assets/css/settings.css' type='text/css'
        media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}css/reset.css' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}css/wordpress.css' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}css/animation.css' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}css/ilightbox/ilightbox.css' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}css/jqueryui/custom.css' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}js/plugins/mediaelement/mediaelementplayer-legacy.min.css'
        type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}js/plugins/flexslider/flexslider.css' type='text/css'
        media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}css/tooltipster.css' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}css/odometer-theme-minimal.css' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}css/style.css' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}css/menus/leftalignmenu.css' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}css/font-awesome.min.css' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}css/themify-icons.css' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}css/grandconference_custom_css.css' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}css/kirki-styles.css' type='text/css' media='all'>
    <link rel='stylesheet' href='{{ asset('/') }}css/grid.css' type='text/css' media='all'>

    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Work+Sans%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%7CPoppins%3A300%2Cregular%2C500%2C600%2C700%2C900&subset'
        type='text/css' media='all'>
    <link href="http://fonts.googleapis.com/css?family=Poppins:600%2C700%2C400%2C500" rel="stylesheet"
        property="stylesheet" type="text/css" media="all">


    <link rel="icon" href="upload/cropped-TG-Thumb-32x32.png" sizes="32x32">
    <link rel="icon" href="upload/cropped-TG-Thumb-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="upload/cropped-TG-Thumb-180x180.png">
    <meta name="msapplication-TileImage"
        content="https://themegoods-cdn-pzbycso8wng.stackpathdns.com/grandconference/demo/upload/cropped-TG-Thumb-270x270.png">


</head>

<body class="home page-template-default page page-id-350 woocommerce-no-js ppb_enable">

    <input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="leftalign">
    <input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="0">
    <input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="0">
    <input type="hidden" id="pp_image_path" name="pp_image_path" value="upload/">
    <input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="index.html">
    <input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1">
    <input type="hidden" id="tg_smart_fixed_menu" name="tg_smart_fixed_menu" value="1">
    <input type="hidden" id="tg_sidebar_sticky" name="tg_sidebar_sticky" value="1">
    <input type="hidden" id="pp_topbar" name="pp_topbar" value="0">
    <input type="hidden" id="post_client_column" name="post_client_column" value="4">
    <input type="hidden" id="pp_back" name="pp_back" value="Back">
    <input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value="">
    <input type="hidden" id="tg_portfolio_filterable_link" name="tg_portfolio_filterable_link" value="">
    <input type="hidden" id="tg_flow_enable_reflection" name="tg_flow_enable_reflection" value="">
    <input type="hidden" id="tg_lightbox_skin" name="tg_lightbox_skin" value="metro-black">
    <input type="hidden" id="tg_lightbox_thumbnails" name="tg_lightbox_thumbnails" value="horizontal">
    <input type="hidden" id="tg_lightbox_thumbnails_display" name="tg_lightbox_thumbnails_display" value="1">
    <input type="hidden" id="tg_lightbox_opacity" name="tg_lightbox_opacity" value="0.8">
    <input type="hidden" id="tg_sidemenu_overlay_effect" name="tg_sidemenu_overlay_effect" value="blur">
    <input type="hidden" id="tg_cart_url" name="tg_cart_url" value="#">
    <input type="hidden" id="tg_live_builder" name="tg_live_builder" value="0">
    <input type="hidden" id="pp_footer_style" name="pp_footer_style" value="3">

    @include('front.include.mobile-menu')
    <!-- Begin template wrapper -->
    <div id="wrapper" class="hasbg transparent">

        @include('front.include.header')

        @yield('content')

        @include('front.include.footer')
    </div>

    <div id="side_menu_wrapper" class="overlay_background">
        <a id="close_share" href="javascript:;"><span class="ti-close"></span></a>
    </div>



    <script src='{{ asset('/') }}js/jquery.js'></script>
    <script src='{{ asset('/') }}js/jquery-migrate.min.js'></script>
    <script src='{{ asset('/') }}js/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script src='{{ asset('/') }}js/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js"></script>

    <script src='{{ asset('/') }}js/plugins/ui/core.min.js'></script>
    <script src='{{ asset('/') }}js/plugins/jquery.requestAnimationFrame.js'></script>
    <script src='{{ asset('/') }}js/plugins/ilightbox.packed.js'></script>
    <script src='{{ asset('/') }}js/plugins/jquery.easing.js'></script>
    <script src='{{ asset('/') }}js/plugins/waypoints.min.js'></script>
    <script src='{{ asset('/') }}js/plugins/jquery.isotope.js'></script>
    <script src='{{ asset('/') }}js/plugins/jquery.masory.js'></script>
    <script src='{{ asset('/') }}js/plugins/jquery.tooltipster.min.js'></script>
    <script src='{{ asset('/') }}js/plugins/jarallax.js'></script>
    <script src='{{ asset('/') }}js/plugins/jquery.sticky-kit.min.js'></script>
    <script src='{{ asset('/') }}js/plugins/jquery.stellar.min.js'></script>
    <script src='{{ asset('/') }}js/plugins/jquery.cookie.js'></script>
    <script src='{{ asset('/') }}js/plugins/custom_plugins.js'></script>
    <script src='{{ asset('/') }}js/plugins/custom.js'></script>
    <script src='{{ asset('/') }}js/plugins/custom_onepage.js'></script>
    <script src='{{ asset('/') }}js/plugins/jquery.countdown.js'></script>
    <script src='{{ asset('/') }}js/plugins/imagesloaded.min.js'></script>
    <script src='{{ asset('/') }}js/plugins/masonry.min.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCmVhK5ZjYRjzAe-e9ZKS1mA3NBPuViwQ"></script>
    <script src='{{ asset('/') }}js/plugins/jquery.simplegmaps.min.js'></script>
    <script src='{{ asset('/') }}js/plugins/jarallax-video.js'></script>
    <script src='{{ asset('/') }}js/plugins/jquery.cookie.js'></script>
    <script src='{{ asset('/') }}js/plugins/custom_clock.js'></script>
    <script>
        /* <![CDATA[ */
        var mc4wp_forms_config = [];
        /* ]]> */
    </script>
    <script>
        jQuery(document).ready(function() {
            jQuery("#map1566739327259493916").simplegmaps({
                MapOptions: {
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    zoom: 8,
                    scrollwheel: false,
                }
            });
        });
    </script>
    <script type="text/javascript">
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e
                    .gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e
                    .sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                                u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                            }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e
                            .fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) /
                            100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e
                                .fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script>
    <script>
        (function() {
            function addEventListener(element, event, handler) {
                if (element.addEventListener) {
                    element.addEventListener(event, handler, false);
                } else if (element.attachEvent) {
                    element.attachEvent('on' + event, handler);
                }
            }

            function maybePrefixUrlField() {
                if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                    this.value = "http://" + this.value;
                }
            }

            var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
            if (urlFields && urlFields.length > 0) {
                for (var j = 0; j < urlFields.length; j++) {
                    addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
                }
            } /* test if browser supports date fields */
            var testInput = document.createElement('input');
            testInput.setAttribute('type', 'date');
            if (testInput.type !== 'date') {

                /* add placeholder & pattern to all date fields */
                var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
                for (var i = 0; i < dateFields.length; i++) {
                    if (!dateFields[i].placeholder) {
                        dateFields[i].placeholder = 'YYYY-MM-DD';
                    }
                    if (!dateFields[i].pattern) {
                        dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                    }
                }
            }

        })();
    </script>
    <script type="text/javascript">
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage =
                "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage +=
                "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        }
    </script>
    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script type="text/javascript">
        setREVStartSize({
            c: jQuery('#rev_slider_1_1'),
            gridwidth: [1240],
            gridheight: [800],
            sliderLayout: 'fullwidth'
        });

        var revapi1,
            tpj = jQuery;

        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "js/plugins/revslider/public/assets/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        onHoverStop: "off",
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1240,
                    gridheight: 800,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner3",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }

        }); /*ready*/
    </script>
    <script>
        var htmlDivCss = '	#rev_slider_1_1_wrapper .tp-loader.spinner3 div { background-color: #ff2d55 !important; } ';
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
</body>

</html>
