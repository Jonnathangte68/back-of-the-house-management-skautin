<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://unpkg.com/grapesjs/dist/css/grapes.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Get a specific version -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/atomic@4.0.0/dist/atomic.polyfills.min.js"></script>
    <script src="https://unpkg.com/grapesjs"></script>
    <style>
        /* Let's highlight canvas boundaries */
        #gjs {
        border: 3px solid #444;
        }
        /* Reset some default styling */
        .gjs-cv-canvas {
        top: 0;
        width: 100%;
        height: 100%;
        }
    </style>

    @yield('styles')
    @yield('top_scripts')

</head>

<body>
    @yield('content')
    @yield('scripts')
</body>

</html>