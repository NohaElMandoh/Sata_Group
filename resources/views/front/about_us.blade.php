@extends('front.layouts.app')
@section('style')
@if(Config::get('app.locale') == 'ar')
<link rel='stylesheet' id='elementor-post-497-css' href="{{ asset('front/assets/content/uploads/elementor/css/post-497.css?ver=1654773932')}}" type='text/css' media='all' />
@else
<link rel='stylesheet' id='elementor-post-1452-css' href="{{ asset('front/assets/content/uploads/elementor/css/post-1452.css?ver=1654772636')}}" type='text/css' media='all' />

@endif
@php
$img= $about_page->background;
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

    /* .elementor-widget-image img {
        vertical-align: middle;
        display: inline-block
    } */

    .elementor-widget:not(:last-child) {
        margin-bottom: 20px;
    }

    .elementor-497 .elementor-element.elementor-element-d11b470:not(.elementor-motion-effects-element-type-background),
    .elementor-497 .elementor-element.elementor-element-d11b470>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-image: url(" <?php echo url("/") . '/storage/' . $img2 ?>");
        background-size: cover;
    }

    .elementor-497 .elementor-element.elementor-element-e6dfdfe {
        text-align: center;
    }

    .elementor-497 .elementor-element.elementor-element-e506957 {
   margin-bottom: 50px;
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


<div id="Content has_content">
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
                            <div data-elementor-type="wp-page" data-elementor-id="1452" class="elementor elementor-1452  elementor-497" data-elementor-settings="[]">
                                <div class="elementor-section-wrap">
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-d11b470 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="d11b470" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-container elementor-column-gap-no ">
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
                                                            <h3 class="elementor-heading-title elementor-size-default">
                                                                {{$about_page->header_title}}
                                                            </h3>
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
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-95e3a75 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="95e3a75" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-84c2560" data-id="84c2560" data-element_type="column">
                                                <div class="elementor-widget-wrap">
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-05d12c2  " data-id="05d12c2" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-2a63b2d elementor-widget elementor-widget-heading" data-id="2a63b2d" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container ">
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                {{$about_page->title}}
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-bc28a76 elementor-widget elementor-widget-text-editor" data-id="bc28a76" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <style>
                                                                /*! elementor - v3.5.5 - 03-02-2022 */
                                                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                                    background-color: #818a91;
                                                                    color: #fff
                                                                }

                                                                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                                    color: #818a91;
                                                                    border: 3px solid;
                                                                    background-color: transparent
                                                                }

                                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                                    margin-top: 8px
                                                                }

                                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                                    width: 1em;
                                                                    height: 1em
                                                                }

                                                                .elementor-widget-text-editor .elementor-drop-cap {
                                                                    float: right;
                                                                    text-align: center;
                                                                    line-height: 1;
                                                                    font-size: 50px
                                                                }

                                                                .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                                    display: inline-block
                                                                }

                                                                .elementor-widget-container .p1 {
                                                                    text-align: center;
                                                                }
                                                            </style>

                                                            <span class="p1"> {!! html_entity_decode($about_page->desc) !!} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e66f20c" data-id="e66f20c" data-element_type="column">
                                                <div class="elementor-widget-wrap">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-dd5fd30 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dd5fd30" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            @foreach($about_page_objectives as $objective)
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4894668" data-id="4894668" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-e8ab4f0 elementor-widget elementor-widget-image" data-id="e8ab4f0" data-element_type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <a href="{{$objective->route_url}}">
                                                                <img width="489" height="382" src="{{Voyager::image($objective->main_image)}}" class="attachment-large size-large" alt="" loading="lazy" srcset="{{Voyager::image($objective->main_image)}} 489w" sizes="(max-width: 489px) 100vw, 489px" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-b700885 elementor-widget elementor-widget-heading" data-id="b700885" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h4 class="elementor-heading-title elementor-size-default">
                                                                <a href="{{$objective->route_url}}">{{$objective->title}}</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e74634e" data-id="e74634e" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-ae6468b elementor-widget elementor-widget-image" data-id="ae6468b" data-element_type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <a href="https://satatechnologygroup.com/en/politics-and-values/">
                                                                <img width="489" height="382" src="https://satatechnologygroup.com/wp-content/uploads/2022/02/1-2.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://satatechnologygroup.com/wp-content/uploads/2022/02/1-2.png 489w, https://satatechnologygroup.com/wp-content/uploads/2022/02/1-2-300x234.png 300w, https://satatechnologygroup.com/wp-content/uploads/2022/02/1-2-187x146.png 187w, https://satatechnologygroup.com/wp-content/uploads/2022/02/1-2-50x39.png 50w, https://satatechnologygroup.com/wp-content/uploads/2022/02/1-2-96x75.png 96w" sizes="(max-width: 489px) 100vw, 489px" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-cdbd902 elementor-widget elementor-widget-heading" data-id="cdbd902" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h4 class="elementor-heading-title elementor-size-default">
                                                                <a href="https://satatechnologygroup.com/en/politics-and-values/">Policies
                                                                    and Values</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-0eb92b4" data-id="0eb92b4" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-f2b33c5 elementor-widget elementor-widget-image" data-id="f2b33c5" data-element_type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <a href="https://satatechnologygroup.com/en/sata-ethics/">
                                                                <img width="489" height="382" src="https://satatechnologygroup.com/wp-content/uploads/2022/02/3-2.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://satatechnologygroup.com/wp-content/uploads/2022/02/3-2.png 489w, https://satatechnologygroup.com/wp-content/uploads/2022/02/3-2-300x234.png 300w, https://satatechnologygroup.com/wp-content/uploads/2022/02/3-2-187x146.png 187w, https://satatechnologygroup.com/wp-content/uploads/2022/02/3-2-50x39.png 50w, https://satatechnologygroup.com/wp-content/uploads/2022/02/3-2-96x75.png 96w" sizes="(max-width: 489px) 100vw, 489px" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-408f7f3 elementor-widget elementor-widget-heading" data-id="408f7f3" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h4 class="elementor-heading-title elementor-size-default">
                                                                <a href="https://satatechnologygroup.com/en/sata-ethics/">SATA
                                                                    ETHICS</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            @endforeach
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-00422ae elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="00422ae" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5695d35" data-id="5695d35" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-f8bd315 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="f8bd315" data-element_type="widget" data-widget_type="divider.default">
                                                        <div class="elementor-widget-container">
                                                            <style>
                                                                /*! elementor - v3.5.5 - 03-02-2022 */
                                                                .elementor-widget-divider {
                                                                    --divider-border-style: none;
                                                                    --divider-border-width: 1px;
                                                                    --divider-color: #2c2c2c;
                                                                    --divider-icon-size: 20px;
                                                                    --divider-element-spacing: 10px;
                                                                    --divider-pattern-height: 24px;
                                                                    --divider-pattern-size: 20px;
                                                                    --divider-pattern-url: none;
                                                                    --divider-pattern-repeat: repeat-x
                                                                }

                                                                .elementor-widget-divider .elementor-divider {
                                                                    display: -webkit-box;
                                                                    display: -ms-flexbox;
                                                                    display: flex
                                                                }

                                                                .elementor-widget-divider .elementor-divider__text {
                                                                    font-size: 15px;
                                                                    line-height: 1;
                                                                    max-width: 95%
                                                                }

                                                                .elementor-widget-divider .elementor-divider__element {
                                                                    margin: 0 var(--divider-element-spacing);
                                                                    -ms-flex-negative: 0;
                                                                    flex-shrink: 0
                                                                }

                                                                .elementor-widget-divider .elementor-icon {
                                                                    font-size: var(--divider-icon-size)
                                                                }

                                                                .elementor-widget-divider .elementor-divider-separator {
                                                                    display: -webkit-box;
                                                                    display: -ms-flexbox;
                                                                    display: flex;
                                                                    margin: 0;
                                                                    direction: ltr
                                                                }

                                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                                                                .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                                                    -webkit-box-align: center;
                                                                    -ms-flex-align: center;
                                                                    align-items: center
                                                                }

                                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                                                                .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                                                                .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                                                    display: block;
                                                                    content: "";
                                                                    border-bottom: 0;
                                                                    -webkit-box-flex: 1;
                                                                    -ms-flex-positive: 1;
                                                                    flex-grow: 1;
                                                                    border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                                }

                                                                .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                                                    -webkit-box-flex: 0;
                                                                    -ms-flex-positive: 0;
                                                                    flex-grow: 0;
                                                                    -ms-flex-negative: 100;
                                                                    flex-shrink: 100
                                                                }

                                                                .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                                                    content: none
                                                                }

                                                                .elementor-widget-divider--element-align-left .elementor-divider__element {
                                                                    margin-left: 0
                                                                }

                                                                .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                                                    -webkit-box-flex: 0;
                                                                    -ms-flex-positive: 0;
                                                                    flex-grow: 0;
                                                                    -ms-flex-negative: 100;
                                                                    flex-shrink: 100
                                                                }

                                                                .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                                                    content: none
                                                                }

                                                                .elementor-widget-divider--element-align-right .elementor-divider__element {
                                                                    margin-right: 0
                                                                }

                                                                .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                                                    border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                                }

                                                                .elementor-widget-divider--separator-type-pattern {
                                                                    --divider-border-style: none
                                                                }

                                                                .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                                                                .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                                                                .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                                                                .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                                                    width: 100%;
                                                                    min-height: var(--divider-pattern-height);
                                                                    -webkit-mask-size: var(--divider-pattern-size) 100%;
                                                                    mask-size: var(--divider-pattern-size) 100%;
                                                                    -webkit-mask-repeat: var(--divider-pattern-repeat);
                                                                    mask-repeat: var(--divider-pattern-repeat);
                                                                    background-color: var(--divider-color);
                                                                    -webkit-mask-image: var(--divider-pattern-url);
                                                                    mask-image: var(--divider-pattern-url)
                                                                }

                                                                .elementor-widget-divider--no-spacing {
                                                                    --divider-pattern-size: auto
                                                                }

                                                                .elementor-widget-divider--bg-round {
                                                                    --divider-pattern-repeat: round
                                                                }

                                                                .rtl .elementor-widget-divider .elementor-divider__text {
                                                                    direction: rtl
                                                                }
                                                            </style>
                                                            <div class="elementor-divider">
                                                                <span class="elementor-divider-separator">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-e7a674a elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="e7a674a" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;zoomInLeft&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            @foreach($letters as $key=>$letter)
                                            @if($key <= 1) <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f212112" data-id="f212112" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-6ead78d elementor-widget elementor-widget-image" data-id="6ead78d" data-element_type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <a href="{{route('letter',[$letter->id])}}">
                                                                <img width="300" height="300" src="{{Voyager::image($letter->image)}}" class="attachment-medium size-medium" alt="" loading="lazy" srcset="{{Voyager::image($letter->image)}} 300w" sizes="(max-width: 300px) 100vw, 300px" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-1e11fc1 elementor-widget elementor-widget-heading" data-id="1e11fc1" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h4 class="elementor-heading-title elementor-size-default">
                                                                <a href="{{route('letter',[$letter->id])}}"> @lang('messages.speech') {{$letter->position}}</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        @endif
                                        @endforeach
                                        <!-- <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b6c9914" data-id="b6c9914" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-bad6276 elementor-widget elementor-widget-image" data-id="bad6276" data-element_type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <a href="https://satatechnologygroup.com/en/chairmans-speech/">
                                                                <img width="300" height="242" src="https://satatechnologygroup.com/wp-content/uploads/2022/02/cbd-1-300x242.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="https://satatechnologygroup.com/wp-content/uploads/2022/02/cbd-1-300x242.png 300w, https://satatechnologygroup.com/wp-content/uploads/2022/02/cbd-1-181x146.png 181w, https://satatechnologygroup.com/wp-content/uploads/2022/02/cbd-1-50x40.png 50w, https://satatechnologygroup.com/wp-content/uploads/2022/02/cbd-1-93x75.png 93w, https://satatechnologygroup.com/wp-content/uploads/2022/02/cbd-1.png 570w" sizes="(max-width: 300px) 100vw, 300px" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-ac97367 elementor-widget elementor-widget-heading" data-id="ac97367" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h4 class="elementor-heading-title elementor-size-default">
                                                                <a href="https://satatechnologygroup.com/en/chairmans-speech/">Chairman’s
                                                                    Speech </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-77afb95 elementor-widget elementor-widget-spacer" data-id="77afb95" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                </div>
                                </section>
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-e5fbdf0 elementor-element-dd7476f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e5fbdf0" data-element_type="section">
                                    @foreach($letters as $key=>$letter)
                                    @if($key == 2)
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c421682 elementor-element-8a48774" data-id="c421682" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-e9c2da0  elementor-element-cb4f928  elementor-widget elementor-widget-image" data-id="e9c2da0" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <a href="{{route('letter',[$letter->id])}}">
                                                            <img width="300" height="300" src="{{Voyager::image($letter->image)}}" class="attachment-medium size-medium" alt="" loading="lazy" srcset=" {{Voyager::image($letter->image)}} 300w, " sizes="(max-width: 300px) 100vw, 300px" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-0e71c06 elementor-element-e506957 elementor-widget elementor-widget-heading" data-id="0e71c06" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-medium">
                                                            <a href="{{route('letter',[$letter->id])}}"> @lang('messages.speech') {{$letter->position}}</a>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </section>
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-44a016f elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="44a016f" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;shape_divider_bottom&quot;:&quot;mountains&quot;}">
                                    <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                                            <path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z" />
                                            <path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z" />
                                            <path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z" />
                                        </svg>
                                    </div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-19e82bf" data-id="19e82bf" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d27020b" data-id="d27020b" data-element_type="column">
                                            <div class="elementor-widget-wrap">
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


@endsection