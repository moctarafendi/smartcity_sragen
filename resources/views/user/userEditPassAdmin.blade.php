@extends((!isset(Auth::user()->id))? 'layouts.default': ((Auth::user()->level_id == '1') ? 'layouts.layoutAdmin' : 'layouts.layoutAfterLogin'))

@section('titleContent')
    <h1 class="spaceTitle"><strong>Ubah Password Pengguna</strong></h1>
@endsection

@section('content')
<div class="row" style="margin-top:3%;">
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading panel-head">
                    <h4 class="panel-title">Ubah Password</h4>
                </div>
                <div class="panel-body">
                    {!! Form::model($user, ['route' => ['userUpdatePass'], 'method' => 'PUT']) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('id', 'ID', ['class' => 'control-label']) !!}
                                    {!! Form::text('id', $user->id, ['class' => $errors->has('id') ? 'form-control is-invalid' : 'form-control', 'required', 'readonly', 'autofocus']) !!}
                                    @if ($errors->has('id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('name', 'Nama', ['class' => 'control-label']) !!}
                                    {!! Form::text('name', $user->name, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required', 'readonly', 'autofocus']) !!}
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('nip', 'Nip', ['class' => 'control-label']) !!}
                                    {!! Form::text('nip', $user->nip, ['class' => $errors->has('nip') ? 'form-control is-invalid' : 'form-control', 'required', 'readonly', 'autofocus']) !!}
                                    @if ($errors->has('nip'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    {!! Form::label('level_id', 'Role', ['class' => 'control-label']) !!}
                                    {!! Form::select('level_id', $level, null, ['class' => $errors->has('level_id') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                    @if ($errors->has('level_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('level_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                                    <label for="new_password">Password Baru</label>
                                    <input id="new_password" type="password" class="form-control" name="new_password" required>
                                    @if ($errors->has('new_password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('new_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="new_password_confirmation">Konfirmasi Password Baru</label>
                                    <input id="new_password_confirmation" type="password" class="form-control" name="new_password_confirmation" required>
                                    @if ($errors->has('new_password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('new_password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:8%;">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <div class="form-group text-center">
                                    <a class="btn btn-whitedusty" href="{{ URL::previous() }}" role="button">Batal</a>
                                    <button type="submit" class="btn btn-dusty2">Simpan</button>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('titleFoot')
    <div class="row" style="margin:1.25% auto;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <h5>Powered by</h5>
            <h4><strong>Smart City Nusantara</strong></h4>
        </div>
    </div>
@endsection

@section('assets-bottom')
    <!-- jQuery 3 -->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- clear local storage -->
    <script type="text/javascript">
        localStorage.clear();
    </script>
    <!--sidebar button-->
    <script type="text/javascript">
        $('.sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    </script>
    <!-- Sweet Alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    @include('sweet::alert')
    <!--script logout-->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#out").click(function(e) {
                e.preventDefault()
                swal({
                    title : "",
                    text : "Apakah anda yakin ingin Log Out?",
                    type : "warning",
                    showCancelButton: true,
                    cancelButtonText: "Tidak",
                    confirmButtonText: "Ya",
                    confirmButtonColor: '#5c8790',
                    cancelButtonColor: '#d33',
                },
                function(isConfirm){
                    if (isConfirm) {
                        window.location="{{ route('logout') }}";
                    } else {
                        return false;
                    }
                })
            });
        });
    </script>
@endsection