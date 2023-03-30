@extends('layouts.layout')

@section('title')
    Cart
@endsection

@section('style')
    @include('cart.style')
@endsection

@section('content')
    @include('cart.header')
    @include('cart.cart-shop')

@endsection

@section('script')
    @include('cart.jquery')
    @include('cart.javascript')
@endsection
