@extends('guest.layout.app')
@section('title', 'Home')
@section('content')
    @include('guest.landing.hero')
    @include('guest.landing.features')
    @include('guest.landing.cta')
    @include('livewire.welcome.footer')
@endsection
