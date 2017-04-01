<nav class="nav is-nav">
  <div class="container">
    <div class="nav-left">
        <img src="images/ride.svg" alt="Rideclub" style="max-height: 30px;">
      {{-- <a class="nav-item is-tab is-hidden-mobile is-active"><i class="material-icons">add_a_photo</i></a>
      <a class="nav-item is-tab is-hidden-mobile"><i class="material-icons">place</i></a>
      <a class="nav-item is-tab is-hidden-mobile"><i class="material-icons">build</i></a> --}}
    </div>

    {{-- <div class="nav-center">
        <a class="nav-item">

        </a>
    </div> --}}

    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
    <div class="nav-right nav-menu">
        @if ( \Auth::check() )

            <a class="nav-item is-tab">
            <figure class="image is-16x16" style="margin-right: 8px;">
              <img src="http://bulma.io/images/jgthms.png">
            </figure>
            Profile
          </a>
          <a class="nav-item is-tab">Log out</a>

        @else

            <a class="nav-item is-tab">
                Login
            </a>
            <a class="nav-item is-tab">
                Register
            </a>

        @endif
    </div>
  </div>
</nav>
