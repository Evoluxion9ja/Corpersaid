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
        {!! Form::open(['action' => ['PostController@update', $posts->id],'method' => 'PUT', 'enctype' => 'multipart/form-data', 'data-parsley-validate' => '']) !!}
            <div class="form-group mb-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="category_id" name="category_id">Options</label>
                    </div>
                    {{form::select('category_id', $categories, $posts->categories, ['class' => 'form-control custom-select',
                    'style' => 'border:1px solid #ddd;'])}}
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
                {{form::text('title', $posts->title, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Item title here',
                'style' => 'border:1px solid #ddd;'])}}
            </div>
            <div class="form-group mb-5">
                {{form::label('title', 'Post Url')}}
                {{form::text('url', $posts->url, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Item url with dashes inbetween here',
                'style' => 'border:1px solid #ddd;'])}}
            </div>
            <div class="form-group mb-4">
                {{form::label('description', 'Post Description')}}
                {{form::textarea('description', $posts->description, ['class' => 'form-control', 'required' => '', 'place' => 'Give a description for your posted item',
                'style' => 'border:1px solid #ddd;', 'rows' => '5'])}}
            </div><hr>
            <div class="form-group mb-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="location_id" name="location_id">Location</label>
                    </div>
                    {{form::select('location_id', $locations, $posts->locations, ['class' => 'form-control custom-select', 'style' => 'border:1px solid #ddd;'])}}
                </div>
            </div>
            <div class="form-group mb-5">
                {{form::label('phone', 'Contact Number')}}
                {{form::text('phone', $posts->phone, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Phone Number',
                'style' => 'border:1px solid #ddd;'])}}
            </div><hr>
            <div class="form-group mb-5">
                {{form::label('email', 'Contact Email')}}
                {{form::email('email', $posts->email, ['class' => 'form-control', 'required' => '', 'placeholder' => 'Email for contact',
                'style' => 'border:1px solid #ddd;'])}}
            </div><hr>
            <div class="form-group text-center mt-4">
                <button class="start-post-btn btn-block" type="submit">PUBLISH NOW</button>
                <p class="mt-3 terms">By publishing an listing you agree and accept the Rules of <span class="corper-green"> Corpers  Aid Ltd</span></p>
            </div>
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