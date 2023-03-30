@extends('layouts.layout')

@section('title')
    Checkout
@endsection

@section('style')
    @include('checkout.style')
@endsection

@section('content')
    @include('checkout.checkout-cart')
@endsection

