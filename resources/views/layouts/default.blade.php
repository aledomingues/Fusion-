<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Vídeo Jobs</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>
<body>
	<header>
    	<div class="container">
            <h1 class="logo"><a class="navbar-brand" href="/"><img src="{{ asset('img/logo-videojobs.png') }}" alt=""></a></h1>
            <nav class="navbar navbar-default">@include('layouts._header')</nav>
        </div>
    </header>
	<div class="content">
    	<div class="container">
    	@yield('content')
        </div>
    </div>
    @include('layouts._footer')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>    