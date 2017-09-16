<!doctype html>
<html lang="lt">
<head>
    <title>Asmeninis treneris</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css')
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
</head>
<body>
<header>
    <div class="container">
        <div class="pull-left">
            <a class="logo text-uppercase" href="{{url('/')}}">Asmeninis treneris</a>
        </div>
        <div class="pull-right">
            <a href="{{route('orders.page')}}" class="bt bt-primary">Užsakymų sąrašas</a>
        </div>
    </div>
</header>
<div id="page">
    @yield('content')
</div>
<footer>
    <div class="container">
        <p>2017 - Visos teisės saugomos</p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@yield('js')
<script type="text/javascript" src="{{ asset('js/general.js') }}"></script>
</body>
</html>

