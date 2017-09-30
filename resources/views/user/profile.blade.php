@extends('layouts.app')

@section('content')

<div class="profile">
    <div class="container">
        <div class="columns">
            <div class="column is-8 is-offset-2">

                <div class="columns">
                    <div class="column is-12">
                        <div class="box">
                            <div class="is-profile-header">
                                <img src="{{\Cloudder::show(\Auth::user()->profile->header, array("width" => 888, "height" => 150, "crop" => "fill"))}}" alt="" />
                                <div class="is-edit-header-icon"><i class="material-icons">add_a_photo</i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="column is-3">
                        <div class="box">
                            <div class="is-profile-photo">
                                <img src="{{\Cloudder::show(\Auth::user()->profile->avatar, array("width" => 250, "height" => 250, "crop" => "fill"))}}" alt="" />
                                <div class="is-edit-photo-icon"><i class="material-icons">add_a_photo</i></div>
                            </div>
                        </div>
                        <div class="content">
                            <h2 class="is-name">
                                {{\Auth::user()->name}}
                            </h2>

                            <span class="is-location">
                                <i class="material-icons">place</i>
                                <span>Wilmington, NC</span>
                            </span>

                            @if(\Auth::user()->profile->display_name)
                                <div class="is-display-name">
                                    <span title="Click to copy a shareable URL" class="tag simple-tooltip is-warning">{{\Auth::user()->profile->display_name}}</span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="column">
                        <div class="content">
                            <div class="is-management">
                                <h3>Account</h3>
                                <div class="box">
                                    <form class="will-update-profile" action="{{route('update-profile', ['id' => \Auth::user()->profile->id])}}" method="post">

                                        <div class="field">
                                          <label class="label">Name</label>
                                          <p class="control">
                                            <input class="input {{ $errors->has('name') ? "is-danger" : "" }}" type="text" placeholder="Name" name="name" value="{{\Auth::user()->name}}" />
                                          </p>
                                          {{-- <p class="help is-success">This username is available</p> --}}
                                        </div>

                                        <div class="field">
                                          <label class="label">Display Name</label>
                                          <p class="control">
                                            <input class="input {{ $errors->has('display_name') ? "is-danger" : "" }}" type="text" placeholder="Display Name" name="display_name" value="{{\Auth::user()->profile->display_name}}" />
                                          </p>
                                          {{-- <p class="help is-success">This username is available</p> --}}
                                        </div>

                                        <div class="field">
                                          <label class="label">Password</label>
                                          <p class="control">
                                            <input id="password" type="password" placeholder="Password" class="input" name="password" value="" />
                                          </p>
                                          {{-- <p class="help is-success">This username is available</p> --}}
                                        </div>

                                        <div class="field">
                                          <label class="label">Confirm Password</label>
                                          <p class="control">
                                            <input id="password" type="password" placeholder="Confirm Password" class="input" name="password_confirmation" value="" />
                                          </p>
                                          {{-- <p class="help is-success">This username is available</p> --}}
                                        </div>

                                        <div class="field">
                                          <div class="control">
                                            <button type="submit" class="button is-primary is-loadable">Save Changes</button>
                                          </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
    // TODO: Figure this shit out
        //var c = new Croppie(document.getElementById('item'));
    </script>
@endsection
