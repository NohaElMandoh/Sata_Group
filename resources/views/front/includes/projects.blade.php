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
@if(count($projects)>0)
<section class="elementor-section elementor-top-section elementor-element elementor-element-9560fac elementor-section-full_width elementor-section-height-min-height elementor-section-stretched elementor-section-height-default elementor-section-items-middle" data-id="9560fac" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;gradient&quot;,&quot;shape_divider_top&quot;:&quot;clouds&quot;}">
    <div class="elementor-background-overlay"></div>
    <div class="elementor-shape elementor-shape-top" data-negative="false">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="xMidYMax slice">
            <path class="elementor-shape-fill" d="M0 0v6.7c1.9-.8 4.7-1.4 8.5-1 9.5 1.1 11.1 6 11.1 6s2.1-.7 4.3-.2c2.1.5 2.8 2.6 2.8 2.6s.2-.5 1.4-.7c1.2-.2 1.7.2 1.7.2s0-2.1 1.9-2.8c1.9-.7 3.6.7 3.6.7s.7-2.9 3.1-4.1 4.7 0 4.7 0 1.2-.5 2.4 0 1.7 1.4 1.7 1.4h1.4c.7 0 1.2.7 1.2.7s.8-1.8 4-2.2c3.5-.4 5.3 2.4 6.2 4.4.4-.4 1-.7 1.8-.9 2.8-.7 4 .7 4 .7s1.7-5 11.1-6c9.5-1.1 12.3 3.9 12.3 3.9s1.2-4.8 5.7-5.7c4.5-.9 6.8 1.8 6.8 1.8s.6-.6 1.5-.9c.9-.2 1.9-.2 1.9-.2s5.2-6.4 12.6-3.3c7.3 3.1 4.7 9 4.7 9s1.9-.9 4 0 2.8 2.4 2.8 2.4 1.9-1.2 4.5-1.2 4.3 1.2 4.3 1.2.2-1 1.4-1.7 2.1-.7 2.1-.7-.5-3.1 2.1-5.5 5.7-1.4 5.7-1.4 1.5-2.3 4.2-1.1c2.7 1.2 1.7 5.2 1.7 5.2s.3-.1 1.3.5c.5.4.8.8.9 1.1.5-1.4 2.4-5.8 8.4-4 7.1 2.1 3.5 8.9 3.5 8.9s.8-.4 2 0 1.1 1.1 1.1 1.1 1.1-1.1 2.3-1.1 2.1.5 2.1.5 1.9-3.6 6.2-1.2 1.9 6.4 1.9 6.4 2.6-2.4 7.4 0c3.4 1.7 3.9 4.9 3.9 4.9s3.3-6.9 10.4-7.9 11.5 2.6 11.5 2.6.8 0 1.2.2c.4.2.9.9.9.9s4.4-3.1 8.3.2c1.9 1.7 1.5 5 1.5 5s.3-1.1 1.6-1.4c1.3-.3 2.3.2 2.3.2s-.1-1.2.5-1.9 1.9-.9 1.9-.9-4.7-9.3 4.4-13.4c5.6-2.5 9.2.9 9.2.9s5-6.2 15.9-6.2 16.1 8.1 16.1 8.1.7-.2 1.6-.4V0H0z" />
        </svg>
    </div>
    <div class="elementor-container elementor-column-gap-extended">
        
        @foreach($projects as $project)
        <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-dac9ff0" data-id="dac9ff0" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-024186f elementor-invisible elementor-widget elementor-widget-image" data-id="024186f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
                    <div class="elementor-widget-container">

                        <a href="#">
                            <img src="{{Voyager::image($project->home_logo)}}" title="{{$project->title}}" alt="{{$project->title}}" class="elementor-animation-pop" /> </a>
                    </div>
                </div>
                <div class="elementor-element elementor-element-bc8d0a8 elementor-widget elementor-widget-heading" data-id="bc8d0a8" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">

                        <h5 class="elementor-heading-title elementor-size-default"><a href="#"> {{$project->title}}</a></h5>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
     
       
    </div>
</section>
@endif