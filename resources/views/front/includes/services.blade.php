@if(count($services)>0)
<section class="elementor-section elementor-top-section elementor-element elementor-element-0f598b6 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="0f598b6" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-background-overlay"></div>
    <div class="elementor-container elementor-column-gap-narrow">
        @foreach($services as $service)
        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-305fa95" data-id="305fa95" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-3eab500 elementor-invisible elementor-widget elementor-widget-image" data-id="3eab500" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img width="489" height="382" src="{{Voyager::image($service->image)}}" class="attachment-large size-large" 
                        alt="" loading="lazy" srcset="{{Voyager::image($service->image)}} 489w,
                        {{Voyager::image($service->image)}} 300w, {{Voyager::image($service->image)}} 187w,
                        {{Voyager::image($service->image)}} 50w, {{Voyager::image($service->image)}} 96w" 
                          sizes="(max-width: 489px) 100vw, 489px" />
                    </div>
                </div>
                <div class="elementor-element elementor-element-8d81830 elementor-invisible elementor-widget elementor-widget-text-editor"
                 data-id="8d81830" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                  data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <h5 class="p1" ><span class="s1" style="color: #c9872e;">{{$service->title}}</span></h5>
                        <span style="color: #ffffff;">{!! html_entity_decode($service->desc) !!}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7bd9483" data-id="7bd9483" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-0403889 elementor-invisible elementor-widget elementor-widget-image" data-id="0403889" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img width="489" height="382" src="./assets/content/uploads/2022/02/4-2.png" class="attachment-large size-large" alt="" loading="lazy" srcset="./assets/content/uploads/2022/02/4-2.png 489w, ./assets/content/uploads/2022/02/4-2-300x234.png 300w, ./assets/content/uploads/2022/02/4-2-187x146.png 187w, ./assets/content/uploads/2022/02/4-2-50x39.png 50w, ./assets/content/uploads/2022/02/4-2-96x75.png 96w" sizes="(max-width: 489px) 100vw, 489px" />
                    </div>
                </div>
                <div class="elementor-element elementor-element-f4e99b1 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="f4e99b1" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <h5 class="p1" dir="rtl" style="text-align: center;"><span class="s1" style="color: #d5040e;">الابتكار</span></h5>
                        <p class="p1" dir="rtl" style="text-align: center;"><span style="color: #ffffff;">نحن نؤمن أن الابتكار هو ميزة تنافسية أساسية ورفاهية مستمرة ، لذا نعتمد عليه ونروج له</span></p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</section>
@endif