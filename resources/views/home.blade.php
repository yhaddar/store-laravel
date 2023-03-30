@extends('layouts.layout')

@section('title')
    Home
@endsection

{{-- css --}}
@section('style')
    @include('Home.style')
@endsection

{{-- content home --}}
@section('content')
    @include('Home.section-home')
    @include('Home.cards-home')
    @include('Home.trending-products')
    @include('Home.CountDown')
    @include('Home.sponsored-by')
@endsection

{{-- javascript --}}
@section('script')
    @include('Home.script')
@endsection
