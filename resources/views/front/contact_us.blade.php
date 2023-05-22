@extends('front.layouts.app')
@section('style')
<script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
  
@if(Config::get('app.locale') == 'ar')
<link rel='stylesheet' id='elementor-post-363-css' href="{{ asset('front/assets/content/uploads/elementor/css/post-363.css?ver=1671475956')}}" type='text/css' media='all' />
@else
<link rel='stylesheet' id='elementor-post-1452-css' href="{{ asset('front/assets/content/uploads/elementor/css/post-1452.css?ver=1654772636')}}" type='text/css' media='all' />

@endif
@php
$img= $contact_us_page->background;
$img2= str_replace('\\','/',$img );

@endphp

<style>
    #Content img {
        max-width: 100%;
        height: auto;
    }

    /*! elementor - v3.5.5 - 03-02-2022 */
    .elementor-widget-image {
        text-align: center
    }

    .elementor-widget-image a {
        display: inline-block
    }

    .elementor-widget-image a img[src$=".svg"] {
        width: 48px
    }

    .elementor-widget-image img {
        vertical-align: middle;
        display: inline-block
    }

    .elementor-widget:not(:last-child) {
        margin-bottom: 20px;
    }

    .elementor-363 .elementor-element.elementor-element-d11b470:not(.elementor-motion-effects-element-type-background),
    .elementor-363 .elementor-element.elementor-element-d11b470>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-image: url(" <?php echo url("/") . '/storage/' . $img2 ?>");

        background-size: cover;
    }
</style>
@endsection
@section('content')
<div id="Header_wrapper" class="">

    <header id="Header">


        <div class="header_placeholder"></div>

        @include('front.includes.top_bar')
    </header>

</div>


