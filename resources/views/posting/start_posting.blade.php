@extends('posting.layout.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="product-view">
                    <div class="contact-info2">
                        <div class="img-icon">
                            <img src="{{asset('assets/images/img-icon.png')}}">
                        </div>
                        <div class="user-name2">
                            <p class="user-name-bold">Amina David</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="contact-section">
                    <div class="start-posting-section">
                        <img src="{{asset('assets/images/bars.svg')}}">
                        <p>Start Posting your products and services for every<br> corper in Nigeria to see</p>
                        <div class="start-post">
                            <a href="{{route('post.create')}}"> <button class="start-posting-btn">Start Posting</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection