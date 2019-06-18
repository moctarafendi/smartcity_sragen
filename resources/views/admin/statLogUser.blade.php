@extends('layouts.layoutAdmin')

@section('titleContent')
<h1 class="spaceTitle"><strong>Riwayat Pengguna</strong></h1>
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
                                    <th class="text-center">Dinas</th>
                                    <th class="text-center">Jabatan</th>
                                    <th class="text-center">Jenis Akun</th>
                                    <th class="text-center">Terakhir Akses</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
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
