@extends('admin.index')
<br/>
<br/>
<br/>
<br/>
@section('content')
    <div class="container">
    </br>
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Post Loker</div>
                    <div class="panel-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::open(['url' => '/infoloker', 'class' => 'form-horizontal', 'files' => true]) !!}
                        @include ('infoloker.form')
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
