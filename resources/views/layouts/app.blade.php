<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    @yield('content_css')

    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->
    <title>@yield('title') | ryo space</title>

    <!-- Styles -->
    <!--<link href="/css/app.css" rel="stylesheet">-->
    
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <!-- nav -->
    @include('layouts.partials.navigation')

    <!-- content -->
    @yield('content')

    <!-- footer -->
    @include('layouts.partials.footer')

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-1.10.1.min.js') }}"></script>
    <noscript>
        <p>請開啟JavaScript的功能</p>
    </noscript>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Scripts -->
    <!--<script src="/js/app.js"></script>-->
    

    <!-- customer js -->
    @yield('content_js')
</body>
</html>
