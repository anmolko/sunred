@extends('frontend.layouts.master')
@section('title') Search | Blog @endsection

@section('content')



<div class="corpkit-content-wrapper">
        <div class="corpkit-content corpkit-blog">
          <header id="page-title" class="page-title-wrap">
            <div class="page-title-wrap-inner" data-property="no-video">
              <span class="page-title-overlay"></span>
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="page-title-inner">
                      <div class="pull-left">
                        <h1 class="page-title">Search Result For : <strong>{{$query}}</strong></h1>
                        <div id="breadcrumb" class="breadcrumb">
                            <a href="/">Home</a>
                            <a href="{{url('/blog')}}">Blog</a>
                          <span class="current">Search</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- .page-title-wrap-inner -->
          </header>

          <div class="corpkit-content-inner">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div id="primary" class="content-area">
                    <main
                      id="main"
                      class="site-main blog-template grid-layout"
                      data-cols="2"
                      data-gutter="40"
                    >
                      <div
                        class="isotope"
                        data-cols="2"
                        data-gutter="40"
                        data-infinite=""
                      >
                        @if(count($allPosts) > 0)
                            @foreach($allPosts as $post)
                            
                            <article
                            id="post-5927"
                            class="post-5927 post type-post status-publish format-standard has-post-thumbnail hentry category-agency category-business tag-agency tag-corporate tag-digital">
                            <div class="article-inner post-items">
                                <div class="post-format-wrap">
                                <div class="post-thumb-wrap">
                                    <img
                                    width="1280"
                                    height="853"
                                    src="<?php if(@$post->image){?>{{asset('/images/blog/'.@$post->image)}}<?php }?>" alt="{{@$post->slug}}""
                                    class="img-fluid wp-post-image"
                                    loading="lazy"
                                  
                                    sizes="(max-width: 1280px) 100vw, 1280px"
                                    />
                                </div>
                                <!-- .post-thumb-wrap -->
                                </div>
                                <div class="entry-meta top-meta clearfix">
                                <div class="post-meta pull-left">
                                    <ul class="nav">
                                    <li class="nav-item">
                                        <div class="post-date">
                                        <i class="before-icon ti-time"></i
                                        ><a href="{{route('blog.single',$post->slug)}}"
                                            >{{date('M j, Y',strtotime(@$post->created_at))}}</a
                                        >
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="post-author">
                                        <a href="{{url('/blog/categories/'.@$post->category->slug)}}"
                                            ><span class="author-img"
                                            >| </span
                                            ><span class="author-name"
                                            >{{ucwords(@$post->category->name)}}</span></a>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                                </div>
                                <header class="entry-header">
                                <h3 class="entry-title">
                                    <a
                                    href="{{route('blog.single',$post->slug)}}"
                                    rel="bookmark"
                                    >{{ucwords($post->title)}}</a
                                    >
                                </h3>
                                </header>
                                <footer class="entry-footer">
                                <div class="entry-meta bottom-meta clearfix">
                                    <div class="post-meta pull-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                        <div class="post-more">
                                            <a
                                            class="read-more"
                                            href="{{route('blog.single',$post->slug)}}"
                                            >Read More</a
                                            >
                                        </div>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                                </footer>
                            </div>
                            </article>
                            @endforeach
                        @else
                        <section class="no-results not-found">
                            <header class="page-header">
                                <h2 class="page-title">Nothing Found</h2>
                            </header>
                            <div class="page-content">
                                <p>It seems we can not find what you are looking for.</p>
                            
                            </div>
                        </section>
                        @endif

                        <!-- #post-## -->
                      </div>
                      <!-- .isotope -->
                    </main>
                    <!-- #main -->
                    <div class="post-pagination-wrap">
                        {{ $allPosts->links('vendor.pagination.default') }}
                      
                    </div>
                  </div>
                  <!-- #primary -->
                </div>
                <!-- main col -->

                <div class="col-lg-4">
                    @include('frontend.pages.blogs.sidebar')            
                
                </div>
                <!-- sidebar col -->
              </div>
              <!-- row -->
            </div>
            <!-- .container -->
          </div>
          <!-- .corpkit-content-inner -->
        </div>
        <!-- .corpkit-content -->
      </div>




@endsection