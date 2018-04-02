<div class="form-group {{ $errors->has('pelamar_nama') ? 'has-error' : ''}}">
    {!! Form::label('pelamar_nama', 'Pelamar Nama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pelamar_nama', null, ['class' => 'form-control','readonly']) !!}
        {!! $errors->first('pelamar_nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pelamar_status') ? 'has-error' : ''}}">
    {!! Form::label('pelamar_email', 'Pelamar Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pelamar_email', null, ['class' => 'form-control','readonly']) !!}
        {!! $errors->first('Pelamar_email', '<p class="help-block">:message</p>') !!}
    </div>
</div>
    <div class="form-group {{ $errors->has('pelamar_jk') ? 'has-error' : ''}}">
        {!! Form::label('pelamar_jk', 'Pelamar Jk', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('pelamar_jk', null, ['class' => 'form-control','readonly']) !!}
            {!! $errors->first('pelamar_jk', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelamar_email') ? 'has-error' : ''}}">
        {!! Form::label('pelamar_email', 'Pelamar Email', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('pelamar_email', null, ['class' => 'form-control','readonly']) !!}
            {!! $errors->first('pelamar_email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelamar_tlp') ? 'has-error' : ''}}">
        {!! Form::label('pelamar_tlp', 'Pelamar Tlp', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::number('pelamar_tlp', null, ['class' => 'form-control','readonly']) !!}
            {!! $errors->first('pelamar_tlp', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelamar_status') ? 'has-error' : ''}}">
        {!! Form::label('pelamar_status', 'Pelamar Status', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('pelamar_status', null, ['class' => 'form-control','readonly']) !!}
            {!! $errors->first('pelamar_status', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
<div class="form-group {{ $errors->has('pelamar_status') ? 'has-error' : ''}}">
    {!! Form::label('pelamar_status', 'Status Pelamar', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      <select name="status" class="form-control">
  <option value="Konfirmasi">Konfirmasi</option>
  <option value="Tolak">Tolak</option>
</select>
    </div>
  </div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
