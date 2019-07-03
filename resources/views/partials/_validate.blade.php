@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session('error')}}
    </div>
@endif