@extends((!isset(Auth::user()->id))? 'layouts.default': ((Auth::user()->level_id == '1') ? 'layouts.layoutAdmin' : 'layouts.layoutAfterLogin'))

@section('titleContent')
<h1 class="spaceTitle"><strong>Tambah Satuan Dinas (SATDA)</strong></h1>
@endsection

@section('content')
<div class="row" style="margin-top:1%;">
    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title">Data SATDA</h4>
            </div>
            <div class="panel-body">
                    {!! Form::model($satda, ['route' => 'satda.store', 'method' => 'POST']) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="kabupaten_id">Kategori</label>
                                {!! Form::select('kategori_satda_id', $kategori, null, ['class' => $errors->has('kategori_satda_id') ? 'form-control is-invalid' : 'form-control']) !!}
                                @if ($errors->has('kategori_satda_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('kategori_satda_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="provinsi_id">Provinsi</label>
                                {!! Form::select('provinsi_id', $provinsi, null, ['placeholder' => 'Pilih Provinsi..','class' => $errors->has('provinsi_id') ? 'form-control is-invalid' : 'form-control']) !!}
                                @if ($errors->has('provinsi_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('provinsi_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="kabupaten_id">Kabupaten/Kota</label>
                                {!! Form::select('kabupaten_id', $kabupaten, null, ['placeholder' => 'Pilih Kabupaten..','class' => $errors->has('kabupaten_id') ? 'form-control is-invalid' : 'form-control']) !!}
                                @if ($errors->has('kabupaten_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('kabupaten_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name_satda">Nama</label>
                                {!! Form::text('name_satda', null, ['class' => $errors->has('name_satda') ? 'form-control is-invalid' : 'form-control', 'required', 'autofocus']) !!}
                                @if ($errors->has('name_satda'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name_satda') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 1.5%;margin-bottom: 1.5%;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <a class="btn btn-whitedusty" href="{{ URL::previous() }}" role="button">Batal</a>
                            <button type="submit" class="btn btn-dusty2">Tambah Satda</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('titleFoot')
<div class="row" style="margin-top:4%;">
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
<script type="text/javascript">
    $("select[name='provinsi_id']").change(function(){
        var provinsi_id = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo route('selectAjaxKab') ?>",
            data: {provinsi_id:provinsi_id, _token : $('meta[name="csrf-token"]').attr('content')},
            dataType : "json",
            success: function(data) {
                $("select[name='kabupaten_id'").html('');
                $("select[name='kabupaten_id'").html(data.options);
            },error:function(){ 
                alert("error");
            }
        });
    });
</script>
@endsection