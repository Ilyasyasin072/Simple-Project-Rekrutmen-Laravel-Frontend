@extends('viewall')

@section('content')
    @if($penerima->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover table-condensed" width="400px">
                <thead align="center">
                    <tr>
                        <td width="300px">ID Penerima</td>
                        <td>ID testing</td>
                        <td> Hasil penerimaan</td>
                        <td> Hasil Penerimaan</td>
                          <td> Nilai Interview </td>
                        <td> Nilai Spikotes </td>
                        <td> Status</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($penerima as $penerimaanya)
                    <tr>
                        <td align="center">{{ $penerimaanya->id_penerima }}</td>
                        <td>{{ $penerimaanya->id_testing }}</td>
                        <td align="center">{{ $penerimaanya->tgl_penerima }}</td>
                          <td align="center">{{ $penerimaanya->hasil_penerima }}</td>
                        <td align="center">{{ $penerimaanya->nilai_interview }}</td>
                        <td align="center">{{ $penerimaanya->nilai_psikotes }}</td>
                        <td align="center">{{ $penerimaanya->status }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-warning">
            <i class="fa fa-exclamation-triangle"></i>Data tidak tersedia
        </div>
    @endif
@stop
