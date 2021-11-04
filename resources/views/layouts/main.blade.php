<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Migration')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- CDNs Entrypoint --}}
    @yield('cdn-entrypoint')
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    {{-- SCRIPTs Section --}}
    <script src=" {{ asset('js/app.js') }} "></script>
    
    @yield('script-entrypoint')
</body>
</html>