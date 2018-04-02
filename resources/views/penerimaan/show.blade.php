@extends('admin.index')
</br>
</br>
</br>
<script type="text/javascript">
function notifyMe(msg_title, msg_body, redirect_onclick) {
var granted = 0;
// Let's check if the browser supports notifications
if (!("Notification" in window)) {
alert("This browser does not support desktop notification");
}
// Let's check if the user is okay to get some notification
else if (Notification.permission === "granted") {
granted = 1;}
// Otherwise, we need to ask the user for permission
else if (Notification.permission !== 'denied') {
Notification.requestPermission(function (permission) {
// If the user is okay, let's create a notification
if (permission === "granted") {
granted = 1;}
});
}
  if (granted == 1) {
      var notification = new Notification(msg_title, {
          body: msg_body,
              icon: 'icon1.png'
            });
              if (redirect_onclick) {notification.onclick = function() {window.location.href = redirect_onclick;}}}}
</script>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">
                    <!-- Sweet Allert-->
                    <script src="https://cdn.jsdelivr.net/sweetalert2/6.2.4/sweetalert2.min.js"></script>
                    <link rel="https://cdn.jsdelivr.net/sweetalert2/6.2.4/sweetalert2.min.css"/>
                    <div class="panel-heading">VIEW DATA PENERIMA</div>
                    <div class="panel-body">
  <div class="row">
      <div class="col-md-12">
          <div class="table-responsive">
              <table class="table table-bordered table-condensed">
                  <thead align="center">
                      <tr>
            <td colspan="2"><strong>DETAIL INFORMASI</strong></td>
          </tr>
        </thead>
                  <tbody>
                      <tr>
                          <td><b>NO PENERIMA</b></td>
                          <td>{{ $penerimaan->id_penerima }}</td>
                      </tr>
                      <tr>
                          <td><b>NO TESTING</b></td>
                          <td>{{ $penerimaan->id_testing   }}</td>
                      </tr>
                      <tr>
                          <td><b>TANGGAL PENERIMA</b></td>
                          <td>{{ $penerimaan->tgl_penerima }}</td>
                      </tr>
                      <tr>
                          <td><b>HASIL PENERIMA</b></td>
                          <td>{{ $penerimaan->pilih_lowongan }}</td>
                      </tr>
                      <tr>
                          <td><b>NILAI INTERVIEW</b></td>
                          <td>{{ $penerimaan->nilai_interview }}</td>
                      </tr>
                      <tr>
                          <td><b>NILAI PSIKOTES</b></td>
                          <td>{{ $penerimaan->nilai_psikotes }}</td>
                      </tr>
                      <tr>
                          <td><b>STATUS PENERIMA</b></td>
                          <td>{{ $penerimaan->status}}</td>
                      </tr>  <tr>
                            <td><b>SYARAT LAINYA</b></td>
                            <td>{{ $penerimaan->syarat_lain}}</td>
                        </tr>
                  </tbody>
              </table>
              <p>
                <a href="{{ url('/penerimaan') }}" class="btn btn-success">
                  <span class="fa fa-google"></span> kembali
                </a>
                <a href="{{ url('penerimaan/' . $penerimaan->id . '/edit') }}" class="btn btn-primary">
                  <span class="fa fa-google"></span> Update
                </a>
          </div>
      </div>

  </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
