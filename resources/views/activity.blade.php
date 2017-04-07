@extends('layouts.app')


@section('content')

    @include('component.featured')

    @include('component.feed')

@endsection


@section('scripts')

    <script>
        $(document).ready(function(){

            $('.featured').slick({
              slidesToShow: 3,
              nextArrow: "<button class='slide-next'><i class='material-icons'>keyboard_arrow_right</i></button>",
              prevArrow: "<button class='slide-prev'><i class='material-icons'>keyboard_arrow_left</i></button>",
              responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    arrows: false,
                    slidesToShow: 1
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    arrows: false,
                    slidesToShow: 1
                  }
                }
              ]
            });
        });
    </script>
@endsection
