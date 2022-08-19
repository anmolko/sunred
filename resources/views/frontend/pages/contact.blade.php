
@extends('frontend.layouts.master')
@section('title') Contact Us @endsection
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
                    <h1 class="page-title">Contact</h1>
                    <div id="breadcrumb" class="breadcrumb">
                        <a href="/">Home</a>
                        <span class="current">Contact</span>
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
                    id="page-10630"
                    class="post-10630 page type-page status-publish hentry"
                >
                    <div
                    data-elementor-type="wp-page"
                    data-elementor-id="10630"
                    class="elementor elementor-10630"
                    >
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-4907a19 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="4907a19"
                        data-element_type="section"
                        data-settings='{"stretch_section":"section-stretched"}'
                    >
                        <div
                        class="elementor-container elementor-column-gap-wide"
                        >
                        <div
                            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0316adc"
                            data-id="0316adc"
                            data-element_type="column"
                        >
                            <div
                            class="elementor-widget-wrap elementor-element-populated"
                            >
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-0c6c7ef elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="0c6c7ef"
                                data-element_type="section"
                            >
                                <div
                                class="elementor-container elementor-column-gap-default"
                                >
                                <div
                                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b71dc83"
                                    data-id="b71dc83"
                                    data-element_type="column"
                                >
                                    <div
                                    class="elementor-widget-wrap elementor-element-populated"
                                    >
                                    <div
                                        class="elementor-element elementor-element-cca7b93 cea-align-center elementor-widget elementor-widget-ceasectiontitle"
                                        data-id="cca7b93"
                                        data-element_type="widget"
                                        data-widget_type="ceasectiontitle.default"
                                    >
                                        <div
                                        class="elementor-widget-container"
                                        >
                                        <div class="section-title-wrapper">
                                            <div class="title-wrap">
                                            <h6 class="sub-title">
                                                Get in Touch
                                            </h6>
                                            <h2 class="section-title">
                                                Send Your Message
                                            </h2>
                                            </div>
                                            <!-- .title-wrap -->
                                            <div
                                            class="section-description"
                                            ></div>
                                            <!-- .section-description -->
                                        </div>
                                        <!-- .section-title-wrapper -->
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-c395371 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="c395371"
                                data-element_type="section"
                            >
                                <div
                                class="elementor-container elementor-column-gap-default"
                                >
                                <div
                                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-45835b1"
                                    data-id="45835b1"
                                    data-element_type="column"
                                >
                                    <div
                                    class="elementor-widget-wrap elementor-element-populated"
                                    >
                                    <div
                                        class="elementor-element elementor-element-273de34 cea-view-default elementor-widget elementor-widget-ceafeaturebox"
                                        data-id="273de34"
                                        data-element_type="widget"
                                        data-widget_type="ceafeaturebox.default"
                                    >
                                        <div
                                        class="elementor-widget-container feature-box-wrapper feature-box-modern"
                                        >
                                        <div class="feature-box-inner">
                                            <div class="cea-featured-icon">
                                            <i
                                                aria-hidden="true"
                                                class="ti ti-location-pin"
                                            ></i>
                                            </div>
                                            <h4 class="feature-box-title">
                                            Our Location
                                            </h4>
                                            <div class="fbox-content">
                                            @if(!empty(@$setting_data->address)) {{@$setting_data->address}} @else Kathmandu, Nepal @endif
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6757160"
                                    data-id="6757160"
                                    data-element_type="column"
                                >
                                    <div
                                    class="elementor-widget-wrap elementor-element-populated"
                                    >
                                    <div
                                        class="elementor-element elementor-element-75371fa cea-view-default elementor-widget elementor-widget-ceafeaturebox"
                                        data-id="75371fa"
                                        data-element_type="widget"
                                        data-widget_type="ceafeaturebox.default"
                                    >
                                        <div
                                        class="elementor-widget-container feature-box-wrapper feature-box-modern"
                                        >
                                        <div class="feature-box-inner">
                                            <div class="cea-featured-icon">
                                            <i
                                                aria-hidden="true"
                                                class="ti ti-headphone-alt"
                                            ></i>
                                            </div>
                                            <h4 class="feature-box-title">
                                            Phone Number
                                            </h4>
                                            <div class="fbox-content">
                                            <a href="tel:@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif"
                                                >@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif</a
                                            >
                                            
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9ce6fdb"
                                    data-id="9ce6fdb"
                                    data-element_type="column"
                                >
                                    <div
                                    class="elementor-widget-wrap elementor-element-populated"
                                    >
                                    <div
                                        class="elementor-element elementor-element-1356b68 cea-view-default elementor-widget elementor-widget-ceafeaturebox"
                                        data-id="1356b68"
                                        data-element_type="widget"
                                        data-widget_type="ceafeaturebox.default"
                                    >
                                        <div
                                        class="elementor-widget-container feature-box-wrapper feature-box-modern"
                                        >
                                        <div class="feature-box-inner">
                                            <div class="cea-featured-icon">
                                            <i
                                                aria-hidden="true"
                                                class="ti ti-email"
                                            ></i>
                                            </div>
                                            <h4 class="feature-box-title">
                                            Email Address
                                            </h4>
                                            <div class="fbox-content">
                                            <a
                                                href="mailto:@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif"
                                                >@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif</a
                                            >
                                           
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </section>
                            </div>
                        </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-7f7d0aa elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="7f7d0aa"
                        data-element_type="section"
                        data-settings='{"stretch_section":"section-stretched"}'
                    >
                        <div
                        class="elementor-container elementor-column-gap-extended"
                        >
                        <div
                            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ce4dcea"
                            data-id="ce4dcea"
                            data-element_type="column"
                        >
                            <div
                            class="elementor-widget-wrap elementor-element-populated"
                            >
                            <div
                                class="elementor-element elementor-element-f4dc60b elementor-widget elementor-widget-contactform"
                                data-id="f4dc60b"
                                data-element_type="widget"
                                data-widget_type="contactform.default"
                            >
                                <div class="elementor-widget-container">
                                <div
                                    class="contact-form-wrapper cf-style-classic"
                                >
                                    <div class="contact-form">
                                    <div
                                        role="form"
                                        class="wpcf7"
                                        id="wpcf7-f13724-p10630-o1"
                                        lang="en-US"
                                        dir="ltr"
                                    >
                                   
                                        <form
                                        action="{{route('contact.store')}}"
                                        method="post"
                                        class="wpcf7-form init"
                                        novalidate="novalidate"
                                        data-status="init"
                                        >
                                        @csrf
                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-success alert-block">
                                                <strong class="sent-success">{{ $message }}</strong>
                                            </div>
                                        @endif
                                        @if ($message = Session::get('error'))
                                            <div class="alert alert-danger alert-block">
                                                <strong class="error-sent">{{ $message }}</strong>
                                            </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-md-12">
                                            <span
                                                class="wpcf7-form-control-wrap"
                                                data-name="subject"
                                                > 
                                            <select class="form-select subject" name="subject" aria-label="Default select example">
                                                <option value="" selected>This question is about...</option>	
                                                <option value="Trade Inquiry">Trade Inquiry</option>
                                                <option value="Ask a question">Ask a question</option>
                                                <option value="Share Feedback">Share Feedback</option>
                                                <option value="Career Enquiry">Career Enquiry</option>
                                            </select>
                                            </span><br />
                                            <span
                                                class="wpcf7-form-control-wrap"
                                                data-name="name"
                                                ><input
                                                type="text"
                                                name="name"
                                                value=""
                                                size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required="true"
                                                aria-invalid="false"
                                                placeholder="Name" /></span
                                            ><br />
                                            <span
                                                class="wpcf7-form-control-wrap"
                                                data-name="email"
                                                ><input
                                                type="email"
                                                name="email"
                                                value=""
                                                size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                aria-required="true"
                                                aria-invalid="false"
                                                placeholder="Email" /></span
                                            ><br />
                                            <span
                                                class="wpcf7-form-control-wrap"
                                                data-name="phone"
                                                ><input
                                                type="tel"
                                                name="phone"
                                                value=""
                                                size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                                aria-invalid="false"
                                                placeholder="Phone"
                                            /></span>
                                            </div>
                                            <div class="col-md-12">
                                            <span
                                                class="wpcf7-form-control-wrap"
                                                data-name="message"
                                            >
                                                <textarea
                                                name="message"
                                                cols="40"
                                                rows="10"
                                                class="wpcf7-form-control wpcf7-textarea"
                                                aria-invalid="false"
                                                placeholder="Your message"
                                                ></textarea>
                                            </span>
                                            </div>
                                            <div class="col-md-12">
                                            <input
                                                type="submit"
                                                value="Send Now"
                                                class="wpcf7-form-control has-spinner wpcf7-submit"
                                            />
                                            </div>
                                        </div>
                                        <div
                                            class="wpcf7-response-output"
                                            aria-hidden="true"
                                        >
                                    
                                        </div>
                                        </form>
                                    </div>
                                    </div>
                                    <!-- .contact-form -->
                                </div>
                                <!-- .contact-form-wrapper -->
                                </div>
                            </div>
                            </div>
                        </div>
                        <div
                            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-627f269"
                            data-id="627f269"
                            data-element_type="column"
                        >
                            <div
                            class="elementor-widget-wrap elementor-element-populated"
                            >
                            <div
                                class="elementor-element elementor-element-bad8c14 elementor-widget elementor-widget-google_maps"
                                data-id="bad8c14"
                                data-element_type="widget"
                                data-widget_type="google_maps.default"
                            >
                                <div class="elementor-widget-container">
                                <style>
                                    /*! elementor - v3.6.8 - 27-07-2022 */
                                    .elementor-widget-google_maps
                                    .elementor-widget-container {
                                    overflow: hidden;
                                    }
                                    .elementor-widget-google_maps iframe {
                                    height: 300px;
                                    }
                                </style>
                                <div class="elementor-custom-embed">
                            
                                @if(@$setting_data->google_map)
                                <iframe frameborder="0" width="100%" height="450px"scrolling="no" marginheight="0" marginwidth="0" src="{{@$setting_data->google_map}}"
                                            title="%3$s" aria-label="%3$s"></iframe>
                                @endif
                                </div>
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
