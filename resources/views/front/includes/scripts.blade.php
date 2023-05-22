<script>
    window.RS_MODULES = window.RS_MODULES || {};
    window.RS_MODULES.modules = window.RS_MODULES.modules || {};
    window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
    window.RS_MODULES.defered = true;
    window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
    window.RS_MODULES.type = 'compiled';
</script>
<link href="https://fonts.googleapis.com/css?family=Roboto:400&display=swap" rel="stylesheet" property="stylesheet" media="all" type="text/css">

<script>
    if (typeof revslider_showDoubleJqueryError === "undefined") {
        function revslider_showDoubleJqueryError(sliderID) {
            console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
            console.log("To fix this, you can:");
            console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");
            console.log("2. Find the double jQuery.js inclusion and remove it");
            return "Double Included jQuery Library";
        }
    }
</script>
<link rel='stylesheet' id='mfn-elementor-css' href="{{ asset('front/assets/content/themes/betheme/functions/plugins/elementor/assets/elementor.css?ver=5.9.1')}}" type='text/css' media='all' />
<link rel='stylesheet' id='e-animations-css' href="{{ asset('front/assets/content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.5.5')}}" type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css' href="{{ asset('front/assets/content/plugins/revslider/public/assets/css/rs6.css?ver=6.5.15')}}" type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
    #rev_slider_37_1_wrapper .hades .tp-thumb {
        opacity: 1
    }

    #rev_slider_37_1_wrapper .hades .tp-thumb-img-wrap {
        border-radius: 50%;
        padding: 3px;
        display: inline-block;
        background-color: rgba(0, 0, 0, 0.25);
        width: 100%;
        height: 100%;
        position: relative;
        margin: 0px;
        box-sizing: border-box;
        transition: all 0.3s;
        -webkit-transition: all 0.3s
    }

    #rev_slider_37_1_wrapper .hades .tp-thumb-image {
        padding: 3px;
        border-radius: 50%;
        display: block;
        box-sizing: border-box;
        position: relative;
        -webkit-box-shadow: inset 5px 5px 10px 0px rgba(0, 0, 0, 0.25);
        -moz-box-shadow: inset 5px 5px 10px 0px rgba(0, 0, 0, 0.25);
        box-shadow: inset 5px 5px 10px 0px rgba(0, 0, 0, 0.25)
    }

    #rev_slider_37_1_wrapper .hades .tp-thumb.rs-touchhover .tp-thumb-img-wrap,
    #rev_slider_37_1_wrapper .hades .tp-thumb.selected .tp-thumb-img-wrap {
        background: -moz-linear-gradient(top, #ffffff 0%, #878787 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, #ffffff, color-stop(100%, #878787)));
        background: -webkit-linear-gradient(top, #ffffff 0%, #878787 100%);
        background: -o-linear-gradient(top, #ffffff 0%, #878787 100%);
        background: -ms-linear-gradient(top, #ffffff 0%, #878787 100%);
        background: linear-gradient(to bottom, #ffffff 0%, #878787 100%)
    }
</style>
<script type='text/javascript' src="{{ asset('front//assets/includes/js/hoverintent-js.min.js?ver=2.2.1')}}" id='hoverintent-js-js'></script>
<script type='text/javascript' src="{{ asset('front//assets/includes/js/admin-bar.min.js?ver=5.9.1')}}" id='admin-bar-js'></script>
<script type='text/javascript' src="{{ asset('front//assets/includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9')}}" id='regenerator-runtime-js'></script>
<script type='text/javascript' src="{{ asset('front//assets/includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0')}}" id='wp-polyfill-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
    /* <![CDATA[ */
    var wpcf7 = {
        "api": {
            "root": "https:\/\/satatechnologygroup.com\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript' src="{{ asset('front/assets/content/plugins/contact-form-7/includes/js/index.js?ver=5.5.4')}}" id='contact-form-7-js'></script>
<script type='text/javascript' src="{{ asset('front/assets/content/plugins/embedpress/assets/js/front.js?ver=3.3.4')}}" id='embedpress-front-js'></script>
<script type='text/javascript' src="{{ asset('front/assets/content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.5.15')}}" defer async id='tp-tools-js'></script>
<script type='text/javascript' src="{{ asset('front/assets/content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.5.15')}}" defer async id='revmin-js'></script>
<script type='text/javascript' src="{{ asset('front/assets/includes/js/jquery/ui/core.min.js?ver=1.13.1')}}" id='jquery-ui-core-js'></script>
<script type='text/javascript' src="{{ asset('front/assets/includes/js/jquery/ui/tabs.min.js?ver=1.13.1')}}" id='jquery-ui-tabs-js'></script>


<script type='text/javascript' id='mfn-plugins-js-extra'>
    /* <![CDATA[ */
    var mfn = {
        "mobileInit": "1240",
        "parallax": "translate3d",
        "responsive": "1",
        "sidebarSticky": "",
        "lightbox": {
            "disable": false,
            "disableMobile": false,
            "title": false
        },
        "slider": {
            "blog": 0,
            "clients": 0,
            "offer": 0,
            "portfolio": 0,
            "shop": 0,
            "slider": 0,
            "testimonials": 0
        },
        "livesearch": {
            "minChar": 3,
            "loadPosts": 10,
            "translation": {
                "pages": "Pages",
                "categories": "Categories",
                "portfolio": "Portfolio",
                "post": "Posts",
                "products": "Products"
            }
        },
        "home_url": "",
        "site_url": "https:\/\/satatechnologygroup.com",
        "ajax": "https:\/\/satatechnologygroup.com\/wp-admin\/admin-ajax.php"
    };
    /* ]]> */
</script>
<script type='text/javascript' src="{{ asset('front/assets/content/themes/betheme/js/plugins.js?ver=25.1.9.1')}}" id='mfn-plugins-js'></script>
<script type='text/javascript' src="{{ asset('front/assets/content/themes/betheme/js/menu.js?ver=25.1.9.1')}}" id='mfn-menu-js'></script>
<script type='text/javascript' src="{{ asset('front/assets/content/themes/betheme/assets/animations/animations.min.js?ver=25.1.9.1')}}" id='mfn-animations-js'></script>
<script type='text/javascript' src="{{ asset('front/assets/content/themes/betheme/assets/jplayer/jplayer.min.js?ver=25.1.9.1')}}" id='mfn-jplayer-js'></script>
<script type='text/javascript' src="{{ asset('front/assets/content/themes/betheme/js/parallax/translate3d.js?ver=25.1.9.1')}}" id='mfn-parallax-js'></script>
<script type='text/javascript' src="{{ asset('front/assets/content/themes/betheme/js/scripts.js?ver=25.1.9.1')}}" id='mfn-scripts-js'></script>
<script type='text/javascript' src="{{ asset('front/assets/content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.5.5')}}" id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src="{{ asset('front/assets/content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.5.5')}}" id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src="{{ asset('front/assets/content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2')}}" id='elementor-waypoints-js'></script>

@if (Config::get('app.locale') == 'ar')
<script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "\u0634\u0627\u0631\u0643 \u0639\u0644\u0649 \u0641\u064a\u0633\u0628\u0648\u0643",
            "shareOnTwitter": "\u0634\u0627\u0631\u0643 \u0639\u0644\u0649 \u062a\u0648\u064a\u062a\u0631",
            "pinIt": "\u062b\u0628\u062a\u0647\u0627 ",
            "download": "\u062a\u062d\u0645\u064a\u0644",
            "downloadImage": "\u062a\u0646\u0632\u064a\u0644 \u0627\u0644\u0635\u0648\u0631\u0629",
            "fullscreen": "\u0639\u0631\u0636 \u0634\u0627\u0634\u0629 \u0643\u0627\u0645\u0644\u0629",
            "zoom": "\u062a\u0643\u0628\u064a\u0631",
            "share": "\u0645\u0634\u0627\u0631\u0643\u0629",
            "playVideo": "\u062a\u0634\u063a\u064a\u0644 \u0627\u0644\u0641\u064a\u062f\u064a\u0648",
            "previous": "\u0627\u0644\u0633\u0627\u0628\u0642",
            "next": "\u0627\u0644\u062a\u0627\u0644\u064a",
            "close": "\u0625\u063a\u0644\u0627\u0642"
        },
        "is_rtl": true,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 960,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "\u0627\u0644\u0647\u0627\u062a\u0641 \u0627\u0644\u0645\u062d\u0645\u0648\u0644",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "\u0647\u0627\u062a\u0641 \u0645\u062d\u0645\u0648\u0644 - \u0623\u0641\u0642\u064a",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "\u0627\u0644\u0623\u062c\u0647\u0632\u0629 \u0627\u0644\u0644\u0648\u062d\u064a\u0629",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "\u062c\u0647\u0627\u0632 \u0644\u0648\u062d\u064a -\u0623\u0641\u0642\u064a",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "\u062d\u0627\u0633\u0648\u0628 \u0645\u062d\u0645\u0648\u0644",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "\u0627\u0644\u0634\u0627\u0634\u0629 \u0627\u0644\u0639\u0631\u064a\u0636\u0629",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.5.5",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "a11y_improvements": true,
            "e_import_export": true,
            "additional_custom_breakpoints": true,
            "e_hidden_wordpress_widgets": true,
            "landing-pages": true,
            "elements-color-picker": true,
            "favorite-widgets": true,
            "admin-top-bar": true
        },
        "urls": {
            "assets": "https:\/\/satatechnologygroup.com\/wp-content\/plugins\/elementor\/assets\/"
        },
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "stretched_section_container": "#Wrapper",
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 2,
            "title": "%D9%85%D8%AC%D9%85%D9%88%D8%B9%D8%A9%20%D8%B3%D8%A7%D8%AA%D8%A7%20-%20%D9%84%D9%84%D8%AA%D9%83%D9%86%D9%88%D9%84%D9%88%D8%AC%D9%8A%D8%A7%20%D8%AA%D9%85%D8%AB%D9%84%20%D8%A7%D9%84%D9%81%D9%83%D8%B1%20%D8%A7%D9%84%D8%AC%D8%AF%D9%8A%D8%AF%20%D9%88%D8%A7%D9%84%D9%85%D8%AA%D8%B7%D9%88%D8%B1%20%D9%84%D8%AA%D9%82%D8%AF%D9%8A%D9%85%20%D8%A7%D9%84%D8%AE%D8%AF%D9%85%D8%A7%D8%AA%20%D8%A8%D9%85%D9%81%D9%87%D9%88%D9%85%20%D8%A7%D9%84%D8%AC%D9%88%D8%AF%D8%A9%20%D8%A7%D9%84%D9%85%D8%B7%D9%84%D9%82%20%D9%81%D9%8A%20%D8%A7%D9%84%D8%B9%D8%AF%D9%8A%D8%AF%20%D9%85%D9%86%20%D8%A7%D9%84%D9%85%D8%AC%D8%A7%D9%84%D8%A7%D8%AA%20%D8%A7%D9%84%D9%85%D8%AE%D8%AA%D9%84%D9%81%D8%A9%20%D9%85%D8%AB%D9%84%28%D8%AA%D9%88%D8%B5%D9%8A%D9%84%20%D8%A7%D9%84%D8%B7%D8%B9%D8%A7%D9%85%20%E2%80%93%20%D8%A7%D9%84%D8%B4%D8%AD%D9%86%20%E2%80%93%20%D8%A7%D9%84%D9%86%D9%82%D9%84%20%E2%80%93%20%D8%A7%D9%84%D8%AA%D8%B3%D9%88%D9%82%20%E2%80%93%20%D8%A7%D9%84%D8%B3%D9%8A%D8%A7%D8%AD%D8%A9%20%D9%88%D8%A7%D9%84%D8%B3%D9%81%D8%B1%20%E2%80%93%20%D8%A7%D9%84%D9%85%D8%AF%D9%81%D9%88%D8%B9%D8%A7%D8%AA%20%D9%88%D8%AA%D8%AD%D9%88%D9%8A%D9%84%20%D8%A7%D9%84%D8%A3%D9%85%D9%88%D8%A7%D9%84%29.",
            "excerpt": "",
            "featuredImage": false
        }
    };
</script>
@else
<script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 960,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.5.5",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "a11y_improvements": true,
            "e_import_export": true,
            "additional_custom_breakpoints": true,
            "e_hidden_wordpress_widgets": true,
            "landing-pages": true,
            "elements-color-picker": true,
            "favorite-widgets": true,
            "admin-top-bar": true
        },
        "urls": {
            "assets": "https:\/\/satatechnologygroup.com\/wp-content\/plugins\/elementor\/assets\/"
        },
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "stretched_section_container": "#Wrapper",
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 1430,
            "title": "Sata%20Group%20-%20SATA%20Technology%20Group%20represents%20the%20new%20and%20advanced%20thinking%20to%20provide%20services%20with%20the%20concept%20of%20absolute%20quality%20in%20many%20different%20fields%20such%20as%28Food%20delivery%20%E2%80%93%20shipping%20%E2%80%93%20transportation%20%E2%80%93%20shopping%20%E2%80%93%20tourism%20and%20travel%20%E2%80%93%20payments%20and%20money%20transfer%29.",
            "excerpt": "",
            "featuredImage": false
        }
    };
