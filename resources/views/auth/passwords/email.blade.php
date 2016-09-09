@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/') }}"><b>Swap</b>Development</a>
    </div>
    <div class="login-box-body">
        <div class="panel-heading">Reset Password</div>
        <form class="" role="form" method="POST" action="{{ url('/password/email') }}">
            {{ csrf_field() }}
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" id="email" name="email" class="form-control" placeholder="E-Mail Address" value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="row">
                <div class="col-xs-4">
                    
                </div><!-- /.col -->
                <div class="col-xs-8  text-right">
                    <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                </div><!-- /.col -->
            </div> 
        </form>
    </div>
</div>
 
@endsection
