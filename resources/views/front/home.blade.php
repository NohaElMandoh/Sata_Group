@extends('front.layouts.app')
@section('style')
@if(Config::get('app.locale') == 'ar')
<link rel='stylesheet' id='elementor-post-2-css' href="{{ asset('front/assets/content/uploads/elementor/css/post-2.css?ver=1671473758')}}" type='text/css' media='all' />
<style>
.elementor-2 .elementor-element.elementor-element-8488c92 .elementor-widget-container{

    text-align: right;
}

</style>


@else
<link rel='stylesheet' id='elementor-post-1430-css' href="{{ asset('front/assets/content/uploads/elementor/css/post-1430.css?ver=1667846891')}}" type='text/css' media='all' />
@endif
@php
$img= $about_section->background;
$img2= str_replace('\\','/',$img );


$img3= $home_services_section->background;
$img4= str_replace('\\','/',$img3 );
@endphp
<style>

.elementor-2 .elementor-element.elementor-element-ab08e2b:not(.elementor-motion-effects-element-type-background),
.elementor-2 .elementor-element.elementor-element-ab08e2b>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #F3EFEF;
    /* background-image: url("https://satatechnologygroup.com/wp-content/uploads/2022/02/Sign_Mockup_6.png"); */

    background-image: url(" <?php echo url("/").'/storage/'. $img2?>");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
.elementor-1430 .elementor-element.elementor-element-ab08e2b:not(.elementor-motion-effects-element-type-background),
.elementor-1430 .elementor-element.elementor-element-ab08e2b>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #F3EFEF;
    background-image: url(" <?php echo url("/").'/storage/'. $img2?>");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
.elementor-2 .elementor-element.elementor-element-0f598b6:not(.elementor-motion-effects-element-type-background),
.elementor-2 .elementor-element.elementor-element-0f598b6>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #020101;
    background-image: url(" <?php echo url("/").'/storage/'. $img4?>");
}

.elementor-1430 .elementor-element.elementor-element-0f598b6:not(.elementor-motion-effects-element-type-background),
.elementor-1430 .elementor-element.elementor-element-0f598b6>.elementor-motion-effects-container>.elementor-motion-effects-layer {
    background-color: #020101;
    background-image: url(" <?php echo url("/").'/storage/'. $img4?>");
}
</style>

@endsection
@section('content')
<div id="Header_wrapper" class="">

    <header id="Header">


        <div class="header_placeholder"></div>

        @include('front.includes.top_bar')
        @include('front.includes.slider')
    </header>

</div>


<!-- mfn_hook_content_before --><!-- mfn_hook_content_before -->
<div id="Content">
    <div class="content_wrapper clearfix">

        <div class="sections_group">

            <div class="entry-content" itemprop="mainContentOfPage">


                <div class="mfn-builder-content"></div>
                <div class="section the_content has_content">
                    <div class="section_wrapper">
                        <div class="the_content_wrapper is-elementor">
                            <div data-elementor-type="wp-page" data-elementor-id="2" class="elementor elementor-2 elementor-1430" data-elementor-settings="[]">
                                <div class="elementor-section-wrap">

                                    @include('front.includes.about')
                                    @include('front.includes.intro')
                                    @include('front.includes.projects')
                                    @include('front.includes.services')
                                    @include('front.includes.screens')
                                    @include('front.includes.letters')


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