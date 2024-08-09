@extends('guest.layout.app')
@section('title', 'Dashboard')
@section('content')

@include('livewire.authnavbar')
@include('dashboard.dashboard-hero')
<livewire:data-form />
@include('livewire.welcome.footer')

@endsection
