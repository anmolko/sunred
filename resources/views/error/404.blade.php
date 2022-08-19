@extends('frontend.layouts.master')
@section('title')  Page Not Found @endsection
@section('content')

<div class="corpkit-content-wrapper">
  <div class="wrap">
    <div id="primary" class="content-area error-404-area corpkit-page">
      <main id="main" class="site-main">
        <header id="page-title" class="page-title-wrap">
          <div class="page-title-wrap-inner" data-property="no-video">
            <span class="page-title-overlay"></span>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="page-title-inner">
                    <div class="pull-left">
                      <h1 class="page-title">Error</h1>
                      <div id="breadcrumb" class="breadcrumb">
                        <a href="/"
                          >Home</a
                        >
                        <span class="current">Error 404</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- .page-title-wrap-inner -->
        </header>

        <section class="error-404 not-found text-center">
          <div class="container">
            <header class="page-header">
           

              <div class="relative mb-2">
                <h3 class="page-title">404 </h3>
              </div>
              <p class="error-description">
                Sorry we cannot find that page! Go back to home
              </p>
              <a
                class="home-link"
                href="h/"
              >
                Home Page
              </a>
            </header>
            <!-- .page-header -->
          </div>
          <!-- .container -->
        </section>
        <!-- .error-404 -->
      </main>
      <!-- #main -->
    </div>
    <!-- #primary -->
  </div>
  <!-- .wrap -->
</div>




@endsection
