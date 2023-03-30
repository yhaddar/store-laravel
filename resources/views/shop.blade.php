@extends('layouts.layout')

@section('title')
    Shop
@endsection

{{-- style --}}
@section('style')
    @include('shop.style')
@endsection
{{-- content shop --}}
@section('content')
    @include('shop.navbar-shop')
    @include('shop.search')
    @include('shop.products-shop')
@endsection
