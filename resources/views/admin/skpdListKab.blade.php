@extends((!isset(Auth::user()->id))? 'layouts.default': ((Auth::user()->level_id == '1') ? 'layouts.layoutAdmin' : 'layouts.layoutAfterLogin'))

@section('assets-top')
<link href="{{ asset('assets/dataTables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('titleContent')
<h1 class="spaceTitle"><strong>Daftar Sekretariat Kerja Perangkat Daerah (SKPD) - Kabupaten Kota</strong></h1>
@endsection

@section('content')
<div class="row" style="margin-top:1%;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row text-center">
                    <div class="table-responsive" style="padding:2%;">
                        <table class="table" id="dataTableSkpd" style="margin-top:2%!important;margin-bottom:2%!important;">
                            <thead style="background:#5C8790;color:#fff;">
                                <tr>
                                    <th class="text-center">Id SKPD</th>
                                    <th class="text-center">Nama SKPD</th>
                                    <th class="text-center">Nama Satda</th>
                                    <th class="text-center">Nama Perda</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                        <a class="btn btn-dusty2 text-center" href="{{ route('skpd.create') }}" role="button">
                            <span><em class="fa fa-plus"></em></span> Tambah SKPD
                        </a>
                    </div>
                </div>
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
<script type="text/javascript">
    localStorage.clear();
</script>
<script type="text/javascript">
    $('.sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
</script>
<script src="{{ asset('assets/dataTables/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#dataTableSkpd").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.datatable.skpdKab') }}",
            columns: [
                {data: 'id_skpd', name: 'id_skpd'},
                {data: 'name_skpd', name: 'name_skpd'},
                {data: 'name_satda', name: 'name_satda'},
                {data: 'name_perda', name: 'name_perda'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
        $("#dataTableSkpd_length").addClass('pull-left');
        $("#dataTableSkpd_info").addClass('pull-left');
    });
</script>
@endsection