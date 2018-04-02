@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pendidikan {{ $pendidikan->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('pendidikan/' . $pendidikan->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Pendidikan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['pendidikan', $pendidikan->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Pendidikan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pendidikan->id }}</td>
                                    </tr>
                                    <tr><th> Lembaga Pendidikan </th><td> {{ $pendidikan->lembaga_pendidikan }} </td></tr><tr><th> Tahun Lulus </th><td> {{ $pendidikan->tahun_lulus }} </td></tr><tr><th> Kualifikasi </th><td> {{ $pendidikan->kualifikasi }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection