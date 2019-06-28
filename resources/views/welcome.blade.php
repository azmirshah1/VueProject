<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">    
        <!-- Fonts -->
        

        <!-- Styles -->

        <link rel="stylesheet" href="{{ url('') }}/css/app.css">
        

    </head>
    <body >
        <div id='app'>
            <index></index>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>