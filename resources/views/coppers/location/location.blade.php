@extends('coppers.layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    {{strtoupper(__('Create A New Location'))}}
                </button>
                @include('partials._validate')
                <div class="collapse" id="collapseExample">
                    <div class="card-body">
                        <p class="card-description">
                            <h3>Create Locations</h3><hr>
                        </p>
                        <form class="forms-sample" action="{{route('location.store')}}" method="POST" data-parsley-validate>
                            {{csrf_field()}}
                            <div class="form-group">
                            <label for="exampleInputUsername1">Location Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Location Name" required>
                            </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Location Description</label>
                            <input type="text" class="form-control" name="description" id="description" placeholder="Description" required>
                            </div>
                            <div class="form-group">
                            <label for="exampleInputPassword1">Location Url</label>
                            <input type="text" class="form-control" name="url" id="url" placeholder="Location Url" required>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
          </div>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-dark">
                <thead>
                    <th><strong>{{strtoupper('ID')}}</strong></th>
                    <th><strong>{{strtoupper('Category Name')}}</strong></th>
                    <th><strong>{{strtoupper('Description')}}</strong></th>
                    <th><strong>{{strtoupper('Post Counts')}}</strong></th>
                    <th><strong>{{strtoupper('Actions')}}</strong></th>
                </thead>
                <tbody>
                    @foreach ($locations as $location)
                        <tr>
                            <th><strong><small>{{$location->id}}</small></strong></th>
                            <td><strong><small>{{$location->name}}</small></strong></td>
                            <td><strong><small>{{str_limit($location->description, 50)}}</small></strong></td>
                            <td>
                                @if ($location->posts->count() <= 1)
                                    <strong><small>{{$location->posts->count()}} Post</small></strong>
                                    @else 
                                    <strong><small>{{$location->posts->count()}} Posts</small></strong>
                                @endif
                            </td>
                            <td>
                                {{Html::linkroute('location.show', 'Details', [$location->id], ['class' => 'btn btn-primary btn-sm', 'style' => 'float:left;margin-right:5px;'])}}
                                {!! Form::open(['action' => ['AdminController@destroyLocation', $location->id], 'method' => 'DELETE']) !!}
                                    {{form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection