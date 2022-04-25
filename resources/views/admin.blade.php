<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>

    <!--Login Lara-->
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <!--ENd-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Windmill Dashboard</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">


    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- Styles PowerGrid-->
    @livewireStyles
    @powerGridStyles
    <!-- Alpine Plugins -->
    <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
 
    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="/livewire/livewire.js"></script>
    <style>
      [x-cloak] { display: none }
    </style>
  </head>
  <body>

    
    <livewire:show-hide />

    <!-- Scripts live Grid-->
    @livewireScripts
    @powerGridScripts

    <script type="text/javascript" src="{{ URL::asset('js/focus-trap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/init-alpine.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

  </body>
</html>
