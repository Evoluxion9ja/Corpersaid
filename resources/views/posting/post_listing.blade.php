@extends('posting.layout.app')

@section('content')
<div class="container">
    <style>
        input{
            background: #eee !important;
        }
        textarea{
            background: #eee !important;
        }
        .image-upload1{
            width: 115px !important;
            height: 115px !important;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
            cursor: pointer;
        }
        .file-input-wrapper {
            overflow: hidden;
            position: relative;
            width: 115px;
            height: 115px;
            background-color: #fff;
            cursor: pointer;
        }
        .file-input-wrapper>input[type="file"] {
            font-size: 40px;
            background: url('assets/images/camera.svg/');
            position: absolute;
            width: 115px;
            height: 115px;
            top: 0;
            right: 0;
            opacity: 0;
            z-index: 0;
            cursor: pointer;
        }
        .file-input-wrapper>.btn-file-input {
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 4px;
            color: #000;
            display: inline-block;
            height: 115px;
            margin: 0 0 0 -1px;
            padding-left: 0;
            width: 115px;
            cursor: pointer;
        }
        #img_text {
            float: right;
            margin-right: -80px;
            margin-top: -14px;
        }

    </style>
    @include('partials._validate')
    <h2 class="text-center mb-4">Post Listing</h2>
    <div class="post-details-section">
        <div class="post-detail mb-5">
            <h4>Post Details</h4>
            <button class="clear-field-btn">Clear All Field</button>
        </div>
        {!! Form::open(['action' => 'PostController@store','method' => 'POST', 'enctype' => 'multipart/form-data', 'data-parsley-validate' => '']) !!}
            <div class="form-group mb-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="category_id" name="category_id">Options</label>
                    </div>
                    <select class="custom-select" id="category_id" name="category_id" required>
                      <option>Choose Category</option>
                      @foreach ($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                </div>
            </div><hr>
            <div class="picture-upload">
                    <div class="upload1">
                        <div class="file-input-wrapper">
                            <button class="btn-file-input">SELECT FILES</button>
                            <input type="file" name="images[]" id="images" class="form-control custom-input" multiple>
                        </div>
                    </div>
                    <div class="upload1">
                        <div class="file-input-wrapper">
                            <button class="btn-file-input">SELECT FILES</button>
                            <input type="file" name="images[]" id="images" class="form-control custom-input" multiple>
                        </div>
                    </div>
                    <div class="upload1">
                        <div class="file-input-wrapper">
                            <button class="btn-file-input">SELECT FILES</button>
                            <input type="file" name="images[]" id="images" class="form-control custom-input" multiple>
                        </div>
                    </div>
                    <div class="upload1">
                        <div class="file-input-wrapper">
                            <button class="btn-file-input">SELECT FILES</button>
                            <input type="file" name="images[]" id="images" class="form-control custom-input">
                        </div>
                    </div>
                    <div class="upload1">
                        <div class="file-input-wrapper">
                            <button class="btn-file-input">SELECT FILES</button>
                            <input type="file" name="images[]" id="images" class="form-control custom-input">
                        </div>
                    </div>
                    <div class="upload1">
                        <div class="file-input-wrapper">
                            <button class="btn-file-input">SELECT FILES</button>
                            <input type="file" name="images[]" id="images" class="form-control custom-input">
                        </div>
                    </div>
                    <div class="upload1">
                        <div class="file-input-wrapper">
                            <button class="btn-file-input">SELECT FILES</button>
                            <input type="file" name="images[]" id="images" class="form-control custom-input">
                        </div>
                    </div>
                    <div class="upload1">
                        <div class="file-input-wrapper">
                            <button class="btn-file-input">SELECT FILES</button>
                            <input type="file" name="images[]" id="images" class="form-control custom-input">
                        </div>
                    </div>
                </div>
            <div class="form-group mb-5">
                {{form::label('title', 'Post Title')}}
                {{form::text('title', '', ['class' => 'form-control', 'required' => '', 'placeholder' => 'Item title here'])}}
            </div>
            <div class="form-group mb-5">
                {{form::label('title', 'Post Url')}}
                {{form::text('url', '', ['class' => 'form-control', 'required' => '', 'placeholder' => 'Item url with dashes inbetween here'])}}
            </div>
            <div class="form-group mb-4">
                {{form::label('description', 'Post Description')}}
                {{form::textarea('description', '', ['class' => 'form-control', 'required' => '', 'place' => 'Give a description for your posted item', 'rows' => '5'])}}
            </div><hr>
            <div class="form-group mb-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="location_id" name="location_id">Options</label>
                    </div>
                    <select class="custom-select" id="location_id" name="location_id">
                      <option>Choose Location</option>
                      @foreach ($locations as $location)
                          <option value="{{$location->id}}">{{$location->name}}</option>
                      @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group mb-5">
                {{form::text('phone', '', ['class' => 'form-control', 'required' => '', 'placeholder' => 'Phone Number'])}}
            </div><hr>
            <div class="form-group mb-5">
                {{form::email('email', '', ['class' => 'form-control', 'required' => '', 'placeholder' => 'Email for contact'])}}
            </div><hr>
            <div class="form-group text-center mt-4">
                <button class="start-post-btn btn-block" type="submit">PUBLISH NOW</button>
                <p class="mt-3 terms">By publishing an listing you agree and accept the Rules of <span class="corper-green"> Corpers  Aid Ltd</span></p>
            </div>
        {!! Form::close() !!}
        <!--<form action="" method="POST" enctype="multipart/form-data" data-parsley-validate>
            
        <div class="searching mb-5">
            <h6>Category <sup>*</sup></h6>
            <div class="select-5">
                <select class="select-option4" name="category_id" id="category_id" required="required">
                    <option>Select Category </option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <div class="caret">
                    <i class="fas fa-caret-down"></i>
                </div>
            </div>
        </div>
    
        <p>Add Pictures</p>
        <p><b>Listings with photo gets more clients.</b> Formats: jpg, gif and png. Max allowed size for uploaded files is 5MB.</p>
        <p>Add at least 1 photo for your listing</p>
        <div class="picture-upload">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="images">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="images" name="images" required="required" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="images">Choose Image</label>
                </div>
            </div>
            
            <div class="upload1">
                <img src="{{asset('assets/images/camera.svg')}}">
            </div>
            <div class="upload1">
                <img src="{{asset('assets/images/camera2.svg')}}">
            </div>
            <div class="upload1">
                <img src="{{asset('assets/images/camera2.svg')}}">
            </div>
            <div class="upload1">
                <img src="{{asset('assets/images/camera2.svg')}}">
            </div>
            <div class="upload1">
                <img src="{{asset('assets/images/camera2.svg')}}">
            </div>
            <div class="upload1">
                <img src="{{asset('assets/images/camera2.svg')}}">
            </div>
            <div class="upload1">
                <img src="{{asset('assets/images/camera2.svg')}}">
            </div>
            
        </div>
        <p class="mt-3"><b>First picture is what everyone sees.</b></p>
        <div class="fill-form">
            <div class="enter-details">
                <label>Title <sup>*</sup></label><br>
                <input class="enter-title" type="text" name="title" placeholder="Write a clear of your listing" required="required"><br>
                <small>50 Character Max</small>
            </div>
            <div class="enter-details">
                <label>Description <sup>*</sup></label><br>
                <textarea class="enter-description" type="text" name="description" required="required" placeholder="Please provide details of your products/services. You can mention as many details as possible, this will make your listing very easy for clients."></textarea><br>
                <small>300 Character Max</small>
            </div>
        </div>
        <div class="post-details-section">
            <p><b>Contact Information for your Listing</b></p>
            <div class="searching">
                <h6>Region <sup>*</sup> </h6>
                <div class="select-5 mb-4" style="width: 30%; justify-content: space-between;">
                    <select class="select-option4" name="location_id" required="required">
                        <option>Select Region </option>
                        @foreach ($locations as $location)
                            <option value="{{$location->id}}">{{$location->name}}</option>
                        @endforeach
                    </select>
                    <div class="caret">
                        <i class="fas fa-caret-down"></i>
                    </div>
                </div>
                <div class="enter-details">
                    <label>Contact Information<sup>*</sup></label><br>
                    <input class="enter-region" type="tel" name="phone" id="phone" required="required" placeholder="Please enter your phone number">
                </div>
                <div class="enter-details">
                    <label>Email <sup>*</sup></label><br>
                    <input class="enter-region" type="email" name="email" required="required" id="email" placeholder="Please enter your Local Government">
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button class="start-post-btn" type="submit">PUBLISH NOW</button>
            <p class="mt-3 terms">By publishing an listing you agree and accept the Rules of <span class="corper-green"> Corpers  Aid Ltd</span></p>
        </div>
    </form>-->
</div>
<script type="text/javascript">

    /*$(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });
    });*/
    (function($) {
    $('input[type="file"]').bind('change', function() {
        $("#img_text").html($('input[type="file"]').val());
    });
    })(jQuery)

</script>
@endsection