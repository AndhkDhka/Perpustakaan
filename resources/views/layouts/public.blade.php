<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'SDN Balas Klumprik')</title>

    <meta name="description" content="Website resmi SDN Balas Klumprik. Informasi sekolah, berita, dan PPDB.">

    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-800">

    {{-- Navbar --}}
    @include('public.partials.navbar')

    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('public.partials.footer')

</body>
</html>
