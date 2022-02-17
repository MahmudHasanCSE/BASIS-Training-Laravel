{{--<h1>This is home page...</h1>--}}

{{--<a href="{{ url('/') }}">Home</a>--}}
{{--<a href="{{ url('/basis') }}">Basis</a>--}}
{{--<a href="{{ url('/about') }}">About</a>--}}
{{--<a href="{{ url('/contact') }}">Contact</a>--}}
{{--<br/>--}}
{{--<br/>--}}
{{--<br/>--}}
{{--<a href="{{ route('home') }}">Home</a>--}}
{{--<a href="{{ route('demo') }}">Basis</a>--}}
{{--<a href="{{ route('about') }}">About</a>--}}
{{--<a href="{{ route('contact') }}">Contact</a>--}}

@extends('master')

@section('title')
    Home Page
@endsection

@section('body')
{{--    <h1>This is home page...</h1>--}}

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white">Full Name</div>
                        <div class="card-body bg-dark text-white">
                            <form action="{{ route('full-name') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="first_name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="last_name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{ isset($result) ? $result : '' }}" name=""/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-light" value="Submit"/>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