<div id="Content">
    <div class="content_wrapper clearfix">

        <div class="sections_group">

            <div class="entry-content" itemprop="mainContentOfPage">


                <div class="mfn-builder-content">
                    <div class="section mcb-section mcb-section-4f6cwdpue" style="">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap mcb-wrap-4t8giqujz one  valign-top clearfix" data-col="one" style="">
                                <div class="mcb-wrap-inner">
                                    <div class="mfn-drag-helper placeholder-wrap"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section the_content has_content">
                    <div class="section_wrapper">
                        <div class="the_content_wrapper is-elementor">
                            <div data-elementor-type="wp-page" data-elementor-id="363" class="elementor elementor-363 elementor-1452" data-elementor-settings="[]">
                                <div class="elementor-section-wrap">
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-d11b470 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="d11b470" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c45c264" data-id="c45c264" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-c0bd0f8 elementor-widget elementor-widget-spacer" data-id="c0bd0f8" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-e6dfdfe elementor-widget elementor-widget-heading" data-id="e6dfdfe" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <style>
                                                                /*! elementor - v3.5.5 - 03-02-2022 */
                                                                .elementor-heading-title {
                                                                    padding: 0;
                                                                    margin: 0;
                                                                    line-height: 1
                                                                }

                                                                .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                                    color: inherit;
                                                                    font-size: inherit;
                                                                    line-height: inherit
                                                                }

                                                                .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                                    font-size: 15px
                                                                }

                                                                .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                                    font-size: 19px
                                                                }

                                                                .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                                    font-size: 29px
                                                                }

                                                                .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                                    font-size: 39px
                                                                }

                                                                .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                                    font-size: 59px
                                                                }
                                                            </style>
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                {{$contact_us_page->header_title}}
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-e54a17c elementor-widget elementor-widget-spacer" data-id="e54a17c" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-8d50153 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="8d50153" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;animation&quot;:&quot;zoomIn&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-44cb425" data-id="44cb425" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated ">
                                                    <div class="elementor-element elementor-element-5d2cfdd elementor-widget elementor-widget-heading" data-id="5d2cfdd" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                {{$website->title}}
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-b535f04 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="b535f04" data-element_type="widget" data-widget_type="icon-list.default">
                                                        <div class="elementor-widget-container">
                                                            <style>
                                                                /*! elementor - v3.5.5 - 03-02-2022 */
                                                                .elementor-widget.elementor-icon-list--layout-inline .elementor-widget-container {
                                                                    overflow: hidden
                                                                }

                                                                .elementor-widget .elementor-icon-list-items.elementor-inline-items {
                                                                    margin-right: -8px;
                                                                    margin-left: -8px
                                                                }

                                                                .elementor-widget .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
                                                                    margin-right: 8px;
                                                                    margin-left: 8px
                                                                }

                                                                .elementor-widget .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
                                                                    width: auto;
                                                                    left: auto;
                                                                    right: auto;
                                                                    position: relative;
                                                                    height: 100%;
                                                                    border-top: 0;
                                                                    border-bottom: 0;
                                                                    border-right: 0;
                                                                    border-left-width: 1px;
                                                                    border-style: solid;
                                                                    right: -8px
                                                                }

                                                                .elementor-widget .elementor-icon-list-items {
                                                                    list-style-type: none;
                                                                    margin: 0;
                                                                    padding: 0
                                                                }

                                                                .elementor-widget .elementor-icon-list-item {
                                                                    margin: 0;
                                                                    padding: 0;
                                                                    position: relative
                                                                }

                                                                .elementor-widget .elementor-icon-list-item:after {
                                                                    position: absolute;
                                                                    bottom: 0;
                                                                    width: 100%
                                                                }

                                                                .elementor-widget .elementor-icon-list-item,
                                                                .elementor-widget .elementor-icon-list-item a {
                                                                    display: -webkit-box;
                                                                    display: -ms-flexbox;
                                                                    display: flex;
                                                                    -webkit-box-align: center;
                                                                    -ms-flex-align: center;
                                                                    align-items: center;
                                                                    font-size: inherit
                                                                }

                                                                .elementor-widget .elementor-icon-list-icon+.elementor-icon-list-text {
                                                                    -ms-flex-item-align: center;
                                                                    align-self: center;
                                                                    padding-left: 5px
                                                                }

                                                                .elementor-widget .elementor-icon-list-icon {
                                                                    display: -webkit-box;
                                                                    display: -ms-flexbox;
                                                                    display: flex
                                                                }

                                                                .elementor-widget .elementor-icon-list-icon svg {
                                                                    width: var(--e-icon-list-icon-size, 1em);
                                                                    height: var(--e-icon-list-icon-size, 1em)
                                                                }

                                                                .elementor-widget .elementor-icon-list-icon i {
                                                                    width: 1.25em;
                                                                    font-size: var(--e-icon-list-icon-size)
                                                                }

                                                                .elementor-widget.elementor-widget-icon-list .elementor-icon-list-icon {
                                                                    text-align: var(--e-icon-list-icon-align)
                                                                }

                                                                .elementor-widget.elementor-widget-icon-list .elementor-icon-list-icon svg {
                                                                    margin: var(--e-icon-list-icon-margin, 0 calc(var(--e-icon-list-icon-size, 1em) * .25) 0 0)
                                                                }

                                                                .elementor-widget.elementor-list-item-link-full_width a {
                                                                    width: 100%
                                                                }

                                                                .elementor-widget.elementor-align-center .elementor-icon-list-item,
                                                                .elementor-widget.elementor-align-center .elementor-icon-list-item a {
                                                                    -webkit-box-pack: center;
                                                                    -ms-flex-pack: center;
                                                                    justify-content: center
                                                                }

                                                                .elementor-widget.elementor-align-center .elementor-icon-list-item:after {
                                                                    margin: auto
                                                                }

                                                                .elementor-widget.elementor-align-center .elementor-inline-items {
                                                                    -webkit-box-pack: center;
                                                                    -ms-flex-pack: center;
                                                                    justify-content: center
                                                                }

                                                                .elementor-widget.elementor-align-left .elementor-icon-list-item,
                                                                .elementor-widget.elementor-align-left .elementor-icon-list-item a {
                                                                    -webkit-box-pack: start;
                                                                    -ms-flex-pack: start;
                                                                    justify-content: flex-start;
                                                                    text-align: left
                                                                }

                                                                .elementor-widget.elementor-align-left .elementor-inline-items {
                                                                    -webkit-box-pack: start;
                                                                    -ms-flex-pack: start;
                                                                    justify-content: flex-start
                                                                }

                                                                .elementor-widget.elementor-align-right .elementor-icon-list-item,
                                                                .elementor-widget.elementor-align-right .elementor-icon-list-item a {
                                                                    -webkit-box-pack: end;
                                                                    -ms-flex-pack: end;
                                                                    justify-content: flex-end;
                                                                    text-align: right
                                                                }

                                                                .elementor-widget.elementor-align-right .elementor-icon-list-items {
                                                                    -webkit-box-pack: end;
                                                                    -ms-flex-pack: end;
                                                                    justify-content: flex-end
                                                                }

                                                                .elementor-widget:not(.elementor-align-right) .elementor-icon-list-item:after {
                                                                    left: 0
                                                                }

                                                                .elementor-widget:not(.elementor-align-left) .elementor-icon-list-item:after {
                                                                    right: 0
                                                                }

                                                                @media (max-width:1024px) {

                                                                    .elementor-widget.elementor-tablet-align-center .elementor-icon-list-item,
                                                                    .elementor-widget.elementor-tablet-align-center .elementor-icon-list-item a,
                                                                    .elementor-widget.elementor-tablet-align-center .elementor-icon-list-items {
                                                                        -webkit-box-pack: center;
                                                                        -ms-flex-pack: center;
                                                                        justify-content: center
                                                                    }

                                                                    .elementor-widget.elementor-tablet-align-center .elementor-icon-list-item:after {
                                                                        margin: auto
                                                                    }

                                                                    .elementor-widget.elementor-tablet-align-left .elementor-icon-list-items {
                                                                        -webkit-box-pack: start;
                                                                        -ms-flex-pack: start;
                                                                        justify-content: flex-start
                                                                    }

                                                                    .elementor-widget.elementor-tablet-align-left .elementor-icon-list-item,
                                                                    .elementor-widget.elementor-tablet-align-left .elementor-icon-list-item a {
                                                                        -webkit-box-pack: start;
                                                                        -ms-flex-pack: start;
                                                                        justify-content: flex-start;
                                                                        text-align: left
                                                                    }

                                                                    .elementor-widget.elementor-tablet-align-right .elementor-icon-list-items {
                                                                        -webkit-box-pack: end;
                                                                        -ms-flex-pack: end;
                                                                        justify-content: flex-end
                                                                    }

                                                                    .elementor-widget.elementor-tablet-align-right .elementor-icon-list-item,
                                                                    .elementor-widget.elementor-tablet-align-right .elementor-icon-list-item a {
                                                                        -webkit-box-pack: end;
                                                                        -ms-flex-pack: end;
                                                                        justify-content: flex-end;
                                                                        text-align: right
                                                                    }

                                                                    .elementor-widget:not(.elementor-tablet-align-right) .elementor-icon-list-item:after {
                                                                        left: 0
                                                                    }

                                                                    .elementor-widget:not(.elementor-tablet-align-left) .elementor-icon-list-item:after {
                                                                        right: 0
                                                                    }
                                                                }

                                                                @media (max-width:767px) {

                                                                    .elementor-widget.elementor-mobile-align-center .elementor-icon-list-item,
                                                                    .elementor-widget.elementor-mobile-align-center .elementor-icon-list-item a,
                                                                    .elementor-widget.elementor-mobile-align-center .elementor-icon-list-items {
                                                                        -webkit-box-pack: center;
                                                                        -ms-flex-pack: center;
                                                                        justify-content: center
                                                                    }

                                                                    .elementor-widget.elementor-mobile-align-center .elementor-icon-list-item:after {
                                                                        margin: auto
                                                                    }

                                                                    .elementor-widget.elementor-mobile-align-left .elementor-icon-list-items {
                                                                        -webkit-box-pack: start;
                                                                        -ms-flex-pack: start;
                                                                        justify-content: flex-start
                                                                    }

                                                                    .elementor-widget.elementor-mobile-align-left .elementor-icon-list-item,
                                                                    .elementor-widget.elementor-mobile-align-left .elementor-icon-list-item a {
                                                                        -webkit-box-pack: start;
                                                                        -ms-flex-pack: start;
                                                                        justify-content: flex-start;
                                                                        text-align: left
                                                                    }

                                                                    .elementor-widget.elementor-mobile-align-right .elementor-icon-list-items {
                                                                        -webkit-box-pack: end;
                                                                        -ms-flex-pack: end;
                                                                        justify-content: flex-end
                                                                    }

                                                                    .elementor-widget.elementor-mobile-align-right .elementor-icon-list-item,
                                                                    .elementor-widget.elementor-mobile-align-right .elementor-icon-list-item a {
                                                                        -webkit-box-pack: end;
                                                                        -ms-flex-pack: end;
                                                                        justify-content: flex-end;
                                                                        text-align: right
                                                                    }

                                                                    .elementor-widget:not(.elementor-mobile-align-right) .elementor-icon-list-item:after {
                                                                        left: 0
                                                                    }

                                                                    .elementor-widget:not(.elementor-mobile-align-left) .elementor-icon-list-item:after {
                                                                        right: 0
                                                                    }
                                                                }
                                                            </style>
                                                            <ul class="elementor-icon-list-items">
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon">
                                                                        <i aria-hidden="true" class="far fa-map"></i> </span>
                                                                    <span class="elementor-icon-list-text">
                                                                        {{$website->address}} </span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="tel:00223548004">

                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true" class="fas fa-phone"></i>
                                                                        </span>
                                                                        <span class="elementor-icon-list-text"> {{$website->mobile}}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon">
                                                                        <i aria-hidden="true" class="fas fa-mail-bulk"></i>
                                                                    </span>
                                                                    <span class="elementor-icon-list-text"> {{$website->email}}</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-icon">
                                                                        <i aria-hidden="true" class="fas fa-paperclip"></i>
                                                                    </span>
                                                                    <span class="elementor-icon-list-text">
                                                                        <a href="{{$website->website_url}}">{{$website->website_url}}</a> </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-7c656bf elementor-widget elementor-widget-spacer" data-id="7c656bf" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-730b1e6 elementor-shape-circle elementor-grid-6 e-grid-align-right elementor-widget elementor-widget-social-icons" data-id="730b1e6" data-element_type="widget" data-widget_type="social-icons.default">
                                                        <div class="elementor-widget-container">
                                                            <style>
                                                                /*! elementor - v3.5.5 - 03-02-2022 */
                                                                .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                                                                .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                                                                .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                                                                    line-height: 1;
                                                                    font-size: 0
                                                                }

                                                                .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                                                                    display: inline-grid
                                                                }

                                                                .elementor-widget-social-icons .elementor-grid {
                                                                    grid-column-gap: var(--grid-column-gap, 5px);
                                                                    grid-row-gap: var(--grid-row-gap, 5px);
                                                                    grid-template-columns: var(--grid-template-columns);
                                                                    -webkit-box-pack: var(--justify-content, center);
                                                                    -ms-flex-pack: var(--justify-content, center);
                                                                    justify-content: var(--justify-content, center);
                                                                    justify-items: var(--justify-content, center)
                                                                }

                                                                .elementor-icon.elementor-social-icon {
                                                                    font-size: var(--icon-size, 25px);
                                                                    line-height: var(--icon-size, 25px);
                                                                    width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                                    height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))
                                                                }

                                                                .elementor-social-icon {
                                                                    --e-social-icon-icon-color: #fff;
                                                                    display: -webkit-inline-box;
                                                                    display: -ms-inline-flexbox;
                                                                    display: inline-flex;
                                                                    background-color: #818a91;
                                                                    -webkit-box-align: center;
                                                                    -ms-flex-align: center;
                                                                    align-items: center;
                                                                    -webkit-box-pack: center;
                                                                    -ms-flex-pack: center;
                                                                    justify-content: center;
                                                                    text-align: center;
                                                                    cursor: pointer
                                                                }

                                                                .elementor-social-icon i {
                                                                    color: var(--e-social-icon-icon-color)
                                                                }

                                                                .elementor-social-icon svg {
                                                                    fill: var(--e-social-icon-icon-color)
                                                                }

                                                                .elementor-social-icon:last-child {
                                                                    margin: 0
                                                                }

                                                                .elementor-social-icon:hover {
                                                                    opacity: .9;
                                                                    color: #fff
                                                                }

                                                                .elementor-social-icon-android {
                                                                    background-color: #a4c639
                                                                }

                                                                .elementor-social-icon-apple {
                                                                    background-color: #999
                                                                }

                                                                .elementor-social-icon-behance {
                                                                    background-color: #1769ff
                                                                }

                                                                .elementor-social-icon-bitbucket {
                                                                    background-color: #205081
                                                                }

                                                                .elementor-social-icon-codepen {
                                                                    background-color: #000
                                                                }

                                                                .elementor-social-icon-delicious {
                                                                    background-color: #39f
                                                                }

                                                                .elementor-social-icon-deviantart {
                                                                    background-color: #05cc47
                                                                }

                                                                .elementor-social-icon-digg {
                                                                    background-color: #005be2
                                                                }

                                                                .elementor-social-icon-dribbble {
                                                                    background-color: #ea4c89
                                                                }

                                                                .elementor-social-icon-elementor {
                                                                    background-color: #d30c5c
                                                                }

                                                                .elementor-social-icon-envelope {
                                                                    background-color: #ea4335
                                                                }

                                                                .elementor-social-icon-facebook,
                                                                .elementor-social-icon-facebook-f {
                                                                    background-color: #3b5998
                                                                }

                                                                .elementor-social-icon-flickr {
                                                                    background-color: #0063dc
                                                                }

                                                                .elementor-social-icon-foursquare {
                                                                    background-color: #2d5be3
                                                                }

                                                                .elementor-social-icon-free-code-camp,
                                                                .elementor-social-icon-freecodecamp {
                                                                    background-color: #006400
                                                                }

                                                                .elementor-social-icon-github {
                                                                    background-color: #333
                                                                }

                                                                .elementor-social-icon-gitlab {
                                                                    background-color: #e24329
                                                                }

                                                                .elementor-social-icon-globe {
                                                                    background-color: #818a91
                                                                }

                                                                .elementor-social-icon-google-plus,
                                                                .elementor-social-icon-google-plus-g {
                                                                    background-color: #dd4b39
                                                                }

                                                                .elementor-social-icon-houzz {
                                                                    background-color: #7ac142
                                                                }

                                                                .elementor-social-icon-instagram {
                                                                    background-color: #262626
                                                                }

                                                                .elementor-social-icon-jsfiddle {
                                                                    background-color: #487aa2
                                                                }

                                                                .elementor-social-icon-link {
                                                                    background-color: #818a91
                                                                }

                                                                .elementor-social-icon-linkedin,
                                                                .elementor-social-icon-linkedin-in {
                                                                    background-color: #0077b5
                                                                }

                                                                .elementor-social-icon-medium {
                                                                    background-color: #00ab6b
                                                                }

                                                                .elementor-social-icon-meetup {
                                                                    background-color: #ec1c40
                                                                }

                                                                .elementor-social-icon-mixcloud {
                                                                    background-color: #273a4b
                                                                }

                                                                .elementor-social-icon-odnoklassniki {
                                                                    background-color: #f4731c
                                                                }

                                                                .elementor-social-icon-pinterest {
                                                                    background-color: #bd081c
                                                                }

                                                                .elementor-social-icon-product-hunt {
                                                                    background-color: #da552f
                                                                }

                                                                .elementor-social-icon-reddit {
                                                                    background-color: #ff4500
                                                                }

                                                                .elementor-social-icon-rss {
                                                                    background-color: #f26522
                                                                }

                                                                .elementor-social-icon-shopping-cart {
                                                                    background-color: #4caf50
                                                                }

                                                                .elementor-social-icon-skype {
                                                                    background-color: #00aff0
                                                                }

                                                                .elementor-social-icon-slideshare {
                                                                    background-color: #0077b5
                                                                }

                                                                .elementor-social-icon-snapchat {
                                                                    background-color: #fffc00
                                                                }

                                                                .elementor-social-icon-soundcloud {
                                                                    background-color: #f80
                                                                }

                                                                .elementor-social-icon-spotify {
                                                                    background-color: #2ebd59
                                                                }

                                                                .elementor-social-icon-stack-overflow {
                                                                    background-color: #fe7a15
                                                                }

                                                                .elementor-social-icon-steam {
                                                                    background-color: #00adee
                                                                }

                                                                .elementor-social-icon-stumbleupon {
                                                                    background-color: #eb4924
                                                                }

                                                                .elementor-social-icon-telegram {
                                                                    background-color: #2ca5e0
                                                                }

                                                                .elementor-social-icon-thumb-tack {
                                                                    background-color: #1aa1d8
                                                                }

                                                                .elementor-social-icon-tripadvisor {
                                                                    background-color: #589442
                                                                }

                                                                .elementor-social-icon-tumblr {
                                                                    background-color: #35465c
                                                                }

                                                                .elementor-social-icon-twitch {
                                                                    background-color: #6441a5
                                                                }

                                                                .elementor-social-icon-twitter {
                                                                    background-color: #1da1f2
                                                                }

                                                                .elementor-social-icon-viber {
                                                                    background-color: #665cac
                                                                }

                                                                .elementor-social-icon-vimeo {
                                                                    background-color: #1ab7ea
                                                                }

                                                                .elementor-social-icon-vk {
                                                                    background-color: #45668e
                                                                }

                                                                .elementor-social-icon-weibo {
                                                                    background-color: #dd2430
                                                                }

                                                                .elementor-social-icon-weixin {
                                                                    background-color: #31a918
                                                                }

                                                                .elementor-social-icon-whatsapp {
                                                                    background-color: #25d366
                                                                }

                                                                .elementor-social-icon-wordpress {
                                                                    background-color: #21759b
                                                                }

                                                                .elementor-social-icon-xing {
                                                                    background-color: #026466
                                                                }

                                                                .elementor-social-icon-yelp {
                                                                    background-color: #af0606
                                                                }

                                                                .elementor-social-icon-youtube {
                                                                    background-color: #cd201f
                                                                }

                                                                .elementor-social-icon-500px {
                                                                    background-color: #0099e5
                                                                }

                                                                .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                                                                    -webkit-border-radius: 10%;
                                                                    border-radius: 10%
                                                                }

                                                                .elementor-shape-circle .elementor-icon.elementor-social-icon {
                                                                    -webkit-border-radius: 50%;
                                                                    border-radius: 50%
                                                                }
                                                            </style>
                                                            <div class="elementor-social-icons-wrapper elementor-grid">
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-bc1fd05" href="https://www.facebook.com/SATA-GROUP-107069824955138/" target="_blank">
                                                                        <span class="elementor-screen-only">Facebook</span>
                                                                        <i class="fab fa-facebook"></i> </a>
                                                                </span>
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-4cfdf78" href="https://www.instagram.com/satagroupeg/?utm_medium=copy_link" target="_blank">
                                                                        <span class="elementor-screen-only">Instagram</span>
                                                                        <i class="fab fa-instagram"></i> </a>
                                                                </span>
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-0559599" href="https://twitter.com/satagroupint" target="_blank">
                                                                        <span class="elementor-screen-only">Twitter</span>
                                                                        <i class="fab fa-twitter"></i> </a>
                                                                </span>
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-ac10900" href="https://www.linkedin.com/company/satagroupco/about/" target="_blank">
                                                                        <span class="elementor-screen-only">Linkedin</span>
                                                                        <i class="fab fa-linkedin"></i> </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-30459bf" data-id="30459bf" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated ccscscscCotatct">
                                                    <div class="elementor-element elementor-element-233d964 elementor-widget elementor-widget-spacer" data-id="233d964" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-b5cb999 elementor-widget elementor-widget-heading" data-id="b5cb999" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h5 class="elementor-heading-title elementor-size-default">
                                                                @lang('messages.form_title') </h5>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-5ea8099 elementor-widget elementor-widget-spacer" data-id="5ea8099" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-752dc18 elementor-widget elementor-widget-shortcode" data-id="752dc18" data-element_type="widget" data-widget_type="shortcode.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-shortcode">
                                                                <!-- <div id='formContainer464054436' class='sfForm rednaoFormContainer SfFormElementContainer bootstrap-wrapper'> -->

                                                                    <form id="contactForm">
                                                                        <div class="alert alert-success alert-success-message" style="display:none">
                                                                            {{ Session::get('success') }}

                                                                        </div>
                                                                        <div class="alert alert-danger " style="display:none">
                                                                            <ul id='list'>

                                                                            </ul>

                                                                        </div>
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <label for="formGroupExampleInput">@lang('messages.Name')</label>
                                                                            <input type="text" class="form-control" name="name" id="name" placeholder="@lang('messages.Name')">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">@lang('messages.Email')</label>
                                                                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="@lang('messages.Email')">

                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">@lang('messages.Your Message')</label>
                                                                            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                                                                        </div>

                                                                        <button type="submit" id='submit_btn' class="btn btn-primary">@lang('messages.Send Message')</button>
                                                                    </form>
                                                                <!-- </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7f46e61" data-id="7f46e61" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-c2cf293 elementor-widget elementor-widget-image" data-id="c2cf293" data-element_type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <style>
                                                                /*! elementor - v3.5.5 - 03-02-2022 */
                                                                .elementor-widget-image {
                                                                    text-align: center
                                                                }

                                                                .elementor-widget-image a {
                                                                    display: inline-block
                                                                }

                                                                .elementor-widget-image a img[src$=".svg"] {
                                                                    width: 48px
                                                                }

                                                                .elementor-widget-image img {
                                                                    vertical-align: middle;
                                                                    display: inline-block
                                                                }
                                                            </style> <img src="{{Voyager::image($contact_us_page->image)}}" title="m.pngap" alt="m.pngap" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section section-page-footer">
                    <div class="section_wrapper clearfix">

                        <div class="column one page-pager">
                        </div>

                    </div>
                </div>


            </div>


        </div>


    </div>
</div>

</div>


@endsection

@section('scripts')

<script type="text/javascript">
    $('#submit_btn').on('click', function(event) {
        event.preventDefault();

        let email = $('#email').val();
        let name = $('#name').val();

        let message = $('#message').val();

        $.ajax({
            url: "contact_us",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",

                email: email,
                name: name,
                message: message,

            },
            success: function(response) {
                $(".alert-danger").css("display", "none");
                $(".alert-success-message").css("display", "block");
                $(".alert-success-message").html('<P style="text-align:center">Thank you.').hide()
                    .fadeIn(1500, function() {
                        $('.alert-success-message');
                    }).fadeOut(1500, function() {
                        $('.alert-success-message');
                    }).reset();

            },
            error: function(response) {
                $(".alert-success-message").css("display", "none");

                $(".alert-danger").css("display", "block");
                $("#list").empty();
                $.each(response.responseJSON.errors, function(key, value) {

                    str = "<li>" + value + "</li>";
                    $("#list").append(str);
                });
            },
        });
        document.getElementById("contactForm").reset();
    });
</script>
@endsection