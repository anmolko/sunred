@extends('frontend.layouts.seo_master')
@section('css')
    <style>
           
    .custom-editor .media{
        display: block;
    }

    .custom-editor{
        font-size: 1.1875rem;
    }
    .canosoft-listing ul,.canosoft-listing ol {
        padding: 0;
        margin-left: 15px;
    }
    .single-post  .elementor-top-section {
        padding: 0;
    }
    </style>
@endsection
@section('seo')
    <title>{{ucfirst(@$singleBlog->title)}} | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Sunred @endif</title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleBlog->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleBlog->meta_tags)}}' />
    <meta property='article:published_time' content='<?php if(@$singleBlog->updated_at !=''){?>{{@$singleBlog->updated_at}} <?php }else {?> {{@$singleBlog->created_at}} <?php }?>' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleBlog->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleBlog->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Sunred @endif" />
    <meta property="og:image" content="<?php if(@$singleBlog->image){?>{{asset('/images/blog/'.@$singleBlog->image)}}<?php }?>" />
    <meta property="og:image:url" content="<?php if(@$singleBlog->image){?>{{asset('/images/blog/'.@$singleBlog->image)}}<?php }?>" />
    <meta property="og:image:size" content="300" />
@endsection
@section('content')

<div class="corpkit-content-wrapper">
        <div class="corpkit-content corpkit-single-post">
          <header id="page-title" class="page-title-wrap">
            <div class="page-title-wrap-inner" data-property="no-video">
              <span class="page-title-overlay"></span>
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="page-title-inner">
                      <div class="pull-left">
                        <h1 class="page-title">
                        {{ @$singleBlog->title }}
                        </h1>
                        <div id="breadcrumb" class="breadcrumb">
                          <a href="/">Home</a>
                          <a href="{{url('/blog')}}">Blog</a>
                          <a href="{{route('blog.category',$singleBlog->category->slug)}}">{{ucwords($singleBlog->category->name)}}</a>
                          <span class="current"
                            >{{ @$singleBlog->title }}</span
                          >
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
                    <main id="main" class="site-main single-post-template">
                      <article
                        id="post-5926"
                        class="post-5926 post type-post status-publish format-standard has-post-thumbnail hentry category-business category-corporate tag-corporate tag-digital tag-html tag-marketing"
                      >
                        <div class="article-inner post-items">
                          <div class="post-format-wrap">
                            <div class="post-thumb-wrap">
                              <img
                                width="1280"
                                height="853"
                                src="{{ asset('/images/blog/'.@$singleBlog->image) }}"
                                class="img-fluid wp-post-image"
                                alt=""
                                loading="lazy"
                                srcset="
                                {{ asset('/images/blog/'.@$singleBlog->image) }}         1280w,
                                {{ asset('/images/blog/'.@$singleBlog->image) }}  768w,
                                {{ asset('/images/blog/'.@$singleBlog->image) }}  600w
                                "
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
                                    ><a href="#"
                                      >{{date('M j, Y',strtotime(@$singleBlog->created_at))}}</a
                                    >
                                  </div>
                                </li>
                                
                                <li class="nav-item">
                                  <div class="post-category">
                                    <i class="before-icon ti-folder"></i
                                    ><a href="{{route('blog.category',$singleBlog->category->slug)}}">{{ucwords($singleBlog->category->name)}}</a
                                    >
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="entry-content">
                            <div
                              data-elementor-type="wp-post"
                              data-elementor-id="5926"
                              class="elementor elementor-5926"
                            >
                              <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-9fdbd71 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="9fdbd71"
                                data-element_type="section"
                              >
                                <div
                                  class="elementor-container elementor-column-gap-default"
                                >
                                  <div
                                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4b8df52"
                                    data-id="4b8df52"
                                    data-element_type="column"
                                  >
                                    <div
                                      class="elementor-widget-wrap elementor-element-populated"
                                    >
                                      <div
                                        class="elementor-element elementor-element-899d6bd elementor-widget elementor-widget-text-editor"
                                        data-id="899d6bd"
                                        data-element_type="widget"
                                        data-widget_type="text-editor.default"
                                      >
                                        <div class="elementor-widget-container">
                                          <style>
                                            /*! elementor - v3.6.8 - 27-07-2022 */
                                            .elementor-widget-text-editor.elementor-drop-cap-view-stacked
                                              .elementor-drop-cap {
                                              background-color: #818a91;
                                              color: #fff;
                                            }
                                            .elementor-widget-text-editor.elementor-drop-cap-view-framed
                                              .elementor-drop-cap {
                                              color: #818a91;
                                              border: 3px solid;
                                              background-color: transparent;
                                            }
                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default)
                                              .elementor-drop-cap {
                                              margin-top: 8px;
                                            }
                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default)
                                              .elementor-drop-cap-letter {
                                              width: 1em;
                                              height: 1em;
                                            }
                                            .elementor-widget-text-editor
                                              .elementor-drop-cap {
                                              float: left;
                                              text-align: center;
                                              line-height: 1;
                                              font-size: 50px;
                                            }
                                            .elementor-widget-text-editor
                                              .elementor-drop-cap-letter {
                                              display: inline-block;
                                            }
                                          </style>
                                          {!! $singleBlog->description !!}
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </section>
                            
                            </div>
                          </div>
                          <footer class="entry-footer">
                            <div class="entry-meta bottom-meta clearfix">
                              <div class="post-meta pull-left">
                                <ul class="nav">
                                  <li class="nav-item">
                                    <div class="post-tags">
                                     <a href="#" class="share-ico" onclick='fbShare("{{route('blog.single',$singleBlog->slug)}}")'><span class="ti-facebook"></span></a>
                                      <a href="#" class="share-ico" onclick='twitShare("{{route('blog.single',$singleBlog->slug)}}","{{ $singleBlog->title }}")' ><span class="ti-twitter"></span></a>
                                         <a href="#" class="share-ico"  onclick='whatsappShare("{{route('blog.single',$singleBlog->slug)}}","{{ $singleBlog->title }}")' ><span class="ti-themify-favicon"></span></a>

                                    </div>
                                  </li>
                                </ul>
                              
                              </div>
                             
                            </div>
                          </footer>
                        </div>
                        <!-- .article-inner -->
                      </article>
                      <!-- #post-## -->
                    </main>
                    <!-- #main -->

                    <!-- Post Author Wrap -->

                
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

@section('js')
<script>
function fbShare(url) {
  window.open("https://www.facebook.com/sharer/sharer.php?u=" + url, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
}
function twitShare(url, title) {
    window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(title) + "+" + url + "", "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
}
function whatsappShare(url, title) {
    message = title + " " + url;
    window.open("https://api.whatsapp.com/send?text=" + message);
}
</script>
@endsection