
<section class="elementor-section elementor-top-section elementor-element elementor-element-22334ea elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="22334ea" data-element_type="section"
 data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;@if($home_screens_section){{ $home_screens_section->background_vedio_link}}@endif&quot;,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
    <div class="elementor-background-video-container">
        <div class="elementor-background-video-embed"></div>
    </div>
    <div class="elementor-background-overlay"></div>
    <div class="elementor-container elementor-column-gap-wider">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-69366cb" data-id="69366cb" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-8b839bd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8b839bd" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a564b61" data-id="a564b61" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2f6a890 elementor-widget elementor-widget-text-editor" data-id="2f6a890" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <h3><strong><span style="color: #ffffff;">{{$home_screens_section->title}}
                                                </span></strong></h3>
                                        <h6>   <span style="color: #d6d6d6;">
                                        {!! html_entity_decode($home_screens_section->desc) !!}

                                    </span></h6>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2891c99 elementor-invisible elementor-widget elementor-widget-image" data-id="2891c99" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceInUp&quot;}" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img width="1024" height="444" src="{{Voyager::image($home_screens_section->image)}}" class="attachment-large size-large" alt="" loading="lazy" srcset="{{Voyager::image($home_screens_section->image)}} 1024w" sizes="(max-width: 1024px) 100vw, 1024px" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>