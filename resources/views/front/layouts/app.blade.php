<!DOCTYPE html>
<html dir=" @if(Config::get('app.locale') == 'ar') rtl @else ltr  @endif" lang="@if(Config::get('app.locale') == 'ar') ar @else en-US @endif" class="no-js " itemscope itemtype="https://schema.org/WebPage">

<head>

    <meta charset="UTF-8" />
    <meta name="description" content="مجموعة ساتا للتكنولوجيا تمثل الفكر الجديد والمتطور لتقديم الخدمات بمفهوم الجودة المطلق في العديد من المجالات المختلفة مثل (توصيل الطعام – الشحن – النقل – التسوق – السياحة والسفر – المدفوعات وتحويل الأموال)." />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <link rel="alternate" href="https://satatechnologygroup.com/" hreflang="ar" />
    <link rel="alternate" href="https://satatechnologygroup.com/en/home-page/" hreflang="en" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="./assets/content/uploads/2022/02/sata1.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="./assets/content/uploads/2022/02/sata1.png" />

    <!-- This site is optimized with the Yoast SEO plugin v18.3 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>{{$website->title}}</title>
    <meta name="description" content="مجموعة ساتا للتكنولوجيا تمثل الفكر الجديد والمتطور لتقديم الخدمات بمفهوم الجودة المطلق في العديد من المجالات المختلفة مثل(توصيل الطعام – الشحن – النقل – التسوق – السياحة والسفر – المدفوعات وتحويل الأموال)." />
    <link rel="canonical" href="https://satatechnologygroup.com/" />
    <meta property="og:locale" content="ar_AR" />
    <meta property="og:locale:alternate" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$website->title}}" />
    <meta property="og:description" content="مجموعة ساتا للتكنولوجيا تمثل الفكر الجديد والمتطور لتقديم الخدمات بمفهوم الجودة المطلق في العديد من المجالات المختلفة مثل(توصيل الطعام – الشحن – النقل – التسوق – السياحة والسفر – المدفوعات وتحويل الأموال)." />
    <meta property="og:url" content="https://satatechnologygroup.com/" />
    <meta property="og:site_name" content="Sata Group" />
    <meta property="article:modified_time" content="2022-11-07T15:38:10+00:00" />
    <meta property="og:image" content="{{ asset('front/assets/content/uploads/elementor/thumbs/WhatsApp-Image-2022-06-11-at-5.26.48-PM-pq76xuz7lryqx1thygkwbie3dq8jtp9krzc3tpzoq0.jpeg')}}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="6 دقائق" />
    @include('front.includes.styles')
@yield('styles')
</head>

<body class="@if(Config::get('app.locale') == 'ar') rtl  @endif  home page-template-default page   admin-bar no-customize-support template-slider  color-gold content-brightness-light input-brightness-light style-default button-stroke layout-full-width one-page no-content-padding is-elementor header-transparent header-fw sticky-header sticky-dark ab-hide subheader-both-center menu-line-below-80 menuo-no-borders mm-vertical footer-copy-center no-section-bg-tablet mobile-tb-center mobile-side-slide mobile-mini-mr-lc tablet-sticky mobile-sticky mobile-header-mini mobile-icon-user-ss mobile-icon-wishlist-ss mobile-icon-search-ss mobile-icon-wpml-ss mobile-icon-action-ss be-page-2 be-reg-25191 elementor-default elementor-kit-51 elementor-page elementor-page-2 elementor-no-row">

    <!-- mfn_hook_top --><!-- mfn_hook_top -->


    <div id="Wrapper">


