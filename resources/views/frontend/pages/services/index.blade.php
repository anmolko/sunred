@extends('frontend.layouts.master')
@section('title') Services @endsection
@section('css')
    <style>
           
    .corpkit-content > .corpkit-content-inner {
        padding-top: 0;
        padding-bottom: 0;
    }
</style>
@endsection
@section('content')



    <div class="corpkit-content-wrapper">
        <div class="corpkit-content corpkit-page">
            <header id="page-title" class="page-title-wrap">
                <div class="page-title-wrap-inner" data-property="no-video">
                    <span class="page-title-overlay"></span>
                    <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="page-title-inner">
                            <div class="pull-left">
                            <h1 class="page-title">Our Services</h1>
                            <div id="breadcrumb" class="breadcrumb">
                                <a href="/">Home</a>
                                <span class="current">Our Services</span>
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
                <div class="col-md-12">
                    <div id="primary" class="content-area clearfix">
                    <div
                        id="page-10663"
                        class="post-10663 page type-page status-publish hentry"
                    >
                        <div
                        data-elementor-type="wp-page"
                        data-elementor-id="10663"
                        class="elementor elementor-10663"
                        >
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-7f7d0aa elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="7f7d0aa"
                            data-element_type="section"
                            data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                        >
                            <div class="elementor-background-overlay"></div>
                            <div
                            class="elementor-container elementor-column-gap-extended"
                            >
                            <div
                                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ce4dcea"
                                data-id="ce4dcea"
                                data-element_type="column"
                            >
                                <div
                                class="elementor-widget-wrap elementor-element-populated"
                                >
                                <div
                                    class="elementor-element elementor-element-1f06873 elementor-widget elementor-widget-ceaservice"
                                    data-id="1f06873"
                                    data-element_type="widget"
                                    data-widget_type="ceaservice.default"
                                >
                                    <div
                                    class="elementor-widget-container service-wrapper service-style-modern service-light service-normal-model"
                                    >
                                    <div class="row">
                                    @if(count($allservices) > 0)
                                        @foreach($allservices as $service)
                                            <div class="col-lg-4 col-md-4">
                                                <div class="service-inner">
                                                    <div class="post-thumb">
                                                    <a
                                                        href="{{route('service.single',$service->slug)}}"
                                                        class="post-image-link"
                                                        ><img
                                                        src="<?php if(@$service->banner_image){?>{{asset('/images/service/'.@$service->banner_image)}}<?php }?>" alt="services" 
                                                        title="1"
                                                        class="img-fluid squared"
                                                    /></a>
                                                    </div>
                                                    <!-- .post-thumb -->
                                                 
                                                    <div class="entry-title">
                                                    <h4 class="post-title-head">
                                                        <a
                                                        href="{{route('service.single',$service->slug)}}"
                                                        class="post-title"
                                                        >{{ucwords(@$service->title)}}</a
                                                        >
                                                    </h4>
                                                    </div>
                                                    <!-- .entry-title -->
                                                    <div class="post-excerpt">
                                                    <p>
                                                    {!! ucfirst(Str::limit(@$service->sub_description, 80)) !!}...
                                                    </p>
                                                    </div>
                                                    <!-- .post-excerpt -->
                                                </div>
                                                <!-- .service-inner -->
                                            </div>
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
                                    </div>
                                    <!-- .row -->
                                   
                                    <!-- .row -->
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </section>
                        </div>
                    </div>
                    <!-- #post-## -->
                    </div>
                    <!-- #primary -->
                </div>
                <!-- main col -->
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