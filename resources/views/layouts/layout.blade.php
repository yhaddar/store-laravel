<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <style>
        *{margin: 0;padding: 0;box-sizing: border-box;}.store{padding-top: 71px;width: 100%;height: auto;}::-webkit-scrollbar {display: none;}
    </style>
    {{-- import css --}}
    @yield('style')
</head>
<body>
    {{-- import navbar --}}
    @include('layouts.navbar')
    {{-- import content body --}}
    <section class="store">
        @yield('content')
    </section>
    {{-- import footer --}}
    @include('layouts.footer')
    {{-- import javascript --}}
    @yield('script')


</body>
</html>
