@extends('guest.layout.app')
@section('title', 'Home')
@section('content')
@include('livewire.welcome.navigation') <!-- navigation bar for guests -->
    @include('guest.landing.hero')
    @include('guest.landing.features')
    @include('guest.landing.cta')
    @include('livewire.welcome.footer')
@endsection
