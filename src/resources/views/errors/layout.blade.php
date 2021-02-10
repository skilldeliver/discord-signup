<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title')</title>

        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preload stylesheet" href="{{ asset(mix('front/css/error.css')) }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset(mix('front/css/error.css')) }}"></noscript>

        @include('partials.fonts')
    </head>
    <body>
        <main>
            <section class="error">
                <div class="brand">
                    <a href="{{ route('homepage') }}">
                        <span class="name">Podkrepi.bg</span>
                    </a>
                </div>
                <div class="code">
                    <p>
                        @yield('code')
                    </p>
                </div>
                <p class="message">
                    @yield('message')
                </p>

                @if ($code != '401' && $code != '429')
                    <a href="{{ route('homepage') }}" class="button style-1">
                        <span>Обратно към сайта</span>
                    </a>
                @endif
            </section>
        </main>
    </body>
</html>
