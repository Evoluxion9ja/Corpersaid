@extends('admin_partials.app')

@section('contents')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('/')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Locations</a> <a href="#" class="current">Create Locations</a> </div>
    <h1>Location Dashboard</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Create Location</h5>
          </div>
          <div class="widget-content nopadding">
            @include('partials._validate')
            <form class="form-horizontal" method="post" action="{{route('location.store')}}" data-parsley-validate name="basic_validate" id="basic_validate" novalidate="novalidate">
              {{csrf_field()}}
              <div class="control-group">
                <label class="control-label">Location Name</label>
                <div class="controls">
                  <input type="text" name="name" id="name" required="required" minLength="3" maxLength="255" style="width:350px;">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Location Description</label>
                <div class="controls">
                  <input type="text" name="description"required="required" minLength="3" maxLength="255"  id="description" style="width:350px;">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Location Url</label>
                <div class="controls">
                  <input type="text" name="url" id="url" required="required" minLength="3" maxLength="255" style="width:350px;">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Create Location" class="btn btn-success">
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
                        <th>Location Name</th>
                        <th>Description</th>
                        <th>Number Of Posts</th>
                        <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($locations as $location)
                    <tr class="gradeX">
                        <th>{{$location->id}}</th>
                        <td>{{$location->name}}</td>
                        <td class="center">{{$location->description}}</td>
                        <td>{{$location->posts()->count()}}</td>
                        <td class="center">
                            <div class="button-group">
                                {{Html::linkroute('location.show', 'Details', [$location->url], ['class' => 'btn btn-primary ibtn btn-sm', 'style' => 'float:left;margin-right:5px;'])}}
                                {!! Form::open(['action' => ['LocationController@destroy', $location->id], 'method' => 'DELETE']) !!}
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