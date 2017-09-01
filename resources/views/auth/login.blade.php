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

                            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                                <div class="field">
                                    <label for="username" class="label">Username</label>
                                    <p class="control has-icon has-icon-right">
                                        <input id="username" name="username" class="input{{ $errors->has('username') ? ' is-danger' : '' }}" type="text" placeholder="Username" required autofocus value="{{ old('username') }}">
                                    </p>
                                    @if ($errors->has('username'))
                                        <p class="help is-danger">{{ $errors->first('username') }}</p>
                                    @endif
                                </div>

                                <div class="field">
                                    <label for="password" class="label">Password</label>
                                    <p class="control has-icon has-icon-right">
                                        <input id="password" name="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}" type="password" placeholder="Password" value="">
                                    </p>
                                    @if ($errors->has('password'))
                                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                    {{-- <p class="help is-danger">This username is available</p> --}}
                                </div>

                                <div class="field">
                                  <p class="control">
                                    <label class="checkbox">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                  </p>
                                </div>

                                <div class="field is-grouped">
                                  <p class="control">
                                    <button class="button is-primary">Submit</button>
                                  </p>

                                  <a class="button is-link is-small" href="{{ route('password.request') }}">
                                      Forgot Your Password?
                                  </a>

                                  <a class="button is-link is-small" href="{{ route('register') }}">
                                      Don't have an account?
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
