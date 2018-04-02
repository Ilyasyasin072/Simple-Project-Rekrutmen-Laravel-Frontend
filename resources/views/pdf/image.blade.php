<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Laporan</title>
        <body>
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
            </style>

            <div style="font-family:Arial; font-size:14px;">
                <center><h2>Laporan Data Penerimaan Rekrutmen Pegawai Baru</h2></center>
                <center><h5>PT SHARIFA CORPORATION BANDUNG</h5></center>
                <center><h5>Jl. Rumah Sakit No.139, Sukamulya, Gedebage, Kota Bandung, Jawa Barat 40613</h5></center>
            </div>
            <br>
            <table class="tg">
              <tr>
                  <th class="tg-3wr7">NO<br></th>
                <th class="tg-3wr7">NO PENERIMA<br></th>
                <th class="tg-3wr7">NO TESTING<br></th>
                <th class="tg-3wr7">TANGGAL <br></th>
                <th class="tg-3wr7">Lowongan<br></th>
                <th class="tg-3wr7">INTERVIEW<br></th>
                <th class="tg-3wr7">PSIKOTES<br></th>
                <th class="tg-3wr7">STATUS<br></th>
              </tr>
              @foreach ($penerimaan as $key => $penerima)
              <tr>
                <td class="tg-rv4w" width="20%">{{$penerima->id}}</td>
                <td class="tg-rv4w" width="20%">{{$penerima->id_penerima}}</td>
                <td class="tg-rv4w" width="40%">{{ $penerima->id_testing }}</td>
                <td class="tg-rv4w" width="30%">{{$penerima->tgl_penerima}}</td>
                <td class="tg-rv4w" width="30%">{{$penerima->pilih_lowongan}}</td>
                <td class="tg-rv4w" width="30%">{{$penerima->nilai_interview}}</td>
                <td class="tg-rv4w" width="30%">{{$penerima->nilai_psikotes}}</td>
                <td class="tg-rv4w" width="30%">{{$penerima->status}}</td>
              </tr>
              @endforeach
            </table>
        </body>
    </head>
