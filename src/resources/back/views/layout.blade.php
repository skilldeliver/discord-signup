<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ ! empty($data['metaTitle']) ? ($data['metaTitle'] . ' - Панел') : 'Панел' }}</title>

        <link rel="preload stylesheet" href="{{ asset(mix('back/css/' . ($data['templateName'] ?? 'missing') . '.css')) }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset(mix('back/css/' . ($data['templateName'] ?? 'missing') . '.css')) }}"></noscript>

        @include('partials.fonts')

        @yield('head-scripts')
    </head>
    <body class="page-{{ $data['pageName'] ?? 'missing' }}">
        @include('partials.general.header')

        <main>
            @yield('content')
        </main>

        @include('partials.general.footer')

        <script src="{{ asset(mix('back/js/manifest.js')) }}"></script>
        <script src="{{ asset(mix('back/js/vendor.js')) }}"></script>
        <script src="{{ asset(mix('back/js/' . ($data['templateName'] ?? 'missing') . '.js')) }}"></script>

        @yield('footer-scripts')
    </body>
</html>
