<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Realestate Company @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/' . $view_name . '.css')}}">

</head>

<body>
    <div class="header">
        @include('header')
    </div>
    <section>
        <div class="container">
            @yield('content')
        </div>
    </section>
    <div class="footer">
        @include('footer')  
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/' . $view_name . '.js')}}"></script>
</body>

</html>
