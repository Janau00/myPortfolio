@extends('layouts.app')
@section('content')

    <div class="relative min-h-screen bg-[#050419]">
        @if (Route::has('login'))
            @include('livewire.welcome.navigation')
        @endif
    </div>
@endsection
