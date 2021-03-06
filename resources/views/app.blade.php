<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Online chat rooms for everyone! Chat online for free!">
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="chat, online chat, livechats, live chats, live chat, chat rooms"
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>LiveChats</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app"></div>
        <script>
            var BASE_URL = '{{ URL::to('/') }}';
            var PUSHER_APP_KEY = '{{ env('PUSHER_APP_KEY') }}';
        </script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
