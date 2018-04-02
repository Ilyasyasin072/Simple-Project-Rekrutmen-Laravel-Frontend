<div class="form-group {{ $errors->has('nama_perusahan') ? 'has-error' : ''}}">
    {!! Form::label('nama_perusahan', 'Nama Perusahan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_perusahan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_perusahan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('posisi') ? 'has-error' : ''}}">
    {!! Form::label('posisi', 'Posisi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('posisi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('posisi', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('awal_masuk') ? 'has-error' : ''}}">
    {!! Form::label('awal_masuk', 'Awal Masuk', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('awal_masuk', null, ['class' => 'form-control']) !!}
        {!! $errors->first('awal_masuk', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('sampai') ? 'has-error' : ''}}">
    {!! Form::label('sampai', 'Sampai', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('sampai', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sampai', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('bidang_pekerjaan') ? 'has-error' : ''}}">
    {!! Form::label('bidang_pekerjaan', 'Bidang Pekerjaan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('bidang_pekerjaan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('bidang_pekerjaan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('gaji_bulanan') ? 'has-error' : ''}}">
    {!! Form::label('gaji_bulanan', 'Gaji Bulanan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('gaji_bulanan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('gaji_bulanan', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>