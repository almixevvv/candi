<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Candi.id</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/mainstyle.css">
  
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/logo.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/logo.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/logo.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/logo.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/logo.svg">
    <link rel="icon" type="image/png" href="/images/favicons/logo.svg" sizes="32x32">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/logo.svg">

    <meta name="msapplication-TileColor" content="#151515">
    <meta name="theme-color" content="#151515">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/mainTheme.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    @stack('extra-css')
</head>
    <body>
        @include('components.front.navbar')
        @yield('content')
        @include('components.front.footer')

        @stack('extra-js')
    </body>
</html>
