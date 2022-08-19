<aside class="sidebar-widget widget-area">
    <div id="nav_menu-3" class="widget widget_nav_menu">
    <h3 class="widget-title">Our Services</h3>
    <div class="menu-services-menu-container">
        <ul id="menu-services-menu" class="menu">
        
        @if(!empty($latestServices))
            @foreach($latestServices as $index => $latest)
            <li
                id="menu-item-13698"
                class="menu-item menu-item-type-post_type menu-item-object-cea-service @if(Request::url() === url('/service/'.$latest->slug)) current-menu-item @endif menu-item-13698">
                <a href="{{route('service.single',$latest->slug)}}">{{ucwords(@$latest->title)}}</a>
            </li>
            @endforeach
        @endif
        </ul>
    </div>
    </div>
    <div
    id="corpkit_latest_post_widget-4"
    class="widget corpkit_latest_post_widget"
    >
    <h3 class="widget-title">Latest Posts</h3>
    <div class="widg-content">
        <ul class="side-newsfeed">
        @if(!empty($latestPosts))
            @foreach($latestPosts as $index => $latest)
            <li>
            <div class="side-item">
                <div class="side-image">
                <a
                    href="{{route('blog.single',@$latest->slug)}}"
                    rel="bookmark"
                    ><img
                    width="80"
                    height="80"
                    src="<?php if(@$latest->image){?>{{asset('/images/blog/thumb/thumb_'.@$latest->image)}}<?php }?>"
                    class="img-responsive wp-post-image"
                    alt=""
                    loading="lazy"
                 
                    sizes="(max-width: 80px) 100vw, 80px"
                /></a>
                </div>
                <div class="side-item-text">
                <a
                    class="themeh-color"
                    href="{{route('blog.single',@$latest->slug)}}">{{ucwords(@$latest->title)}}</a
                >
                <div class="comments-wrap">
                    <div class="meta-left">
                    <span class="">{{date('M j, Y',strtotime(@$latest->created_at))}}</span>
                    </div>
                </div>
                </div>
            </div>
            </li>
            @endforeach
        @endif
        </ul>
    </div>
    </div>
    
   
</aside>