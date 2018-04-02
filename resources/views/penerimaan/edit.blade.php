@extends('admin.index')
</br>
</br>
</br>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Penerimaan {{ $penerimaan->id }}</div>
                    <div class="panel-body">
						{!! Form::model($penerimaan,['method'=>'PATCH','action'=>['PenerimaanController@update',$penerimaan->id]]) !!}
						<div class="form-group">
							{!! Form::label('id_penerima', 'No Penerima') !!}
							{!! Form::text('id_penerima',null, array('class' => 'form-control','placeholder'=>'ID PENERIMA','readonly')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('id_testing', 'No Testing') !!}
							{!! Form::text('id_testing', null, array('class' => 'form-control','placeholder'=>'ID Testing','readonly')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('tgl_penerima', 'Tanggal') !!}
							{!! Form::text('tgl_penerima', null, array('class' => 'form-control','placeholder'=>'Tanggal')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('pilih_lowongan', 'Hasil Penerima') !!}
							{!! Form::text('pilih_lowongan', null, array('class' => 'form-control','placeholder'=>'Hasil Penerima')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('nilai_interview', 'hasil interview') !!}
							{!! Form::text('nilai_interview', null, array('class' => 'form-control','placeholder'=>'Nilai Interview')) !!}
						</div>
            <div class="form-group">
              {!! Form::label('nilai_psikotes', 'hasil interview') !!}
              {!! Form::text('nilai_psikotes', null, array('class' => 'form-control','placeholder'=>' Nilai Tes')) !!}
            </div>

            <div class="form-group">
							{!! Form::label('status', 'Status Penerima') !!}
							{!! Form::text('status', null, array('class' => 'form-control','placeholder'=>'Status')) !!}
						</div>

						{!! Form::button('<i class="fa fa-check-square"></i>'. ' Update', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
            <a href="{{ url('/penerimaan') }}" class="btn btn-success">
              <span class="fa fa-google"></span> kembali
            </a>
						{!! Form::close()!!}

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
