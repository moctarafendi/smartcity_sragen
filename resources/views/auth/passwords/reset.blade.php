@extends('layouts.layoutBeforeLogin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
            <div id="panelResetPass2" class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form role="form" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group text-center">
                            <div>
                                <span>
                                    <img src="{{ asset('assets/image/platform/logoSCG80.png') }}" alt="Logo SmartCity" id="img-login" />
                                </span>
                            </div>
                        </div>
                        <div id="frm-login" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" autocomplete="off" value="{{ $email or old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control pwd" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm">Konfirmasi Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-dusty btnShadow">Reset Password</button>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('login') }}" id="lnk-back" class="txt-none">
                                <span><i class="fa fa-arrow-left" aria-hidden="true"></i></span> Kembali ke Halaman Login
                            </a>
                        </div>
                        <div class="form-group text-center powered">
                            <h5>Powered by</h5>
                            <h4><strong>Smart City Nusantara</strong></h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection