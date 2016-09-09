<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        {{-- Styles --}}
        @include('layouts.StylesCss')

        {{-- Scripts --}}
        <script>
            window.Laravel = <?= json_encode(['csrfToken' => csrf_token(),]); ?>
        </script>
    </head>
    @if (Auth::guest())
    <body class="login-page">
        @else
    <body class="hold-transition skin-blue sidebar-mini fixed">
        {{-- Header Content --}}
        @include('layouts.header')
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        @endif

        @yield('content')

        @if (Auth::guest())
        @else
        {{-- Footer Content --}}
        @include('layouts.footer')
        @endif
        {{-- Script files for Current Page --}}
        @include('layouts.ScriptsJS')
    </body>
</html>
