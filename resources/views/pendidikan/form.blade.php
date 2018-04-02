<div class="form-group {{ $errors->has('lembaga_pendidikan') ? 'has-error' : ''}}">
    {!! Form::label('lembaga_pendidikan', 'Lembaga Pendidikan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lembaga_pendidikan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('lembaga_pendidikan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tahun_lulus') ? 'has-error' : ''}}">
    {!! Form::label('tahun_lulus', 'Tahun Lulus', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tahun_lulus', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tahun_lulus', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('kualifikasi') ? 'has-error' : ''}}">
    {!! Form::label('kualifikasi', 'Kualifikasi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('kualifikasi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('kualifikasi', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jurusan') ? 'has-error' : ''}}">
    {!! Form::label('jurusan', 'Jurusan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jurusan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jurusan', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>