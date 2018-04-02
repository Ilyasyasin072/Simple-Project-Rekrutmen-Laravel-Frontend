<style type="text/css">
body {
     margin: 0;
     padding: 0;
     text-align: center;
}
</style>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
  <form role="search">
    <div class="form-group">
      <center>
      <img class="profile-img" src="https://cdn0.iconfinder.com/data/icons/finance-1-8/151/25-128.png"><p>
          <tr>
        <h2><td>{{ Auth::user()->name }}</td></h2>
      </tr>
        <h5><td>{{ Auth::user()->email }}</td></h5>
    </center>
    </div>
  </form>
  <ul class="nav menu">
    <li class="active"><a href="{{ url('/admin/menuawal')}}">Beranda</a></li>
    <li><a href="{{ url('/penerimaan')}}">Input Penerimaan</a></li>
    <li><a href="{{ url('/konfirmasi')}}">Konfirmasi Penerimaan</a></li>
    <li><a href="{{ url ('/perusahaan/1/edit')}}">Perusahaan</a></li>
      <li><a href="{{ url ('/admin/postlowongan')}}">Info Lowongan</a></li>
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
  Laporan
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="{{url('/getPDF')}}">Laporan Penerimaan</a></li>
    <li><a href="#">Laporan Data HRD</a></li>
  </ul>
</div>
  </ul>

</div><!--/.sidebar-->