</script>
@endif
<script type='text/javascript' src="{{ asset('front/assets/content/plugins/elementor/assets/js/frontend.min.js?ver=3.5.5')}}" id='elementor-frontend-js'></script>
<script id="rs-initialisation-scripts">
    var tpj = jQuery;

    var revapi37;

    if (window.RS_MODULES === undefined) window.RS_MODULES = {};
    if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider371"] = {
        once: RS_MODULES.modules["revslider371"] !== undefined ? RS_MODULES.modules["revslider371"].once : undefined,
        init: function() {
            window.revapi37 = window.revapi37 === undefined || window.revapi37 === null || window.revapi37.length === 0 ? document.getElementById("rev_slider_37_1") : window.revapi37;
            if (window.revapi37 === null || window.revapi37 === undefined || window.revapi37.length == 0) {
                window.revapi37initTry = window.revapi37initTry === undefined ? 0 : window.revapi37initTry + 1;
                if (window.revapi37initTry < 20) requestAnimationFrame(function() {
                    RS_MODULES.modules["revslider371"].init()
                });
                return;
            }
            window.revapi37 = jQuery(window.revapi37);
            if (window.revapi37.revolution == undefined) {
                revslider_showDoubleJqueryError("rev_slider_37_1");
                return;
            }
            revapi37.revolutionInit({
                revapi: "revapi37",
                sliderType: "carousel",
                DPR: "dpr",
                duration: "4000ms",
                visibilityLevels: "1240,1024,778,480",
                gridwidth: "1240,1024,778,480",
                gridheight: "900,700,868,300",
                lazyType: "smart",
                perspective: 600,
                perspectiveType: "global",
                editorheight: "900,700,868,500",
                responsiveLevels: "1240,1024,778,480",
                carousel: {
                    showLayersAllTime: "all",
                    infinity: true,
                    maxVisibleItems: 1,
                    stretch: true,
                    vary_fade: true
                },
                progressBar: {
                    color: "#c9872e",
                    style: "vertical",
                    size: "10px",
                    reset: "animate"
                },
                navigation: {
                    wheelCallDelay: 1000,
                    onHoverStop: false,
                    thumbnails: {
                        enable: true,
                        tmp: "<span class=\"tp-thumb-img-wrap\">  <span class=\"tp-thumb-image\"></span></span>",
                        style: "hades",
                        rtl: true,
                        h_offset: 64,
                        v_offset: -5,
                        space: 5,
                        width: 70,
                        height: 70,
                        wrapper_padding: 5,
                        wrapper_color: "transparent",
                        visibleAmount: 7
                    }
                },
                viewPort: {
                    global: true,
                    globalDist: "-200px",
                    enable: false
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid: true
                },
            });

        }
    } // End of RevInitScript

    if (window.RS_MODULES.checkMinimal !== undefined) {
        window.RS_MODULES.checkMinimal();
    };
</script>