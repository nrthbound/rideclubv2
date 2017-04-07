@extends('layouts.app')

@section('content')

    @if ( !\Auth::user()->profile->display_name )
        <div class="modal is-active">
          <div class="modal-background"></div>
          <div class="modal-content">

              @if ($errors->has('display_name'))
                  <span class="tag is-danger is-medium" style="width: 100%; margin-bottom: 10px;">{{ $errors->first('display_name') }}</span>
              @endif

              <div class="modal-box">
                  <!-- Begin Form -->
                  <form action="{{route('update-profile', ['profile' => \Auth::user()->profile->id])}}" method="POST" >
                      {{ csrf_field() }}

                      <h2 class="has-text-centered">Hey friend! Let's set your custom URL name</h2>
                      <p class="has-text-centered"><small>This will show up in the address bar when you share your page.</small></p>
                      {{-- <p style="margin-top:1em;" class="has-text-centered"><span class="tag is-warning">This can only be set once, so make sure you choose wisely!</span></p> --}}
                      <br>
                      <div class="field has-addons">

                          <p class="control">
                              <input class="input" disabled type="text" value="https://rideclub.com/u/">
                          </p>
                          <p class="control is-expanded">
                              <input name="display_name" class="input{{ $errors->has('display_name') ? ' is-danger' : '' }}" type="text" placeholder="{{\Auth::user()->profile->display_name}}">
                          </p>
                          <p class="control">
                              <button type="submit" class="button is-primary">
                                  Save
                              </button>
                          </p>
                      </div>
                  </form>
                  <!-- End form -->
              </div>

          </div>
          {{-- <button class="modal-close"></button> --}}
        </div>
    @endif

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
