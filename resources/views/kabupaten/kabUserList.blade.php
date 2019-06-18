@extends('layouts.layoutPage')

@section('titleContent')
<h1 class="spaceTitle">Pengaturan Pengguna</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 mob_pad">
                        <a class="btn btn-default btn-block btn-dusty2" href="#" role="button">
                            <em class="fa fa-plus" style="padding:0;"></em> Tambah Pengguna
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-sm-offset-6 col-md-4 col-md-offset-6 col-lg-4 col-md-offset-6 mob_pad">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari berdasarkan nama" name="search">
                                <div class="input-group-btn">
                                    <button class="btn btn-dusty2" type="submit">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive" style="padding:20px 20px;">
                        <table class="table">
                            <thead style="background:#5C8790;color:#fff;">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">NIK</th>
                                    <th class="text-center">Dinas</th>
                                    <th class="text-center">Jabatan</th>
                                    <th class="text-center">Jenis Akun</th>
                                    <th class="text-center">Kota/Kabupaten</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach ($user as $data)
                                    <td class="text-center">{{ ++$no }}</td>
                                    <td class="text-center">{{ $data->name }}</td>
                                    <td class="text-center">{{ $data->nik }}</td>
                                    <td class="text-center">{{ $data->dinas }}</td>
                                    <td class="text-center">{{ $data->jabatan }}</td>
                                    <td class="text-center">{{ $data->level }}</td>
                                    <td class="text-center">{{ $data->kota }}</td>
                                    <td class="text-center">
                                        <div class="col-md-6" style="padding:0!important;">
                                            <a href="#" style="color:#fff;">
                                                <button class="btn btn-default btn-whitedusty">
                                                    <span>Hapus</span>
                                                </button>
                                            </a>
                                        </div>
                                        <div class="col-md-6" style="padding:0!important;">
                                            <button type="submit" class="btn btn-default btn-dusty2">
                                                <span>Ubah</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
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