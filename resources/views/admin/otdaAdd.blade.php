@extends('layouts.layoutAdmin')

@section('titleContent')
<h1 class="spaceTitle"><strong>Tambah Otonomi Daerah (OTDA)</strong></h1>
@endsection

@section('content')
<div class="row" style="margin-top:1%;">
    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title">Data OTDA</h4>
            </div>
            <div class="panel-body">
                    {!! Form::open(['route' => 'otda.store', 'method' => 'POST']) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="name_otda">Nama</label>
                                {!! Form::text('name_otda', null, ['class' => $errors->has('name_otda') ? 'form-control is-invalid' : 'form-control', 'required', 'autofocus']) !!}
                                @if ($errors->has('name_otda'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name_otda') }}</strong>
                                    </span>
                                @endif
                            </div> 
                        </div>
                    </div>
                    <div class="row" style="margin-top: 1.5%;margin-bottom: 1.5%;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            @if(Auth::user()->level_id == '1')
                                <a class="btn btn-whitedusty" href="{{ route('otda.index') }}" role="button">Batal</a>
                            @else
                                <a class="btn btn-whitedusty" href="{{ route('home') }}" role="button">Batal</a>
                            @endif
                            <button type="submit" class="btn btn-dusty2">Tambah Otda</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('titleFoot')
<div class="row" style="margin-top:18%;">
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