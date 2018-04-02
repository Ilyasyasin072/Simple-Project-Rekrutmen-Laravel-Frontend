@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pengalaman</div>
                    <div class="panel-body">

                        <a href="{{ url('/pengalaman/create') }}" class="btn btn-primary btn-xs" title="Add New Pengalaman"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nama Perusahan </th><th> Posisi </th><th> Awal Masuk </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pengalaman as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama_perusahan }}</td><td>{{ $item->posisi }}</td><td>{{ $item->awal_masuk }}</td>
                                        <td>
                                            <a href="{{ url('/pengalaman/' . $item->id) }}" class="btn btn-success btn-xs" title="View Pengalaman"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/pengalaman/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Pengalaman"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/pengalaman', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Pengalaman" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Pengalaman',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $pengalaman->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection