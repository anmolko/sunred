@extends('frontend.layouts.master')
@section('title') {{ucwords(@$page_detail->name)}} @endsection
@section('css')
    <style>
           
    .corpkit-content > .corpkit-content-inner {
      padding-top: 0;
      padding-bottom: 0;
    }

    .portfolio-content-area {
      padding: 120px 0px 100px 0px;
  }

  .custom-editor .media{
        display: block;
    }

    .custom-editor{
        font-size: 1.1875rem;
        text-align: justify;
    }
   
    .elementor-811 .elementor-element.elementor-element-6deeee44 {
        padding: 0px 0px 0px 0px;
    }

    .elementor-widget-google_maps iframe {
        height: 400px !important;
    }

    section.map-description.elementor-section.elementor-top-section.elementor-element.elementor-element-7f7d0aa.elementor-section-stretched.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default {
        background-color: #f7f7f7;
    }

    .gallery.post-thumb.post-overlay-active, .gallery2.post-thumb.post-overlay-active {
          height: 270px;
      }

     .gallery2.post-thumb.post-overlay-active {
          height: 290px;
      }
      .elementor img.sunred-gallery {
          width: 100%;
          height: 100%;
          object-fit: cover;
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
                        <h1 class="page-title">{{ucwords(@$page_detail->name)}}</h1>
                        <div id="breadcrumb" class="breadcrumb">
                            <a href="/">Home</a>
                            <span class="current">{{ucwords(@$page_detail->name)}}</span>
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
                        id="page-10786"
                        class="post-10786 page type-page status-publish hentry"
                    >
                        <div
                        data-elementor-type="wp-page"
                        data-elementor-id="10786"
                        class="elementor elementor-10786"
                        >
                        @foreach($sections as $key=>$value)
                            @if($value == "basic_section")
                                <!-- .Basic Section -->
                                <section
                                  class="elementor-section elementor-top-section elementor-element elementor-element-b05b2c2 elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                  data-id="b05b2c2"
                                  data-element_type="section"
                                  data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                                >
                                  <div
                                    class="elementor-container elementor-column-gap-extended"
                                  >

                                  @if(@$basic_elements->list_image == "left")

                                    <div
                                      class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-eb57d07"
                                      data-id="eb57d07"
                                      data-element_type="column"
                                    >
                                      <div
                                        class="elementor-widget-wrap elementor-element-populated"
                                      >
                                        <div
                                          class="elementor-element elementor-element-93faf8b elementor-widget elementor-widget-image"
                                          data-id="93faf8b"
                                          data-element_type="widget"
                                          data-widget_type="image.default"
                                        >
                                          <div class="elementor-widget-container">
                                            <style>
                                              /*! elementor - v3.6.8 - 27-07-2022 */
                                              .elementor-widget-image {
                                                text-align: center;
                                              }
                                              .elementor-widget-image a {
                                                display: inline-block;
                                              }
                                              .elementor-widget-image
                                                a
                                                img[src$=".svg"] {
                                                width: 48px;
                                              }
                                              .elementor-widget-image img {
                                                vertical-align: middle;
                                                display: inline-block;
                                              }
                                            </style>
                                            <img
                                              width="980"
                                              height="920"
                                              src="{{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }}"
                                              class="attachment-full size-full"
                                              alt=""
                                              loading="lazy"
                                              srcset="
                                              {{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }}         980w,
                                              {{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }} 768w,
                                              {{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }} 600w
                                              "
                                              sizes="(max-width: 980px) 100vw, 980px"
                                            />
                                          </div>
                                        </div>
                                        
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-26e2c72"
                                      data-id="26e2c72"
                                      data-element_type="column"
                                    >
                                      <div
                                        class="elementor-widget-wrap elementor-element-populated"
                                      >
                                        <div
                                          class="elementor-element elementor-element-048ed16 cea-align-left elementor-widget elementor-widget-ceasectiontitle"
                                          data-id="048ed16"
                                          data-element_type="widget"
                                          data-widget_type="ceasectiontitle.default"
                                        >
                                          <div class="elementor-widget-container">
                                            <div class="section-title-wrapper">
                                              <div class="title-wrap">
                                              
                                                @if(@$basic_elements->heading)
                                                  <h6 class="sub-title">{{ucwords(@$basic_elements->heading)}}</h6>
                                                  @endif
                                                  @if(@$basic_elements->subheading)
                                                  <h2 class="section-title">{{ucfirst(@$basic_elements->subheading)}}</h2>
                                                  @endif
                                              </div>
                                              <!-- .title-wrap -->
                                              <div class="section-description">
                                                <div class="section-content">
                                                {!! @$basic_elements->description !!}
                                                </div>
                                              </div>
                                              <!-- .section-description -->
                                            </div>
                                            <!-- .section-title-wrapper -->
                                          </div>
                                        </div>
                                        @if(@$basic_elements->button)

                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-9c60903 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9c60903" data-element_type="section">
                                          <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0a39a51" data-id="0a39a51" data-element_type="column">
                                              <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-a698926 elementor-widget elementor-widget-ceabutton" data-id="a698926" data-element_type="widget" data-widget_type="ceabutton.default">
                                                  <div class="elementor-widget-container cea-button-wrapper">
                                                    <div class="cea-button-wrapper">
                                                      <a href="{{@$basic_elements->button_link}}" class="cea-button-link elementor-button cea-button elementor-size-sm">
                                                        <span class="cea-button-content-wrapper">
                                                          <span class="cea-button-icon cea-align-icon-">
                                                          </span>
                                                          <span class="cea-button-text">{{ucwords(@$basic_elements->button)}}</span>
                                                        </span>
                                                      </a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </section>
                                        @endif

                                      </div>
                                    </div>
                                  @else

                                    <div
                                      class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-26e2c72"
                                      data-id="26e2c72"
                                      data-element_type="column"
                                    >
                                      <div
                                        class="elementor-widget-wrap elementor-element-populated"
                                      >
                                        <div
                                          class="elementor-element elementor-element-048ed16 cea-align-left elementor-widget elementor-widget-ceasectiontitle"
                                          data-id="048ed16"
                                          data-element_type="widget"
                                          data-widget_type="ceasectiontitle.default"
                                        >
                                          <div class="elementor-widget-container">
                                            <div class="section-title-wrapper">
                                              <div class="title-wrap">
                                              
                                                @if(@$basic_elements->heading)
                                                  <h6 class="sub-title">{{ucwords(@$basic_elements->heading)}}</h6>
                                                  @endif
                                                  @if(@$basic_elements->subheading)
                                                  <h2 class="section-title">{{ucfirst(@$basic_elements->subheading)}}</h2>
                                                  @endif
                                              </div>
                                              <!-- .title-wrap -->
                                              <div class="section-description">
                                                <div class="section-content">
                                                {!! @$basic_elements->description !!}
                                                </div>
                                              </div>
                                              <!-- .section-description -->
                                            </div>
                                            <!-- .section-title-wrapper -->
                                          </div>
                                        </div>
                                        @if(@$basic_elements->button)

                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-9c60903 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9c60903" data-element_type="section">
                                          <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0a39a51" data-id="0a39a51" data-element_type="column">
                                              <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-a698926 elementor-widget elementor-widget-ceabutton" data-id="a698926" data-element_type="widget" data-widget_type="ceabutton.default">
                                                  <div class="elementor-widget-container cea-button-wrapper">
                                                    <div class="cea-button-wrapper">
                                                      <a href="{{@$basic_elements->button_link}}" class="cea-button-link elementor-button cea-button elementor-size-sm">
                                                        <span class="cea-button-content-wrapper">
                                                          <span class="cea-button-icon cea-align-icon-">
                                                          </span>
                                                          <span class="cea-button-text">{{ucwords(@$basic_elements->button)}}</span>
                                                        </span>
                                                      </a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </section>
                                        @endif

                                      </div>
                                    </div>

                                    
                                    <div
                                      class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-eb57d07"
                                      data-id="eb57d07"
                                      data-element_type="column"
                                    >
                                      <div
                                        class="elementor-widget-wrap elementor-element-populated"
                                      >
                                        <div
                                          class="elementor-element elementor-element-93faf8b elementor-widget elementor-widget-image"
                                          data-id="93faf8b"
                                          data-element_type="widget"
                                          data-widget_type="image.default"
                                        >
                                          <div class="elementor-widget-container">
                                            <style>
                                              /*! elementor - v3.6.8 - 27-07-2022 */
                                              .elementor-widget-image {
                                                text-align: center;
                                              }
                                              .elementor-widget-image a {
                                                display: inline-block;
                                              }
                                              .elementor-widget-image
                                                a
                                                img[src$=".svg"] {
                                                width: 48px;
                                              }
                                              .elementor-widget-image img {
                                                vertical-align: middle;
                                                display: inline-block;
                                              }
                                            </style>
                                            <img
                                              width="980"
                                              height="920"
                                              src="{{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }}"
                                              class="attachment-full size-full"
                                              alt=""
                                              loading="lazy"
                                              srcset="
                                              {{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }}         980w,
                                              {{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }} 768w,
                                              {{asset('/images/section_elements/basic_section/'.@$basic_elements->image) }} 600w
                                              "
                                              sizes="(max-width: 980px) 100vw, 980px"
                                            />
                                          </div>
                                        </div>
                                        
                                      </div>
                                    </div>
                                  @endif
                                  </div>
                                </section>
                              @endif

                              @if($value == "call_to_action_1")
                                <!-- .Call to action -->
                                <section
                                  class="elementor-section elementor-top-section elementor-element elementor-element-4f31d32 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                  data-id="4f31d32"
                                  data-element_type="section"
                                  data-settings='{"background_background":"classic"}'
                                >
                                  <div class="elementor-background-overlay"></div>
                                  <div
                                    class="elementor-container elementor-column-gap-no"
                                  >
                                    <div
                                      class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2566035"
                                      data-id="2566035"
                                      data-element_type="column"
                                    >
                                      <div class="elementor-widget-wrap"></div>
                                    </div>
                                    <div
                                      class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-71da33a"
                                      data-id="71da33a"
                                      data-element_type="column"
                                    >
                                      <div
                                        class="elementor-widget-wrap elementor-element-populated"
                                      >
                                        <div
                                          class="elementor-element elementor-element-987ef2f cea-align-center elementor-widget elementor-widget-ceasectiontitle"
                                          data-id="987ef2f"
                                          data-element_type="widget"
                                          data-widget_type="ceasectiontitle.default"
                                        >
                                          <div class="elementor-widget-container">
                                            <div class="section-title-wrapper">
                                              <div class="title-wrap">
                                                <h2 class="section-title">
                                                “{{ucfirst(@$call1_elements->description)}}”
                                                </h2>
                                              </div>
                                              <!-- .title-wrap -->
                                              @if(@$call1_elements->button)

                                              <div class="section-description">
                                                <div class="cea-button-wrapper">
                                                  <a
                                                    href="{{@$call1_elements->button_link}}"
                                                    class="cea-button-link elementor-button cea-button elementor-size-sm"
                                                  >
                                                    <span
                                                      class="cea-button-content-wrapper"
                                                    >
                                                      <span
                                                        class="cea-button-icon cea-align-icon-"
                                                      >
                                                      </span>
                                                      <span class="cea-button-text"
                                                        >{{ucwords(@$call1_elements->button)}}</span
                                                      >
                                                    </span>
                                                  </a>
                                                </div>
                                              </div>
                                              @endif

                                              <!-- .section-description -->
                                            </div>
                                            <!-- .section-title-wrapper -->
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-73f4214"
                                      data-id="73f4214"
                                      data-element_type="column"
                                    >
                                      <div class="elementor-widget-wrap"></div>
                                    </div>
                                  </div>
                                </section>
                              @endif

                              @if($value == "background_image_section")

                                <!-- .Background image -->
                                <section
                                  class="elementor-section elementor-top-section elementor-element elementor-element-e3f39bd elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                  data-id="e3f39bd"
                                  data-element_type="section"
                                  data-settings='{"stretch_section":"section-stretched","background_background":"classic","shape_divider_top":"waves","shape_divider_top_negative":"yes"}'
                                  style="background-image: url({{asset('/images/section_elements/bgimage_section/'.@$bgimage_elements->image)}});" 
                                >
                                  <div class="elementor-background-overlay"></div>
                                  <div
                                    class="elementor-shape elementor-shape-top"
                                    data-negative="true"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 1000 100"
                                      preserveAspectRatio="none"
                                    >
                                      <path
                                        class="elementor-shape-fill"
                                        d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
                                            c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
                                            c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"
                                      />
                                    </svg>
                                  </div>
                                  <div
                                    class="elementor-container elementor-column-gap-default"
                                  >
                                    <div
                                      class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2be9c20 elementor-hidden-tablet elementor-hidden-mobile"
                                      data-id="2be9c20"
                                      data-element_type="column"
                                    >
                                      <div
                                        class="elementor-widget-wrap elementor-element-populated"
                                      >
                                        <div
                                          class="elementor-element elementor-element-c457521 elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image"
                                          data-id="c457521"
                                          data-element_type="widget"
                                          data-widget_type="image.default"
                                        >
                                          <div class="elementor-widget-container">
                                            <img
                                              width="174"
                                              height="174"
                                              src="{{asset('assets/frontend/wp-content/uploads/sites/45/2021/08/shape-6-1.png')}}"
                                              class="attachment-large size-large"
                                              alt=""
                                              loading="lazy"
                                              srcset="
                                              {{asset('assets/frontend/wp-content/uploads/sites/45/2021/08/shape-6-1.png')}}         174w,
                                              {{asset('assets/frontend/wp-content/uploads/sites/45/2021/08/shape-6-1.png')}}   80w,
                                              {{asset('assets/frontend/wp-content/uploads/sites/45/2021/08/shape-6-1.png')}} 100w
                                              "
                                              sizes="(max-width: 174px) 100vw, 174px"
                                            />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-926584f"
                                      data-id="926584f"
                                      data-element_type="column"
                                      data-settings='{"background_background":"classic"}'
                                    >
                                      <div
                                        class="elementor-widget-wrap elementor-element-populated"
                                      >
                                        <div class="elementor-background-overlay"></div>
                                      
                                        <div
                                          class="elementor-element elementor-element-4f2cb63 cea-btn-align-center cea-align-center elementor-widget elementor-widget-ceasectiontitle"
                                          data-id="4f2cb63"
                                          data-element_type="widget"
                                          data-widget_type="ceasectiontitle.default"
                                        >
                                          <div class="elementor-widget-container">
                                            <div class="section-title-wrapper">
                                              <div class="title-wrap">
                                             
                                                  @if(@$bgimage_elements->heading)

                                                      <h2 class="section-title">{{ucwords(@$bgimage_elements->heading)}}</h2>
                                                  @endif
                                              </div>
                                              <!-- .title-wrap -->
                                              @if(@$bgimage_elements->button)

                                              <div class="section-description">
                                                <div class="cea-button-wrapper">
                                                  <a
                                                    href="{{@$bgimage_elements->button_link}}"
                                                    class="cea-button-link elementor-button cea-button elementor-size-sm"
                                                  >
                                                    <span
                                                      class="cea-button-content-wrapper"
                                                    >
                                                      <span
                                                        class="cea-button-icon cea-align-icon-"
                                                      >
                                                      </span>
                                                      <span class="cea-button-text"
                                                        >{{ucwords(@$bgimage_elements->button)}}</span
                                                      >
                                                    </span>
                                                  </a>
                                                </div>
                                              </div>
                                              @endif

                                              <!-- .section-description -->
                                            </div>
                                            <!-- .section-title-wrapper -->
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2fa53de elementor-hidden-tablet elementor-hidden-mobile"
                                      data-id="2fa53de"
                                      data-element_type="column"
                                    >
                                      <div class="elementor-widget-wrap"></div>
                                    </div>
                                  </div>
                                </section>

                              @endif

                              @if($value == "flash_cards")

                                  <!-- Mission Vision Value-->
                                  <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-4e98a96 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="4e98a96"
                                    data-element_type="section"
                                    data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                                  >
                                    <div
                                      class="elementor-container elementor-column-gap-wide"
                                    >
                                      <div
                                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e663137"
                                        data-id="e663137"
                                        data-element_type="column"
                                      >
                                        <div
                                          class="elementor-widget-wrap elementor-element-populated"
                                        >
                                          <div
                                            class="elementor-element elementor-element-d0de84f d-none elementor-widget elementor-widget-heading"
                                            data-id="d0de84f"
                                            data-element_type="widget"
                                            data-widget_type="heading.default"
                                          >
                                            <div class="elementor-widget-container">
                                              <style>
                                                /*! elementor - v3.6.8 - 27-07-2022 */
                                                .elementor-heading-title {
                                                  padding: 0;
                                                  margin: 0;
                                                  line-height: 1;
                                                }
                                                .elementor-widget-heading
                                                  .elementor-heading-title[class*="elementor-size-"]
                                                  > a {
                                                  color: inherit;
                                                  font-size: inherit;
                                                  line-height: inherit;
                                                }
                                                .elementor-widget-heading
                                                  .elementor-heading-title.elementor-size-small {
                                                  font-size: 15px;
                                                }
                                                .elementor-widget-heading
                                                  .elementor-heading-title.elementor-size-medium {
                                                  font-size: 19px;
                                                }
                                                .elementor-widget-heading
                                                  .elementor-heading-title.elementor-size-large {
                                                  font-size: 29px;
                                                }
                                                .elementor-widget-heading
                                                  .elementor-heading-title.elementor-size-xl {
                                                  font-size: 39px;
                                                }
                                                .elementor-widget-heading
                                                  .elementor-heading-title.elementor-size-xxl {
                                                  font-size: 59px;
                                                }
                                              </style>
                                              <h2
                                                class="elementor-heading-title elementor-size-default"
                                              >
                                                about us
                                              </h2>
                                            </div>
                                          </div>
                                          <div
                                            class="elementor-element elementor-element-37c242e cea-align-center elementor-widget elementor-widget-ceasectiontitle"
                                            data-id="37c242e"
                                            data-element_type="widget"
                                            data-widget_type="ceasectiontitle.default"
                                          >
                                            <div class="elementor-widget-container">
                                              <div class="section-title-wrapper">
                                                <div class="title-wrap">
                                                  <h6 class="sub-title">Our Process </h6>
                                                  <h2 class="section-title">
                                                     Mission, Vision & Value
                                                  </h2>
                                                </div>
                                                <!-- .title-wrap -->
                                                <div class="section-description"></div>
                                                <!-- .section-description -->
                                              </div>
                                              <!-- .section-title-wrapper -->
                                            </div>
                                          </div>
                                          <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-c7dd046 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="c7dd046"
                                            data-element_type="section"
                                          >
                                            <div
                                              class="elementor-container elementor-column-gap-extended"
                                            >
                                              @foreach(@$flash_elements as $flash_element)

                                                @if($loop->index == 0)
                                                  <div
                                                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-54cccf9"
                                                    data-id="54cccf9"
                                                    data-element_type="column"
                                                  >
                                                    <div
                                                      class="elementor-widget-wrap elementor-element-populated"
                                                    >
                                                      <div
                                                        class="elementor-element elementor-element-ca8370a shape cea-view-default elementor-widget elementor-widget-ceafeaturebox"
                                                        data-id="ca8370a"
                                                        data-element_type="widget"
                                                        data-widget_type="ceafeaturebox.default"
                                                      >
                                                        <div
                                                          class="elementor-widget-container feature-box-wrapper feature-box-classic"
                                                        >
                                                          <div class="feature-box-inner">
                                                          
                                                            <h4 class="feature-box-title">
                                                            {{ucwords(@$flash_element->list_header)}}
                                                            </h4>
                                                            <div class="fbox-content">
                                                              
                                                              {{ucfirst(@$flash_element->list_description) }}
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                @endif

                                                @if($loop->index == 1)
                                                  <div
                                                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b79a485"
                                                    data-id="b79a485"
                                                    data-element_type="column"
                                                  >
                                                    <div
                                                      class="elementor-widget-wrap elementor-element-populated"
                                                    >
                                                      <div
                                                        class="elementor-element elementor-element-f512176 shape cea-view-default elementor-widget elementor-widget-ceafeaturebox"
                                                        data-id="f512176"
                                                        data-element_type="widget"
                                                        data-widget_type="ceafeaturebox.default"
                                                      >
                                                        <div
                                                          class="elementor-widget-container feature-box-wrapper feature-box-classic"
                                                        >
                                                          <div class="feature-box-inner">
                                                        
                                                            <h4 class="feature-box-title">
                                                            {{ucwords(@$flash_element->list_header)}}
                                                            </h4>
                                                            <div class="fbox-content">
                                                            {{ucfirst(@$flash_element->list_description) }}
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                @endif

                                                @if($loop->index == 2)
                                                <div
                                                  class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3b6356a"
                                                  data-id="3b6356a"
                                                  data-element_type="column"
                                                >
                                                  <div
                                                    class="elementor-widget-wrap elementor-element-populated"
                                                  >
                                                    <div
                                                      class="elementor-element elementor-element-202c207 shape cea-view-default elementor-widget elementor-widget-ceafeaturebox"
                                                      data-id="202c207"
                                                      data-element_type="widget"
                                                      data-widget_type="ceafeaturebox.default"
                                                    >
                                                      <div
                                                        class="elementor-widget-container feature-box-wrapper feature-box-classic"
                                                      >
                                                        <div class="feature-box-inner">
                                                        
                                                          <h4 class="feature-box-title">
                                                          {{ucwords(@$flash_element->list_header)}}
                                                          </h4>
                                                          <div class="fbox-content">
                                                          {{ucfirst(@$flash_element->list_description) }}
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                @endif
                                              @endforeach

                                            </div>
                                          </section>
                                        </div>
                                      </div>
                                    </div>
                                  </section>

                              @endif

                              @if($value == "simple_header_and_description")
                                <!--- Simple Header description-->
                                <div class="portfolio-content-area">
                                    <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="portfolio-single portfolio-model-2">
                                            <div class="row">
                                            <div class="col-sm-12">
                                                <div
                                                class="elementor-element elementor-element-37c242e cea-align-center elementor-widget elementor-widget-ceasectiontitle"
                                                data-id="37c242e"
                                                data-element_type="widget"
                                                data-widget_type="ceasectiontitle.default"
                                                >
                                                <div class="elementor-widget-container">
                                                    <div class="section-title-wrapper">
                                                    <div class="title-wrap">
                                                    @if(@$header_descp_elements->heading)

                                                    <h6 class="sub-title">{{ucwords(@$header_descp_elements->heading)}}</h6>
                                                    @endif

                                                    @if(@$header_descp_elements->subheading)
                                                    <h2 class="section-title">{{@$header_descp_elements->subheading}}</h2>
                                                    @endif
                                                    </div>
                                                    <!-- .title-wrap -->
                                                    <div class="section-description"></div>
                                                    <!-- .section-description -->
                                                    </div>
                                                    <!-- .section-title-wrapper -->
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- .row -->
                                            <div class="row portfolio-details">
                                            <div class="col-sm-12">
                                                <div class="portfolio-content-wrap">
                                                <div class="portfolio-content">
                                                    <div
                                                    data-elementor-type="wp-post"
                                                    data-elementor-id="811"
                                                    class="elementor elementor-811"
                                                    >
                                                    <section
                                                        class="elementor-section elementor-top-section elementor-element elementor-element-6deeee44 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="6deeee44"
                                                        data-element_type="section"
                                                    >
                                                        <div
                                                        class="elementor-container elementor-column-gap-no"
                                                        >
                                                        <div
                                                            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2e0193e8"
                                                            data-id="2e0193e8"
                                                            data-element_type="column"
                                                        >
                                                            <div
                                                            class="elementor-widget-wrap elementor-element-populated"
                                                            >
                                                            <div
                                                                class="elementor-element elementor-element-265642cf elementor-widget elementor-widget-text-editor"
                                                                data-id="265642cf"
                                                                data-element_type="widget"
                                                                data-widget_type="text-editor.default"
                                                            >
                                                                <div class="elementor-widget-container custom-editor">
                                                                <style>
                                                                    /*! elementor - v3.7.1 - 14-08-2022 */
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
                                                                      {!! @$header_descp_elements->description !!}

                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </section>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- .row -->
                                        </div>
                                        <!-- .portfolio-single -->
                                        </div>
                                        <!-- .col -->
                                    </div>
                                    <!-- .row -->
                                    </div>
                                    <!-- .container -->
                                </div>
                              @endif

                              @if($value == "map_and_description")

                                <!--- Map and description-->
                                <section
                                  class="map-description elementor-section elementor-top-section elementor-element elementor-element-7f7d0aa elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                  data-id="7f7d0aa"
                                  data-element_type="section"
                                  data-settings='{"stretch_section":"section-stretched"}'
                                  style="width: 1600px; left: -230px"
                                >
                                  <div class="elementor-container elementor-column-gap-extended">
                                    <div
                                      class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1dbd09c"
                                      data-id="1dbd09c"
                                      data-element_type="column"
                                    >
                                      <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                          class="elementor-element elementor-element-c52cee1 cea-align-left elementor-widget elementor-widget-ceasectiontitle"
                                          data-id="c52cee1"
                                          data-element_type="widget"
                                          data-widget_type="ceasectiontitle.default"
                                        >
                                          <div class="elementor-widget-container">
                                            <div class="section-title-wrapper">
                                              <div class="title-wrap">
                                                @if(@$map_descp->heading)

                                                <h6 class="sub-title">{{ucwords(@$map_descp->heading)}}</h6>
                                                @endif

                                                @if(@$map_descp->subheading)
                                                <h2 class="section-title">{{@$map_descp->subheading}}</h2>
                                                @endif
                                              </div>
                                              <!-- .title-wrap -->
                                              <div class="section-description"></div>
                                              <!-- .section-description -->
                                            </div>
                                            <!-- .section-title-wrapper -->
                                          </div>
                                        </div>

                                        <div class="section-description">
                                          <p class="section-content">
                                          {{ ucfirst(@$map_descp->description) }}
                                          </p>
                                        </div>
                                        @if(@$map_descp->button)
                                        
                                          <div
                                            class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1d35b90"
                                            data-id="1d35b90"
                                            data-element_type="column"
                                          >
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                              <div
                                                class="elementor-element elementor-element-cafc916 elementor-widget elementor-widget-ceabutton"
                                                data-id="cafc916"
                                                data-element_type="widget"
                                                data-widget_type="ceabutton.default"
                                              >
                                                <div class="elementor-widget-container cea-button-wrapper">
                                                  <div class="cea-button-wrapper">
                                                    <a
                                                      href="{{@$map_descp->button_link}}"
                                                      class="cea-button-link elementor-button cea-button elementor-size-sm"
                                                    >
                                                      <span class="cea-button-content-wrapper">
                                                        <span class="cea-button-icon cea-align-icon-"> </span>
                                                        <span class="cea-button-text">{{ucwords(@$map_descp->button)}}</span>
                                                      </span>
                                                    </a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        @endif

                                      </div>
                                    </div>
                                    <div
                                      class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-627f269"
                                      data-id="627f269"
                                      data-element_type="column"
                                    >
                                      <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                          class="elementor-element elementor-element-bad8c14 elementor-widget elementor-widget-google_maps"
                                          data-id="bad8c14"
                                          data-element_type="widget"
                                          data-widget_type="google_maps.default"
                                        >
                                          <div class="elementor-widget-container">
                                            <style>
                                              /*! elementor - v3.7.1 - 14-08-2022 */
                                              .elementor-widget-google_maps .elementor-widget-container {
                                                overflow: hidden;
                                              }
                                              .elementor-widget-google_maps iframe {
                                                height: 400px;
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

                              @endif

                              @if($value == "accordion_section_2")
                                  <!-- Simple accordion-->
                                  <section

                                    data-cea-float='[{"float_title":"Floating Image","float_img":"{{asset("assets/frontend/wp-content/uploads/sites/45/2021/08/icon-5.png")}}","float_left":"0","float_top":"50","float_distance":"","float_animation":"2","float_mouse":"0","float_width":"50px"}]'
                                    class="elementor-section elementor-top-section elementor-element elementor-element-ba6a5da elementor-section-stretched elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="ba6a5da"
                                    data-element_type="section"
                                    data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                                  >
                                    <div class="elementor-background-overlay"></div>
                                    <div
                                    class="elementor-container elementor-column-gap-extended"
                                    >
                                    <div
                                      class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-986c6b4"
                                      data-id="986c6b4"
                                      data-element_type="column"
                                      data-settings='{"background_background":"classic"}'
                                    >
                                      <div
                                      class="elementor-widget-wrap elementor-element-populated"
                                      >
                                      <div class="elementor-background-overlay"></div>
                                      <div
                                        class="elementor-element elementor-element-bcdac93 cea-align-left elementor-widget elementor-widget-ceasectiontitle"
                                        data-id="bcdac93"
                                        data-element_type="widget"
                                        data-widget_type="ceasectiontitle.default"
                                      >
                                        <div class="elementor-widget-container">
                                        <div class="section-title-wrapper">
                                          <div class="title-wrap">
                                          <h6 class="sub-title">
                                          {{ucwords(@$accordian2_elements[0]->heading)}}
                                          </h6>
                                          <h2 class="section-title">
                                          {{ucwords(@$accordian2_elements[0]->subheading)}}

                                          </h2>
                                          </div>
                                          <!-- .title-wrap -->
                                          <div class="section-description">
                                          <p class="section-content">
                                          {{@$accordian2_elements[0]->description}}
                                          </p>
                                            @if(@$accordian2_elements[0]->button_link)
                                              <div class="cea-button-wrapper">
                                                <a
                                                href="{{@$accordian2_elements[0]->button_link}}"
                                                class="cea-button-link elementor-button cea-button elementor-size-sm"
                                                >
                                                <span
                                                  class="cea-button-content-wrapper"
                                                >
                                                  <span
                                                  class="cea-button-icon cea-align-icon-"
                                                  >
                                                  </span>
                                                  <span class="cea-button-text"
                                                  >{{ucwords(@$accordian2_elements[0]->button)}}</span
                                                  >
                                                </span>
                                                </a>
                                              </div>
                                            @endif
                                          </div>
                                          <!-- .section-description -->
                                        </div>
                                        <!-- .section-title-wrapper -->
                                        </div>
                                      </div>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0b4c1e1"
                                      data-id="0b4c1e1"
                                      data-element_type="column"
                                    >
                                      <div
                                      class="elementor-widget-wrap elementor-element-populated"
                                      >
                                      <div
                                        class="elementor-element elementor-element-5fac64a elementor-widget elementor-widget-ceaaccordion"
                                        data-id="5fac64a"
                                        data-element_type="widget"
                                        data-widget_type="ceaaccordion.default"
                                      >
                                        <div
                                        class="elementor-widget-container cea-accordion-elementor-widget"
                                        data-toggle=""
                                        >
                                        <div
                                          class="cea-accordions"
                                          id="cea-accordion-1">
                                          @for ($i = 1; $i <=$list_2; $i++)
                                          <div class="card cea-accordion">
                                            <div class="card-header cea-accordion-header" >
                                              <a
                                              class="nav-item nav-link @if($i == '1') active @endif"
                                              href="#cea-accordion-1-{{$i}}"
                                              ><span
                                                class="elementor-accordion-icon elementor-accordion-icon-right"
                                                aria-hidden="true"
                                                ><span
                                                class="cea-accordion-icon-closed"
                                                ><i
                                                  class="ti ti-arrow-circle-down"
                                                ></i></span
                                                ><span
                                                class="cea-accordion-icon-opened"
                                                ><i
                                                  class="ti ti-arrow-circle-up"
                                                ></i></span></span
                                              >{{@$accordian2_elements[$i-1]->list_header}}</a
                                              >
                                            </div>
                                            <!-- .card-header -->
                                            <div class="cea-accordion-content @if($i == '1') active @endif"
                                              id="cea-accordion-1-{{$i}}" >
                                              <div class="card-body">
                                                <div class="cea-accordion-pane">
                                                {!! @$accordian2_elements[$i-1]->list_description !!}
                                                </div>
                                              </div>
                                            <!-- .card-body -->
                                            </div>
                                            <!-- .cea-accordion-content -->
                                          </div>
                                          @endfor
                                      
                                        </div>
                                        </div>
                                      </div>
                                      </div>
                                    </div>
                                    </div>
                                  </section>

                              @endif

                              @if($value == "gallery_section")
                                  <!--- Gallery Section 1-->
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
                                            class="elementor-element elementor-element-e3c8712 elementor-widget elementor-widget-ceaportfolio"
                                            data-id="e3c8712"
                                            data-element_type="widget"
                                            data-widget_type="ceaportfolio.default"
                                          >
                                            <div
                                              class="elementor-widget-container portfolio-wrapper portfolio-style-classic portfolio-light portfolio-isotope-model image-gallery"
                                            >
                                              <div
                                                class="isotope isotope-col-3"
                                                data-cols="3"
                                                data-gutter="0"
                                                data-layout="masonry"
                                                data-infinite=""
                                                data-lazyload=""
                                                data-loadmsg="Loading.."
                                                data-loadend="No more posts.."
                                                data-loadimg="{{asset('assets/frontend/wp-content/plugins/classic-elementor-addons-pro/assets/images/infinite-loader.gif')}}"
                                              >
                                                @foreach(@$gallery_elements as $gallery_element)

                                                <div class="isotope-item">
                                                  <div class="portfolio-inner">
                                                    <div
                                                      class="gallery post-thumb post-overlay-active"
                                                    >
                                                      <a
                                                        href="#"
                                                        class="post-image-link"
                                                        ><img
                                                          src="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}"
                                                          title="portfolio-7"
                                                          alt=""
                                                          class="img-fluid squared sunred-gallery"
                                                      /></a>
                                                      <div class="post-overlay-items">
                                                        <div class="post-icons">
                                                          <ul class="nav">
                                                            <li
                                                              class="post-magnific-wrap"
                                                            >
                                                              <a
                                                                href="#"
                                                                class="post-magnific image-gallery-link"
                                                                data-mfp-src="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}"
                                                                ><span
                                                                  class="ti-zoom-in"
                                                                ></span
                                                              ></a>
                                                            </li>
                                                            <li class="post-link-wrap">
                                                              <a
                                                                href="{{asset('/images/section_elements/gallery/'.@$gallery_element->filename)}}" download
                                                                class="post-link"
                                                                ><span
                                                                  class="ti-download"
                                                                ></span
                                                              ></a>
                                                            </li>
                                                          </ul>
                                                        </div>
                                                        <!-- .post-icons -->
                                                        <div class="entry-title">
                                                          <h4 class="post-title-head">
                                                            <a
                                                              href="#"
                                                              class="post-title"
                                                              >{{ucwords(@$gallery_element->original_name)}}</a
                                                            >
                                                          </h4>
                                                        </div>
                                                        <!-- .entry-title -->
                                                      </div>
                                                    </div>
                                                    <!-- .post-thumb -->
                                                  </div>
                                                  <!-- .portfolio-inner -->
                                                </div>
                                                @endforeach
                                              
                                                <!-- .col / .owl-carousel-item / .isotope -->
                                              </div>
                                              <!-- .isotope -->
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </section>

                              @endif

                              @if($value == "gallery_section_2")

                                  <!-- gallery Section 2-->
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
                                          <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-531c2f5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="531c2f5"
                                            data-element_type="section"
                                          >
                                            <div
                                              class="elementor-container elementor-column-gap-default"
                                            >
                                              <div
                                                class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e2584a0"
                                                data-id="e2584a0"
                                                data-element_type="column"
                                              >
                                                <div
                                                  class="elementor-widget-wrap elementor-element-populated"
                                                >
                                                  <div
                                                    class="elementor-element elementor-element-e3c8712 elementor-widget elementor-widget-ceaportfolio"
                                                    data-id="e3c8712"
                                                    data-element_type="widget"
                                                    data-widget_type="ceaportfolio.default"
                                                  >
                                                    <div
                                                      class="elementor-widget-container portfolio-wrapper portfolio-style-default portfolio-light portfolio-normal-model image-gallery"
                                                    >
                                                      <div class="row">

                                                      @foreach($gallery2_elements as $gallery_element)

                                                        <div class="col-lg-4 col-md-4">
                                                          <div class="portfolio-inner">
                                                            <div
                                                              class="gallery2 post-thumb post-overlay-active"
                                                            >
                                                              <a
                                                                href="#"
                                                                class="post-image-link"
                                                                ><img
                                                                  src="{{asset('/images/section_elements/gallery_2/'.@$gallery_element->filename)}}"
                                                                  title="portfolio-7"
                                                                  alt=""
                                                                  class="img-fluid squared sunred-gallery"
                                                              /></a>
                                                              <div
                                                                class="post-overlay-items"
                                                              >
                                                                <div class="post-icons">
                                                                  <ul class="nav">
                                                                    <li
                                                                      class="post-magnific-wrap"
                                                                    >
                                                                      <a
                                                                        href="#"
                                                                        class="post-magnific image-gallery-link"
                                                                        data-mfp-src="{{asset('/images/section_elements/gallery_2/'.@$gallery_element->filename)}}"
                                                                        ><span
                                                                          class="ti-zoom-in"
                                                                        ></span
                                                                      ></a>
                                                                    </li>
                                                                    <li
                                                                      class="post-link-wrap"
                                                                    >
                                                                      <a
                                                                        href="{{asset('/images/uploads/section_elements/gallery_2/'.@$gallery_element->filename)}}" download
                                                                        class="post-link"
                                                                        ><span
                                                                          class="ti-download"
                                                                        ></span
                                                                      ></a>
                                                                    </li>
                                                                  </ul>
                                                                </div>
                                                                <!-- .post-icons -->
                                                                <div class="entry-title">
                                                                  <h4
                                                                    class="post-title-head"
                                                                  >
                                                                    <a
                                                                      href="#"
                                                                      class="post-title"
                                                                      >{{ucwords(@$gallery_element->original_name)}}</a
                                                                    >
                                                                  </h4>
                                                                </div>
                                                                <!-- .entry-title -->
                                                              </div>
                                                            </div>
                                                            <!-- .post-thumb -->
                                                          </div>
                                                          <!-- .portfolio-inner -->
                                                        </div>
                                                        @endforeach
                                                       
                                                      </div>
                                                      <!-- .row -->
                                                    
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

                              @endif

                              @if($value == "small_box_description")

                                    <!-- Small Box Description-->    
                                    <section
                                      class="elementor-section elementor-top-section elementor-element elementor-element-ef34a06 elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                      data-id="ef34a06"
                                      data-element_type="section"
                                      data-settings='{"stretch_section":"section-stretched","background_background":"classic","shape_divider_top":"waves"}'
                                    >
                                      <div class="elementor-background-overlay"></div>
                                      <div
                                        class="elementor-shape elementor-shape-top"
                                        data-negative="false"
                                      >
                                        <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          viewBox="0 0 1000 100"
                                          preserveAspectRatio="none"
                                        >
                                          <path
                                            class="elementor-shape-fill"
                                            d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                                      c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                                      c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"
                                          />
                                        </svg>
                                      </div>
                                      <div
                                        class="elementor-container elementor-column-gap-extended"
                                      >
                                        <div
                                          class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bae3f46"
                                          data-id="bae3f46"
                                          data-element_type="column"
                                        >
                                          <div
                                            class="elementor-widget-wrap elementor-element-populated"
                                          >
                                            <div
                                              class="elementor-element elementor-element-8866676 cea-align-center elementor-widget elementor-widget-ceasectiontitle"
                                              data-id="8866676"
                                              data-element_type="widget"
                                              data-widget_type="ceasectiontitle.default"
                                            >
                                              <div class="elementor-widget-container">
                                                <div class="section-title-wrapper">
                                                  <div class="title-wrap">
                                                    
                                                    @if(@$process_elements[0]->heading)
                                                      <h6 class="sub-title">{{ucwords(@$process_elements[0]->heading)}}</h6>
                                                      @endif
                                                      @if(@$process_elements[0]->description)
                                                      <h2 class="section-title">{{ucwords(@$process_elements[0]->description)}}</h2>
                                                      @endif
                                                  </div>
                                                  <!-- .title-wrap -->
                                                  <div class="section-description"></div>
                                                  <!-- .section-description -->
                                                </div>
                                                <!-- .section-title-wrapper -->
                                              </div>
                                            </div>
                                            <div
                                              class="elementor-element elementor-element-1b88514 elementor-widget elementor-widget-ceaservice"
                                              data-id="1b88514"
                                              data-element_type="widget"
                                              data-widget_type="ceaservice.default"
                                            >
                                              <div
                                                class="elementor-widget-container service-wrapper service-style-default service-light service-normal-model"
                                              >
                                                <div class="row">
                                                  @for ($i = 1; $i <=@$process_num; $i++)

                                                  <div class="col-lg-4 col-md-4">
                                                    <div class="service-inner">
                                                      <div class="service-icon-img-wrap">
                                                        <img
                                                          src="<?php if(@$process_elements[$i-1]->list_image){?>{{asset('/images/section_elements/list_1/'.@$process_elements[$i-1]->list_image)}}<?php }?>"
                                                          class="img-fluid service-icon-img"
                                                          alt="{{ucwords(@$process_elements[$i-1]->list_header)}}"
                                                        />
                                                      </div>
                                                      <div class="entry-title">
                                                        <h4 class="post-title-head">
                                                          <a
                                                            href="#"
                                                            class="post-title"
                                                            >{{ucwords(@$process_elements[$i-1]->list_header)}}</a
                                                          >
                                                        </h4>
                                                      </div>
                                                      <!-- .entry-title -->
                                                      <div class="post-excerpt">
                                                        <p>
                                                        {{ucfirst(@$process_elements[$i-1]->list_description)}}
                                                        </p>
                                                      </div>
                                                      <!-- .post-excerpt -->
                                                    </div>
                                                    <!-- .service-inner -->
                                                  </div>
                                                  @endfor
                                                
                                                </div>
                                                <!-- .row -->
                                          
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </section>

                              @endif
                              @if($value == "slider_list")
                              slider_list_elements
                                <section
                                  class="elementor-section elementor-top-section elementor-element elementor-element-0d7e32e elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                  data-id="0d7e32e"
                                  data-element_type="section"
                                  data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                                >
                                  <div class="elementor-background-overlay"></div>
                                  <div
                                    class="elementor-container elementor-column-gap-no"
                                  >
                                    <div
                                      class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8654d1e"
                                      data-id="8654d1e"
                                      data-element_type="column"
                                    >
                                      <div
                                        class="elementor-widget-wrap elementor-element-populated"
                                      >
                                        <div
                                          class="elementor-element elementor-element-6216715 cea-align-center elementor-widget elementor-widget-ceasectiontitle"
                                          data-id="6216715"
                                          data-element_type="widget"
                                          data-widget_type="ceasectiontitle.default"
                                        >
                                          <div class="elementor-widget-container">
                                            <div class="section-title-wrapper">
                                              <div class="title-wrap">
                                                <h6 class="sub-title">{{ucwords(@$slider_list_elements[0]->heading)}}</h6>
                                                <h2 class="section-title">
                                                {{ucwords(@$slider_list_elements[0]->description)}}
                                                </h2>
                                              </div>
                                              <!-- .title-wrap -->
                                              <div class="section-description">
                                                <p class="section-content"></p>
                                              </div>
                                              <!-- .section-description -->
                                            </div>
                                            <!-- .section-title-wrapper -->
                                          </div>
                                        </div>
                                        <div
                                          class="elementor-element elementor-element-21d83a1 elementor-widget elementor-widget-ceaservice"
                                          data-id="21d83a1"
                                          data-element_type="widget"
                                          data-widget_type="ceaservice.default"
                                        >
                                          <div
                                            class="elementor-widget-container service-wrapper service-style-modern service-light service-slide-model"
                                          >
                                            <div
                                              class="cea-carousel owl-carousel"
                                              data-loop="1"
                                              data-margin="30"
                                              data-center="0"
                                              data-nav="1"
                                              data-dots="0"
                                              data-autoplay="0"
                                              data-items="3"
                                              data-items-tab="2"
                                              data-items-mob="1"
                                              data-duration="5000"
                                              data-smartspeed="250"
                                              data-scrollby="1"
                                              data-autoheight="0"
                                            >
                                            @for ($i = 1; $i <=@$list_3; $i++)

                                              <div class="owl-carousel-item">
                                                <div class="service-inner">
                                                  <div class="post-thumb">
                                                    <a
                                                      href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}"
                                                      class="post-image-link"
                                                      ><img
                                                        src="{{ asset('/images/section_elements/list_1/thumb/thumb_'.@$slider_list_elements[$i-1]->list_image) }}"
                                                        title="1"
                                                        alt=""
                                                        class="img-fluid squared"
                                                    /></a>
                                                  </div>
                                                  <div class="entry-title">
                                                    <h4 class="post-title-head">
                                                      <a
                                                        href="{{route('slider.single',@$slider_list_elements[$i-1]->subheading)}}"
                                                        class="post-title"
                                                        >{{ucwords(@$slider_list_elements[$i-1]->list_header)}}</a
                                                      >
                                                    </h4>
                                                  </div>
                                                  <!-- .entry-title -->
                                                  <div class="post-excerpt">
                                                    <p>
                                                    {{ucfirst(Str::limit(@$slider_list_elements[$i-1]->list_description, 70))}}...
                                                    </p>
                                                  </div>
                                                  <!-- .post-excerpt -->
                                                </div>
                                                <!-- .service-inner -->
                                              </div>
                                              @endfor
                                              
                                            </div>
                                            <!-- .owl-carousel -->
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </section>
                              @endif
                              

                        @endforeach
                    

                     
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