@extends('layouts.app')

@section('content')
    <section class="hero is-fullheight hero--login">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Login</h3>
                    <p class="subtitle has-text-grey">Please login to proceed.</p>
                    <div class="box box--login">
                        <figure class="avatar">
                            <img src="https://placehold.it/128x128">
                        </figure>
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            @include('_directives/errors')

                            <div class="field">
                                <div class="control">
                                    <input class="input" type="email" placeholder="Your Email" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input" type="password" placeholder="Your Password">
                                </div>
                            </div>
                            <div class="field">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    Remember me
                                </label>
                            </div>
                            <button class="button is-block is-info" type="submit">Login</button>
                        </form>
                    </div>
                    <p class="has-text-grey">
                        <a href="{{ route('register') }}">Sign Up</a> &nbsp;·&nbsp;
                        <a href="{{ route('password.request') }}">Forgot Password</a> &nbsp;·&nbsp;
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
