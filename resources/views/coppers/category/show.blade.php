@extends('coppers.layout.app')

@section('content')
<div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
              <p><small>@include('partials._validate')</small></p>
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
              <i class="mdi mdi-home"></i>                 
            </span>
            <a href="{{route('admin.category')}}" class="btn btn-primary">Back To Category</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary">
                {{$categories->name}}
            </button>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Modify Category
            </button>
            {!! Form::open(['action' => ['AdminController@updateCategory', $categories->id], 'method' => 'PUT', 'data-parsley-validate' => '']) !!}
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                {{form::label('name', 'Category name')}}
                                {{form::text('name', $categories->name, ['class' => 'form-control', 'required' => ''])}}
                            </div>
                            <div class="form-group">
                                {{form::label('description', 'Category Description')}}
                                {{form::textarea('description', $categories->description, ['class' => 'form-control', 'required' => '', 'rows' => '4'])}}
                            </div>
                            <div class="form-group">
                                {{form::label('url', 'Category Url')}}
                                {{form::text('url', $categories->url, ['class' => 'form-control', 'required' => ''])}}
                            </div>
                        </div>
                        <div class="modal-footer">
                            {{form::submit('Update', ['class' => 'btn btn-primary btn-md'])}}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview
                <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-3 stretch-card grid-margin">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                            <img src="{{asset('images/dashboard/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image"/>
                            <h4 class="font-weight-normal mb-3">Weekly Sales
                            <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">&#8358 15,0000</h2>
                            <h6 class="card-text">Increased by 60%</h6>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
@endsection