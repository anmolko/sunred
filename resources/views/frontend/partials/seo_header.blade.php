<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Sunred"/>	
		<link rel="canonical" href="https://sams.com.my/" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />

        @yield('seo')

  	
		<!-- FAVICON AND TOUCH ICONS -->

		<link rel="shortcut icon" type="image/x-icon" href="<?php if(@$setting_data->favicon){?>{{asset('/images/settings/'.@$setting_data->favicon)}}<?php }?>">

		<link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/apple-touch-icon.png')}}">
		<link rel="manifest" href="{{asset('images/site.webmanifest')}}">



        <link rel='stylesheet' id='bootstrap-css'  href="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/css/bootstrap.min62d0.css?ver=4.5.3')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='owl-carousel-css'  href="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/css/owl.carousel.min531b.css?ver=2.3.4')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='image-hover-css'  href="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/css/image-hover.min5152.css?ver=1.0')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='fontawesome-css'  href="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/css/font-awesome1849.css?ver=4.7.0')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='themify-icons-css'  href="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/css/themify-icons5152.css?ver=1.0')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='cea-style-css'  href="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/css/style5152.css?ver=1.0')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='cea-style-inline-css'  href="{{asset('assets/frontend/wp-content/inline-style.css')}}" type='text/css' media='all' />
        
        <link rel='stylesheet' id='cea-shortcode-style-css'  href="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/css/shortcode-styles5152.css?ver=1.0')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='wp-block-library-css'  href="{{asset('assets/frontend/wp-includes/css/dist/block-library/style.min37ad.css?ver=6.0.1')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='wp-block-library-theme-inline'  href="{{asset('assets/frontend/wp-content/library-theme-inline.css')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='global-styles-inline-css'  href="{{asset('assets/frontend/wp-content/global-styles-inline.css')}}" type='text/css' media='all' />
        
        <link rel='stylesheet' id='animate-css'  href="{{asset('assets/frontend/wp-content/themes/corpkit/assets/css/animate.min9d52.css?ver=3.5.1')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='shortcode-css'  href="{{asset('assets/frontend/wp-content/themes/corpkit/assets/css/elementor-shortcode5152.css?ver=1.0')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-frontend-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/css/frontend-lite.mina4f3.css?ver=3.6.8')}}" type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-frontend-inline-css'  href="{{asset('assets/frontend/wp-content/elementor-frontend-inline.css')}}" type='text/css' media='all' />
        

        
    <link rel='stylesheet' id='corpkit-style-css'  href="{{asset('assets/frontend/wp-content/themes/corpkit/style5152.css?ver=1.0')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='corpkit-style-inline-css'  href="{{asset('assets/frontend/wp-content/corpkit-style-inline.css')}}" type='text/css' media='all' />
    
    <link rel='stylesheet' id='corpkit-woo-style-css'  href="{{asset('assets/frontend/wp-content/themes/corpkit/assets/css/woo-styles5152.css?ver=1.0')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min7816.css?ver=5.15.0')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.mina4f3.css?ver=3.6.8')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.mina4f3.css?ver=3.6.8')}}" type='text/css' media='all' />

    <link rel='stylesheet' id='elementor-icons-shared-1-css'  href="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/css/themify-icons5152.css?ver=1.0')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-themify-css'  href="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/css/themify-icons5152.css?ver=1.0')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'  href="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3')}}" type='text/css' media='all' />
    <script type='text/javascript' src="{{asset('assets/frontend/wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0')}}" id='jquery-core-js'></script>
    <script type='text/javascript' src="{{asset('assets/frontend/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2')}}" id='jquery-migrate-js'></script>
    <link rel='stylesheet'   href="{{asset('assets/frontend/wp-content/style.css')}}" type='text/css' media='all' />

   
    <script>function setREVStartSize(e){
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw===0 || isNaN(pw) || (e.l=="fullwidth" || e.layout=="fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
                if(e.layout==="fullscreen" || e.l==="fullscreen")
                    newh = Math.max(e.mh,window.RSIH);
                else{
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
                    e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide>=pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide>=pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
                    var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
                    newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el!==null && el) el.style.height = newh+"px";
                el = document.getElementById(e.c+"_wrapper");
                if (el!==null && el) {
                    el.style.height = newh+"px";
                    el.style.display = "block";
                }
            } catch(e){
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };</script>

		 <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', '{{@$setting_data->google_analytics}}');
		</script>
        @yield('css')

	</head>

	
<body class="@if(request()->routeIs('blog.single')) single-post @endif @if(request()->routeIs('service.single')) cea-service-template-default single single-cea-service @endif page-template-default page   page-id-14666 wp-embed-responsive theme-corpkit  elementor-default elementor-kit-3 elementor-page elementor-page-14666">
   
   
    <div class="mobile-header">
      <div class="mobile-header-inner">
        <div class="sticky-outer">
          <div class="sticky-head">
            <div class="container">
              <ul class="mobile-header-items nav pull-left">
                <li class="nav-item">
                  <div class="nav-item-inner">
                    <a class="mobile-bar-toggle" href="#"
                      ><i class="ti-menu"></i
                    ></a>
                  </div>
                </li>
              </ul>
              <ul class="mobile-header-items nav pull-right">
                <li class="nav-item">
                  <div class="nav-item-inner">
                    <div class="mobile-logo">
                      <a href="/" title="Sunred"
                        ><img
                          class="img-responsive"
                          src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php }?>"
                          alt="Sunred"
                          title="Sunred"
                      /></a>
                    </div>
                  </div>
                </li>
              </ul>
            
            </div>
            <!-- container -->
          </div>
        </div>
      </div>
    </div>
    <div class="mobile-bar animate-from-left">
      <a class="mobile-bar-toggle close" href="#"></a>
      <div class="mobile-bar-inner">
        <div class="container">
          <ul class="mobile-bar-items nav flex-column mobile-bar-top">
            <li class="nav-item">
              <div class="nav-item-inner">
                <div class="mobile-logo">
                  <a href="/" title="Sunred"
                    ><img
                      class="img-responsive"
                      src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php }?>"
                      alt="Sunred"
                      title="Sunred"
                  /></a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="mobile-bar-items nav flex-column mobile-bar-middle">
            <li class="nav-item">
              <div class="nav-item-inner">
                <div class="corpkit-mobile-main-menu">
                  <div class="menu-primary-menu-container">
                    <ul id="menu-primary-menu" class="corpkit-main-menu">

                        <li class="{{request()->is('/') ? 'current_page_item current-menu-item' : ''}} menu-item menu-item-type-post_type menu-item-object-page  nav-item menu-item-13970 ">
                                <a href="/" class="nav-link">Home</a></li>
                        @if(!empty($top_nav_data))
                            @foreach($top_nav_data as $nav)
                                @if(!empty($nav->children[0]))

                                    <li id="menu-item-176{{@$loop->index}}" class="{{request()->is(@$nav->slug)  ? 'current-menu-ancestor current_page_item current-menu-item current-menu-parent current_page_parent current_page_ancestor ' : ''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-6829  menu-item-has-children nav-item menu-item-9390 dropdown">
                                        <a href="#" class="nav-link dropdown-toggle">@if(@$nav->name == NULL) {{ucwords(@$nav->title)}} @else {{ucwords(@$nav->name)}} @endif </a>

                                        <ul role="menu"  class="dropdown-menu">

                                            @foreach($nav->children[0] as $childNav)
                                                @if($childNav->type == 'custom')

                                                    <li id="menu-item-743{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$childNav->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} @if(!empty($childNav->children[0])) menu-item-has-children dropdown @endif nav-item menu-item-11011">
                                                        <a href="/{{@$childNav->slug}}" class="nav-link" @if(@$childNav->target !== NULL) target="_blank" @endif >@if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                        @if(!empty($childNav->children[0]))
                                                            <ul role="menu" class="dropdown-menu">
                                                                @foreach($childNav->children[0] as $key => $lastchild)
                                                                    @if($lastchild->type == 'custom')
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                            <a href="/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                    @elseif($lastchild->type == 'post')
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('blog/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                            <a href="{{url('blog')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                    @elseif($lastchild->type == 'service')
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('service/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                            <a href="{{url('service')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                    @else
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                                <a href="{{url('/')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                            </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @elseif($childNav->type == 'post')
                                                    <li id="menu-item-743{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('blog/'.@$childNav->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  @if(!empty($childNav->children[0])) menu-item-has-children dropdown @endif nav-item menu-item-11011">
                                                        <a href="{{url('blog')}}/{{@$childNav->slug}}" class="nav-link" @if(@$childNav->target !== NULL) target="_blank" @endif>@if(@$childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                        @if(!empty($childNav->children[0]))
                                                            <ul role="menu" class="dropdown-menu">
                                                                @foreach($childNav->children[0] as $key => $lastchild)
                                                                    @if($lastchild->type == 'custom')
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                            <a href="/{{@$childNav->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                    @elseif($lastchild->type == 'service')
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('service/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                            <a href="{{url('service')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                    @elseif($lastchild->type == 'post')
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('blog/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                            <a href="{{url('blog')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                    @else
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                                <a href="{{url('/')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                            </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @elseif($childNav->type == 'service')
                                                    <li id="menu-item-743{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('service/'.@$childNav->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  @if(!empty($childNav->children[0])) menu-item-has-children dropdown @endif nav-item menu-item-11011">
                                                        <a href="{{url('service')}}/{{@$childNav->slug}}" class="nav-link" @if(@$childNav->target !== NULL) target="_blank" @endif>@if(@$childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                        @if(!empty($childNav->children[0]))
                                                            <ul role="menu" class="dropdown-menu">
                                                                @foreach($childNav->children[0] as $key => $lastchild)
                                                                    @if($lastchild->type == 'custom')
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                            <a href="/{{@$childNav->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                    @elseif($lastchild->type == 'service')
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('service/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                            <a href="{{url('service')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                    @elseif($lastchild->type == 'post')
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('blog/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                            <a href="{{url('blog')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                    @else
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                                <a href="{{url('/')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                            </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @else
                                                    <li id="menu-item-743{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$childNav->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  @if(!empty($childNav->children[0])) menu-item-has-children dropdown @endif nav-item menu-item-11011">
                                                        <a href="{{url('/')}}/{{@$childNav->slug}}" class="nav-link" @if(@$childNav->target !== NULL) target="_blank" @endif>@if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                        @if(!empty($childNav->children[0]))
                                                            <ul role="menu" class="dropdown-menu">
                                                                @foreach($childNav->children[0] as $key => $lastchild)
                                                                    @if($lastchild->type == 'custom')
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                            <a href="/{{@$childNav->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                    @elseif($lastchild->type == 'service')
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('service/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                            <a href="{{url('service')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                    @elseif($lastchild->type == 'post')
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('blog/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                            <a href="{{url('blog')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                    @else
                                                                        <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                                <a href="{{url('/')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                            </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        @endif

                                                    </li>
                                                @endif
                                            @endforeach

                                        </ul>
                                    </li>

                                @else
                                    @if($nav->type == 'custom')
                                        <li id="menu-item-176{{@$loop->index}}"  class="{{request()->is(@$nav->slug.'*') ? 'current_page_item current-menu-item' : ''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-6829   nav-item menu-item-9390 ">
                                            <a href="/{{$nav->slug}}" class="nav-link" @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                    @elseif($nav->type == 'service')
                                        <li id="menu-item-176{{@$loop->index}}"  class="{{request()->is('service/'.@$nav->slug.'*') ? 'current_page_item current-menu-item' : ''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-6829   nav-item menu-item-9390">
                                            <a href="{{url('service')}}/{{$nav->slug}}" class="nav-link">@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                    @elseif($nav->type == 'post')
                                        <li id="menu-item-176{{@$loop->index}}"  class="{{request()->is('blog/'.@$nav->slug.'*') ? 'current_page_item current-menu-item' : ''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-6829   nav-item menu-item-9390">
                                            <a href="{{url('blog')}}/{{$nav->slug}}" class="nav-link">@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                    @else
                                        <li id="menu-item-176{{@$loop->index}}"  class="{{request()->is(@$nav->slug.'*') ? 'current_page_item current-menu-item' : ''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-6829   nav-item menu-item-9390">
                                            <a href="{{url('/')}}/{{$nav->slug}}" class="nav-link">@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                    @endif
                                @endif
                            @endforeach
                        @endif

                    </ul>
                  </div>
                </div>
              </div>
            </li>
          </ul>
         
        </div>
        <!-- container -->
      </div>
    </div>

    <div id="page" class="corpkit-wrapper">
      <header class="corpkit-header header-absolute">
        <div class="header-inner">
          <div class="sticky-outer">
            <div class="sticky-head">
              <nav class="navbar clearfix">
                <div class="custom-container navbar-inner">
                  <ul class="navbar-items nav pull-left">
                    <li class="nav-item">
                      <div class="nav-item-inner">
                        <div class="main-logo">
                          <a href="/" title="Sunred"
                            ><img
                              class="custom-logo img-responsive"
                              src="<?php if(@$setting_data->logo_white){?>{{asset('/images/settings/'.@$setting_data->logo_white)}}<?php }?>"
                              alt="Sunred"
                              title="Sunred"
                          /></a>
                        </div>
                        <div class="sticky-logo">
                          <a href="/" title="Sunred"
                            ><img
                              class="custom-logo img-responsive"
                              src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php }?>"
                              alt="Sunred"
                              title="Sunred"
                          /></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="navbar-items nav pull-right">
                    <li class="nav-item">
                      <div class="nav-item-inner">
                        <ul
                          id="corpkit-main-menu"
                          class="nav corpkit-main-menu"
                        >
                     
                            <li class="{{request()->is('/') ? 'current_page_item current-menu-item' : ''}} menu-item menu-item-type-post_type menu-item-object-page  nav-item menu-item-13970 ">
                                <a href="/" class="nav-link">Home</a></li>
                                @if(!empty($top_nav_data))
                                    @foreach($top_nav_data as $nav)
                                        @if(!empty($nav->children[0]))

                                            <li id="menu-item-176{{@$loop->index}}" class="{{request()->is(@$nav->slug)  ? 'current-menu-ancestor current_page_item current-menu-item current-menu-parent current_page_parent current_page_ancestor ' : ''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-6829  menu-item-has-children nav-item menu-item-9390 dropdown">
                                                <a href="#" class="nav-link dropdown-toggle">@if(@$nav->name == NULL) {{ucwords(@$nav->title)}} @else {{ucwords(@$nav->name)}} @endif </a>

                                                <ul role="menu"  class="dropdown-menu">

                                                    @foreach($nav->children[0] as $childNav)
                                                        @if($childNav->type == 'custom')

                                                            <li id="menu-item-743{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$childNav->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} @if(!empty($childNav->children[0])) menu-item-has-children dropdown @endif nav-item menu-item-11011">
                                                                <a href="/{{@$childNav->slug}}" class="nav-link" @if(@$childNav->target !== NULL) target="_blank" @endif >@if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                                @if(!empty($childNav->children[0]))
                                                                    <ul role="menu" class="dropdown-menu">
                                                                        @foreach($childNav->children[0] as $key => $lastchild)
                                                                            @if($lastchild->type == 'custom')
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                                    <a href="/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                            @elseif($lastchild->type == 'post')
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('blog/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                                    <a href="{{url('blog')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                            @elseif($lastchild->type == 'service')
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('service/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                                    <a href="{{url('service')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                            @else
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                                        <a href="{{url('/')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                                    </li>
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </li>
                                                        @elseif($childNav->type == 'post')
                                                            <li id="menu-item-743{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('blog/'.@$childNav->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  @if(!empty($childNav->children[0])) menu-item-has-children dropdown @endif nav-item menu-item-11011">
                                                                <a href="{{url('blog')}}/{{@$childNav->slug}}" class="nav-link" @if(@$childNav->target !== NULL) target="_blank" @endif>@if(@$childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                                @if(!empty($childNav->children[0]))
                                                                    <ul role="menu" class="dropdown-menu">
                                                                        @foreach($childNav->children[0] as $key => $lastchild)
                                                                            @if($lastchild->type == 'custom')
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                                    <a href="/{{@$childNav->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                            @elseif($lastchild->type == 'service')
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('service/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                                    <a href="{{url('service')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                            @elseif($lastchild->type == 'post')
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('blog/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                                    <a href="{{url('blog')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                            @else
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                                        <a href="{{url('/')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                                    </li>
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </li>
                                                        @elseif($childNav->type == 'service')
                                                            <li id="menu-item-743{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('service/'.@$childNav->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  @if(!empty($childNav->children[0])) menu-item-has-children dropdown @endif nav-item menu-item-11011">
                                                                <a href="{{url('service')}}/{{@$childNav->slug}}" class="nav-link" @if(@$childNav->target !== NULL) target="_blank" @endif>@if(@$childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                                @if(!empty($childNav->children[0]))
                                                                    <ul role="menu" class="dropdown-menu">
                                                                        @foreach($childNav->children[0] as $key => $lastchild)
                                                                            @if($lastchild->type == 'custom')
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                                    <a href="/{{@$childNav->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                            @elseif($lastchild->type == 'service')
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('service/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                                    <a href="{{url('service')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                            @elseif($lastchild->type == 'post')
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('blog/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                                    <a href="{{url('blog')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                            @else
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                                        <a href="{{url('/')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                                    </li>
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </li>
                                                        @else
                                                            <li id="menu-item-743{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$childNav->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  @if(!empty($childNav->children[0])) menu-item-has-children dropdown @endif nav-item menu-item-11011">
                                                                <a href="{{url('/')}}/{{@$childNav->slug}}" class="nav-link" @if(@$childNav->target !== NULL) target="_blank" @endif>@if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                                @if(!empty($childNav->children[0]))
                                                                    <ul role="menu" class="dropdown-menu">
                                                                        @foreach($childNav->children[0] as $key => $lastchild)
                                                                            @if($lastchild->type == 'custom')
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                                    <a href="/{{@$childNav->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                            @elseif($lastchild->type == 'service')
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('service/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                                    <a href="{{url('service')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                            @elseif($lastchild->type == 'post')
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is('blog/'.@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}}  nav-item menu-item-11011">
                                                                                    <a href="{{url('blog')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                            @else
                                                                                <li id="menu-item-74{{@$loop->index}}" class="menu-item menu-item-type-post_type menu-item-object-page {{request()->is(@$lastchild->slug) ? 'current-menu-item page_item page-item-10053 current_page_item' : ''}} nav-item menu-item-11011">
                                                                                        <a href="{{url('/')}}/{{@$lastchild->slug}}" class="nav-link" @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                                    </li>
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                @endif

                                                            </li>
                                                        @endif
                                                    @endforeach

                                                </ul>
                                            </li>

                                        @else
                                            @if($nav->type == 'custom')
                                                <li id="menu-item-176{{@$loop->index}}"  class="{{request()->is(@$nav->slug.'*') ? 'current_page_item current-menu-item' : ''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-6829   nav-item menu-item-9390 ">
                                                    <a href="/{{$nav->slug}}" class="nav-link" @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                            @elseif($nav->type == 'service')
                                                <li id="menu-item-176{{@$loop->index}}"  class="{{request()->is('service/'.@$nav->slug.'*') ? 'current_page_item current-menu-item' : ''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-6829   nav-item menu-item-9390">
                                                    <a href="{{url('service')}}/{{$nav->slug}}" class="nav-link">@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                            @elseif($nav->type == 'post')
                                                <li id="menu-item-176{{@$loop->index}}"  class="{{request()->is('blog/'.@$nav->slug.'*') ? 'current_page_item current-menu-item' : ''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-6829   nav-item menu-item-9390">
                                                    <a href="{{url('blog')}}/{{$nav->slug}}" class="nav-link">@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                            @else
                                                <li id="menu-item-176{{@$loop->index}}"  class="{{request()->is(@$nav->slug.'*') ? 'current_page_item current-menu-item' : ''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item page-item-6829   nav-item menu-item-9390">
                                                    <a href="{{url('/')}}/{{$nav->slug}}" class="nav-link">@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif

                        </ul>
                      </div>
                    </li>
                 
                    <li class="nav-item">
                      <div class="nav-item-inner">
                        <div class="header-navbar-text-2">
                          <div class="header-button sticky-btn">
                            <a
                              href="{{route('contact')}}"
                              class="btn btn-default"
                              >Get In Touch</a
                            >
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>

              </nav>
            </div>
            <!--stikcy outer-->
          </div>
          <!-- sticky-head or sticky-scroll -->
        </div>
      </header>