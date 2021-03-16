<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Livewire</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles tailwind lite normalize -->
        {{-- <link href="{{asset('css/normalize.css')}}" rel="stylesheet"> --}}

        @livewireStyles

    </head>
    <body >


        {{-- TEST3 name variable assigned and used in the mount view --}}
        @livewire('hello-world')

        
        @livewireScripts
    </body>
</html>
