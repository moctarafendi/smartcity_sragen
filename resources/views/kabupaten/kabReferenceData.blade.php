@extends('layouts.layoutAfterLogin')

@section('titleContent')
<h1 class="spaceTitle"><strong>Referensi Data</strong></h1></br>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Data</th>
                                <th>Referensi Sistem</th>
                            </tr>
                            <tr>
                                <td>Jumlah Perizinan</td>
                                <td>SI PIONER</td>
                            </tr>
                            <tr>
                                <td>Status Perizinan</td>
                                <td>SI PIONER</td>
                            </tr>
                            <tr>
                                <td>Jumlah Penduduk</td>
                                <td>SIMDUK</td>
                            </tr>
                            <tr>
                                <td>Jumlah Keluarga</td>
                                <td>SIMDUK</td>
                            </tr>
                            <tr>
                                <td>Usia Penduduk</td>
                                <td>SIMDUK</td>
                            </tr>
                            <tr>
                                <td>Rasio Penduduk (Jenis Kelamin)</td>
                                <td>SIMDUK</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan Penduduk</td>
                                <td>SIMDUK</td>
                            </tr>
                            <tr>
                                <td>Tingkat Pendidikan Penduduk</td>
                                <td>SIMDUK</td>
                            </tr>
                            <tr>
                                <td>Jumlah Penduduk Miskin</td>
                                <td>SIMSARASWATI</td>
                            </tr>
                            <tr>
                                <td>Jumlah Penduduk Miskin</td>
                                <td>BPS</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('titleFoot')
<div class="row" style="margin-top:2%; margin-bottom:2%;">
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
@endsection