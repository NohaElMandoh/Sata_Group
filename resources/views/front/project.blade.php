@extends('front.layouts.app')
@section('styles')
<link rel='stylesheet' id='embedpress_blocks-cgb-style-css-css' href="{{ asset('front/assets/content/plugins/embedpress/Gutenberg/dist/blocks.style.build.css?ver=1645964491')}}" type='text/css' media='all' />
{{--@if(Config::get('app.locale') == 'ar')
@else--}}
<link rel='stylesheet' id='elementor-post-1460-css' href="{{ asset('front/assets/content/uploads/elementor/css/post-1460.css?ver=1667748407')}}" type='text/css' media='all' />
{{--@endif--}}
@php
$img= $project->background;
$img2= str_replace('\\','/',$img );

@endphp
<style>
    #Content {
        width: 100%;
        padding-top: 84px;
    }

    .elementor-1460 .elementor-element.elementor-element-d11b470:not(.elementor-motion-effects-element-type-background)  {
    background-image: url(" <?php echo url("/").'/storage/'. $img2?>");
    background-position: center center;
    background-repeat: no-repeat;
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


<!-- mfn_hook_content_before --><!-- mfn_hook_content_before -->
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
                            <div data-elementor-type="wp-page" data-elementor-id="1460" class="elementor elementor-1460" data-elementor-settings="[]">
                                <div class="elementor-section-wrap">
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-d11b470 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="d11b470" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c45c264" data-id="c45c264" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-e54a17c elementor-widget elementor-widget-spacer" data-id="e54a17c" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-dbfc0d2 elementor-widget elementor-widget-spacer" data-id="dbfc0d2" data-element_type="widget" data-widget_type="spacer.default">
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
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-9bf1049 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="9bf1049" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ec995f9" data-id="ec995f9" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-2a63b2d elementor-widget elementor-widget-heading" data-id="2a63b2d" data-element_type="widget" data-widget_type="heading.default">
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
                                                               {{$project->title}}</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-09d404b elementor-widget elementor-widget-spacer" data-id="09d404b" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
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
                                                            </style>
                                                            <span class="p1"><strong>
                                                                    {!! html_entity_decode($project->desc) !!}
                                                                </strong></span>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a979adb" data-id="a979adb" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-0355cd1 elementor-widget elementor-widget-image" data-id="0355cd1" data-element_type="widget" data-widget_type="image.default">
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
                                                            </style> <img width="1024" height="684" src="{{Voyager::image($project->img)}}" class="attachment-large size-large" alt="" loading="lazy" srcset="{{Voyager::image($project->img)}} 1024w" sizes="(max-width: 1024px) 100vw, 1024px" />
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


@endsection