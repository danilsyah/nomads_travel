<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    {{-- style css --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
    {{-- end style css --}}
</head>

<body>
    {{-- Navbar --}}
    @include('includes.navbar')
    {{-- end navbar --}}

    {{-- content --}}
    @yield('content')
    {{-- end content --}}

    {{-- Footer --}}
    @include('includes.footer')
    {{-- end footer --}}

    {{-- script js --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
    {{-- end script --}}
</body>

</html>
