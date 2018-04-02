@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                  <center>
                  <img class="navimg" src="/img/shafira.jpg" alt="My Web" />
                </center>
                  <center>
                    <div class="panel-heading"></div></center>

                    <div class="panel-body">
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['perusahaan', $perusahaan->id],
                            'style' => 'display:inline'
                        ]) !!}

                        {!! Form::close() !!}


                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                      <th> Nama Perusahaan </th>
                                      <td> {{ $perusahaan->nama_perusahaan }} </td>
                                    </tr>
                                    <tr><th> Jenis </th>
                                      <td> {{ $perusahaan->jenis }} </td>
                                    </tr>
                                    <tr>
                                      <th> Tanggal Berdiri </th>
                                      <td> {{ $perusahaan->tanggal_berdiri }} </td>
                                    </tr>
                                    <tr>
                                      <th>Email Perushaan</th>
                                      <td> {{ $perusahaan->email }} </td>
                                    </tr>
                                    <tr>
                                      <th> ALamat </th>
                                      <td> {{ $perusahaan->alamat }} </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
