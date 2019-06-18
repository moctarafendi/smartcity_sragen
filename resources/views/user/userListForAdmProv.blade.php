@extends((!isset(Auth::user()->id))? 'layouts.default': ((Auth::user()->level_id == '1') ? 'layouts.layoutAdmin' : 'layouts.layoutAfterLogin'))

@section('assets-top')
    <!-- dataTables -->
    <link href="{{ asset('assets/dataTables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('titleContent')
    <h1 class="spaceTitle"><strong>Pengaturan Pengguna - Admin Provinsi</strong></h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row text-center">
                        <div class="table-responsive" style="padding:1%;">
                            <table class="table" id="dataTable">
                                <thead style="background:#5C8790;color:#fff;">
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">NIP</th>
                                        <th class="text-center">Provinsi</th>
                                        <th class="text-center">Kabupaten</th>
                                        <th class="text-center">SATDA</th>
                                        <th class="text-center">SKPD</th>
                                        <th class="text-center">Jenis Akun</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a class="btn btn-dusty2 text-center" href="{{ route('users.create') }}" role="button">
                                <span><em class="fa fa-plus"></em></span> Tambah Pengguna
                            </a>
                        </div>
                    </div>
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
    <!-- dataTables -->
    <script src="{{ asset('assets/dataTables/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("#dataTable").DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('api.datatable.adminProv') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'nip', name: 'nip'},
                    {data: 'nama_provinsi', name: 'nama_provinsi'},
                    {data: 'nama_kabupaten', name: 'nama_kabupaten'},
                    {data: 'name_satda', name: 'name_satda'},
                    {data: 'name_skpd', name: 'name_skpd'},
                    {data: 'name_level', name: 'name_level'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
            $("#dataTable_length").addClass('pull-left');
            $("#dataTable_info").addClass('pull-left');
        });
    </script>
@endsection