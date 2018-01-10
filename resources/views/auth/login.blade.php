@extends('layout.start')

@section('content')    <div class='container-fluid splash-container'>

        <!-- SPLASH -->
        <section id="splash">

        <div class="row">
            <div class="col-12 align-self-center">
                <img src="images/wordmark.svg" class="img-fluid wordmark fadeIn">
            </div>
            <div class="container login-load">
                        <div class="panel panel-default">


                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="control-label">E-Mail</label>

                                        <div class="">
                                            <input id="email" placeholder="Email Address" value='lucas@branton.ca' type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="control-label">Password</label>

                                        <div class="">
                                            <input id="password" placeholder="Password" value='gardengnome' type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="">
                                            <button type="submit" class="std-btn">
                                                Login
                                            </button>
<br>
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                            <a class="btn btn-link" href="{{ route('register') }}">
                                                Register
                                            </a>
                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
            </div>
            <div class="col-12 align-self-end">
                    <img src="images/leaf.svg" class="img-fluid leafloader loading">
                </div>
        </div>
</section>


    </div>

@endsection
