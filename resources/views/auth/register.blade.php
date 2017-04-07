@extends('layouts.simple')

@section('content')


    <section class="hero is-primary is-fullheight is-bold">

        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-4 is-offset-4">

                        <div class="has-text-centered">
                            <a href="/">
                                <img src="{{asset('images')}}/ridelogo-alt-white.svg" style="max-height: 60px; margin-bottom: 1em;" alt="">
                            </a>
                        </div>

                        <div class="box">

                            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                                <div class="field">
                                    <label class="label">Name</label>
                                    <p class="control has-icon has-icon-right">
                                        <input name="name" class="input{{ $errors->has('name') ? ' is-danger' : '' }}" type="text" placeholder="Name" required autofocus value="{{ old('name') }}">
                                    </p>
                                    @if ($errors->has('name'))
                                        <p class="help is-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>

                                <div class="field">
                                    <label class="label">Email</label>
                                    <p class="control has-icon has-icon-right">
                                        <input name="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" type="text" placeholder="Name" required autofocus value="{{ old('email') }}">
                                    </p>
                                    @if ($errors->has('email'))
                                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>

                                <div class="field">
                                    <label class="label">Password</label>
                                    <p class="control has-icon has-icon-right">
                                        <input name="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" placeholder="Password" value="">
                                    </p>
                                    @if ($errors->has('password'))
                                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>

                                <div class="field">
                                    <label class="label">Confirm Password</label>
                                    <p class="control has-icon has-icon-right">
                                        <input name="password_confirmation" class="input{{ $errors->has('password_confirmation') ? ' is-danger' : '' }}" type="password" placeholder="Password" value="">
                                    </p>
                                </div>

                                <div class="field is-grouped">
                                  <p class="control">
                                    <button class="button is-primary">Submit</button>
                                  </p>

                                  <a class="button is-link is-small" href="{{ route('login') }}">
                                      Already have an account?
                                  </a>
                              </div>

                          </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
