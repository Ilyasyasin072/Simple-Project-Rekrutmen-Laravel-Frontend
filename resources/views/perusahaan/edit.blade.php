@extends('admin.index')
</br>
</br>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Perusahaan</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($perusahaan, [
                            'method' => 'PATCH',
                            'url' => ['/perusahaan', $perusahaan->id],
                            'class' => 'form-horizonta',
                            'files' => true
                        ]) !!}
                        @include ('perusahaan.form', ['submitButtonText' => 'Update'])
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
