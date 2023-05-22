<footer id="Footer" class="clearfix full-width">


    <div class="widgets_wrapper ">
        <div class="container">
            <div class="column one-fourth">
                <aside id="custom_html-2" class="widget_text widget widget_custom_html">
                    <div class="textwidget custom-html-widget">
                        <p ><img class="alignnone wp-image-71" src="{{Voyager::image($website->footer_logo)}}" alt="" width="120" height="36" /></p>
                        <span class="p1" style="color: #ffffff;">{!! html_entity_decode($website->footer_dec1) !!}</span>
                        <p ><span style="color: #ffffff;"><strong>{{$website->email}}</strong></span></p>
                    </div>
                </aside>
            </div>
            <div class="column one-fourth">
                <aside id="custom_html-4" class="widget_text widget widget_custom_html">
                    <h4>@lang('messages.be_connect')</h4>
                    <div class="textwidget custom-html-widget">
                        <a href="{{$website->facebook_link}}" target="_blank" rel="{{$website->facebook_link}}/ noopener">
                            <img class="alignnone wp-image-268" src="{{ asset('front/assets/content/uploads/2022/02/4-3.png')}}" alt="" width="50" height="50" /></a> 
                        <a href="{{$website->instagrame_link}}" target="_blank" rel="{{$website->instagrame_link}} noopener">
                            <img class="alignnone wp-image-272" src="{{ asset('front/assets/content/uploads/2022/02/3-3.png')}}" alt="" width="50" height="50" /></a>
                         <a href="{{$website->linkedin_link}}" target="_blank" rel="{{$website->linkedin_link}} noopener">
                            <img class="alignnone wp-image-270" src="{{ asset('front/assets/content/uploads/2022/02/1-3.png')}}" alt="" width="50" height="50" /></a> 
                            <a href="{{$website->twitter_link}}" target="_blank" rel="{{$website->twitter_link}} noopener">
                                <img class="alignnone wp-image-274" src="{{ asset('front/assets/content/uploads/2022/02/2-3.png')}}" alt="" width="50" height="50" /></a></div>
                </aside>
                <aside id="custom_html-6" class="widget_text widget widget_custom_html">
                    <div class="textwidget custom-html-widget">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-title  section-title-white mb-65 wow fadeInUp">
                                    <span class="p1" style="color: #ffffff;">{!! html_entity_decode($website->footer_dec2) !!}</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="column one-fourth">
                <aside id="nav_menu-2" class="widget widget_nav_menu">
                    <h4>@lang('messages.useful_links')</h4>
                    <div class="menu-arfooter-container">
                        <ul id="menu-arfooter" class="menu">
        
                            <li id="menu-item-278" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-278"><a href="{{route('about_us')}}">@lang('messages.About Us')</a></li>
                            <li id="menu-item-458" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458"><a href="#">@lang('messages.careers')</a></li>
                            <li id="menu-item-459" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-459"><a href="{{route('privacy')}}">@lang('messages.Privacy_policy') </a></li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="column one-fourth">
                <aside id="custom_html-7" class="widget_text widget widget_custom_html">
                    <div class="textwidget custom-html-widget"><img class="alignnone size-medium wp-image-1205" src="{{Voyager::image($website->footer_image)}}" alt="" width="300" height="300" /></div>
                </aside>
            </div>
        </div>
    </div>

    <div class="footer_copy">
        <div class="container">
            <div class="column one">

                <a id="back_to_top" class="footer_button" href=""><i class="icon-up-open-big"></i></a>
                <div class="copyright">
                    <!-- <p style="text-align: center;"><span style="color: #ebebeb;">All Copyrights reserverd for</span> <span style="color: #ffffff;"><strong>SATA Technology Group</strong></span> <span style="color: #ebebeb;">2022 | جميع الحقوق محفوظه</span> <span style="color: #ffffff;"><strong>لمجموعه ساتا للتكنولوجيا ا</strong></span> <span style="color: #ebebeb;">٢٠٢٢</span></p>
                    <p style="text-align: center;"><span style="color: #ebebeb;">Website Development And Design By</span> <span style="color: #ffffff;"><a style="color: #ffffff;" href="https://codinga.me"><strong>Codinga</strong></a></span></p>
                 -->
                 {!! html_entity_decode($website->footer_copyrights) !!}
                    
                </div>

                <ul class="social"></ul>
            </div>
        </div>
    </div>



</footer>