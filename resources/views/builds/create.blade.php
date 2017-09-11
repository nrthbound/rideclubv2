@extends('layouts.app')

@section('content')
    <div class="is-page">
        <div class="container">

            <!-- Main container -->
            <nav class="level has-shadow is-primary">
                <!-- Left side -->
                <div class="level-left">
                    <div class="level-item">
                        <p class="subtitle is-5">
                            <strong><span class="icon"><i class="fa material-icons">build</i></span> Create </strong>Build
                        </p>
                    </div>
                </div>
            </nav>

            <build-form>
            </build-form>
            
        </div>
    </div>
@endsection
