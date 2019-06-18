@extends((!isset(Auth::user()->id))? 'layouts.default': ((Auth::user()->level_id == '1') ? 'layouts.layoutAdmin' : 'layouts.layoutAfterLogin'))

@section('titleContent')
    <h1 class="spaceTitle"><strong>Ubah Password</strong></h1>
    <div>
        <ol class="breadcrumb" style="background-color: #fff;padding-left: 0;padding-right: 0;">
            <li><a>Profil</a></li>
            <li><a>Ubah Password</a></li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading panel-head">
                    <h4 class="panel-title">Ubah Password</h4>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('savePass') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                    <label for="current-password">Password Lama</label>
                                    <input id="current-password" type="password" class="form-control" name="current-password" required>
                                    @if ($errors->has('current-password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('current-password') }}</strong>
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
                                <div class="form-group text-center">
                                    <a class="btn btn-whitedusty" href="{{ route('viewProfile') }}" role="button">Batal</a>
                                    <button type="submit" class="btn btn-dusty2">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
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