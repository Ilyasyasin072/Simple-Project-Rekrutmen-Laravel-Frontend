<div class="form-group {{ $errors->has('bagian') ? 'has-error' : ''}}">
    {!! Form::label('bagian', 'Bagian', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('bagian', null, ['class' => 'form-control']) !!}
        {!! $errors->first('bagian', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('gaji') ? 'has-error' : ''}}">
    {!! Form::label('gaji', 'Gaji', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('gaji', null, ['class' => 'form-control']) !!}
        {!! $errors->first('gaji', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('keterangan') ? 'has-error' : ''}}">
    {!! Form::label('keterangan', 'Keterangan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
