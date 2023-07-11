<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="./../../img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        @yield('pageName')
    </title>

    @vite('resources/js/app.js')
</head>

<body>
    @include('components.header')
    @include('components.jumbotron')

    <div>
        @yield('content')
    </div>

    <div>
        @yield('content-2')
    </div>

    @include('components.footer')
</body>

</html>
