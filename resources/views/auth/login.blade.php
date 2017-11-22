@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="top-content">

          <div class="inner-bg">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-8 col-sm-offset-2 text">
                          <h1><strong>POS</strong> Login Form</h1>
                          <div class="description">
                            <p>
                                Sistem Pendukung Keputusan Penerimaan Pegawai
                            </p>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                          <div class="form-top-left">
                            <h3>Login to our ADMIN-SPK-POS</h3>
                              <p>Enter your email and password to log on:</p>
                          </div>
                          <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                          </div>
                          </div>
                          <div class="form-bottom">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4" >
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a> -->
                                    </div>
                                </div>
                            </form>
                      </div>
                      </div>
                  </div>
                  <!-- <div class="row">
                      <div class="col-sm-6 col-sm-offset-3 social-login">
                        <h3>...or login with:</h3>
                        <div class="social-login-buttons">
                          <a class="btn btn-link-2" href="#">
                            <i class="fa fa-facebook"></i> Facebook
                          </a>
                          <a class="btn btn-link-2" href="#">
                            <i class="fa fa-twitter"></i> Twitter
                          </a>
                          <a class="btn btn-link-2" href="#">
                            <i class="fa fa-google-plus"></i> Google Plus
                          </a>
                        </div>
                      </div>
                  </div> -->
              </div>
          </div>

      </div>
    </div>
</div>
@endsection
