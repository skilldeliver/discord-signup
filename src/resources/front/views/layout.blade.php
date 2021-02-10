<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">

        <title>{{ ! empty($data['metaTitle']) ? ($data['metaTitle'] . ' - Podkrepi.bg Discord Sign-Up') : 'Podkrepi.bg Discord Sign-Up' }}</title>

        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="canonical" href="{{ strtolower(Request::url()) }}" />

        <link rel="preload stylesheet" href="{{ asset(mix('front/css/' . ($data['templateName'] ?? 'missing') . '.css')) }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset(mix('front/css/' . ($data['templateName'] ?? 'missing') . '.css')) }}"></noscript>

        @include('partials.fonts')

        @if (env('APP_ENV') == 'production')
            <link rel="preconnect" href="https://www.google.com" />
            <link rel="preconnect" href="https://www.google.bg" />
            <link rel="preconnect" href="https://stats.g.doubleclick.net" />
        @endif

        <script>
            window.validationMessages = {!! json_encode(trans('validation.js')) !!};
        </script>

        @yield('head-scripts')
    </head>
    <body class="page-{{ $data['pageName'] ?? 'missing' }}">
        <div class="overlay"></div>

        @include('partials.general.header')

        <main>
            @yield('content')
        </main>

        @include('partials.general.footer')

        @include('partials.cookie-consent')

        <script src="{{ asset(mix('front/js/manifest.js')) }}"></script>
        <script src="{{ asset(mix('front/js/vendor.js')) }}"></script>
        <script src="{{ asset(mix('front/js/' . ($data['templateName'] ?? 'missing') . '.js')) }}"></script>

        @yield('footer-scripts')
    </body>
</html>
