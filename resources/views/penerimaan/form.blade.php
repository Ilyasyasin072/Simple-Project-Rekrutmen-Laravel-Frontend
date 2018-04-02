
<div class="form-group {{ $errors->has('id_penerima') ? 'has-error' : ''}}">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::text('id_penerima', null, ['class' => 'form-control','placeholder' => ' ID Penerimaan']) !!}
        {!! $errors->first('id_penerima', '<p class="help-block">:message</p>') !!}
    </div>

</div>
<div class="form-group {{ $errors->has('id_testing') ? 'has-error' : ''}}">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::text('id_testing', null, ['class' => 'form-control','placeholder'=> 'ID Testing Penerima']) !!}
        {!! $errors->first('id_testing', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('id_testing') ? 'has-error' : ''}}">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::text('id_testing', null, ['class' => 'form-control','placeholder'=> 'Nama Lengkap']) !!}
        {!! $errors->first('id_testing', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('tgl_penerima') ? 'has-error' : ''}}">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::input('datetime-local', 'tgl_penerima', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tgl_penerima', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('pelamar_status') ? 'has-error' : ''}}">
    <div class="col-md-8 col-md-offset-2">
      <select name="status" class="form-control">
  <option value="Administrasi">Administrasi</option>
  <option value="Management">management</option>
    <option value="Kasir">Kasir</option>
      <option value="SPB">SPB</option>
        <option value="SPG">SPG</option>
          <option value="Staff">Staff</option>
            <option value="Cleaning Service">Cleaning Service</option>
</select>
    </div>
</div>

</fieldset><div class="form-group {{ $errors->has('nilai_interview') ? 'has-error' : ''}}">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::text('nilai_interview', null, ['class' => 'form-control','placeholder'=> 'Hasil Interview Penerima']) !!}
        {!! $errors->first('nilai_interview', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('nilai_psikotes') ? 'has-error' : ''}}">
    <div class="col-md-8 col-md-offset-2 ">
        {!! Form::text('nilai_psikotes', null, ['class' => 'form-control','placeholder'=> 'Hasil Psikotes Penerima']) !!}
        {!! $errors->first('nilai_psikotes', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<fieldset>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
  <div class="col-md-9 col-md-offset-2 ">
    <input type="radio" name="status" value="Rekomendasi"  /> Rekomendasi
    <input type="radio" name="status" value="Tidak Rekomendasi"  /> Tidak Rekomendasi
  </div>
  </div>
</fieldset>
  <fieldset>
   <legend>Syarat Lainya</legend>
   <div class="form-group {{ $errors->has('syarat_lain') ? 'has-error' : ''}}">
     <div class="col-md-9 col-md-offset-2 ">
     <input type="checkbox" name="syarat_lain" value="Pass FOto 3x4"/> PAS FORO UKURAN 3X4
   </br>
     <input type="checkbox" name="syarat_lain" value="Sertifikat"/> SERTIFIKAT
   </br>
     <input type="checkbox" name="syarat_lain" value="CV"/> CURRICULUM VITAE
   </div>
 </div>
   </fieldset>
 </br>
<div class="form-group ">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>

</div>
