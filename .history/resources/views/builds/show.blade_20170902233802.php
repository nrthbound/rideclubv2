@extends('layouts.app')

@section('content')
<div class="is-page">
    <div class="container">

        <div class="page-actions">
            <h2 class="page-title">Your Builds</h2>
            <div class="dropdown is-pull-right">
                <div class="dropdown-trigger">
                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                    <span>Dropdown button</span>
                    <span class="icon is-small">
                        <i class="material-icons">arrow_drop_down</i>
                    </span>
                    </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                    <div class="dropdown-content">
                    <a href="#" class="dropdown-item">
                        Dropdown item
                    </a>
                    <a class="dropdown-item">
                        Other dropdown item
                    </a>
                    <a href="#" class="dropdown-item is-active">
                        Active dropdown item
                    </a>
                    <a href="#" class="dropdown-item">
                        Other dropdown item
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        With a divider
                    </a>
                    </div>
                </div>
                </div>
        </div>
        

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