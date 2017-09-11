@extends('layouts.app')

@section('content')
<div class="is-page">
    <div class="container">

        <h2 class="page-title">Your Builds</h2>

        <div class="columns">
            <div class="column is-3">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                        <img src="http://placehold.it/250x250" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">Latest Build 2k7</p>
                                <p><a href="#">Rideclub</a></p>
                                <p class="subtitle is-6">build id: xYsi328</p>
                            </div>
                        </div>

                        <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                        <a>#css</a> <a>#responsive</a>
                        <br>
                        <small>11:09 PM - 1 Jan 2016</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection