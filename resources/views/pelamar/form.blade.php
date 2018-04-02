<div class="form-group {{ $errors->has('id_testing') ? 'has-error' : ''}}">
    {!! Form::label('id_testing', 'Id Testing', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('id_testing', null, ['class' => 'form-control']) !!}
        {!! $errors->first('id_testing', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pelamar_no_ktp') ? 'has-error' : ''}}">
    {!! Form::label('pelamar_no_ktp', 'Pelamar No Ktp', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pelamar_no_ktp', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pelamar_no_ktp', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pelamar_nama') ? 'has-error' : ''}}">
    {!! Form::label('pelamar_nama', 'Pelamar Nama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pelamar_nama', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pelamar_nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pelamar_alamat') ? 'has-error' : ''}}">
    {!! Form::label('pelamar_alamat', 'Pelamar Alamat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pelamar_alamat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pelamar_alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pelamar_ttl') ? 'has-error' : ''}}">
    {!! Form::label('pelamar_ttl', 'Pelamar Ttl', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('datetime-local', 'pelamar_ttl', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pelamar_ttl', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pelamar_jk') ? 'has-error' : ''}}">
    {!! Form::label('pelamar_jk', 'Pelamar Jk', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pelamar_jk', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pelamar_jk', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pelamar_email') ? 'has-error' : ''}}">
    {!! Form::label('pelamar_email', 'Pelamar Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pelamar_email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pelamar_email', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pelamar_tlp') ? 'has-error' : ''}}">
    {!! Form::label('pelamar_tlp', 'Pelamar Tlp', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('pelamar_tlp', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pelamar_tlp', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pelamar_status') ? 'has-error' : ''}}">
    {!! Form::label('pelamar_status', 'Pelamar Status', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pelamar_status', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pelamar_status', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
