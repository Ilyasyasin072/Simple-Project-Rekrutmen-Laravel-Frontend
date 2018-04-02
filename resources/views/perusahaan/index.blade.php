@extends('admin.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-15">
                <div class="panel panel-default">
                    <div class="panel-heading">Perusahaan</div>
                    <div class="panel-body">

                        <a href="{{ url('/perusahaan/create') }}" class="btn btn-primary" title="Add New Perusahaan"/>UPDATE</a>
                        <a href="{{ url('/halamanadmin') }}" class="btn btn-success" title="Kembali"/>Kembali</a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th> Nama Perusahaan </th>
                                        <th> Jenis </th>
                                        <th> Tanggal Berdiri </th>
                                          <th> No Telepon</th>
                                            <th> Email </th>
                                              <th> Alamat</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($perusahaan as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama_perusahaan }}</td>
                                        <td>{{ $item->jenis }}</td>
                                        <td>{{ $item->tanggal_berdiri }}</td>
                                        <td>{{ $item->no_telepon }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>
                                            <a href="{{ url('/perusahaan/' . $item->id) }}" class="btn btn-success btn-xs" title="View Perusahaan"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/perusahaan/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Perusahaan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/perusahaan', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Perusahaan" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Perusahaan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $perusahaan->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
