@extends('master')

@section('title')
    Blog Detail
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{$data['image']}}" alt="" style="height: 300px"/>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <h1 class="card-title">{{$data['title']}}</h1>
                        <h3 class="">Author: {{$data['author']}}</h3>
                        <p class="">{{$data['description']}}</p>
                        <hr/>
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
