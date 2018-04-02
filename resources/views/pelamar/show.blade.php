@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pelamar {{ $pelamar->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('pelamar/' . $pelamar->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Pelamar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['pelamar', $pelamar->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Pelamar',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pelamar->id }}</td>
                                    </tr>
                                    <tr><th> Id Testing </th><td> {{ $pelamar->id_testing }} </td></tr><tr><th> Pelamar No Ktp </th><td> {{ $pelamar->pelamar_no_ktp }} </td></tr><tr><th> Pelamar Nama </th><td> {{ $pelamar->pelamar_nama }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection