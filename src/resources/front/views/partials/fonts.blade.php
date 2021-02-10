{{-- Roboto - Regular, Medium, Bold --}}

<link rel="preload" href="{{ asset(mix('front/fonts/Roboto-Regular.woff2')) }}" as="font" type="font/woff2" crossorigin>

<link rel="preload" href="{{ asset(mix('front/fonts/Roboto-Medium.woff2')) }}" as="font" type="font/woff2" crossorigin>

<link rel="preload" href="{{ asset(mix('front/fonts/Roboto-Bold.woff2')) }}" as="font" type="font/woff2" crossorigin>

{{-- IcoMoon - icons --}}

<link rel="preload" href="{{ asset(mix('front/fonts/icomoon.woff')) }}" as="font" type="font/woff" crossorigin>

<style>
    @font-face {
        font-family: 'Roboto';
        src: url('{{ asset(mix('front/fonts/Roboto-Regular.eot')) }}') format('embedded-opentype'),
             url('{{ asset(mix('front/fonts/Roboto-Regular.woff2')) }}') format('woff2'),
             url('{{ asset(mix('front/fonts/Roboto-Regular.woff')) }}') format('woff'),
             url('{{ asset(mix('front/fonts/Roboto-Regular.ttf')) }}') format('truetype'),
             url('{{ asset(mix('front/fonts/Roboto-Regular.svg')) }}#Roboto') format('svg');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'Roboto';
        src: url('{{ asset(mix('front/fonts/Roboto-Medium.eot')) }}') format('embedded-opentype'),
             url('{{ asset(mix('front/fonts/Roboto-Medium.woff2')) }}') format('woff2'),
             url('{{ asset(mix('front/fonts/Roboto-Medium.woff')) }}') format('woff'),
             url('{{ asset(mix('front/fonts/Roboto-Medium.ttf')) }}') format('truetype'),
             url('{{ asset(mix('front/fonts/Roboto-Medium.svg')) }}#Roboto Medium') format('svg');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'Roboto';
        src: url('{{ asset(mix('front/fonts/Roboto-Bold.eot')) }}') format('embedded-opentype'),
             url('{{ asset(mix('front/fonts/Roboto-Bold.woff2')) }}') format('woff2'),
             url('{{ asset(mix('front/fonts/Roboto-Bold.woff')) }}') format('woff'),
             url('{{ asset(mix('front/fonts/Roboto-Bold.ttf')) }}') format('truetype'),
             url('{{ asset(mix('front/fonts/Roboto-Bold.svg')) }}#Roboto Bold') format('svg');
        font-weight: 700;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'icomoon';
        src: url('{{ asset(mix('front/fonts/icomoon.eot')) }}#iefix') format('embedded-opentype'),
            url('{{ asset(mix('front/fonts/icomoon.woff')) }}') format('woff'),
            url('{{ asset(mix('front/fonts/icomoon.ttf')) }}') format('truetype'),
            url('{{ asset(mix('front/fonts/icomoon.svg')) }}') format('svg');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

    body {
        font-size: 16px;
        color: #000000;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-style: normal;
        font-feature-settings: "locl"0;
        line-height: 1;
    }
</style>
