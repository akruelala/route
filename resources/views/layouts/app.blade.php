<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        
@yield('title')

    </title>

  <link rel="stylesheet" href="{{'css/bootstrap.min.css'}}">

@yield('styles')


</head>
<body>

<div class="container my-3 py-5">
    @yield('content')
</div>

    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>

    @yield('script')

</body>
</html>

