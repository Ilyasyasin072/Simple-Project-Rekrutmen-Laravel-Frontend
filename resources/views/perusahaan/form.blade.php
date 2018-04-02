<div class="form-group {{ $errors->has('nama_perusahaan') ? 'has-error' : ''}}">
    {!! Form::label('nama_perusahaan', 'Nama Perusahaan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_perusahaan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_perusahaan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jenis') ? 'has-error' : ''}}">
    {!! Form::label('jenis', 'Jenis', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jenis', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jenis', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tanggal_berdiri') ? 'has-error' : ''}}">
    {!! Form::label('tanggal_berdiri', 'Tanggal Berdiri', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('date-local', 'tanggal_berdiri', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tanggal_berdiri', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('no_telepon') ? 'has-error' : ''}}">
    {!! Form::label('no_telepon', 'No Telepon', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('no_telepon', null, ['class' => 'form-control']) !!}
        {!! $errors->first('no_telepon', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    {!! Form::label('alamat', 'Alamat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
