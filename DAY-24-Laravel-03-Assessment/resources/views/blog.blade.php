@extends('master')

@section('title')
    Blog
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-4 pb-5">
                    <div class="card">
                        <img src="{{$blog['image']}}" alt="" class="card-img-top h-300"/>
                        <div class="card-body">
                            <h6>ID: {{$blog['id']}}</h6>
                            <h3 class="card-title">{{$blog['title']}}</h3>
                            <h5>Author: {{$blog['author']}}</h5>
                            <hr/>
                            <a href="{{ route('detail', ['id' => $blog['id']]) }}" class="btn btn-outline-dark">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
