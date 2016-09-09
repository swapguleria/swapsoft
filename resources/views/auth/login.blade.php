@extends('layouts.app')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/') }}"><b>Swap</b>Development</a>
    </div>
    <div class="login-box-body">
        <!--<p class="login-box-msg">Sign in to start your session</p>-->
        <form role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" >
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div><!-- /.col -->
            </div>
            <div class="social-auth-links text-center">
            <!--<p>- OR -</p>-->
<!--            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                Google+</a>-->
        </div><!-- /.social-auth-links -->
        <a style="float: " href="{{ url('/register') }}" class="text-center">Register Now</a>
        <a style="float: right" href="{{ url('/password/reset') }}">Forgot Password</a>
        
        </form>
    </div>
</div>
@endsection
@push('css')
{{-- iCheck --}}
<link rel="stylesheet" href="{{ URL::to('/plugins/iCheck/square/blue.css') }}">
@endpush
@push('script')
<script src="{{ url('/plugins/iCheck/icheck.min.js') }}"></script>
<script>
$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});
</script>
@endpush