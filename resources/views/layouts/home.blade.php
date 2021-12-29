@extends('index')

@section('container')
    @include('partials.header')
    @if (Cookie::get('remember') || Session::get('remember'))
        @include('partials.feature')
    @endif
    @include('partials.about')
    @include('partials.contact')
    @include('livewire.comments')
    @include('partials.footer')
@endsection
