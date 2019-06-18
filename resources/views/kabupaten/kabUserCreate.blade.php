@extends('layouts.layoutAfterLogin')

@section('titleContent')
<h1 class="spaceTitle"><strong>Tambah Pengguna</strong></h1>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title">Data Pengguna</h4>
            </div>
            <div class="panel-body">
                <form>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h4 style="margin-top:0;margin-left:-1.5%;"><strong>Data Kedinasan</strong></h4>
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" value="{{ Auth::user()->provinsi }}">
                            </div>
                            <div class="form-group">
                                <label for="kabupaten">Kota/Kabupaten</label>
                                <input type="text" class="form-control" id="kabupaten" value="{{ Auth::user()->kota }}">
                            </div>
                            <div class="form-group">
                                <label for="satda">Satuan Dinas</label>
                                <input type="text" class="form-control" id="satda" value="{{ Auth::user()->dinas }}">
                            </div>                                
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" value="{{ Auth::user()->jabatan }}">
                            </div>
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control" id="nip" value="{{ Auth::user()->nip }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h4 style="margin-top:0;margin-left:-1.5%;"><strong>Data Pribadi</strong></h4>
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}">
                            </div> 
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="form-group">
                                <label for="hp">Nomor Telepon/Handphone</label>
                                <input type="text" class="form-control" id="hp" value="{{ Auth::user()->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="text" class="form-control" id="pass" value="{{ Auth::user()->phone }}">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 1.5%;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <a class="btn btn-whitedusty" href="#" role="button">Batal</a>
                            <button type="submit" class="btn btn-dusty2">Tambah Pengguna</button>
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
<script type="text/javascript">
    localStorage.clear();
</script>
<script type="text/javascript">
    $('.sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
</script>
@endsection