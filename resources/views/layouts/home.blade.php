@extends('index')

@section('container')
    @include('partials.header')
    @include('partials.feature')
    @include('partials.about')
    @include('partials.contact')
    @include('livewire.comments')
    @include('partials.footer')
@endsection
