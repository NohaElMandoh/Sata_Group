<section class="elementor-section elementor-top-section elementor-element elementor-element-148d615 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="148d615" data-element_type="section" 
data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;@if($home_letters_section){{asset('storage/'. $home_letters_section->background_vedio)}}@endif&quot;,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
    <div class="elementor-background-video-container elementor-hidden-phone">
        <video class="elementor-background-video-hosted elementor-html5-video" autoplay muted playsinline loop></video>
    </div>
    <div class="elementor-background-overlay"></div>
    <div class="elementor-container elementor-column-gap-default">
        @foreach($letters as $letter)
        @if($letter->appear_home ==1)
        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-52c1f11" data-id="52c1f11" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-17f7b0e elementor-widget elementor-widget-spacer" data-id="17f7b0e" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-ead3695" data-id="ead3695" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-7f0d950 elementor-widget elementor-widget-spacer" data-id="7f0d950" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3d617ad elementor-invisible elementor-widget elementor-widget-image" data-id="3d617ad" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img width="150" height="150" src="{{Voyager::image($letter->image)}}" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="{{Voyager::image($letter->image)}} 150w, ./assets/content/uploads/2022/06/qcbd-1-85x85.png 85w, ./assets/content/uploads/2022/06/qcbd-1-80x80.png 80w" sizes="(max-width: 150px) 100vw, 150px" />
                    </div>
                </div>
                <div class="elementor-element elementor-element-8488c92 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="8488c92" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomInRight&quot;}" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <h4 ><span style="color: #ff0000;"><span style="color: #c9872e;">@lang('messages.speech')</span><span style="color: #ffffff;"> {{$letter->position}}</span></h4>
                        <h5 ><span style="color: #c9872e;">{{$letter->name}} </span></h5>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7b506fd elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="7b506fd" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="divider.default">
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
                <div class="elementor-element elementor-element-7f0ddcd elementor-invisible elementor-widget elementor-widget-text-editor" data-id="7f0ddcd" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">

                        <span >  {!! html_entity_decode($letter->message) !!} </span>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        <!-- <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8395047" data-id="8395047" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-314244f elementor-widget elementor-widget-spacer" data-id="314244f" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-577d087" data-id="577d087" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-50986a9 elementor-widget elementor-widget-spacer" data-id="50986a9" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-799075f elementor-invisible elementor-widget elementor-widget-image" data-id="799075f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img width="150" height="150" src="./assets/content/uploads/2022/02/cbd-1-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="./assets/content/uploads/2022/02/cbd-1-150x150.png 150w, ./assets/content/uploads/2022/02/cbd-1-85x85.png 85w, ./assets/content/uploads/2022/02/cbd-1-80x80.png 80w" sizes="(max-width: 150px) 100vw, 150px" />
                    </div>
                </div>
                <div class="elementor-element elementor-element-7450db7 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="7450db7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomInRight&quot;}" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <h4 style="text-align: right;"><span style="color: #ff0000;"><span style="color: #c9872e;">كلمة</span><span style="color: #ffffff;"> رئيس مجلس الادارة</span></span></h4>
                        <h5 style="text-align: right;"><span style="color: #c9872e;">موسي بن سيف الحسني</span></h5>
                    </div>
                </div>
                <div class="elementor-element elementor-element-6d224f6 elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="6d224f6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-c285b3b elementor-invisible elementor-widget elementor-widget-text-editor" data-id="c285b3b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p style="text-align: right;">نسعى دائما لتقديم أحدث وسائل التكنولوجيا الحديثة المتطورة في جميع خدماتنا؛ إيمانًا منا بدور التكنولوجيا في تسهيل حياة الفرد والمجتمع.</p>
                        <p style="text-align: right;">كما نهدف إلى تطبيق جميع معايير الجودة والسلامة؛ لتقديم خدمات تُضاهي المستوى العالمي بتكاليف ملائمة للجميع.</p>
                        <p style="text-align: right;">نوفرأيضًا بيئة داعم وهادئة لجميع مقدمي الخدمات والموظفين؛ لضمان جودة الخدمات المقدمة.</p>
                        <p style="text-align: right;">كما نعمل على التطوير المهني لجميع موظفي الشركة؛ لرفع كفاءة أدائهم باستمرار وقدرتهم على العمل والإنتاج. </p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</section>