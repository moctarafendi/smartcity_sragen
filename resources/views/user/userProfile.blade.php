@extends((!isset(Auth::user()->id))? 'layouts.default': ((Auth::user()->level_id == '1') ? 'layouts.layoutAdmin' : 'layouts.layoutAfterLogin'))

@section('titleContent')
    <h1 class="spaceTitle"><strong>Profil</strong></h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading panel-head">
                    <h4 class="panel-title">Data Profil</h4>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <h4 style="margin-top:0;margin-left:-1.5%;"><strong>Data Kedinasan</strong></h4>
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" class="form-control" id="provinsi" value="{{ $data->nama_provinsi }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="kabupaten">Kota/Kabupaten</label>
                                    <input type="text" class="form-control" id="kabupaten" value="{{ $data->nama_kabupaten }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="satda">SKPD</label>
                                    <input type="text" class="form-control" id="satda" value="{{ $data->name_skpd }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nip">NIP</label>
                                    <input type="text" class="form-control" id="nip" value="{{ $data->nip }}" readonly>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <h4 style="margin-top:0;margin-left:-1.5%;"><strong>Data Pribadi</strong></h4>
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" id="name" value="{{ $data->name }}" readonly>
                                </div> 
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" value="{{ $data->email }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="hp">Nomor Telepon/Handphone</label>
                                    <input type="text" class="form-control" id="hp" value="{{ $data->phone }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="hp">Level</label>
                                    <input type="text" class="form-control" id="hp" value="{{ $data->name_level }}" readonly>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6 text-right">
                                            <a href="{{ route('changePass') }}" style="text-decoration: underline;color:#5c8790;">
                                                <em><h5><strong>Ubah Password</strong></h5></em>
                                            </a>
                                        </div>
                                    </div>
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
    <div class="row" style="margin:1.5% auto;">
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