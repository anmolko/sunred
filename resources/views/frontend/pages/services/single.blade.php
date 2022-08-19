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
   
    </style>
@endsection
@section('seo')
    <title>{{ucfirst(@$singleService->title)}} | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Sunred @endif </title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleService->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleService->meta_tags)}}' />
    <meta property='article:published_time' content='<?php if(@$singleService->updated_at !=''){?>{{@$singleService->updated_at}} <?php }else {?> {{@$singleService->created_at}} <?php }?>' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleService->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleService->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Sunred @endif" />
    <meta property="og:image" content="<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>" />
    <meta property="og:image:url" content="<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>" />
    <meta property="og:image:size" content="300" />
@endsection

@section('content')

	
<div class="corpkit-content-wrapper">
	<div class="corpkit-content cea-service corpkit-cea">
		<header id="page-title" class="page-title-wrap">
		<div class="page-title-wrap-inner" data-property="no-video">
			<span class="page-title-overlay"></span>
			<div class="container">
			<div class="row">
				<div class="col-md-12">
				<div class="page-title-inner">
					<div class="pull-left">
					<h1 class="page-title">{{ucwords(@$singleService->title)}}</h1>
					<div id="breadcrumb" class="breadcrumb">
						<a href="/">Home</a>
						<a href="{{route('service.frontend')}}">Services</a>
						<span class="current">{{ucwords(@$singleService->title)}}</span>
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
			<div id="primary" class="content-area">
				<div class="wrap cea-content">
				<div class="portfolio-content-area">
					<div class="container">
					<div class="row">
						<div class="col-md-8">
						<div class="service">
							<div class="service-info-wrap">
							<div class="service-img">
								<img
								width="1280"
								height="853"
								src="<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>" alt="{{@$singleService->slug}}"
								class="img-fluid wp-post-image"
								srcset="
								<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>         1280w,
								<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>  768w,
								<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>  600w
								"
								sizes="(max-width: 1280px) 100vw, 1280px"
								/>
							</div>

							<div class="service-content">
								<div
								data-elementor-type="wp-post"
								data-elementor-id="10442"
								class="elementor elementor-10442"
								>
								<section
									class="elementor-section elementor-top-section elementor-element elementor-element-3337678a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
									data-id="3337678a"
									data-element_type="section"
								>
									<div
									class="elementor-container elementor-column-gap-no"
									>
									<div
										class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5691f4ba"
										data-id="5691f4ba"
										data-element_type="column"
									>
										<div
										class="elementor-widget-wrap elementor-element-populated"
										>
										<div
											class="elementor-element elementor-element-418e86f1 cea-align-left elementor-widget elementor-widget-ceasectiontitle"
											data-id="418e86f1"
											data-element_type="widget"
											data-widget_type="ceasectiontitle.default"
										>
											<div
											class="elementor-widget-container"
											>
											<div class="section-title-wrapper">
												<div class="title-wrap">
												<h2 class="section-title">
												{{ucwords(@$singleService->title)}}
												</h2>
												</div>
												<!-- .title-wrap -->
												<div class="section-description">
												<p class="section-content">
												{!! @$singleService->description !!}
												</p>
												</div>
												<!-- .section-description -->
											</div>
											<!-- .section-title-wrapper -->
											</div>
										</div>
										</div>
									</div>
									</div>
								</section>
							
								</div>
							</div>

							
							</div>
							<!-- .service-info-wrap -->
						</div>
						<!-- .service -->
						</div>
						<!-- .col -->

						<div class="col-md-4">
						@include('frontend.pages.services.sidebar')            
							
						<!-- #secondary -->
						</div>
						<!-- .col -->
					</div>
					<!-- .row -->
					</div>
					<!-- .container -->
				</div>
				<!-- .portfolio-content-area -->
				</div>
				<!-- .wrap -->
			</div>
		<!-- .content-area -->
		</div>
		<!-- .corpkit-content-inner -->
	</div>
<!-- .corpkit-content -->
</div>
		
@endsection