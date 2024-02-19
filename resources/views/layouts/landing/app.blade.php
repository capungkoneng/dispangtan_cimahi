<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- seo setting --}}
    {{-- <title>{{ isset($seoTitle) ? $seoTitle : config('app.seo.default_title') }}</title> --}}
    <title>@yield('title', config('app.seo.default_title'))</title>
    <meta name="description" content="@yield('description', config('app.seo.default_meta_description'))">
    <meta name="keywords"
        content="pertanian, peternakan, perikanan, pangan, ketahanan pangan, petani, tani, cimahi, sawah, kebun, puskeswan, puskeswan cimahi, cimahi kota, suntik rabies, dinas pertanian cimahi">
    <meta name="author" content="dispangtan kota cimahi">
    {{-- //seo setting --}}

    <link rel="shortcut icon" href="{{ asset('storage/uploads/settings/logo_favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colors/leaf.css') }}">

    @stack('style')
</head>

<body>
    <div class="content-wrapper">
        <!-- Header -->
        @include('components.landing.header')
        <!-- /header -->
        @yield('main')
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    @include('components.landing.footer')

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>

    @stack('scripts')
</body>

</html>
