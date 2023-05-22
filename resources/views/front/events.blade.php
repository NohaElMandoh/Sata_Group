@extends('front.layouts.app')
@section('style')
@if(Config::get('app.locale') == 'ar')
<link rel='stylesheet' id='elementor-post-488-css' href="{{ asset('front/assets/content/uploads/elementor/css/post-488.css?ver=1667819866')}}" type='text/css' media='all' />
@else
<link rel='stylesheet' id='elementor-post-1452-css' href="{{ asset('front/assets/content/uploads/elementor/css/post-1452.css?ver=1654772636')}}" type='text/css' media='all' />

@endif
@php
$img= $events_page->background;
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

    .elementor-488 .elementor-element.elementor-element-d11b470:not(.elementor-motion-effects-element-type-background),
.elementor-488 .elementor-element.elementor-element-d11b470>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-image: url(" <?php echo url("/") . '/storage/' . $img2 ?>");
    background-size: cover;
}

.elementor-488 .elementor-element.elementor-element-d11b470>.elementor-background-overlay {
    background-color: #000000;
    opacity: 0.5;
    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
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
                            <div data-elementor-type="wp-page" data-elementor-id="488" class="elementor elementor-488 elementor-1452" data-elementor-settings="[]">
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
                                                            {{$events_page->header_title}}  </h2>
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
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-58530c6 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="58530c6" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;slideInRight&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-af22ceb" data-id="af22ceb" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-6de1d4b elementor-widget elementor-widget-mfn_blog" data-id="6de1d4b" data-element_type="widget" data-widget_type="mfn_blog.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="column_filters">
                                                                <div class="blog_wrapper isotope_wrapper clearfix">
                                                                    <div class="posts_group lm_wrapper col-3 grid">
                                                                        @foreach($events as $event)
                                                                        <div class="post-item isotope-item clearfix post-510 post type-post status-publish format-standard has-post-thumbnail hentry category---ar" style="">
                                                                            <div class="date_label">فبراير 5,
                                                                                2022</div>
                                                                            <div class="image_frame post-photo-wrapper scale-with-grid image">
                                                                                <div class="image_wrapper"><a href="{{Voyager::image($event->main_img)}}">
                                                                                        <div class="mask"></div>
                                                                                        <img width="960" height="720" src="{{Voyager::image($event->main_img)}}" class="scale-with-grid wp-post-image" alt="" loading="lazy"
                                                                                         srcset="{{Voyager::image($event->main_img)}} 960w,{{Voyager::image($event->main_img)}} 1000w" sizes="(max-width: 960px) 100vw, 960px" />
                                                                                    </a>
                                                                                    <div class="double entry-title">
                                                                                        <a href="{{route('event',[$event->id])}}">
                                                                                                {{$event->title}}</a>
                                                                                          {{-- <a class="zoom " rel="prettyphoto" href="{{Voyager::image($event->main_img)}}">
                                                                                            
                                                                                         <svg viewBox="0 0 26 26">
                                                                                                <defs>
                                                                                                    <style>
                                                                                                        .path {
                                                                                                            fill: none;
                                                                                                            stroke: #333;
                                                                                                            stroke-miterlimit: 10;
                                                                                                            stroke-width: 1.5px;
                                                                                                        }
                                                                                                    </style>
                                                                                                </defs>
                                                                                                <circle cx="11.35" cy="11.35" r="6" class="path">
                                                                                                </circle>
                                                                                                <line x1="15.59" y1="15.59" x2="20.65" y2="20.65" class="path">
                                                                                                </line>
                                                                                            </svg>
                                                                                        </a>--}}
                                                                                       {{-- <a class="link "  href="{{Voyager::image($event->main_img)}}"><svg style="diaplay:none" viewBox="0 0 26 26">
                                                                                                <defs>
                                                                                                    <style>
                                                                                                        .path {
                                                                                                            fill: none;
                                                                                                            stroke: #333;
                                                                                                            stroke-miterlimit: 10;
                                                                                                            stroke-width: 1.5px;
                                                                                                        }
                                                                                                    </style>
                                                                                                </defs>
                                                                                                <g>
                                                                                                    <path d="M10.17,8.76l2.12-2.12a5,5,0,0,1,7.07,0h0a5,5,0,0,1,0,7.07l-2.12,2.12" class="path">
                                                                                                    </path>
                                                                                                    <path d="M15.83,17.24l-2.12,2.12a5,5,0,0,1-7.07,0h0a5,5,0,0,1,0-7.07l2.12-2.12" class="path">
                                                                                                    </path>
                                                                                                    <line x1="10.17" y1="15.83" x2="15.83" y2="10.17" class="path">
                                                                                                    </line>
                                                                                                </g>
                                                                                            </svg></a>--}}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="post-desc-wrapper bg- has-custom-bg" style="">
                                                                                <div class="post-desc">
                                                                                    <div class="post-head">
                                                                                        <div class="post-meta clearfix">
                                                                                            <div class="author-date">
                                                                                                <span class="vcard author post-author"><span class="label">@lang('messages.Published by')
                                                                                                    </span><i class="icon-user"></i>
                                                                                                    <span class="fn"><a href="#">{{$event->by}}</a></span></span>
                                                                                                <span class="date"><span class="label">@lang('messages.on')
                                                                                                    </span><i class="icon-clock"></i>
                                                                                                    <span class="post-date updated">{{\Carbon\Carbon::parse($event->publish_date)->translatedFormat('l j F Y ')}}
                                                                                                     </span></span>
                                                                                            </div>
                                                                                            <!-- <div class="category">
                                                                                                <span class="cat-btn">Categories
                                                                                                    <i class="icon-down-dir"></i></span>
                                                                                                <div class="cat-wrapper">
                                                                                                    <ul class="post-categories">
                                                                                                        <li><a href="https://satatechnologygroup.com/category/%d8%ba%d9%8a%d8%b1-%d9%85%d8%b5%d9%86%d9%81-ar/" rel="category tag">غير
                                                                                                                مصنف</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div> -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="post-title">
                                                                                        <h5 class="entry-title" itemprop="headline">
                                                                                            <a href="{{route('event',[$event->id])}}">
                                                                                                {{$event->title}}</a>
                                                                                        </h5>
                                                                                    </div>
                                                                                    <div class="post-excerpt">
                                                                                    {!! html_entity_decode($event->short_desc) !!}</div>
                                                                                    <div class="post-footer">
                                                                                        <!-- <div class="button-love">
                                                                                            <span class="love-text">Do
                                                                                                you like
                                                                                                it?</span><a href="#" class="mfn-love " data-id="510"><span class="icons-wrapper"><i class="icon-heart-empty-fa"></i><i class="icon-heart-fa"></i></span><span class="label">0</span></a>
                                                                                        </div> -->
                                                                                        <div class="post-links">
                                                                                            <!-- <i
                                                                                                        class="icon-comment-empty-fa"></i>
                                                                                                    <a href="https://satatechnologygroup.com/2022/02/05/%d8%a3%d9%87%d9%85%d9%8a%d8%a9-%d8%a7%d9%84%d8%aa%d9%83%d9%86%d9%88%d9%84%d9%88%d8%ac%d9%8a%d8%a7-%d9%81%d9%8a-%d8%a7%d9%84%d8%a7%d8%aa%d8%b5%d8%a7%d9%84-2/#respond"
                                                                                                        class="post-comments">0</a><i 
                                                                                            class="icon-doc-text"></i>-->
                                                                                            <a href="{{route('event',[$event->id])}}" class="post-more">@lang('messages.Read_more')</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
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