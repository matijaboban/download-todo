<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Download ToDo Tool | matijaboban.com</title>

    {{-- External Fonts --}}
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'> -->

    {{-- Styles --}}
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
<!--     <link href="{{ url('/css/style.css') }}" rel="stylesheet"> -->

    {{-- Auth Token  --}}
    @if (Auth::user())

        {{-- Set server basic auth information --}}
        @if(env('SERVER_BASIC_AUTH'))
        <meta name="auth-basic" content="{{ env('SERVER_BASIC_STRING') }}">
        @endif

        {{-- Set App auth token information --}}
        <meta name="auth-token" content="{{ JWTAuth::fromUser(Auth::user()) }}">

    @endif

</head>
<body class="grey darken-1">
    @if (Auth::guest())
    @yield('content')
    @else
    <div id="app"></div>
    @endif

    {{-- JavaScripts  --}}
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="@if (App::isLocal()){{ url('/js/libs.js') }} @else{{ elixir('js/libs.js') }} @endif"></script>
    @if (Auth::user())
        <script src="@if (App::isLocal()){{ url('/js/main.js') }} @else{{ elixir('js/main.js') }} @endif"></script>
    @endif

</body>
</html>
