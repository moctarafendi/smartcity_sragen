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
                                    <input type="text" class="form-control" id="provinsi" value="{{ Auth::user()->provinsi }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="kabupaten">Kota/Kabupaten</label>
                                    <input type="text" class="form-control" id="kabupaten" value="{{ Auth::user()->kota }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="satda">Satuan Dinas</label>
                                    <input type="text" class="form-control" id="satda" value="{{ Auth::user()->dinas }}" readonly>
                                </div>                                
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan" value="{{ Auth::user()->jabatan }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nip">NIP</label>
                                    <input type="text" class="form-control" id="nip" value="{{ Auth::user()->nip }}" readonly>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <h4 style="margin-top:0;margin-left:-1.5%;"><strong>Data Pribadi</strong></h4>
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}" readonly>
                                </div> 
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" value="{{ Auth::user()->email }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="hp">Nomor Telepon/Handphone</label>
                                    <input type="text" class="form-control" id="hp" value="{{ Auth::user()->phone }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 1.5%;">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <a class="btn btn-dusty2" href="#" role="button">Ubah Password</a>
                            </div>
                        </div>
                    </form>
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
@endsection