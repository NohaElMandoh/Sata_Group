@php
$items = menu('header','_json');
@endphp
<div id="Top_bar" class="loading">

    <div class="container">
        <div class="column one">

            <div class="top_bar_left clearfix">

                <div class="logo"><a id="logo" href="{{route('home')}}" title="Sata Group" data-height="73" data-padding="30">
                        <img class="logo-main scale-with-grid " src="{{Voyager::image($website->logo)}}" data-retina="{{Voyager::image($website->logo)}}" data-height="1000" alt="sata new 4-2" data-no-retina /><img class="logo-sticky scale-with-grid " src="{{Voyager::image($website->logo)}}" data-retina="{{Voyager::image($website->logo)}}" data-height="1000" alt="sata new 4-2" data-no-retina />
                        <img class="logo-mobile scale-with-grid " src="{{Voyager::image($website->logo_mobile)}}" data-retina="{{Voyager::image($website->logo_mobile)}}" data-height="300" alt="sata1" data-no-retina />
                        <img class="logo-mobile-sticky scale-with-grid " src="{{Voyager::image($website->logo_mobile)}}" data-retina="{{Voyager::image($website->logo_mobile)}}" data-height="300" alt="sata1" data-no-retina /></a></div>
                <div class="menu_wrapper">
                    <nav id="menu">
                        <ul id="menu-arheader" class="menu menu-main">

                            @foreach($items as $item)

                            @if(count($item->children)>0)
                            <li id="menu-item-283" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                <a href="{{ $item->link() }}"><span>@lang('messages.'.$item->title)</span></a>

                                <ul class="sub-menu">
                                    @foreach($item->children as $child)
                                    <li id="menu-item-462" class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a href="{{ $child->link() }}">
                                            <span>@lang('messages.'.$child->title)</span>
                                        </a>
                                    </li>

                                    @endforeach
                                </ul>
                            </li>
                            @else

                            @php
                            $item_link= url("/").$item->link();


                            $link_array = explode('/',$item_link);
                            $page = end($link_array);

                            @endphp
                            <li id="menu-item-{{$loop->iteration}}" class="menu-item menu-item-type-post_type menu-item-object-page 
                            {{ (Route::currentRouteName()== $page ) ? 'current_page_item' : '' }}  page_item page-item-2 ">
                                <a href=" {{url('/'). $item->link() }} "><span> @lang('messages.'.$item->title)</span></a>
                                @if($item->title == 'About Us' )
                                <ul class="sub-menu">
                                    <li id="menu-item-{{$loop->iteration}}" class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a href="{{route('about_us')}}">
                                            <span>@lang('messages.'.$item->title)</span>
                                        </a>

                                        @foreach($letters as $letter)
                                        @if($letter->appear_menu ==1)
                                    <li id="menu-item-{{$loop->iteration}}" class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a href="{{route('letter',[$letter->id])}}">
                                            <span>@lang('messages.speech')</span> <span>{{$letter->position}}</span>
                                        </a>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>

                                @endif

                                @if($item->title == 'Projects' )
                                <ul class="sub-menu">
                                    <li id="menu-item-{{$loop->iteration}}" class="menu-item menu-item-type-post_type menu-item-object-page">


                                        @foreach($projects as $project)

                                    <li id="menu-item-{{$loop->iteration}}" class="menu-item menu-item-type-post_type menu-item-object-page">
                                        <a href="{{route('project',[$project->id])}}">
                                            <span>{{$project->title}}</span>
                                        </a>
                                    </li>

                                    @endforeach
                                </ul>

                                @endif
                            </li>
                            @endif
                            @endforeach
                   
                            <li id="menu-item-654" class="pll-parent-menu-item menu-item menu-item-type-custom menu-item-object-custom  menu-item-has-children">
                                <a ><span>
                                        <img src="@if ( Config::get('app.locale') == 'ar' ) data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAA0UlEQVR4AWN4y8DwCht
                                    6jISuIxBY7kt1DQR9Li6BoA9ZWUD0KSEBiD6GhwPROx8fIEJogEkg5N7Z2UHQG11dCIJqALJ+LF36rb8fiL52dEAQyIg9ZUAS2UIgF6ThLwb4+fPHh0cTPz2s+vr1K5D9FQk8f/4
                                    ciwag0pe32oAkSA8qePr0KQOm8RANQIRdg5aW1sKFCztgoKamFogenE0GopycXAhKTEwCIqA4AwQAOY5gYAIGQCMUwIAfFQDFERqAKAgGHGHABAa0wEBdXZ2BDAAA0TQJcCf938gA
                                    AAAASUVORK5CYII=  @else data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAL
                                        CAMAAABBPP0LAAAAt1BMVEWSmb66z+18msdig8La3u+tYX9IaLc7W7BagbmcUW+kqMr/q6n+//+hsNv/lIr/jIGMnNLJyOP9/fyQttT/wb3/////aWn+YWF5kNT0oqz0i
                                        4ueqtIZNJjhvt/8gn//WVr/6+rN1+o9RKZwgcMPJpX/VFT9UEn+RUX8Ozv2Ly+FGzdYZrfU1e/8LS/lQkG/mbVUX60AE231hHtcdMb0mp3qYFTFwNu3w9prcqSURGNDaaIUMX5F
                                        NW5wYt7AAAAAjklEQVR4AR3HNUJEMQCGwf+L8RR36ajR+1+CEuvRdd8kK9MNAiRQNgJmVDAt1yM6kSzYVJUsPNssAk5N7ZFKjVNFAY4co6TAOI+kyQm+LFUEBEKKzuWUNB7rSH/r
                                        SnvOulOGk+QlXTBqMIrfYX4tSe2nP3iRa/KNK7uTmWJ5a9+erZ3d+18od4ytiZdvZyuKWy8o3UpTVAAAAABJRU5ErkJggg== @endif " alt="lang" width="16" height="11" style="width: 16px; height: 11px;" />
                                        <span style="margin-right:0.3em;">@if ( Config::get('app.locale') == 'ar' ) @lang('messages.AR') @else @lang('messages.EN') @endif</span></span></a>
                                <ul class="sub-menu">
                                    <li id="menu-item-654-ar" class="lang-item lang-item-13 lang-item-ar current-lang lang-item-first menu-item menu-item-type-custom 
                                    menu-item-object-custom current_page_item menu-item-home"><a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}"><span>
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAA0UlEQVR4AWN4y8DwCht6jISuIxBY7kt1DQR9Li6
                                        BoA9ZWUD0KSEBiD6GhwPROx8fIEJogEkg5N7Z2UHQG11dCIJqALJ+LF36rb8fiL52dEAQyIg9ZUAS2UIgF6ThLwb4+fPHh0cTPz2s+vr1K5D9FQk8f/4ciwag0p
                                        e32oAkSA8qePr0KQOm8RANQIRdg5aW1sKFCztgoKamFogenE0GopycXAhKTEwCIqA4AwQAOY5gYAIGQCMUwIAfFQDFERqAKAgGHGHABAa0wEBdXZ2BDAAA0TQJcCf
                                        938gAAAAASUVORK5CYII=" alt="العربية" width="16" height="11" style="width: 16px; height: 11px;" /><span style="margin-right:0.3em;">@lang('messages.AR')</span></span></a></li>
                                    <li id="menu-item-654-en" class="lang-item lang-item-15 lang-item-en menu-item menu-item-type-custom menu-item-object-custom">
                                        <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"><span>

                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAL
                                        CAMAAABBPP0LAAAAt1BMVEWSmb66z+18msdig8La3u+tYX9IaLc7W7BagbmcUW+kqMr/q6n+//+hsNv/lIr/jIGMnNLJyOP9/fyQttT/wb3/////aWn+YWF5kNT0oqz0i
                                        4ueqtIZNJjhvt/8gn//WVr/6+rN1+o9RKZwgcMPJpX/VFT9UEn+RUX8Ozv2Ly+FGzdYZrfU1e/8LS/lQkG/mbVUX60AE231hHtcdMb0mp3qYFTFwNu3w9prcqSURGNDaaIUMX5F
                                        NW5wYt7AAAAAjklEQVR4AR3HNUJEMQCGwf+L8RR36ajR+1+CEuvRdd8kK9MNAiRQNgJmVDAt1yM6kSzYVJUsPNssAk5N7ZFKjVNFAY4co6TAOI+kyQm+LFUEBEKKzuWUNB7rSH/r
                                        SnvOulOGk+QlXTBqMIrfYX4tSe2nP3iRa/KNK7uTmWJ5a9+erZ3d+18od4ytiZdvZyuKWy8o3UpTVAAAAABJRU5ErkJggg==" alt="English" width="16" height="11" style="width: 16px; height: 11px;" /><span style="margin-right:0.3em;">@lang('messages.EN')</span></span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav><a class="responsive-menu-toggle " href="#" aria-label="Mobile menu"><i class="icon-menu-fine" aria-hidden="true"></i></a>
                </div>

                <div class="secondary_menu_wrapper">
                </div>

                <div class="banner_wrapper">
                </div>

            </div>


            <div class="search_wrapper" style="display: none;">

                <form method="get" id="searchform" action="https://satatechnologygroup.com/">


                    <svg class="icon_search" width="26" viewBox="0 0 26 26">
                        <defs>
                            <style>
                                .path {
                                    fill: none;
                                    stroke: #000;
                                    stroke-miterlimit: 10;
                                    stroke-width: 1.5px;
                                }
                            </style>
                        </defs>
                        <circle class="path" cx="11.35" cy="11.35" r="6"></circle>
                        <line class="path" x1="15.59" y1="15.59" x2="20.65" y2="20.65"></line>
                    </svg>
                    <span class="mfn-close-icon icon_close"><span class="icon">✕</span></span>

                    <input type="text" class="field" name="s" autocomplete="off" placeholder="Enter your search" />
                    <input type="submit" class="display-none" value="" />

                </form>
            </div>

        </div>
    </div>
</div>