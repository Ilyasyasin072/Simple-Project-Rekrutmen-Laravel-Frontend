@extends('admin.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">lowongan {{ $lowongan->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('lowongan/' . $lowongan->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit lowongan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['lowongan', $lowongan->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete lowongan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $lowongan->id }}</td>
                                    </tr>
                                    <tr><th> Bagian </th><td> {{ $lowongan->bagian }} </td></tr><tr><th> Gaji </th><td> {{ $lowongan->gaji }} </td></tr><tr><th> Keterangan </th><td> {{ $lowongan->keterangan }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
