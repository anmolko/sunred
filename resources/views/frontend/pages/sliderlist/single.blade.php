@extends('frontend.layouts.master')
@section('title')  {{ucwords(@$singleSlider->list_header)}} @endsection

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
					<h1 class="page-title">{{ucwords(@$singleSlider->list_header)}}</h1>
					<div id="breadcrumb" class="breadcrumb">
						<a href="/">Home</a>
						<a href="{{url('/'.@$singleSlider->section->page->slug)}}">{{ucwords(@$singleSlider->section->page->name)}}</a></a>
						<span class="current">{{ucwords(@$singleSlider->list_header)}}</span>
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
								src="{{ asset('/images/section_elements/list_1/'.$singleSlider->list_image) }}" alt="{{@$singleSlider->list_header}}"
								class="img-fluid wp-post-image"
								srcset="
								{{ asset('/images/section_elements/list_1/'.$singleSlider->list_image) }}         1280w,
								{{ asset('/images/section_elements/list_1/'.$singleSlider->list_image) }}  768w,
								{{ asset('/images/section_elements/list_1/'.$singleSlider->list_image) }}  600w
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
												
												<!-- .title-wrap -->
												<div class="section-description">
												<p class="section-content">
												{{@$singleSlider->list_description}}
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
						@include('frontend.pages.sliderlist.sidebar')            
							
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