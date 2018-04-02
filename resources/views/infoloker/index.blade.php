@extends('admin.index')
<br/>
<br/>
@section('content')
    <div class="container">
    </br>
        <div class="row">
            <div class="col-md-10 col-md-offset">
                <div class="panel panel-default">

                    <div class="panel-heading">Input Form Penerimaan</div>
                    <div class="panel-body">
                        <a href="{{ url('/infoloker/create') }}" class="btn btn-primary" title="Add New Penerimaan" >Tambah Penerimaan</a>

                        <a href="{{ url('/loker') }}" class="btn btn-primary" title="View Data Penerimaan">View Semua Data </a>
</br>
<hr>
            </div>
        </div>
      </hr>
                        <div class="table-responsive">
                            <table class="table table-borderless table-striped table-hover table-condensed tfix">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th> title </th>
                                        <th> text </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($post as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->text }}</td>

                                        <td>
                                            <td align="center" width="30px">
                              <a href="{{ url('infoloker/'. $item->id )}}" class="btn btn-info btn-sm" role="button"><i class="fa fa-info-circle"></i> Detail</a>
                              <td align="center" width="30px">
                              <a href="{{ url('infoloker/'. $item->id . '/edit')}}" class="btn btn-warning btn-sm" role="button"><i class="fa fa-pencil-square"></i> Edit</a>
                                                      </td>
                          </td>
                          <td align="center" width="10px">
                              <td align="center" width="10px">
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['/infoloker', $item->id],
                                    'style' => 'display:inline'
                                ]) !!}
                                     {!! Form::button('<span class="btn btn-danger btn-sm" role="button"><i class="fa fa-pencil-square"/></li> Hapus</a>', array(
                                             'type' => 'submit',
                                             'class' => 'btn btn-danger btn-xs',
                                             'title' => 'Delete Perusahaan',
                                             'onclick'=>'return confirm("Confirm delete?")'
                                     )) !!}
                                 {!! Form::close() !!}

                                </td>
                                    </tr>
                                @endforeach
                                @include('includes.confrim')
                                </tbody>

                            </table>
                            <div class="pagination-wrapper"> {!! $post->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
