@extends('posting.layout.app')

@section('content')
    <div class="container">
        <h2 class="text-center">My Post</h2>
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="product-view">
                    <div class="contact-info2">
                        <div class="img-icon">
                            <img src="assets/images/img-icon.png">
                            <div class="camera-icon">
                                <i class="fa fa-camera"></i>
                            </div>
                        </div>
                        @if (!Auth::guest())
                            <div class="user-name2">
                                <p class="user-name-bold">{{Auth::user()->name}}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="my-posting-section">
                    <div class="my-post-title">
                        <h3>My Post</h3>
                        <a href="{{route('post.create')}}" class="btn start-post-btn mb-5">Start Posting</a>
                    </div>

                        <div id="latest" class="tabcontent">
                            <div class="row">
                                @foreach ($posts as $post)
                                    <div class="col-md-4">
                                        <div class="products" id="delete-product">
                                            <div id="clients-edit-wrapper" class="text-right close-me">
                                                <img src="assets/images/close.svg" id="delete-me">
                                            </div>
                                            <a href="{{route('post.show', $post->id)}}">
                                                @php $images = json_decode($post->images,true); @endphp
                                                @if(is_array($images) && !empty($images))
                                                <img src='{{ URL::asset('storage/post_images/'.$images[0]) }}' width="100%"/>
                                                @endif
                                                <div class="product-name">
                                                    <h5>{{$post->title}}</h5>
                                                    <div class="dot-menu">
                                                    
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="share-product">
                                                <p>Share on:</p>
                                                <div class="share-social">
                                                    <button class="google-btn"><i class="fab fa-google"></i></button>
                                                    <button class="twitter-btn"><i class="fab fa-twitter"></i></button>
                                                    <button class="facebook-btn"><i class="fab fa-facebook-f"></i></button>
                                                    <button class="whatsapp-btn"><i class="fab fa-whatsapp"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
    </div>
@endsection