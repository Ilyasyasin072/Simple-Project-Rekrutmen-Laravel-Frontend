@extends('admin.index')
@section('content')
</br>
</br>
</br>
</br>
</br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit lowongan</div>
                    <div class="panel-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($lowongan, [
                            'method' => 'PATCH',
                            'url' => ['/lowongan', $lowongan->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('lowongan.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
