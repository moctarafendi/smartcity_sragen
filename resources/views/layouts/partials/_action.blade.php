{!! Form::model($model, ['url' => $delete_url, 'method' => 'DELETE']) !!}
    {{-- <a href="{{ $show_url }}" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
        Show
        <span class="btn-label btn-label-right"><em class="fa fa-eye"></em></span>
    </a> --}}
    <div class="col-md-6" style="padding:1.5% !important;">
        <a href="{{ $edit_url }}" class="btn btn-block btn-default btn-whitedusty">
            <span>Ubah</span>
        </a>
    </div>
    <div class="col-md-6" style="padding:1.5% !important;">
        <button  
            type="submit"
            class="btn btn-block btn-default btn-dusty2"
            onclick="return confirm('Are you sure you want to delete this item?');"
        >
            <span>Hapus</span>
        </button>
    </div>
{!! Form::close() !!}