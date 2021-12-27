@extends('index')

@section('container')
    <h1>TEST</h1>
    @include('partials.header')
    @include('partials.feature')
    @include('partials.about')
    @include('partials.contact')

    @include('partials.footer')
@endsection
