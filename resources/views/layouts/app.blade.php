<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Tipped -->
    <link rel="stylesheet" href="{{ asset('css/tipped.css') }}">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700|Material+Icons" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

    @if (Session::has('flash_message'))
        <div class="headsup headsup--{{Session::get('flash_message_level')}}">
            {!! Session::get('flash_message') !!}
        </div>
    @endif

    <div id="app">

        @include('component.nav')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/tipped.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            Tipped.create('.simple-tooltip');
        });
    </script>
    <script>
        function init() {
            window.addEventListener('scroll', function(e){
                var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                    shrinkOn = 300,
                    header = document.querySelector("nav");
                if (distanceY > shrinkOn) {
                    header.classList.add('is-small');
                } else {
                    if (header.classList.contains('is-small')) {
                        header.classList.remove('is-small');
                    }
                }
            });
        }
        window.onload = init();
    </script>

    @yield('scripts')

</body>
</html>
