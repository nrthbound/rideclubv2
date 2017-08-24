<div class="container">
    <div class="columns">
        <div class="column is-8">

            {{-- <div class="section-title has-text-centered">
                <small><strong>Latest Posts</small></strong>
            </div> --}}

            <div class="columns is-multiline">

                {{-- Foreach should start here --}}
                <div class="column is-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-48x48">
                                        {{-- <img src="{{\Cloudder::show(\Auth::user()->profile->avatar, array("width" => 96, "height" => 96, "crop" => "fill"))}}" alt="" /> --}}
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Travis Ray</p>
                                    <p class="subtitle is-6"><a href="#">@travisray</a></p>
                                </div>
                            </div>

                            <div class="content">
                                <p class="is-feed-description">
                                    {{str_limit('Build check! Just put together a new Stranger build and am head over heels for it.', 75)}}
                                </p>
                                <div class="is-action-bar">
                                    <div class="is-left-actions">
                                        <small>11:09 PM - 1 Jan 2016</small>
                                    </div>

                                    <div class="is-right-actions">
                                        <small>
                                            <div class="action-icon">
                                                <a href="#" class="is-icon">
                                                    <i class="material-icons">favorite_border</i>
                                                    <span>52</span>
                                                </a>
                                            </div>
                                        </small>
                                    </div>
                                    <div class="is-clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="card-image">
                            <a href="#">
                                <figure class="image is-4by3" style="background: url(images/slides/1.jpg); background-position: center center; background-size: cover;">
                                    <span class="tag is-primary is-feed-type">Build</span>
                                </figure>
                            </a>
                        </div>

                    </div>
                </div>
                {{-- And end here --}}

                {{-- Foreach should start here --}}
                <div class="column is-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-48x48">
                                        {{-- <img src="{{\Cloudder::show(\Auth::user()->profile->avatar, array("width" => 96, "height" => 96, "crop" => "fill"))}}" alt="" /> --}}
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Rachel Hanson</p>
                                    <p class="subtitle is-6"><a href="#">@rachelhanson</a></p>
                                </div>
                            </div>

                            <div class="content">
                                <p class="is-feed-description">
                                    {{str_limit('Just wanted to post a quick snap of my new Enjoi.', 75)}}
                                </p>
                                <div class="is-action-bar">
                                    <div class="is-left-actions">
                                        <small>11:09 PM - 1 Jan 2016</small>
                                    </div>

                                    <div class="is-right-actions">
                                        <small>
                                            <div class="action-icon">
                                                <a href="#" class="is-icon">
                                                    <i class="material-icons">favorite</i>
                                                    <span>1,203</span>
                                                </a>
                                            </div>
                                        </small>
                                    </div>
                                    <div class="is-clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="card-image">
                            <a href="#">
                                <figure class="image is-4by3" style="background: url(images/slides/2.jpg); background-position: center center; background-size: cover;">
                                    <span class="tag is-primary is-feed-type">Snap</span>
                                </figure>
                            </a>
                        </div>

                    </div>
                </div>
                {{-- And end here --}}



            </div>

        </div>


        <div class="column">

            <div class="box alternative">
                <div class="box-heading">
                    Recent Users
                </div>
                <div class="box-body">
                    <ul class="box-list">
                        <li>
                            <div class="box-list-avatar">
                                <img src="http://placehold.it/50x50" alt="" />
                            </div>

                            <div class="box-list-title">
                                <p>Travis Ray</p>
                                <p class="rides">Rides: Car / Bike</p>
                            </div>

                            <div class="box-list-action">
                                <a class="button is-small is-info is-outlined" href="#">View <i class="material-icons is-small-icon">keyboard_arrow_right</i></a>
                            </div>
                            <div class="is-clearfix"></div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="box alternative">

                <div class="box-heading">
                    Enjoying Rideclub? Share it with friends!
                </div>

                <div class="box-body is-container">
                    <div class="field has-addons">
                      <p class="control is-expanded">
                        <input class="input" type="text" placeholder="Friends Email Address">
                      </p>
                      <p class="control">
                        <a class="button is-info">
                          Invite
                        </a>
                      </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
