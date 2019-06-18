@extends('layouts.layoutBeforeLogin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
            <div id="panelResetPass" class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="form-group text-center">
                            <div>
                                <span>
                                    <img src="{{ asset('assets/image/platform/logoSCG80.png') }}" alt="Logo SmartCity" id="img-login" />
                                </span>
                            </div>
                        </div>
                        <div id="frm-login" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" autocomplete="off" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-dusty btnShadow">Dapatkan Reset Link</button>
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