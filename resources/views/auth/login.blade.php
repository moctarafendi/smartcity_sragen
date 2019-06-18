@extends('layouts.layoutBeforeLogin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
            <div id="panelLogin" class="panel panel-default">
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group text-center">
                            <div>
                                <span>
                                    <img src="{{ asset('assets/image/platform/logoSCG80.png') }}" alt="Logo SmartCity" id="img-login" />
                                </span>
                            </div>
                        </div>
                        <div id="frm-login" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email / NIP</label>
                            <input id="email" type="text" class="form-control" name="email" autocomplete="off" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Kata Sandi</label>
                            <div class="input-group">
                                <input id="password" class="form-control pwd" name="password" type="password" required>
                                <span class="input-group-btn">
                                    <button id="btn-eye" class="btn btn-default reveal" type="button" onclick="myFunction()">
                                        <em id="icon-eye" class="fa fa-eye-slash"></em>
                                    </button>
                                </span>          
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('password.request') }}" id="lnk-forget" class="pull-right txt-none">Lupa Password?</a>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-dusty btnShadow">Log In</button>
                            <a class="btn btn-block btn-whitedusty back" href="{{ route('portal_izin') }}" role="button">Kembali ke Portal</a>
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