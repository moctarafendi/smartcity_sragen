@extends((!isset(Auth::user()->id))? 'layouts.default': ((Auth::user()->level_id == '1') ? 'layouts.layoutAdmin' : 'layouts.layoutAfterLogin'))

@section('titleContent')
    <h1 class="spaceTitle"><strong>Tambah Pengguna</strong></h1>
    <div>
        <ol class="breadcrumb" style="background-color: #fff;padding-left: 0;padding-right: 0;margin-bottom: 0;">
            <li><a>Pengaturan Pengguna</a></li>
            <li><a>Tambah Pengguna</a></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading panel-head">
                    <h4 class="panel-title">Data Pengguna</h4>
                </div>
                <div class="panel-body">
                    {!! Form::model($user, ['route' => 'users.store', 'method' => 'POST']) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <h4 style="margin-top:0;margin-bottom:2%!important;margin-left:-1.5%;"><strong>Data Kedinasan</strong></h4>
                                <div class="form-group">
                                    <label for="provinsi_id">Provinsi</label>
                                    @if(Auth::user()->level_id == 1)
                                        {!! Form::select('provinsi_id', $provinsi, null, ['placeholder' => 'Pilih Provinsi', 'class' => $errors->has('provinsi_id') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                    @elseif((Auth::user()->level_id == 3) || (Auth::user()->level_id == 2))
                                        {!! Form::select('provinsi_id', $provinsi, null, ['class' => $errors->has('provinsi_id') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                    @endif
                                    @if ($errors->has('provinsi_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('provinsi_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="kabupaten_id">Kabupaten</label>
                                    @if(Auth::user()->level_id == 1)
                                        {!! Form::select('kabupaten_id', [''=>'Pilih Kabupaten'], null, ['class' => $errors->has('kabupaten_id') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                    @elseif((Auth::user()->level_id == 3) || (Auth::user()->level_id == 2))
                                        {!! Form::select('kabupaten_id', $kabupaten, null, ['class' => $errors->has('kabupaten_id') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                    @endif
                                    @if ($errors->has('kabupaten_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('kabupaten_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="satda_id">Satda</label>
                                    @if(Auth::user()->level_id == 1)
                                        {!! Form::select('satda_id', [''=>'Pilih SATDA'], null, ['class' => $errors->has('satda_id') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                    @elseif((Auth::user()->level_id == 3) || (Auth::user()->level_id == 2))
                                        {!! Form::select('satda_id', $satda, null, ['placeholder' => 'Pilih Satda', 'class' => $errors->has('satda_id') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                    @endif
                                    @if ($errors->has('satda_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('satda_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="skpd_id">Skpd</label>
                                    @if(Auth::user()->level_id == 1)
                                        {!! Form::select('skpd_id', [''=>'Pilih SKPD'], null, ['class' => $errors->has('skpd_id') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                    @elseif((Auth::user()->level_id == 3) || (Auth::user()->level_id == 2))
                                        {!! Form::select('skpd_id', [''=>'Pilih SKPD'], null, ['class' => $errors->has('skpd_id') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                    @endif
                                    @if ($errors->has('skpd_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('skpd_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="nip">NIP</label>
                                    {!! Form::text('nip', null, ['class' => $errors->has('nip') ? 'form-control is-invalid' : 'form-control', 'required', 'autofocus']) !!}
                                    @if ($errors->has('nip'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <h4 style="margin-top:0;margin-bottom:2%!important;margin-left:-1.5%"><strong>Data Pribadi</strong></h4>
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    {!! Form::text('name', null, ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required', 'autofocus']) !!}
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div> 
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    {!! Form::email('email', null, ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                        {!! Form::text('phone', null, ['class' => $errors->has('phone') ? 'form-control is-invalid' : 'form-control', 'required', 'autofocus']) !!}
                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    {!! Form::password('password', ['class' => $errors->has('password') ? 'form-control is-invalid' : 'form-control']) !!}
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="level_id">Role</label>
                                    {!! Form::select('level_id', $level, null, ['class' => $errors->has('level_id') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                    @if ($errors->has('level_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('level_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 1.5%;margin-bottom: 1.5%;">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <a class="btn btn-whitedusty" href="{{ URL::previous() }}" role="button">Batal</a>
                                <button type="submit" class="btn btn-dusty2">Tambah Pengguna</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('titleFoot')
    <div class="row">
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
    <!--Select On Change-->
    <script type="text/javascript">
        $("select[name='provinsi_id']").change(function(){
            var provinsi_id = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "<?php echo route('selectAjaxKab') ?>",
                data: {provinsi_id:provinsi_id, _token : $('meta[name="csrf-token"]').attr('content')},
                dataType : "json",
                success: function(data) {
                    $("select[name='kabupaten_id'").html('');
                    $("select[name='kabupaten_id'").html(data.options);
                },error:function(){ 
                    alert("error");
                }
            });
        });
        $("select[name='kabupaten_id']").change(function(){
            var kabupaten_id = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "<?php echo route('selectAjaxSatda') ?>",
                data: {kabupaten_id:kabupaten_id, _token : $('meta[name="csrf-token"]').attr('content')},
                dataType : "json",
                success: function(data) {
                    $("select[name='satda_id'").html('');
                    $("select[name='satda_id'").html(data.options);
                }
            });
        });
        $("select[name='satda_id']").change(function(){
            var satda_id = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "<?php echo route('selectAjaxSkpd') ?>",
                data: {satda_id:satda_id, _token : $('meta[name="csrf-token"]').attr('content')},
                dataType : "json",
                success: function(data) {
                    $("select[name='skpd_id'").html('');
                    $("select[name='skpd_id'").html(data.options);
                }
            });
        });
    </script>
@endsection