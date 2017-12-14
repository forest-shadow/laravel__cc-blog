<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Blog</title>
</head>
<body>
    @yield('image-header')
    <div class="container">
        @yield('main')
    </div>
</body>
</html>