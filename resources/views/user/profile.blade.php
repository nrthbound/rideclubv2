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

                                        <div class="field">
                                          <label class="label">Username/Email</label>
                                          <p class="control">
                                            <input class="input" type="text" placeholder="Username/Email" value="{{\Auth::user()->email}}">
                                          </p>
                                          {{-- <p class="help is-success">This username is available</p> --}}
                                        </div>

                                        <div class="field">
                                          <label class="label">Password</label>
                                          <p class="control">
                                            <input id="password" type="password" placeholder="Password" class="input" name="password" value="" required>
                                          </p>
                                          {{-- <p class="help is-success">This username is available</p> --}}
                                        </div>

                                        <div class="field">
                                          <label class="label">Confirm Password</label>
                                          <p class="control">
                                            <input id="password" type="password" placeholder="Confirm Password" class="input" name="password_confirmation" value="" required>
                                          </p>
                                          {{-- <p class="help is-success">This username is available</p> --}}
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
