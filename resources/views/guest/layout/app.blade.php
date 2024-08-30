<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JanaTech</title>

            <!-- Favicon -->
            <!-- <link rel="shortcut icon" href="{{ asset('Screenshot 2024-08-30 at 1.52.39 PM.png') }}"> -->
            <!-- public/assets/logo/Screenshot 2024-08-30 at 1.52.39 PM.png -->
            <!-- If favicon is in the 'assets' folder -->
            <!-- <link rel="icon" href="/assets/favicon.ico" type="image/x-icon"> -->


        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles


</head>
<body class="bg-[#000000]">
    <main class="container mx-auto px-4">
        <div class="pt-5 pb-5">
            {{-- @include('livewire.welcome.navigation') <!-- navigation bar for guests --> --}}
        </div>
        @yield('content')
    </main>
    @livewireScripts
</body>
</html>
