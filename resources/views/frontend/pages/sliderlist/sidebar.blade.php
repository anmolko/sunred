<aside class="widget-area left-widget-area">
    <div id="nav_menu-3" class="widget widget_nav_menu">
        <h3 class="widget-title">All Slider Lists</h3>
        <div class="menu-services-sidebar-container">
            @if(!empty($slider_lists))

            <ul id="menu-services-sidebar" class="menu">
                @foreach(@$slider_lists as $slider)
                    <li id="menu-item-9676" class="menu-item menu-item-type-post_type menu-item-object-berater-services @if(Request::url() === url('/slider-list/'.$slider->subheading)) current-menu-item @endif menu-item-9676"><a href="{{url('/slider-list/'.$slider->subheading)}}"  @if(Request::url() === url('/slider-list/'.$slider->subheading)) aria-current="page" @endif >{{ucwords(@$slider->list_header)}}</a></li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
    
</aside>