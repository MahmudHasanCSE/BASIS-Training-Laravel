@extends('master')

@section('title')
    Edit Blog Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white">Edit Blog Form</div>
                        <div class="card-body bg-dark text-white">
                            <h4 class="text-success text-center">{{ Session::get('message') }}</h4>
                            <form action="{{route('add-blog')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{ $blog->title }}" name="title"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Blog Author</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{ $blog->author }}" name="author"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Blog Description</label>
                                    <div class="col-md-9">
{{--                                        <input type="text" class="form-control" value="{{ $blog->description }}" name="description"/>--}}
                                        <textarea class="form-control" name="description">{{ $blog->description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-light" value="Update Blog Info"/>
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
