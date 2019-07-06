@extends('admin_partials.app')

@section('contents')
<div id="content">
        {{Html::style('css/frontend_css/style')}}
  <div id="content-header">
    <div id="breadcrumb"> 
        <a href="{{route('/')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> 
        <a href="#" ty data-toggle="modal" data-target="#exampleModal">Locations</a>
        <a href="{{route('admin.location')}}" class="current">Create Locations</a> </div>
    <div class="row justify-content-center" id="main-wrapper" style="margin-left:50px;">
        <div class="col-md-8">
            <h1>{{strtoupper($locations->name)}}</h1>
            <span >{{$locations->description}}</span>
        </div>
    </div>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="row justify-content-center">
            @foreach ($locations->posts as $post)
              <div class="col-md-3">
                <a href="">
                  <h3>{{strtoupper($post->title)}}</h3>
                  <p>{{str_limit($post->description, 100)}}</p>
                  <p>{{$post->image1}}</p>
                </a>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection