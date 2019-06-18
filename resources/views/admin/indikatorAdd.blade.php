@extends('layouts.layoutAdmin')

@section('titleContent')
<h1 class="spaceTitle"><strong>Tambah Indikator</strong></h1>
@endsection

@section('content')
<div class="row" style="margin-top:1%;">
    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title">Data Indikator</h4>
            </div>
            <div class="panel-body">
                {!! Form::open(['route' => 'indikator.store', 'method' => 'POST']) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="id_provinsi">Provinsi</label>
                                {!! Form::select('id_provinsi', $provinsi, null, ['placeholder' => 'Pilih Provinsi..', 'class' => $errors->has('id_provinsi') ? 'form-control is-invalid' : 'form-control']) !!}
                                @if ($errors->has('id_provinsi'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('id_provinsi') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name_indikator">Nama Indikator</label>
                                {!! Form::text('name_indikator', null, ['class' => $errors->has('name_indikator') ? 'form-control is-invalid' : 'form-control', 'required', 'autofocus']) !!}
                                @if ($errors->has('name_indikator'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name_indikator') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="skpd_id">SKPD</label>
                                {!! Form::select('skpd_id', $skpd, null, ['class' => $errors->has('skpd_id') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                @if ($errors->has('skpd_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('skpd_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="otda_id">OTDA</label>
                                {!! Form::select('otda_id', $otda, null, ['class' => $errors->has('otda_id') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                @if ($errors->has('otda_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('otda_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="id_provinsi">Kabupaten</label>
                                {!! Form::select('id_kabupaten', $kabupaten, null, ['placeholder' => 'Pilih Kabupaten..', 'class' => $errors->has('id_kabupaten') ? 'form-control is-invalid' : 'form-control']) !!}
                                @if ($errors->has('id_kabupaten'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('id_kabupaten') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="referensi">Referensi</label>
                                {!! Form::text('referensi', null, ['class' => $errors->has('referensi') ? 'form-control is-invalid' : 'form-control', 'required', 'autofocus']) !!}
                                @if ($errors->has('referensi'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('referensi') }}</strong>
                                    </span>
                                @endif
                            </div> 
                            <div class="form-group">
                                <label for="data_1">Data 1</label>
                                {!! Form::text('data_1', null, ['class' => $errors->has('data_1') ? 'form-control is-invalid' : 'form-control', 'required', 'autofocus']) !!}
                                @if ($errors->has('data_1'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('data_1') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="data_2">Data 2</label>
                                    {!! Form::text('data_2', null, ['class' => $errors->has('data_2') ? 'form-control is-invalid' : 'form-control', 'required', 'autofocus']) !!}
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 1.5%;margin-bottom: 1.5%;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <a class="btn btn-whitedusty" href="{{ route('indikator.index') }}" role="button">Batal</a>
                            <button type="submit" class="btn btn-dusty2">Tambah indikator</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('titleFoot')
<div class="row" style="margin:3% auto;">
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