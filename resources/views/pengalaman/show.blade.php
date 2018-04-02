@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pengalaman {{ $pengalaman->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('pengalaman/' . $pengalaman->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Pengalaman"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['pengalaman', $pengalaman->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Pengalaman',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pengalaman->id }}</td>
                                    </tr>
                                    <tr><th> Nama Perusahan </th><td> {{ $pengalaman->nama_perusahan }} </td></tr><tr><th> Posisi </th><td> {{ $pengalaman->posisi }} </td></tr><tr><th> Awal Masuk </th><td> {{ $pengalaman->awal_masuk }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection