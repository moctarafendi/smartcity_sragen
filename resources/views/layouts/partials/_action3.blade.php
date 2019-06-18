{!! Form::model($model, ['url' => $delete_url, 'method' => 'DELETE', 'class' => 'deleteForm']) !!}
    {{-- <a href="{{ $show_url }}" class="btn btn-sm btn-outline-info" style="padding-bottom: 0px; padding-top: 0px;">
        Show
        <span class="btn-label btn-label-right"><em class="fa fa-eye"></em></span>
    </a> --}}
    <div class="col-md-12" style="padding:0!important;">
        <a href="{{ $edit_url }}" class="btn btn-block btn-default btn-whitedusty" title="Ubah">
            <span><i class="fa fa-pencil" aria-hidden="true"></i></span>
        </a>
        <button type="submit" class="btn btn-block btn-default btn-dusty2 btn-delete" title="Hapus">
            <span><i class="fa fa-trash" aria-hidden="true"></i></span>
        </button>
    </div>
{!! Form::close() !!}

<script type="text/javascript">
    $('button.btn-delete').on('click', function(e){
        e.preventDefault();
        var self = $(this);
        swal({
            title : "",
            text : "Apakah Anda yakin ingin menghapus data?",
            type              : "warning",
            showCancelButton  : true,
            confirmButtonColor: '#5c8790',
            cancelButtonColor: '#d33',
            confirmButtonText : "Ya",
            cancelButtonText  : "Tidak",
            closeOnConfirm    : false,
            closeOnCancel     : false
        },
        function(isConfirm){
            if(isConfirm){
                $(".deleteForm").submit();
            }else{
                swal("Batal","Data Anda berhasil dikembalikan", "error");
            }
        });
    });
</script>