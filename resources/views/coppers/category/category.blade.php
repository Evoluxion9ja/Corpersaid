@extends('coppers.layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Button with data-target
                </button>
                @include('partials._validate')
                <div class="collapse" id="collapseExample">
                    <div class="card-body">
                        <p class="card-description">
                            <h3>Create Category</h3><hr>
                        </p>
                        <form class="forms-sample" action="{{route('category.store')}}" method="POST" data-parsley-validate>
                            {{csrf_field()}}
                            <div class="form-group">
                            <label for="exampleInputUsername1">Category Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Category Name" required>
                            </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Category Description</label>
                            <input type="text" class="form-control" name="description" id="description" placeholder="Description" required>
                            </div>
                            <div class="form-group">
                            <label for="exampleInputPassword1">Category Url</label>
                            <input type="text" class="form-control" name="url" id="url" placeholder="Category Url" required>
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
                    @foreach ($categories as $category)
                        <tr>
                            <th><strong><small>{{$category->id}}</small></strong></th>
                            <td><strong><small>{{$category->name}}</small></strong></td>
                            <td><strong><small>{{$category->description}}</small></strong></td>
                            <td>
                                @if ($category->posts->count() <= 1)
                                    <strong><small>{{$category->posts->count()}} Post</small></strong>
                                    @else 
                                    <strong><small>{{$category->posts->count()}} Posts</small></strong>
                                @endif
                            </td>
                            <td>
                                {{Html::linkroute('category.show', 'Details', [$category->id], ['class' => 'btn btn-primary btn-sm', 'style' => 'float:left;margin-right:5px;'])}}
                                {!! Form::open(['action' => ['AdminController@destroyCategory', $category->id], 'method' => 'DELETE']) !!}
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