<!-- End Header -->
@yield('content')

        

        <!-- mfn_hook_content_after --><!-- mfn_hook_content_after -->
        @include('front.includes.footer')
    </div>

    <div id="body_overlay"></div>

    <div id="Side_slide" class="left light" data-width="250">
        <div class="close-wrapper"><a href="#" class="close"><i class="icon-cancel-fine"></i></a></div>
        <div class="extras">
            <div class="extras-wrapper"><a class="lang-active" >
                <img src="@if ( Config::get('app.locale') == 'ar' ){{ asset('front/assets/content/plugins/polylang/flags/eg.png')}} @else {{ asset('front/assets/content/plugins/polylang/flags/gb.png')}} @endif" alt="" width="18" height="12" />
                <i class="icon-down-open-mini"></i></a></div>
        </div>
        <div class="lang-wrapper">
            <ul class="wpml-lang">
                <li><a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}" class="active"><img src="{{ asset('front/assets/content/plugins/polylang/flags/eg.png')}}" alt="" width="18" height="12" /></a></li>
                <li><a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class=""><img src="{{ asset('front/assets/content/plugins/polylang/flags/gb.png')}}" alt="" width="18" height="12" /></a></li>
            </ul>
        </div>
        <div class="menu_wrapper"></div>
        <ul class="social"></ul>
    </div>



    <!-- mfn_hook_bottom --><!-- mfn_hook_bottom -->

    <div id="mfn-gdpr" data-aligment="left" data-direction="vertical" style="display: none;">

        <div class="mfn-gdpr-image">
            <img src="{{ asset('front/assets/content/themes/betheme/images/cookies.png')}}" alt="gdpr-image" />
        </div>

        <div class="mfn-gdpr-content">
            This website uses cookies to improve your experience. By using this website you agree to our <a href="{{route('privacy')}}">Data Protection Policy</a>.
        </div>

        <a class="mfn-gdpr-readmore" href="" target="_blank">

        </a>

        <button class="mfn-gdpr-button" data-cookieDays="365" data-animation="slide">
            Accept all
        </button>
    </div>

    @include('front.includes.scripts')
    @yield('scripts')
    <div id="wpadminbar" class="nojq nojs" style='display:none'>
        <a class="screen-reader-shortcut" href="#wp-toolbar" tabindex="1">التخطي إلى شريط الأدوات</a>
        <div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="شريط الأدوات">
            <!-- <ul id='wp-admin-bar-root-default' class="ab-top-menu">
                <li id='wp-admin-bar-wp-logo' class="menupop">
                    <div class="ab-item ab-empty-item" tabindex="0" aria-haspopup="true"><span class="ab-icon" aria-hidden="true"></span><span class="screen-reader-text">نبذة عن ووردبريس</span></div>
                    <div class="ab-sub-wrapper">
                        <ul id='wp-admin-bar-wp-logo-external' class="ab-sub-secondary ab-submenu">
                            <li id='wp-admin-bar-wporg'><a class='ab-item' href='https://ar.wordpress.org/'>WordPress.org</a></li>
                            <li id='wp-admin-bar-documentation'><a class='ab-item' href='https://ar.wordpress.org/support/'>وثائق المساعدة</a></li>
                            <li id='wp-admin-bar-support-forums'><a class='ab-item' href='https://ar.wordpress.org/support/forums/'>الدعم</a></li>
                            <li id='wp-admin-bar-feedback'><a class='ab-item' href='https://wordpress.org/support/forum/requests-and-feedback'>طلبات واقتراحات</a></li>
                        </ul>
                    </div>
                </li>
                <li id='wp-admin-bar-mfn-live-builder'><a class='ab-item' href='https://satatechnologygroup.com/wp-admin/post.php?post=2&#038;action=mfn-live-builder'>Edit with Muffin Live Builder</a></li>
            </ul> -->
            <ul id='wp-admin-bar-top-secondary' class="ab-top-secondary ab-top-menu">
                <li id='wp-admin-bar-search' class="admin-bar-search">
                    <div class="ab-item ab-empty-item" tabindex="-1">
                        <form action="https://satatechnologygroup.com/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><label for="adminbar-search" class="screen-reader-text">بحث</label><input type="submit" class="adminbar-button" value="بحث" /></form>
                    </div>
                </li>
            </ul>
        </div>
    </div>


</body>

</html>