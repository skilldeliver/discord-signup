@extends('layout')

@section('content')

    <section class="welcome">
        <div class="container">
            @include('pages.homepage.welcome')

            @if (Auth::check())
                @include('pages.homepage.data')

                @include('pages.homepage.form')
            @endif
        </div>
    </section>

@endsection
