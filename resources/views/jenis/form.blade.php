<div class="box box-info padding-1">
<div class="box-body">
<div class="form-group">
   {{ Form::label('jenis_bencana') }}
   {{ Form::text(
   'jenis_bencana',
   $jenis->jenis_bencana,
   [
      'class' => 'form-control' .
         ($errors->has('jenis_bencana') ? ' is-invalid' : ''),
      'placeholder' => 'Jenis Bencana'
   ]
) }}
{!! $errors->first(
   'jenis_bencana',
   '<div class="invalid-feedback">:message</div>'
) !!}
</div>
</div>
<div class="box-footer mt20">
<button type="submit" class="btn btn-
   primary">Simpan</button>
</div>
</div>