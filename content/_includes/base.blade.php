<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('pageDescription', config('app.description'))">

    <title>{{ config('app.name') }} @yield('pageTitle')</title>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('assets/css/all.css') }}">
</head>

<body>

<div id="header">
    <nav>
        <div class="wrapper">
            <strong><a href="{{ url('/') }}">{{ config('app.name') }}</a></strong>

            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="https://ulties.com/tanto">Docs</a></li>
                <li><a href="https://github.com/fistlab">Github</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="wrapper m-t-30">
    @yield('body')
</div>

<div class="clearfix"></div>

</body>
</html>
