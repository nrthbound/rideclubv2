@extends('layouts.app')

@section('content')
    <div class="is-page">
        <div class="container">

            <!-- Main container -->
            <nav class="level is-primary">
                <!-- Left side -->
                <div class="level-left">
                    <div class="level-item">
                        <p class="subtitle is-5">
                            <strong>Your</strong> Builds
                        </p>
                    </div>
                </div>

                <!-- Right side -->
                <div class="level-right">
                    <a href="#" class="button is-white">
                        Create New
                    </a>
                </div>
            </nav>

            <div class="columns">
                <div class="column">
                    COLUMN!
                </div>
            </div>

            <div class="columns">
                <div class="column is-3">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="http://cdn.thecoolist.com/wp-content/uploads/2016/09/Mafiabikes-Kush1-BMX-bike-960x710.jpg" alt="">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <h3><a class="is-card-link" href="#">Serpent Build - 2017</a></h3>
                                    <h4>Build ID: oabs83</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
