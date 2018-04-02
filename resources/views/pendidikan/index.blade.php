@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pendidikan</div>
                    <div class="panel-body">

                        <a href="{{ url('/pendidikan/create') }}" class="btn btn-primary btn-xs" title="Add New Pendidikan"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Lembaga Pendidikan </th><th> Tahun Lulus </th><th> Kualifikasi </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pendidikan as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->lembaga_pendidikan }}</td><td>{{ $item->tahun_lulus }}</td><td>{{ $item->kualifikasi }}</td>
                                        <td>
                                            <a href="{{ url('/pendidikan/' . $item->id) }}" class="btn btn-success btn-xs" title="View Pendidikan"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/pendidikan/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Pendidikan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/pendidikan', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Pendidikan" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Pendidikan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $pendidikan->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection