<nav id="nav" class="nav is-nav is-small">
    <div class="container">
        <div class="nav-left">
            <a class="logo" href="{{route('activity')}}">
                <img src="/images/ridelogo-alt.svg" alt="Rideclub" style="max-height: 50px;" />
            </a>
        </div>

        <div class="nav-center">
            <a class="nav-item is-tab is-hidden-mobile">{{--<i class="material-icons">add_a_photo</i>--}} Snaps</a>
            <a class="nav-item is-tab is-hidden-mobile">{{-- <i class="material-icons">place</i> --}} Spots</a>
            <a href="{{route('builds.index')}}" class="nav-item is-tab is-hidden-mobile">{{--<i class="material-icons">build</i>--}} Builds</a>
        </div>

<span class="nav-toggle">
    <span></span>
    <span></span>
    <span></span>
</span>
<div class="nav-right nav-menu">
    @if ( \Auth::check() )

        <a class="nav-item is-tab" href="/profile">
            <figure class="image is-16x16" style="margin-right: 8px;">
                <img src="{{\Cloudder::show(\Auth::user()->profile->avatar, array("width" => 50, "height" => 50, "crop" => "fill"))}}" alt="" />
            </figure>
            Profile
        </a>
        <a class="nav-item is-tab" href="{{ url('/logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

@else

    <a href="/login" class="nav-item is-tab">
        Login
    </a>
    <a href="/register" class="nav-item is-tab">
        Register
    </a>

@endif
</div>
</div>
</nav>
