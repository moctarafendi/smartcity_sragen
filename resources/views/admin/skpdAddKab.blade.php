@extends((!isset(Auth::user()->id))? 'layouts.default': ((Auth::user()->level_id == '1') ? 'layouts.layoutAdmin' : 'layouts.layoutAfterLogin'))

@section('titleContent')
<h1 class="spaceTitle"><strong>Tambah Sekretariat Kerja Perangkat Daerah (SKPD) - Kabupaten Kota</strong></h1>
@endsection

@section('content')
<div class="row" style="margin-top:1%;">
    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title">Data SKPD</h4>
            </div>
            <div class="panel-body">
                {!! Form::model($skpd, ['route' => 'skpd.store', 'method' => 'POST']) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="satda_id">Satda</label>
                                {!! Form::select('satda_id', $satda, null, ['class' => $errors->has('satda_id') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                @if ($errors->has('satda_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('satda_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="perda_id">Perda</label>
                                {!! Form::select('perda_id', $perda, null, ['class' => $errors->has('perda_id') ? 'form-control is-invalid' : 'form-control', 'required']) !!}
                                @if ($errors->has('perda_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('perda_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name_skpd">Nama SKPD</label>
                                {!! Form::text('name_skpd', null, ['class' => $errors->has('name_skpd') ? 'form-control is-invalid' : 'form-control', 'required', 'autofocus']) !!}
                                @if ($errors->has('name_skpd'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name_skpd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 1.5%;margin-bottom: 1.5%;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <a class="btn btn-whitedusty" href="{{ route('skpdListKab') }}" role="button">Batal</a>
                            <button type="submit" class="btn btn-dusty2">Tambah SKPD</button>
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