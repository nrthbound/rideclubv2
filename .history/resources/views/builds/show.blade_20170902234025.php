@extends('layouts.app')

@section('content')
<div class="is-page">
    <div class="container">

        <!-- Main container -->
        <nav class="level">
        <!-- Left side -->
        <div class="level-left">
            <div class="level-item">
            <p class="subtitle is-5">
                <strong>123</strong> posts
            </p>
            </div>
            <div class="level-item">
            <div class="field has-addons">
                <p class="control">
                <input class="input" type="text" placeholder="Find a post">
                </p>
                <p class="control">
                <button class="button">
                    Search
                </button>
                </p>
            </div>
            </div>
        </div>

        <!-- Right side -->
        <div class="level-right">
            <p class="level-item"><strong>All</strong></p>
            <p class="level-item"><a>Published</a></p>
            <p class="level-item"><a>Drafts</a></p>
            <p class="level-item"><a>Deleted</a></p>
            <p class="level-item"><a class="button is-success">New</a></p>
        </div>
        </nav>

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
                                <p class="subtitle is-6">
                                    <a href="#">
                                        <span title="Click to copy a shareable URL" class="tag simple-tooltip is-warning">Build ID: xYsi328</span>
                                    </a>
                                </p>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection