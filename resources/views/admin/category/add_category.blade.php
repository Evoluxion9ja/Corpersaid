@extends('admin_partials.app')

@section('contents')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('/')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Categories</a> <a href="#" class="current">Create Category</a> </div>
    <h1>Category Dashboard</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Create Category</h5>
          </div>
          <div class="widget-content nopadding">
            @include('partials._validate')
            <form class="form-horizontal" method="post" action="{{route('category.store')}}" data-parsley-validate name="basic_validate" id="basic_validate" novalidate="novalidate">
              {{csrf_field()}}
              <div class="control-group">
                <label class="control-label">Category Name</label>
                <div class="controls">
                  <input type="text" name="name" id="name" required="required" minLength="3" maxLength="255" style="width:350px;">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Category Description</label>
                <div class="controls">
                  <input type="text" name="description"required="required" minLength="3" maxLength="255"  id="description" style="width:350px;">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Category Url</label>
                <div class="controls">
                  <input type="text" name="url" id="url" required="required" minLength="3" maxLength="255" style="width:350px;">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Create Category" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>Data table</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                        <th>Id</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Number Of Posts</th>
                        <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr class="gradeX">
                        <th>{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td class="center">{{$category->description}}</td>
                        <td>{{$category->posts()->count()}}</td>
                        <td class="center">
                            <div class="button-group">
                                {{Html::linkroute('category.show', 'Details', [$category->id], ['class' => 'btn btn-primary ibtn btn-sm', 'style' => 'float:left;margin-right:5px;'])}}
                                {!! Form::open(['action' => ['LocationController@destroy', $category->id], 'method' => 'DELETE']) !!}
                                    {{form::submit('Delete', ['class' => 'btn btn-danger ibtn btn-sm'])}}
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection