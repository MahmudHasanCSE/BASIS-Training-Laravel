@extends('master')

@section('title')
    BASIS Page
@endsection

@section('body')
    <h1>{{ $a }}</h1>
    <h1>{{ $b }}</h1>
{{--printing array--}}
    @foreach($c as $key => $value)
{{--        <span>Index No: {{ $key }} and Value: {{ $value }}</span><br/>--}}
        @if($key >= 3 && $key <= 5)
            <span>Index No: {{ $key }} and Value: {{ $value }}</span><br/>
        @else
            <h1>Out of range...</h1>
        @endif
    @endforeach

    @foreach($d as $key => $value)
{{--        <span>{{ $value['name'] }}</span><br/>--}}
        @foreach($value as $item)
            <span>{{ $item }}</span>
        @endforeach
        <br/>
    @endforeach
@endsection
