@extends('backend.layouts.master')
@section('title', "Home Setting")
@section('css')
    <link href="{{asset('assets/backend/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <style>
        .hidden{
            display:none!important;
        }
        .dropdown-item{
            cursor: pointer;
        }

        .feature-image-button{
            position: absolute;
            top: 25%;
        }

        .profile-foreground-img-file-input {
            display: none;
        }

        label.profile-photo-edit.btn.btn-light.feature-side-image-button {
            position: absolute;
            bottom: 25%;
        }
    </style>
@endsection


@section('content')
    <div class="page-content">
        <div class="container-fluid" style="position:relative;">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-n4 mx-n4">
                        <div class="bg-soft-warning">
                            <div class="card-body pb-0 px-4">
                                <div class="row mb-3">
                                    <div class="col-md">
                                        <div class="row align-items-center g-3">

                                            <div class="col-md">
                                                <div>
                                                    <h4 class="fw-bold">

                                                         Home Page Settings</h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-auto" style="    margin-top: 1rem;">
                                        <div class="hstack gap-1 flex-wrap">
                                            <div class="d-sm-flex align-items-center justify-content-between">

                                                <div class="page-title-right">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                                        <li class="breadcrumb-item active">{{str_replace('-',' ',ucwords(Request::segment(2)))}}</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul class="nav nav-tabs-custom border-bottom-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#welcome-tab"
                                           role="tab">
                                            Welcome Section                                        </a>
                                    </li>
                                    @if($homesettings !== null)

                                    <li class="nav-item">
                                        <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#simple-header-overview"
                                           role="tab">
                                            Header & Description
                                        </a>
                                    </li>
                                        <li class="nav-item">
                                        <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#simple-call-action"
                                           role="tab">
                                            Call Action
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            <!-- end card body -->
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content text-muted">
                        <div class="tab-pane fade show active" id="welcome-tab" role="tabpanel">
                            @if($homesettings !== null)
                                {!! Form::open(['url'=>route('homepage.update', @$homesettings->id),'id'=>'homesettings-info-form','class'=>'needs-validation','novalidate'=>'','method'=>'PUT','enctype'=>'multipart/form-data']) !!}
                            @else
                                {!! Form::open(['route' => 'homepage.store','method'=>'post','class'=>'needs-validation','id'=>'homesettings-info-form','novalidate'=>'','enctype'=>'multipart/form-data']) !!}
                            @endif
                                <div class="row  mb-4">
                                    <div class="col-lg-8">
                                            <figure class="figure">
                                                <img src="{{asset('images/default-welcome.png')}}" class="figure-img img-fluid rounded" alt="...">
                                                <figcaption class="figure-caption">Output Sample.</figcaption>
                                            </figure>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="welcome-heading-input">Heading</label>
                                                        <input type="text" class="form-control" id="welcome-heading-input" name="welcome_heading" value="{{@$homesettings->welcome_heading}}"
                                                               placeholder="Enter  heading">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="welcome-subheading-input">Sub Heading </label>
                                                        <input type="text" class="form-control" id="welcome-subheading-input" name="welcome_subheading" value="{{@$homesettings->welcome_subheading}}"
                                                               placeholder="Enter  subheading">
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label> Description</label>
                                                        <textarea class="form-control" maxlength="650" name="welcome_description" placeholder="Enter welcome description" rows="3" required>{{@$homesettings->welcome_description}}</textarea>
                                                        <div class="invalid-tooltip">
                                                            Please enter the  description.
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Button Text </label>
                                                        <input type="text" maxlength="20" class="form-control" value="{{@$homesettings->welcome_button}}" name="welcome_button">
                                                        <div class="invalid-feedback">
                                                            Please enter the button text.
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Button Link </label>
                                                        <input type="text" class="form-control" value="{{@$homesettings->welcome_link}}" name="welcome_link">
                                                        <div class="invalid-feedback">
                                                            Please enter the button link.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->



                                            <!-- end card -->
                                            <div class="text-end mb-3">
                                                <button type="submit" class="btn btn-success w-sm">{{($homesettings !== null) ? "Update Home Settings":"Save Home Settings"}}</button>
                                            </div>



                                    </div>
                                    <!-- end col -->

                                    <div class="col-lg-4">
                                        <div class="sticky-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Other Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <img  id="current-img"  src="{{ (@$homesettings->welcome_image !== null) ? asset('images/home/welcome/'.@$homesettings->welcome_image) :  asset('images/default-image.jpg') }}" class="position-relative img-fluid img-thumbnail welcome-feature-image" >
                                                        <input  type="file" accept="image/png, image/jpeg" hidden
                                                            id="profile-foreground-img-file-input" onchange="loadFile(event)" name="welcome_image" {{ (@$homesettings->welcome_image !== null) ? '' :  'required' }}
                                                        class="profile-foreground-img-file-input" >

                                                        <figcaption class="figure-caption">*use image minimum of 550 x 790px </figcaption>
                                                        <div class="invalid-feedback" >
                                                                Please select a image.
                                                            </div>
                                                        <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light feature-image-button">
                                                            <i class="ri-image-edit-line align-bottom me-1"></i> Add  Image
                                                        </label>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="choices-publish-status-input" class="form-label">Image Alignment</label>

                                                        <select class="form-select" id="choices-publish-status-input" name="welcome_side_image" data-choices data-choices-search-false>
                                                            <option value="left" @if(@$homesettings->welcome_side_image == "left") selected @endif>Left</option>
                                                            <option value="right" @if(@$homesettings->welcome_side_image == "right") selected @endif>Right</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            {!! Form::close() !!}

                        </div>
                        @if($homesettings !== null)
                            <div class="tab-pane fade" id="simple-header-overview" role="tabpanel">

                            {!! Form::open(['url'=>route('homepage.direction', @$homesettings->id),'id'=>'homesettings-simple-header-form','class'=>'needs-validation','novalidate'=>'','method'=>'PUT','enctype'=>'multipart/form-data']) !!}

                            <div class="row  mb-4">
                                    <div class="col-lg-6">
                                        <figure class="figure">
                                            <img src="{{asset('images/default-simple-section.png')}}" class="figure-img img-fluid rounded" alt="...">
                                            <figcaption class="figure-caption">Output Sample.</figcaption>
                                        </figure>
                                        <!-- end card -->




                                    </div>
                                    <!-- end col -->

                                    <div class="col-lg-6">
                                        <div class="sticky-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Main Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="direction-heading-input">Heading</label>
                                                        <input type="text" class="form-control" maxlength="45" id="direction-heading-input" name="direction_heading" value="{{@$homesettings->direction_heading}}"
                                                               placeholder="Enter heading" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the heading.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="direction-heading-input">Subheading</label>
                                                        <input type="text" class="form-control" id="direction-input" name="direction_list_heading" value="{{@$homesettings->direction_list_heading}}"
                                                               placeholder="Enter subheading">
                                                        <div class="invalid-feedback">
                                                            Please enter the subheading.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative">
                                                        <label> Description</label>
                                                        <textarea class="form-control" rows="6" name="direction_description" placeholder="Enter description" required>{{@$homesettings->direction_description}}</textarea>
                                                        <div class="invalid-tooltip">
                                                            Please enter the  description.
                                                        </div>
                                                    </div>
                                                    <div class="text-end mb-3 mt-3">
                                                        <button type="submit" class="btn btn-success w-sm">Update Section</button>
                                                    </div>
                                                </div>

                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            {!! Form::close() !!}


                            </div>

                            <div class="tab-pane fade" id="simple-call-action" role="tabpanel">

                                {!! Form::open(['url'=>route('homepage.action', @$homesettings->id),'id'=>'homesettings-simple-header-form','class'=>'needs-validation','novalidate'=>'','method'=>'PUT','enctype'=>'multipart/form-data']) !!}

                                <div class="row  mb-4">
                                    <div class="col-lg-12">
                                        <div class="sticky-side-div">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">Main Details</h5>
                                                </div>
                                                <div class="card-body">
                                                    <figure class="figure">
                                                        <img src="{{asset('images/home_action.png')}}" class="figure-img img-fluid rounded" alt="...">
                                                        <figcaption class="figure-caption">Output Sample.</figcaption>
                                                    </figure>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="direction-heading-input">Heading</label>
                                                        <input type="text" class="form-control" maxlength="75" id="direction-heading-input" name="action_heading" value="{{@$homesettings->action_heading}}"
                                                               placeholder="Enter heading" required>
                                                        <div class="invalid-feedback">
                                                            Please enter the heading.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="direction-input">Button</label>
                                                        <input type="text" class="form-control" id="direction-input" name="action_button" value="{{@$homesettings->action_button}}"
                                                               placeholder="Enter button text">
                                                        <div class="invalid-feedback">
                                                            Please enter the button text.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="direction-heading-inputs">Link</label>
                                                        <input type="text" class="form-control" id="direction-heading-inputs" name="action_link" value="{{@$homesettings->action_link}}"
                                                               placeholder="Enter button link">
                                                        <div class="invalid-feedback">
                                                            Please enter the button link.
                                                        </div>
                                                    </div>
                                                    <div class="text-end mb-3 mt-3">
                                                        <button type="submit" class="btn btn-success w-sm">Update Section</button>
                                                    </div>
                                                </div>

                                                <!-- end card body -->
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                {!! Form::close() !!}


                            </div>

                        @endif

                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>



@endsection

@section('js')
    <script src="{{asset('assets/backend/js/pages/form-validation.init.js')}}"></script>


    <script src="{{asset('assets/backend/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <script src="{{asset('assets/backend/custom_js/homepage.js')}}"></script>



@endsection
