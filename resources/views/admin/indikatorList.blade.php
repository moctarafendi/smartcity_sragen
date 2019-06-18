@extends('layouts.layoutAdmin')

@section('assets-top')
<link href="{{ asset('assets/dataTables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('titleContent')
<h1 class="spaceTitle"><strong>Daftar Indikator</strong></h1>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row text-center">
                    <div class="table-responsive" style="padding:2%;">
                        <table class="table" id="dataTableIndikator" style="margin-top:2%!important;margin-bottom:2%!important;">
                            <thead style="background:#5C8790;color:#fff;">
                                <tr>
                                    <th class="text-center">Id Indikator</th>
                                    <th class="text-center">Nama Indikator</th>
                                    <th class="text-center">Nama SKPD</th>
                                    <th class="text-center">Nama Otda</th>
                                    <th class="text-center">Referensi</th>
                                    <th class="text-center">Data 1</th>
                                    <th class="text-center">Data 2</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                        <a class="btn btn-dusty2 text-center" href="{{ route('indikator.create') }}" role="button">
                            <span><em class="fa fa-plus"></em></span> Tambah Indikator
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
        $("#dataTableIndikator").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.datatable.indikator') }}",
            columns: [
                {data: 'id_indikator', name: 'id_indikator'},
                {data: 'name_indikator', name: 'name_indikator'},
                {data: 'name_skpd', name: 'name_skpd'},
                {data: 'name_otda', name: 'name_otda'},
                {data: 'referensi', name: 'referensi'},
                {data: 'data_1', name: 'data_1'},
                {data: 'data_2', name: 'data_2'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
        $("#dataTableIndikator_length").addClass('pull-left');
        $("#dataTableIndikator_info").addClass('pull-left');
    });
</script>
@endsection