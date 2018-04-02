@extends('admin.index')
<br>
<br>
</br>
</br>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10  col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Konfirmasi Pelamar</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($pelamar, [
                            'method' => 'PATCH',
                            'url' => ['/pelamar', $pelamar->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}


                        @include ('pelamar.form1', ['submitButtonText' => 'Konfirmasi'])
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
