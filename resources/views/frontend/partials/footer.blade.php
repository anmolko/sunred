	
			
		<footer class="site-footer footer-template-custom">
			<div class="footer-middle-wrap">
			<div class="container">
				<div class="row">
				<div class="col-lg-3">
					<div class="footer-middle-sidebar">
					<section id="text-2" class="widget widget_text">
						<h3 class="widget-title">About Us</h3>
						<div class="textwidget">
						@if(!empty(@$setting_data->website_description)) {!! ucfirst(@$setting_data->website_description) !!} @else Sunred @endif 
						</div>
					</section>
					<section
						id="zozo_social_widget-2"
						class="widget zozo_social_widget"
					>
						<ul
						class="nav social-icons social-widget widget-content social-rounded social-white social-h-white social-bg-own social-hbg-dark"
						>

						@if(!empty(@$setting_data->facebook))
						<li>
							<a href="@if(!empty(@$setting_data->facebook)) {{@$setting_data->facebook}} @endif" target="_blank" class="social-fb"
							><i class="ti-facebook"></i
							></a>
						</li>
						@endif
						@if(!empty(@$setting_data->youtube))

						<li>
							<a href="@if(!empty(@$setting_data->youtube)) {{@$setting_data->youtube}} @endif" target="_blank" class="social-youtube"
							><i class="ti-youtube"></i
							></a>
						</li>
						@endif
						@if(!empty(@$setting_data->instagram))

						<li>
							<a href="@if(!empty(@$setting_data->instagram)) {{@$setting_data->instagram}} @endif" target="_blank" class="social-instagram"
							><i class="ti-instagram"></i
							></a>
						</li>
						@endif
						@if(!empty(@$setting_data->linkedin))

						<li>
							<a href="@if(!empty(@$setting_data->linkedin)) {{@$setting_data->linkedin}} @endif" target="_blank" class="social-linkedin"
							><i class="ti-linkedin"></i
							></a>
						</li>
						@endif

						</ul>
					</section>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="footer-middle-sidebar">
					<section id="nav_menu-2" class="widget widget_nav_menu">
						<h3 class="widget-title">Services</h3>
						<div class="menu-services-menu-container">
						<ul id="menu-services-menu" class="menu">
							<li
							id="menu-item-13703"
							class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13703"
							>
							<a href="service/strategy-and-planning/index.html"
								>Strategy and Planning</a
							>
							</li>
							<li
							id="menu-item-13698"
							class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13698"
							>
							<a href="service/business-analysis/index.html"
								>Business Analysis</a
							>
							</li>
							<li
							id="menu-item-13699"
							class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13699"
							>
							<a href="service/consumer-markets/index.html"
								>Consumer Markets</a
							>
							</li>
							<li
							id="menu-item-13700"
							class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13700"
							>
							<a href="service/corporate-finance/index.html"
								>Corporate Finance</a
							>
							</li>
							<li
							id="menu-item-13702"
							class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13702"
							>
							<a href="service/market-research/index.html"
								>Market Research</a
							>
							</li>
						</ul>
						</div>
					</section>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="footer-middle-sidebar">
					<section
						id="corpkit_latest_post_widget-2"
						class="widget corpkit_latest_post_widget"
					>
						<h3 class="widget-title">Latest Posts</h3>
						<div class="widg-content">
						<ul class="side-newsfeed">
						@if(!empty($latestPostsfooter))
							@foreach($latestPostsfooter as $latestPosts)
							<li>
							<div class="side-item">
								<div class="side-image">
								<a
									href="{{route('blog.single',$latestPosts->slug)}}"
									rel="bookmark"
									><img
									width="80"
									height="80"
									src="<?php if(@$latestPosts->image){?>{{asset('/images/blog/thumb/thumb_'.@$latestPosts->image)}}<?php }?>"
									class="img-responsive wp-post-image"
									alt=""
									loading="lazy"
									srcset="
									<?php if(@$latestPosts->image){?>{{asset('/images/blog/thumb/thumb_'.@$latestPosts->image)}}<?php }?>   80w,
									<?php if(@$latestPosts->image){?>{{asset('/images/blog/thumb/thumb_'.@$latestPosts->image)}}<?php }?> 300w,
									<?php if(@$latestPosts->image){?>{{asset('/images/blog/thumb/thumb_'.@$latestPosts->image)}}<?php }?> 100w
									"
									sizes="(max-width: 80px) 100vw, 80px"
								/></a>
								</div>
								<div class="side-item-text">
								<a
									class="themeh-color"
									href="{{route('blog.single',$latestPosts->slug)}}"
									rel="bookmark"
									>{{ucwords($latestPosts->title)}}</a
								>
								<div class="comments-wrap">
									<div class="meta-left">
									<span class="">{{date('M j, Y',strtotime(@$latestPosts->created_at))}}</span>
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
					</div>
				</div>
				<div class="col-lg-3">
					
					<div class="footer-middle-sidebar">
						<section id="nav_menu-2" class="widget widget_nav_menu">
							<h3 class="widget-title">Quick Links</h3>
							<div class="menu-services-menu-container">
							<ul id="menu-services-menu" class="menu">
								<li
								id="menu-item-13703"
								class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13703"
								>
								<a href="service/strategy-and-planning/index.html"
									>Strategy and Planning</a
								>
								</li>
								<li
								id="menu-item-13698"
								class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13698"
								>
								<a href="service/business-analysis/index.html"
									>Business Analysis</a
								>
								</li>
								<li
								id="menu-item-13699"
								class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13699"
								>
								<a href="service/consumer-markets/index.html"
									>Consumer Markets</a
								>
								</li>
								<li
								id="menu-item-13700"
								class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13700"
								>
								<a href="service/corporate-finance/index.html"
									>Corporate Finance</a
								>
								</li>
								<li
								id="menu-item-13702"
								class="menu-item menu-item-type-post_type menu-item-object-cea-service menu-item-13702"
								>
								<a href="service/market-research/index.html"
									>Market Research</a
								>
								</li>
							</ul>
							</div>
						</section>
					</div>

				</div>
				</div>
			</div>
			</div>
			<div class="footer-bottom">
			<div class="footer-bottom-inner container">
				<div class="row">
				<div class="col-md-12">
					<ul class="footer-bottom-items nav pull-left">
					<li class="nav-item">
						<div class="nav-item-inner">
						<div class="footer-bottom-widget">
							<section
							id="block-14"
							class="widget widget_block widget_media_image"
							>
							<figure class="wp-block-image size-full">
								<img
								loading="lazy"
								width="565"
								height="129"
								src="<?php if(@$setting_data->logo_white){?>{{asset('/images/settings/'.@$setting_data->logo_white)}}<?php } ?>"
								alt=""
								class="wp-image-16055"
								/>
							</figure>
							</section>
						</div>
						</div>
					</li>
					</ul>
					<ul class="footer-bottom-items nav pull-right">
					<li class="nav-item">
						<div class="nav-item-inner">
						<div class="copyright-text-wrap">
							Copyrights © {{date("Y")}}  
							<a
							href="/"
							class="theme-color"
							>@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @endif</a>. Developed by
							<a href="https://www.canosoft.com.np/" class="theme-color"
							>Canosoft Techonology </a
							>
						</div>
						</div>
					</li>
					</ul>
				</div>
				</div>
			</div>
			</div>

			<a href="#" class="back-to-top position-right" id="back-to-top"
			><i class="ti-angle-up"></i
			></a>
      	</footer>
      <!-- #colophon -->
    </div>


		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		
		<script>
			window.RS_MODULES = window.RS_MODULES || {};
			window.RS_MODULES.modules = window.RS_MODULES.modules || {};
			window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
			window.RS_MODULES.defered = true;
			window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
			window.RS_MODULES.type = 'compiled';
		</script>
		
		<script>
		if(typeof revslider_showDoubleJqueryError === "undefined") {function revslider_showDoubleJqueryError(sliderID) {console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");console.log("To fix this, you can:");console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");console.log("2. Find the double jQuery.js inclusion and remove it");return "Double Included jQuery Library";}}
		</script>
		    <link
			rel="stylesheet"
			id="magnific-popup-css"
			href="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/css/magnific-popup.min5152.css?ver=1.0')}}"
			type="text/css"
			media="all"
			/>
		<link rel="preload" as="font" id="rs-icon-set-revicon-woff" href="{{asset('assets/frontend/wp-content/plugins/revslider/public/assets/fonts/revicons/revicons90c6.woff?5510888')}}" type="font/woff" crossorigin="anonymous" media="all" />
		<link rel='stylesheet' id='rs-plugin-settings-css'  href="{{asset('assets/frontend/wp-content/plugins/revslider/public/assets/css/rs6b02e.css?ver=6.5.25')}}' type='text/css" media='all' />
		<style id='rs-plugin-settings-inline-css' type='text/css'>
		.rs-layer.Concept-Content a,.rs-layer.Concept-Content a:visited{color:#fff !important; border-bottom:1px solid #fff !important; font-weight:700 !important}.rs-layer.Concept-Content a:hover{border-bottom:1px solid transparent !important}.rs-layer.Concept-Content-Dark a,.rs-layer.Concept-Content-Dark a:visited{color:#000 !important; border-bottom:1px solid #000 !important; font-weight:700 !important}.rs-layer.Concept-Content-Dark a:hover{border-bottom:1px solid transparent !important}@media only screen and (max-width:575px){rs-layer.res-slide-btn{padding:7px 16px !important;   font-size:13px !important}}
		#rev_slider_7_1_wrapper .zeus.tparrows{cursor:pointer; min-width:50px; min-height:50px; position:absolute; display:block; z-index:1000; border-radius:50%;   overflow:hidden; background:rgba(255,62,85,0.84)}#rev_slider_7_1_wrapper .zeus.tparrows:before{font-family:'revicons'; font-size:14px; color:#ffffff; display:block; line-height:50px; text-align:center;   z-index:2; position:relative}#rev_slider_7_1_wrapper .zeus.tparrows.tp-leftarrow:before{content:'\e824'}#rev_slider_7_1_wrapper .zeus.tparrows.tp-rightarrow:before{content:'\e825'}#rev_slider_7_1_wrapper .zeus .tp-title-wrap{background:rgba(0,0,0,0.5); width:100%; height:100%; top:0px; left:0px; position:absolute; opacity:0; transform:scale(0); -webkit-transform:scale(0);  transition:all 0.3s; -webkit-transition:all 0.3s; -moz-transition:all 0.3s;  border-radius:50%}#rev_slider_7_1_wrapper .zeus .tp-arr-imgholder{width:100%; height:100%; position:absolute; top:0px; left:0px; background-position:center center; background-size:cover; border-radius:50%; transform:translatex(-100%); -webkit-transform:translatex(-100%);  transition:all 0.3s; -webkit-transition:all 0.3s; -moz-transition:all 0.3s}#rev_slider_7_1_wrapper .zeus.tp-rightarrow .tp-arr-imgholder{transform:translatex(100%); -webkit-transform:translatex(100%)}#rev_slider_7_1_wrapper .zeus.tparrows.rs-touchhover .tp-arr-imgholder{transform:translatex(0); -webkit-transform:translatex(0); opacity:1}#rev_slider_7_1_wrapper .zeus.tparrows.rs-touchhover .tp-title-wrap{transform:scale(1); -webkit-transform:scale(1); opacity:1}
		#rev_slider_7_1[data-slideactive="rs-22"] .zeus.tparrows{min-width:50px !important;min-height:50px !important}#rev_slider_7_1[data-slideactive="rs-22"] .zeus.tparrows:before{line-height:50px !important;font-size:14px !important}#rev_slider_7_1[data-slideactive="rs-23"] .zeus.tparrows{min-width:50px !important;min-height:50px !important}#rev_slider_7_1[data-slideactive="rs-23"] .zeus.tparrows:before{line-height:50px !important;font-size:14px !important}
		</style>
		<script data-minify="1" type='text/javascript' src="{{asset('assets/frontend/wp-content/cache/min/45/corpkit/wp-content/plugins/classic-elementor-addons-pro/assets/js/customb948.js?ver=1659790913')}}" id='cea-elementor-custom-js' defer></script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-includes/js/dist/vendor/regenerator-runtime.min3937.js?ver=0.13.9')}}' id='regenerator-runtime-js" defer></script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.')}}0' id='wp-polyfill-js'></script>
		
		<script data-minify="1" type='text/javascript' src="{{asset('assets/frontend/wp-content/cache/min/45/corpkit/wp-content/plugins/contact-form-7/includes/js/indexb948.js?ver=1659790913')}}" id='contact-form-7-js' defer></script>
		<script type='text/javascript' id='corpkit-theme-core-js-extra'>
		/* <![CDATA[ */
		var corpkit_ajax_var = {"admin_ajax_url":"https:\/\/elementor.zozothemes.com\/corpkit\/wp-admin\/admin-ajax.php","like_nonce":"2d5afbe24e","fav_nonce":"5b52170d9a","wishlist_remove":"d5926e54d3","product_view":"c10560b7f0","infinite_loader":{"id":"","url":""},"load_posts":"Loading next set of posts.","no_posts":"No more posts to load.","cmt_nonce":"81f4a153f1","mc_nounce":"16e4f5a398","wait":"Wait..","must_fill":"Must Fill Required Details.","valid_email":"Enter Valid Email ID.","cart_update_pbm":"Cart Update Problem.","gmap_stat":"0","user_logged":"0","add_to_cart":"e6ce21c27b","remove_from_cart":"f71f14c595","body_atts":{"scroll_time":"","scroll_dist":"","res_width":1025,"core_stat":false,"menu_offset":60,"mobile_menu_offset":60}};
		/* ]]> */
		</script>
		<script data-minify="1" type='text/javascript' src="{{asset('assets/frontend/wp-content/cache/min/45/corpkit/wp-content/plugins/corpkit-core/assets/js/theme-coreb948.js?ver=1659790913')}}" id='corpkit-theme-core-js' defer></script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-content/plugins/revslider/public/assets/js/rbtools.min8331.js?ver=6.5.18')}}" defer async id='tp-tools-js'></script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-content/plugins/revslider/public/assets/js/rs6.minb02e.js?ver=6.5.25')}}" defer async id='revmin-js'></script>
		<script type='text/javascript' id='rocket-browser-checker-js-after'>
		"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
		</script>
		<script type='text/javascript' id='rocket-preload-links-js-extra'>
		/* <![CDATA[ */
		var RocketPreloadLinksConfig = {"excludeUris":"\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/corpkit\/checkout\/|\/corpkit\/cart\/|\/corpkit\/my-account\/|\/corpkit\/wc-api\/v(.*)|(\/[^\/]+)?\/(index\\.php\/)?wp\\-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/elementor.zozothemes.com\/corpkit","onHoverDelay":"100","rateThrottle":"3"};
		/* ]]> */
		</script>
		<script type='text/javascript' id='rocket-preload-links-js-after'>
		(function() {
		"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("https://elementor.zozothemes.com/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("https://elementor.zozothemes.com/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
		}());
		</script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-content/themes/corpkit/assets/js/jquery.easing.min5152.js?ver=1.0')}}" id='easing-js' defer></script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/js/jquery.appear.min5152.js?ver=1.0')}}" id='appear-js' defer></script>
		<script  type='text/javascript' src="{{asset('assets/frontend/wp-content/themes/corpkit/assets/js/smartresize.min5152.js?ver=1.0')}}" id='smartresize-js' defer></script>
		<script  type='text/javascript' src="{{asset('assets/frontend/wp-content/cache/min/45/corpkit/wp-content/themes/corpkit/assets/js/corpkit-woo-customb948.js?ver=1659790913')}}" id='corpkit-woo-custom-js' defer></script>
		<script data-minify="1" type='text/javascript' src="{{asset('assets/frontend/wp-content/cache/min/45/corpkit/wp-content/themes/corpkit/assets/js/themeb948.js?ver=1659790913')}}" id='corpkit-theme-js' defer></script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-content/themes/corpkit/assets/js/sticky-kit.minc358.js?ver=1.1.3')}}" id='sticky-kit-js' defer></script>
		<script
			type="text/javascript"
			src="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/js/jquery.magnific.popup.minf488.js?ver=1.1.0')}}"
			id="magnific-popup-js"
			defer
			></script>
		<script data-minify="1" type='text/javascript' src="{{asset('assets/frontend/wp-content/cache/min/45/corpkit/wp-content/plugins/classic-elementor-addons-pro/assets/js/cea-float-parallaxb948.js?ver=1659790913')}}" id='cea-float-parallax-js' defer></script>
		<script data-minify="1" type='text/javascript' src="{{asset('assets/frontend/wp-content/cache/min/45/corpkit/wp-content/plugins/classic-elementor-addons-pro/assets/js/custom-frontb948.js?ver=1659790913')}}" id='custom-front-js' defer></script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/js/owl.carousel.min531b.js?ver=2.3.4')}}" id='owl-carousel-js' defer></script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4')}}" id='imagesloaded-js' defer></script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/js/infinite-scroll.pkgd.mind5f7.js?ver=2.0')}}" id='infinite-scroll-js' defer></script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/js/isotope.pkgd.min19ce.js?ver=3.0.3')}}" id='isotope-js' defer></script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/js/jquery.circle.progress.min8d1e.js?ver=1.2.2')}}" id='circle-progress-js' defer></script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-content/plugins/elementor/assets/js/webpack.runtime.mina4f3.js?ver=3.6.8')}}" id='elementor-webpack-runtime-js' defer></script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-content/plugins/elementor/assets/js/frontend-modules.mina4f3.js?ver=3.6.8')}}" id='elementor-frontend-modules-js' defer></script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2')}}" id='elementor-waypoints-js' defer></script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-includes/js/jquery/ui/core.min0028.js?ver=1.13.1d')}}" id='jquery-ui-core-js' defer></script>
		<script type='text/javascript' id='elementor-frontend-js-before'>
		var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.6.8","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"e_import_export":true,"additional_custom_breakpoints":true,"e_hidden_wordpress_widgets":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/elementor.zozothemes.com\/corpkit\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":14666,"title":"Consulting%20Website%20Template%20from%20Zozothemes","excerpt":"","featuredImage":false}};
		</script>
		<script type='text/javascript' src="{{asset('assets/frontend/wp-content/plugins/elementor/assets/js/frontend.mina4f3.js?ver=3.6.8')}}" id='elementor-frontend-js' defer></script>
		<script id="rs-initialisation-scripts">
		var	tpj = jQuery;

		var	revapi7;

		if(window.RS_MODULES === undefined) window.RS_MODULES = {};
		if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
		RS_MODULES.modules["revslider71"] = {once: RS_MODULES.modules["revslider71"]!==undefined ? RS_MODULES.modules["revslider71"].once : undefined, init:function() {
			window.revapi7 = window.revapi7===undefined || window.revapi7===null || window.revapi7.length===0  ? document.getElementById("rev_slider_7_1") : window.revapi7;
			if(window.revapi7 === null || window.revapi7 === undefined || window.revapi7.length==0) { window.revapi7initTry = window.revapi7initTry ===undefined ? 0 : window.revapi7initTry+1; if (window.revapi7initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider71"].init()}); return;}
			window.revapi7 = jQuery(window.revapi7);
			if(window.revapi7.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_7_1"); return;}
			revapi7.revolutionInit({
				revapi:"revapi7",
				DPR:"dpr",
				visibilityLevels:"1240,1024,778,480",
				gridwidth:"1240,1024,778,480",
				gridheight:"950,550,500,480",
				lazyType:"smart",
				perspective:600,
				perspectiveType:"local",
				editorheight:"950,550,500,480",
				responsiveLevels:"1240,1024,778,480",
				stopAtSlide:1,
				stopAfterLoops:0,
				stopLoop:true,
				progressBar:{disableProgressBar:true},
				navigation: {
					mouseScrollNavigation:false,
					wheelCallDelay:1000,
					onHoverStop:false,
					touch: {
						touchenabled:true,
						touchOnDesktop:true,
						swipe_min_touches:50
					},
					arrows: {
						enable:true,
						tmp:"<div class=\"tp-title-wrap\">  	<div class=\"tp-arr-imgholder\"></div> </div>",
						style:"zeus",
						hide_onmobile:true,
						hide_under:"700px",
						rtl:true,
						left: {
							anim:"bottom",
							container:"layergrid",
							v_align:"bottom",
							h_offset:37,
							v_offset:50
						},
						right: {
							anim:"bottom",
							container:"layergrid",
							h_align:"left",
							v_align:"bottom",
							h_offset:97,
							v_offset:50
						}
					}
				},
				parallax: {
					levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,100,55],
					type:"scroll",
					origo:"slidercenter",
					speed:1000
				},
				viewPort: {
					global:true,
					globalDist:"-200px",
					enable:false,
					visible_area:"20%"
				},
				fallbacks: {
					allowHTML5AutoPlayOnAndroid:true
				},
			});

		}} // End of RevInitScript

		if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
		</script>
		
        @yield('js')




	</body>


</html>


