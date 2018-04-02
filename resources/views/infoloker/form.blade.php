
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::text('title', null, ['class' => 'form-control','placeholder' => ' Judul Lowongan']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>

</div>
<div class="form-group {{ $errors->has('text') ? 'has-error' : ''}}">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::textarea('text', null, ['class' => 'form-control','placeholder'=> 'Syarat']) !!}
        {!! $errors->first('text', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group ">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>

</div>
