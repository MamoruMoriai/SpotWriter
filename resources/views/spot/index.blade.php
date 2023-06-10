<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <style>
            body {
                background-color: #cccccc;
            }
        </style>

    </head>
    <body>
        <div class="content">
            <div id="app">
                <h1>test</h1>
                <header-component></header-component>
                <router-view></router-view>
                <footer-component></footer-component>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>