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
                        <a href="{{ url('/penerimaan/create') }}" class="btn btn-primary" title="Add New Penerimaan" >Tambah Penerimaan</a>

                        <a href="{{ url('/chart') }}" class="btn btn-primary" title="View Data Penerimaan">View Semua Data </a>
</br>
<hr>

                {!! Form::open(['method'=>'GET','url'=>'caripenerima','role'=>'search'])  !!}
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" name="search" placeholder="Search...">

                    <span class="input-group-btn">
                        <span class="input-group-btn">
					        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Cari</button>
					     </span>
                     </span>
                 </div>
                 {!! Form::close() !!}
            </div>
        </div>
      </hr>
                        <div class="table-responsive">
                            <table class="table table-borderless table-striped table-hover table-condensed tfix">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th> No Penerima </th>
                                        <th> No Testing </th>
                                        <th> Tanggal Penerimaan  </th>
                                        <th> Lowongan</th>
                                        <th> Nilai Interview </th>
                                        <th> Nilai Psikikotes </th>
                                        <th> Status </th>
                                        <th> Status lainya </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($penerimaan as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->id_penerima }}</td>
                                        <td>{{ $item->id_testing }}</td>
                                        <th> {{$item->tgl_penerima}}</th>
                                        <th> {{$item->pilih_lowongan}}</th>
                                        <th> {{$item->nilai_interview}}</th>
                                        <th> {{$item->nilai_psikotes}}</th>
                                        <th> {{$item->status}}</th>
                                        <th> {{$item->syarat_lain}}</th>
                                        <td>
                                            <td align="center" width="30px">
                              <a href="{{ url('penerimaan/'. $item->id )}}" class="btn btn-info btn-sm" role="button"><i class="fa fa-info-circle"></i> Detail</a>
                              <td align="center" width="30px">
                              <a href="{{ url('penerimaan/'. $item->id . '/edit')}}" class="btn btn-warning btn-sm" role="button"><i class="fa fa-pencil-square"></i> Edit</a>
                                                      </td>
                          </td>
                          <td align="center" width="10px">
                              <td align="center" width="10px">
                                    {!! Form::open(array(
                                         'route' => array('penerimaan.destroy', $item->id),
                                         'method' => 'delete',
                                         'id' => $item->id,
                                         'style' => 'display:inline')) !!}
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
                            <div class="pagination-wrapper"> {!! $penerimaan->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
