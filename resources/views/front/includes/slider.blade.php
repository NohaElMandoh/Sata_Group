<div class="mfn-main-slider mfn-rev-slider">
    <!-- START Cyber Carousel1 REVOLUTION SLIDER 6.5.15 -->
    <p class="rs-p-wp-fix"></p>
    <rs-module-wrap id="rev_slider_37_1_wrapper" data-source="gallery" style="visibility:hidden;background:#0c1725;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_37_1" class="rs-respect-topbar" style="" data-version="6.5.15">
            <rs-slides>
                @foreach($sliders as $slide)
                @if($slide->vedio != null)
                <rs-slide style="position: absolute;" data-key="rs-751{{$loop->iteration}}" data-title="Slide" data-thumb="{{Voyager::image($slide->logo)}}" data-duration="8000ms" data-in="o:0;" data-out="a:false;" data-p1="ساتا جروب">
                    <img src="{{ asset('front/assets/content/plugins/revslider/public/assets/assets/dummy.png')}}" alt="" title="3_82.jpeg" width="1280" height="720" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{Voyager::image($slide->background)}}" data-no-retina>
                    <rs-bgvideo data-video="w:100%;h:100%;nse:false;l:true;ptimer:false;vfc:true;" data-mp4="{{asset('storage/'. $slide->vedio)}}"></rs-bgvideo>

                    <rs-zone id="rrzm_82" class="rev_row_zone_middle" style="z-index: 12;">
                        <rs-row id="slider-37-slide-82-layer-0" data-type="row" data-xy="xo:50px;yo:50px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-margin="t:200;b:200;" data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:8000;" style="z-index:1;">
                            <rs-column id="slider-37-slide-82-layer-{{$loop->iteration}}" data-type="column" data-xy="xo:50px;yo:50px;" data-text="l:25;" data-rsp_o="off" data-rsp_bd="off" data-column="w:60%;a:bottom;" data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:8000;" style="z-index:2;width:100%;">
                            </rs-column>
                            <rs-column id="slider-37-slide-82-layer-{{$loop->iteration +1}}" data-type="column" data-xy="xo:50px;yo:50px;" data-rsp_o="off" data-rsp_bd="off" data-column="w:40%;" data-padding="r:100,100,40,40;l:0,0,40,40;" data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:8000;" style="z-index:3;width:100%;">
                            </rs-column></rs-row></rs-zone></rs-slide>
                @elseif($slide->image != null)
                <rs-slide style="position: absolute;" data-key="rs-751{{$loop->iteration}}" data-title="Slide" data-thumb="{{Voyager::image($slide->logo)}}" data-anim="ms:5000ms;" data-in="o:0;" data-out="a:false;" data-p1="ساتا" data-p2="hbhbh">
                    <img src="{{ asset('front/assets/content/plugins/revslider/public/assets/assets/dummy.png')}}" alt="" title="sata food website" width="1920" height="1080" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{Voyager::image($slide->image)}}" data-panzoom="d:10000;ss:120%;se:100%;" data-no-retina>


                </rs-slide>
                @endif
                @endforeach


                <rs-slide style="position: absolute;" data-key="rs-8344" data-title="Slide" data-in="o:0;" data-out="a:false;">
                    <img src="{{ asset('front/assets/content/plugins/revslider/public/assets/assets/dummy.png')}}" alt="Slide" title="مجموعة ساتا" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="{{ asset('front/assets/content/plugins/revslider/public/assets/assets/transparent.png')}}" data-no-retina>
                </rs-slide>
            </rs-slides>
        </rs-module>
        <script>
            setREVStartSize({
                c: 'rev_slider_37_1',
                rl: [1240, 1024, 778, 480],
                el: [900, 700, 868, 500],
                gw: [1240, 1024, 778, 480],
                gh: [900, 700, 868, 300],
                type: 'carousel',
                justify: '',
                layout: 'fullwidth',
                mh: "0"
            });
            if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules["revslider371"] !== undefined) {
                window.RS_MODULES.modules["revslider371"].once = false;
                window.revapi37 = undefined;
                if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
            }
        </script>
    </rs-module-wrap>
    <!-- END REVOLUTION SLIDER -->
</div>