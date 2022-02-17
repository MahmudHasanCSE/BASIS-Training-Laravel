{{--<h1>About Page</h1>--}}

{{--<a href="{{ url('/') }}">Home</a>--}}
{{--<a href="{{ url('/basis') }}">Basis</a>--}}
{{--<a href="{{ url('/about') }}">About</a>--}}
{{--<a href="{{ url('/contact') }}">Contact</a>--}}

@extends('master')

@section('title')
    About Page
@endsection

@section('body')
{{--    <h1>About Page...</h1>--}}
{{--    <h1>{{ $email }}</h1>--}}

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{$product['image']}}" alt="" class="card-img-top h-300"/>
                        <div class="card-body">
                            <p>ID: {{$product['id']}}</p>
                            <h3 class="card-title">{{$product['name']}}</h3>
                            <p>Tk. {{$product['price']}}</p>
{{--                            <p class="card-text">--}}
{{--                                {{$product['description']}}--}}
{{--                            </p>--}}
                            <hr/>
                            <a href="{{ route('detail', ['id' => $product['id']]) }}" class="btn btn-outline-dark">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
