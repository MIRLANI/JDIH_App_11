@extends('layouts.app')


@section('title', 'Database Peraturan | JDHI FMIPA')

@section('content')


    @if (URL::current() == route('home'))
        @include('pages.users.searachHome')
        @include('pages.users.home.peraturanTerpopuler')
        @include('pages.users.home.peraturanTerbaru')
        @include('pages.users.home.standarLayanan')
    @endif
    
    @if (URL::current() == route('search'))
        @include('pages.users.search')
    @endif

@endsection
