@extends('guest.layout.app')
@section('title', 'Dashboard')
@section('content')

@include('livewire.authnavbar')
    @include('dashboard.dashboard-hero')
    @include('livewire.portfolio-form')
@include('livewire.welcome.footer')
@endsection
