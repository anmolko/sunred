<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Sunred "/>	
		<meta name="description" content="@if(!empty(@$setting_data->meta_description)) {{ucwords(@$setting_data->meta_description)}} @else Sunred @endif "/>
		<meta name="keywords" content="@if(!empty(@$setting_data->meta_tags)) {{@$setting_data->meta_tags}} @else Sunred @endif ">	
		<link rel="canonical" href="https://sams.com.my/" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />

			<!-- SITE TITLE -->
		@if (\Request::is('/'))
		    <title>@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Sunred @endif </title>
		@else
            <title>@yield('title') | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Sunred @endif </title>
		@endif			
		<meta property="og:title" content="@if(!empty(@$setting_data->meta_title)) {{ucwords(@$setting_data->meta_title)}} @else Sunred @endif" />
		<meta property="og:type" content="Consultancy" />
		<meta property="og:url" content="https://sams.com.my/" />
		<meta property="og:site_name" content="Sunred" />
		<meta property="og:description" content="@if(!empty(@$setting_data->meta_description)) {{ucwords(@$setting_data->meta_description)}} @else Sunred @endif " />


		<!-- FAVICON AND TOUCH ICONS -->

		<link rel="shortcut icon" type="image/x-icon" href="<?php if(@$setting_data->favicon){?>{{asset('/images/uploads/settings/'.@$setting_data->favicon)}}<?php }?>">

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


