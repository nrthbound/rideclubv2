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

    <!-- IziToast Toast Notifications -->
    <link rel="stylesheet" href="{{ asset('css/iziToast.min.css') }}">

    <!-- IziToast Toast Notifications -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- Tipped -->
    <link rel="stylesheet" href="{{ asset('css/tipped.css') }}">

    <!-- Tipped -->
    <link rel="stylesheet" href="{{ asset('css/croppie.css') }}">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700|Material+Icons" rel="stylesheet">

    <!-- Typekit -->
    <script>
      (function(d) {
        var config = {
          kitId: 'fcz6gnq',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

    <div id="app">

        @include('component.nav')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/tipped.js') }}"></script>
    <script src="{{ asset('js/iziToast.min.js') }}"></script>
    <script src="{{ asset('js/croppie.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            Tipped.create('.simple-tooltip');
        });
    </script>
    <script>
        function init() {

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    iziToast.error({
                        message: "{{$error}}",
                        position: "topCenter",
                        class: "error",
                    });
                @endforeach
            @endif

            @if (Session::has('flash_message'))
                iziToast.show({
                    message: "{!! Session::get('flash_message') !!}",
                    position: "topCenter",
                    class: "{{Session::get('flash_message_level')}}",
                    theme: "dark"
                });
            @endif

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
