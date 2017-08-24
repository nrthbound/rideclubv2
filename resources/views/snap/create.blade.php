@extends('layouts.app')


@section('content')


    <div class="container">
        <div class="columns">
            <div class="column is-3">
                <div class="snap-upload">
                    Upload or Take Snap
                    <input class="snap" type="file" name="" value="">
                    <img src="" class="snap-preview" alt="">
                </div>
            </div>
            <div class="column">
                <div class="box">
                    Right
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script>
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.snap-preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".snap").change(function(){
        readURL(this);
    });
    </script>
@endsection