<body class="page-template-default page page-id-14666 wp-embed-responsive theme-corpkit  elementor-default elementor-kit-3 elementor-page elementor-page-14666">
   
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
              <ul class="mobile-header-items nav pull-center">
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
              <ul class="mobile-header-items nav pull-right">
                <li class="nav-item">
                  <div class="nav-item-inner">
                    <a class="full-search-toggle" href="#"
                      ><i class="ti-search"></i
                    ></a>
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
                      <li
                        id="menu-item-16417"
                        class="cus-img-menu menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-16417"
                      >
                        <a href="../index.html">Home</a>
                        <ul class="sub-menu">
                          <li
                            id="menu-item-15454"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-15454"
                          >
                            <a href="../index.html">Home Default</a>
                          </li>
                          <li
                            id="menu-item-16416"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16416"
                          >
                            <a href="../home-2/index.html">Home 2</a>
                          </li>
                          <li
                            id="menu-item-16665"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16665"
                          >
                            <a href="../home-3/index.html">Home 3</a>
                          </li>
                          <li
                            id="menu-item-16661"
                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-14666 current_page_item menu-item-16661"
                          >
                            <a href="index.html" aria-current="page">Home 4</a>
                          </li>
                          <li
                            id="menu-item-16778"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16778"
                          >
                            <a href="../home-5/index.html">Home 5</a>
                          </li>
                          <li
                            id="menu-item-17521"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17521"
                          >
                            <a href="../home-6/index.html">Home 6</a>
                          </li>
                          <li
                            id="menu-item-17891"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17891"
                          >
                            <a href="../home-7/index.html">Home 7</a>
                          </li>
                          <li
                            id="menu-item-18048"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18048"
                          >
                            <a href="../home-8/index.html">Home 8</a>
                          </li>
                          <li
                            id="menu-item-16469"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16469"
                          >
                            <a href="../landing-page/index.html"
                              >Landing Page</a
                            >
                          </li>
                          <li
                            id="menu-item-16830"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16830"
                          >
                            <a href="#">Coming Soon</a>
                          </li>
                        </ul>
                      </li>
                      <li
                        id="menu-item-16075"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16075"
                      >
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                          <li
                            id="menu-item-13963"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-13963"
                          >
                            <a href="../about-us/index.html">About Us</a>
                            <ul class="sub-menu">
                              <li
                                id="menu-item-13974"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13974"
                              >
                                <a href="../our-team/index.html">Our Team</a>
                              </li>
                              <li
                                id="menu-item-16091"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16091"
                              >
                                <a href="../testimonials/index.html"
                                  >Testimonials</a
                                >
                              </li>
                            </ul>
                          </li>
                          <li
                            id="menu-item-16241"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16241"
                          >
                            <a href="#">Services Grid Styles</a>
                            <ul class="sub-menu">
                              <li
                                id="menu-item-16192"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16192"
                              >
                                <a href="../services-grid-style-2/index.html"
                                  >Services Grid Style 2</a
                                >
                              </li>
                              <li
                                id="menu-item-16246"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16246"
                              >
                                <a href="../our-services/index.html"
                                  >Services Grid Style 3</a
                                >
                              </li>
                            </ul>
                          </li>
                          <li
                            id="menu-item-16080"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-16080"
                          >
                            <a href="../shop/index.html">Shop</a>
                            <ul class="sub-menu">
                              <li
                                id="menu-item-16076"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16076"
                              >
                                <a href="../cart/index.html">Cart</a>
                              </li>
                              <li
                                id="menu-item-16077"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16077"
                              >
                                <a href="../checkout/index.html">Checkout</a>
                              </li>
                              <li
                                id="menu-item-16079"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16079"
                              >
                                <a href="../my-account/index.html"
                                  >My account</a
                                >
                              </li>
                            </ul>
                          </li>
                          <li
                            id="menu-item-16081"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16081"
                          >
                            <a href="../career/index.html">Career</a>
                          </li>
                          <li
                            id="menu-item-13978"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13978"
                          >
                            <a href="../pricing/index.html">Pricing</a>
                          </li>
                          <li
                            id="menu-item-16128"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16128"
                          >
                            <a href="../faq/index.html">Faq</a>
                          </li>
                        </ul>
                      </li>
                      <li
                        id="menu-item-13973"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-13973"
                      >
                        <a href="../our-services/index.html">Our Services</a>
                        <ul class="sub-menu">
                          <li
                            id="menu-item-13982"
                            class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13982"
                          >
                            <a href="../service/business-analysis/index.html"
                              >Business Analysis</a
                            >
                          </li>
                          <li
                            id="menu-item-13983"
                            class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13983"
                          >
                            <a href="../service/consumer-markets/index.html"
                              >Consumer Markets</a
                            >
                          </li>
                          <li
                            id="menu-item-13984"
                            class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13984"
                          >
                            <a href="../service/corporate-finance/index.html"
                              >Corporate Finance</a
                            >
                          </li>
                          <li
                            id="menu-item-13985"
                            class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13985"
                          >
                            <a href="../service/insurance/index.html"
                              >Insurance</a
                            >
                          </li>
                          <li
                            id="menu-item-13986"
                            class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13986"
                          >
                            <a href="../service/market-research/index.html"
                              >Market Research</a
                            >
                          </li>
                          <li
                            id="menu-item-13987"
                            class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13987"
                          >
                            <a
                              href="../service/strategy-and-planning/index.html"
                              >Strategy and Planning</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li
                        id="menu-item-13975"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-13975"
                      >
                        <a href="../our-portfolio/index.html">Portfolio</a>
                        <ul class="sub-menu">
                          <li
                            id="menu-item-16115"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16115"
                          >
                            <a href="../portfolio-no-gutter/index.html"
                              >Portfolio No Gutter</a
                            >
                          </li>
                          <li
                            id="menu-item-16191"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16191"
                          >
                            <a href="../our-portfolio/index.html"
                              >Portfolio Grid 3</a
                            >
                          </li>
                          <li
                            id="menu-item-16190"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16190"
                          >
                            <a href="../portfolio-grid-4/index.html"
                              >Portfolio Grid 4</a
                            >
                          </li>
                          <li
                            id="menu-item-16157"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16157"
                          >
                            <a href="../portfolio-slider/index.html"
                              >Portfolio Slider</a
                            >
                          </li>
                          <li
                            id="menu-item-15627"
                            class="menu-item menu-item-type-post_type menu-item-object-cea-portfolio menu-item-15627"
                          >
                            <a href="../portfolio/data-collection/index.html"
                              >Portfolio Single</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li
                        id="menu-item-13962"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-13962"
                      >
                        <a href="../blog/index.html">Blog</a>
                        <ul class="sub-menu">
                          <li
                            id="menu-item-16238"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16238"
                          >
                            <a href="../blog-grid-2-columns/index.html"
                              >Blog Grid 2 Columns</a
                            >
                          </li>
                          <li
                            id="menu-item-16239"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16239"
                          >
                            <a href="../blog-grid-3-columns/index.html"
                              >Blog Grid 3 Columns</a
                            >
                          </li>
                          <li
                            id="menu-item-16240"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16240"
                          >
                            <a href="../blog-grid-4-columns/index.html"
                              >Blog Grid 4 Columns</a
                            >
                          </li>
                          <li
                            id="menu-item-15076"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15076"
                          >
                            <a href="../blog/index.html"
                              >Blog Grid With Sidebar</a
                            >
                          </li>
                          <li
                            id="menu-item-16200"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16200"
                          >
                            <a href="../blog-list-with-sidebar/index.html"
                              >Blog List With Sidebar</a
                            >
                          </li>
                          <li
                            id="menu-item-15066"
                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-15066"
                          >
                            <a href="../going-to-start-business/index.html"
                              >Blog Details</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li
                        id="menu-item-13970"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13970"
                      >
                        <a href="../contact/index.html">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="mobile-bar-items nav flex-column mobile-bar-bottom">
            <li class="nav-item">
              <div class="nav-item-inner">
                <form
                  method="get"
                  class="search-form"
                  action=""
                >
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      name="s"
                      value=""
                      placeholder="Search for..."
                    />
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="submit">
                        <i class="ti-arrow-right"></i>
                      </button>
                    </span>
                  </div>
                </form>
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
                              src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php }?>"
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
                          <li
                            class="cus-img-menu menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children nav-item menu-item-16417 dropdown mega-dropdown"
                          >
                            <a
                              href="../index.html"
                              class="nav-link dropdown-toggle"
                              >Home</a
                            >
                            <ul
                              role="menu"
                              class="dropdown-menu mega-dropdown-menu container"
                            >
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home nav-item menu-item-15454 col-sm-3"
                              >
                                <div class="mega-child-widget">
                                  <div
                                    id="block-15"
                                    class="widget widget_block widget_media_image"
                                  >
                                    <figure
                                      class="wp-block-image size-full is-resized"
                                    >
                                      <a href="../index.html"
                                        ><img
                                          loading="lazy"
                                          src="../wp-content/uploads/sites/45/2022/06/home-1-3.jpg"
                                          alt=""
                                          class="wp-image-16804"
                                          width="400"
                                          height="500"
                                      /></a>
                                    </figure>
                                  </div>
                                  <div
                                    id="block-25"
                                    class="widget widget_block"
                                  >
                                    <a
                                      href="../index.html"
                                      class="mega-menu-title"
                                      >Home Default</a
                                    >
                                  </div>
                                </div>
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16416 col-sm-3"
                              >
                                <div class="mega-child-widget">
                                  <div
                                    id="block-16"
                                    class="widget widget_block widget_media_image"
                                  >
                                    <figure
                                      class="wp-block-image size-full is-resized"
                                    >
                                      <a href="../home-2/index.html"
                                        ><img
                                          loading="lazy"
                                          src="../wp-content/uploads/sites/45/2022/06/home-2.jpg"
                                          alt=""
                                          class="wp-image-16793"
                                          width="300"
                                          height="375"
                                      /></a>
                                    </figure>
                                  </div>
                                  <div
                                    id="block-26"
                                    class="widget widget_block"
                                  >
                                    <a
                                      href="../home-2/index.html"
                                      class="mega-menu-title"
                                      >Home 2</a
                                    >
                                  </div>
                                </div>
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16665 col-sm-3"
                              >
                                <div class="mega-child-widget">
                                  <div
                                    id="block-17"
                                    class="widget widget_block widget_media_image"
                                  >
                                    <figure
                                      class="wp-block-image size-full is-resized"
                                    >
                                      <a href="../home-3/index.html"
                                        ><img
                                          loading="lazy"
                                          src="../wp-content/uploads/sites/45/2022/06/home-3.jpg"
                                          alt=""
                                          class="wp-image-16794"
                                          width="300"
                                          height="375"
                                      /></a>
                                    </figure>
                                  </div>
                                  <div
                                    id="block-27"
                                    class="widget widget_block"
                                  >
                                    <a
                                      href="../home-3/index.html"
                                      class="mega-menu-title"
                                      >Home 3</a
                                    >
                                  </div>
                                </div>
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-14666 current_page_item nav-item menu-item-16661 col-sm-3"
                              >
                                <div class="mega-child-widget">
                                  <div
                                    id="block-18"
                                    class="widget widget_block widget_media_image"
                                  >
                                    <figure
                                      class="wp-block-image size-full is-resized"
                                    >
                                      <a href="index.html"
                                        ><img
                                          loading="lazy"
                                          src="../wp-content/uploads/sites/45/2022/06/home-4.jpg"
                                          alt=""
                                          class="wp-image-16795"
                                          width="300"
                                          height="375"
                                      /></a>
                                    </figure>
                                  </div>
                                  <div
                                    id="block-28"
                                    class="widget widget_block"
                                  >
                                    <a href="index.html" class="mega-menu-title"
                                      >Home 4</a
                                    >
                                  </div>
                                </div>
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16778 col-sm-3"
                              >
                                <div class="mega-child-widget">
                                  <div
                                    id="block-30"
                                    class="widget widget_block widget_media_image"
                                  >
                                    <figure
                                      class="wp-block-image size-full is-resized"
                                    >
                                      <a href="../home-5/index.html"
                                        ><img
                                          loading="lazy"
                                          src="../wp-content/uploads/sites/45/2022/06/home-5-1.jpg"
                                          alt=""
                                          class="wp-image-16801"
                                          width="300"
                                          height="375"
                                      /></a>
                                    </figure>
                                  </div>
                                  <div
                                    id="block-29"
                                    class="widget widget_block"
                                  >
                                    <a
                                      href="../home-5/index.html"
                                      class="mega-menu-title"
                                      >Home 5</a
                                    >
                                  </div>
                                </div>
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-17521 col-sm-3"
                              >
                                <div class="mega-child-widget">
                                  <div
                                    id="block-23"
                                    class="widget widget_block widget_media_image"
                                  >
                                    <figure class="wp-block-image size-full">
                                      <a href="../home-6/index.html"
                                        ><img
                                          loading="lazy"
                                          width="400"
                                          height="500"
                                          src="../wp-content/uploads/sites/45/2022/08/home-6.jpg"
                                          alt=""
                                          class="wp-image-17522"
                                          title="Coming Soon"
                                      /></a>
                                    </figure>
                                  </div>
                                  <div
                                    id="block-33"
                                    class="widget widget_block"
                                  >
                                    <p>
                                      <a
                                        href="../home-6/index.html"
                                        class="mega-menu-title"
                                        >Home 6</a
                                      ><span class="new-tag">New</span>
                                    </p>
                                  </div>
                                </div>
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-17891 col-sm-3"
                              >
                                <div class="mega-child-widget">
                                  <div
                                    id="block-24"
                                    class="widget widget_block widget_media_image"
                                  >
                                    <figure class="wp-block-image size-full">
                                      <a href="../home-7/index.html"
                                        ><img
                                          loading="lazy"
                                          width="400"
                                          height="500"
                                          src="../wp-content/uploads/sites/45/2022/08/home-7.jpg"
                                          alt=""
                                          class="wp-image-17890"
                                          title="Coming Soon"
                                      /></a>
                                    </figure>
                                  </div>
                                  <div
                                    id="block-36"
                                    class="widget widget_block"
                                  >
                                    <p>
                                      <a
                                        href="../home-7/index.html"
                                        class="mega-menu-title"
                                        >Home 7</a
                                      ><span class="new-tag">New</span>
                                    </p>
                                  </div>
                                </div>
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-18048 col-sm-3"
                              >
                                <div class="mega-child-widget">
                                  <div
                                    id="block-34"
                                    class="widget widget_block widget_media_image"
                                  >
                                    <figure class="wp-block-image size-full">
                                      <a href="../home-8/index.html"
                                        ><img
                                          loading="lazy"
                                          width="400"
                                          height="500"
                                          src="../wp-content/uploads/sites/45/2022/08/home-8.jpg"
                                          alt=""
                                          class="wp-image-18047"
                                          title="Coming Soon"
                                      /></a>
                                    </figure>
                                  </div>
                                  <div
                                    id="block-37"
                                    class="widget widget_block"
                                  >
                                    <p>
                                      <a
                                        href="../home-8/index.html"
                                        class="mega-menu-title"
                                        >Home 8</a
                                      ><span class="new-tag">New</span>
                                    </p>
                                  </div>
                                </div>
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16469 col-sm-3"
                              >
                                <div class="mega-child-widget">
                                  <div
                                    id="block-31"
                                    class="widget widget_block widget_media_image"
                                  >
                                    <figure
                                      class="wp-block-image size-full is-resized"
                                    >
                                      <a href="../landing/index.html"
                                        ><img
                                          loading="lazy"
                                          src="../wp-content/uploads/sites/45/2022/06/home-1-2.jpg"
                                          alt="Coming Soon"
                                          class="wp-image-16803"
                                          width="300"
                                          height="375"
                                          title="Coming Soon"
                                      /></a>
                                    </figure>
                                  </div>
                                  <div
                                    id="block-32"
                                    class="widget widget_block"
                                  >
                                    <a
                                      href="../landing/index.html"
                                      class="mega-menu-title"
                                      >Landing</a
                                    >
                                  </div>
                                </div>
                              </li>
                              <li
                                class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-16830 col-sm-3"
                              >
                                <div class="mega-child-widget">
                                  <div
                                    id="block-35"
                                    class="widget widget_block widget_media_image"
                                  >
                                    <figure class="wp-block-image size-full">
                                      <img
                                        loading="lazy"
                                        width="400"
                                        height="500"
                                        src="../wp-content/uploads/sites/45/2022/06/coming-soon-2-2.jpg"
                                        alt=""
                                        class="wp-image-16833"
                                        title="Coming Soon"
                                      />
                                    </figure>
                                  </div>
                                  <div
                                    id="block-38"
                                    class="widget widget_block"
                                  >
                                    <p>Coming Soon</p>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>
                          <li
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-16075 dropdown"
                          >
                            <a href="#" class="nav-link dropdown-toggle"
                              >Pages</a
                            >
                            <ul role="menu" class="dropdown-menu">
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-13963 dropdown"
                              >
                                <a
                                  href="../about-us/index.html"
                                  class="nav-link"
                                  >About Us</a
                                >
                                <ul role="menu" class="dropdown-menu">
                                  <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-13974"
                                  >
                                    <a
                                      href="../our-team/index.html"
                                      class="nav-link"
                                      >Our Team</a
                                    >
                                  </li>
                                  <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16091"
                                  >
                                    <a
                                      href="../testimonials/index.html"
                                      class="nav-link"
                                      >Testimonials</a
                                    >
                                  </li>
                                </ul>
                              </li>
                              <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-16241 dropdown"
                              >
                                <a href="#" class="nav-link"
                                  >Services Grid Styles</a
                                >
                                <ul role="menu" class="dropdown-menu">
                                  <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16192"
                                  >
                                    <a
                                      href="../services-grid-style-2/index.html"
                                      class="nav-link"
                                      >Services Grid Style 2</a
                                    >
                                  </li>
                                  <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16246"
                                  >
                                    <a
                                      href="../our-services/index.html"
                                      class="nav-link"
                                      >Services Grid Style 3</a
                                    >
                                  </li>
                                </ul>
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-16080 dropdown"
                              >
                                <a href="../shop/index.html" class="nav-link"
                                  >Shop</a
                                >
                                <ul role="menu" class="dropdown-menu">
                                  <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16076"
                                  >
                                    <a
                                      href="../cart/index.html"
                                      class="nav-link"
                                      >Cart</a
                                    >
                                  </li>
                                  <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16077"
                                  >
                                    <a
                                      href="../checkout/index.html"
                                      class="nav-link"
                                      >Checkout</a
                                    >
                                  </li>
                                  <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16079"
                                  >
                                    <a
                                      href="../my-account/index.html"
                                      class="nav-link"
                                      >My account</a
                                    >
                                  </li>
                                </ul>
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16081"
                              >
                                <a href="../career/index.html" class="nav-link"
                                  >Career</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-13978"
                              >
                                <a href="../pricing/index.html" class="nav-link"
                                  >Pricing</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16128"
                              >
                                <a href="../faq/index.html" class="nav-link"
                                  >Faq</a
                                >
                              </li>
                            </ul>
                          </li>
                          <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-13973 dropdown"
                          >
                            <a
                              href="../our-services/index.html"
                              class="nav-link dropdown-toggle"
                              >Our Services</a
                            >
                            <ul role="menu" class="dropdown-menu">
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-cea-service nav-item menu-item-13982"
                              >
                                <a
                                  href="../service/business-analysis/index.html"
                                  class="nav-link"
                                  >Business Analysis</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-cea-service nav-item menu-item-13983"
                              >
                                <a
                                  href="../service/consumer-markets/index.html"
                                  class="nav-link"
                                  >Consumer Markets</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-cea-service nav-item menu-item-13984"
                              >
                                <a
                                  href="../service/corporate-finance/index.html"
                                  class="nav-link"
                                  >Corporate Finance</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-cea-service nav-item menu-item-13985"
                              >
                                <a
                                  href="../service/insurance/index.html"
                                  class="nav-link"
                                  >Insurance</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-cea-service nav-item menu-item-13986"
                              >
                                <a
                                  href="../service/market-research/index.html"
                                  class="nav-link"
                                  >Market Research</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-cea-service nav-item menu-item-13987"
                              >
                                <a
                                  href="../service/strategy-and-planning/index.html"
                                  class="nav-link"
                                  >Strategy and Planning</a
                                >
                              </li>
                            </ul>
                          </li>
                          <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-13975 dropdown"
                          >
                            <a
                              href="../our-portfolio/index.html"
                              class="nav-link dropdown-toggle"
                              >Portfolio</a
                            >
                            <ul role="menu" class="dropdown-menu">
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16115"
                              >
                                <a
                                  href="../portfolio-no-gutter/index.html"
                                  class="nav-link"
                                  >Portfolio No Gutter</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16191"
                              >
                                <a
                                  href="../our-portfolio/index.html"
                                  class="nav-link"
                                  >Portfolio Grid 3</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16190"
                              >
                                <a
                                  href="../portfolio-grid-4/index.html"
                                  class="nav-link"
                                  >Portfolio Grid 4</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16157"
                              >
                                <a
                                  href="../portfolio-slider/index.html"
                                  class="nav-link"
                                  >Portfolio Slider</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-cea-portfolio nav-item menu-item-15627"
                              >
                                <a
                                  href="../portfolio/data-collection/index.html"
                                  class="nav-link"
                                  >Portfolio Single</a
                                >
                              </li>
                            </ul>
                          </li>
                          <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-13962 dropdown"
                          >
                            <a
                              href="../blog/index.html"
                              class="nav-link dropdown-toggle"
                              >Blog</a
                            >
                            <ul role="menu" class="dropdown-menu">
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16238"
                              >
                                <a
                                  href="../blog-grid-2-columns/index.html"
                                  class="nav-link"
                                  >Blog Grid 2 Columns</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16239"
                              >
                                <a
                                  href="../blog-grid-3-columns/index.html"
                                  class="nav-link"
                                  >Blog Grid 3 Columns</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16240"
                              >
                                <a
                                  href="../blog-grid-4-columns/index.html"
                                  class="nav-link"
                                  >Blog Grid 4 Columns</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-15076"
                              >
                                <a href="../blog/index.html" class="nav-link"
                                  >Blog Grid With Sidebar</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-16200"
                              >
                                <a
                                  href="../blog-list-with-sidebar/index.html"
                                  class="nav-link"
                                  >Blog List With Sidebar</a
                                >
                              </li>
                              <li
                                class="menu-item menu-item-type-post_type menu-item-object-post nav-item menu-item-15066"
                              >
                                <a
                                  href="../going-to-start-business/index.html"
                                  class="nav-link"
                                  >Blog Details</a
                                >
                              </li>
                            </ul>
                          </li>
                          <li
                            class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-13970"
                          >
                            <a href="../contact/index.html" class="nav-link"
                              >Contact</a
                            >
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="nav-item-inner">
                        <div class="search-toggle-wrap">
                          <a class="full-bar-search-toggle" href="#"
                            ><i class="ti-search"></i
                          ></a>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="nav-item-inner">
                        <div class="header-navbar-text-2">
                          <div class="header-button sticky-btn">
                            <a
                              href="../contact/index.html"
                              class="btn btn-default"
                              >Get In Touch</a
                            >
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>

                <div class="full-bar-search-wrap">
                  <form
                    method="get"
                    class="search-form"
                    action="https://elementor.zozothemes.com/corpkit/"
                  >
                    <div class="input-group">
                      <input
                        name="s"
                        type="text"
                        class="form-control"
                        value=""
                        placeholder="Search and hit enter.."
                      />
                    </div>
                  </form>
                  <a href="#" class="close full-bar-search-toggle"></a>
                </div>
              </nav>
            </div>
            <!--stikcy outer-->
          </div>
          <!-- sticky-head or sticky-scroll -->
        </div>
      </header>