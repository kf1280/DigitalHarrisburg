@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      
      
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header text-center">Login</div>
          <div class="card-body">
            <form role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 offset-md-2 control-label">Email Address</label>

                    <div class="col-md-8 offset-md-2">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-8 offset-md-2 control-label">Password</label>

                    <div class="col-md-8 offset-md-2">
                        <input type="password" class="form-control" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 offset-md-2">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                      </div>
                </div>
              </div>

                <div class="form-group">
                    <div class="col-md-8 offset-md-2">
                        <button type="submit" class="btn btn-light btn-block">
                            <i class="fa fa-btn fa-sign-in-alt"></i> Login
                        </button>
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-8 offset-md-2">
<!--                     <a class="btn btn-link btn-block text-secondary" href="{{ url('/password/reset') }}">Forgot Your Password?</a> -->
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
