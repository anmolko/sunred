<aside class="widget-area right-widget-area">
    <section id="search-1" class="widget widget_search">
        <form
        method="get"
        class="search-form"
        id="searchform" action="{{route('searchBlog')}}"
        >
        <div class="input-group">
            <input
            class="form-control"
            id="s" name="s" type="text" placeholder="Enter Keyword" oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required
            />
            <span class="input-group-btn">
            <button class="btn btn-secondary" type="submit">
                <i class="ti-arrow-right"></i>
            </button>
            </span>
        </div>
        </form>
    </section>
    <section
        id="corpkit_latest_post_widget-3"
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
    </section>
    <section id="categories-2" class="widget widget_categories">
        <h3 class="widget-title">Categories</h3>
        <ul>
    
        @if(!empty($bcategories))
            @foreach(@$bcategories as $bcategory)
            <li class="cat-item cat-item-16"><a class="@if(Request::url() === url('/blog/categories/'.$bcategory->slug)) active @endif"
                    href="{{url('/blog/categories/'.$bcategory->slug)}}">{{ucwords(@$bcategory->name)}}</a></li>
            @endforeach
        @endif
        </ul>

        
    </section>
    
</aside>