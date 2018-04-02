@extends('admin.index2')
<style type="text/css">
.profile-img {
  max-width: 150px;
  border: 10px solid #fff;
  border-radius: 100%;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
}
</style>

@section('content')

<div class="container">

  @include('includes.sidebar2')
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="pane-body text-center">
          <img class="profile-img" src="https://cdn0.iconfinder.com/data/icons/finance-1-8/151/25-128.png">
          <h1>
          Selamat Datang Rekrutmen Pegawai PT Shafira Corporation Bandung
        </h1>
          <h2>{{ Auth::user()->name }}</h2>
          <h5>{{ Auth::user()->email }}</h5>
          <p>
            <a href="{{ url('/pelamar/create') }}" class="btn btn-primary">
              <span class="fa fa-google"></span> Isi Data Pelamars
            </a>
          </p>

          <div class="pane-body text-left">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>
                <div class="panel-body">
                <div class="list-group">
                  <a href="#" class="list-group-item active">
                      <i class="fa fa-cogs"></i>Profil Beranda</a>
                        <a href="tidak ada" class="list-group-item"><i class="fa fa-refresh"></i>BERANDA</a>
                          <a href="/perusahaan/1" class="list-group-item"><i class="fa fa-home"></i>PROFIL PERUSAHAAN</a>
                          <a href="tidak ada" class="list-group-item"><i class="fa fa-home"></i>ABOUT</a>
                          <a href="/chart" class="list-group-item"><i class="fa fa-home"></i>View data pelamar</a>
                          <a href="/images/create" class="list-group-item"><i class="fa fa-home"></i>Upload Foto</a>

    </div>

    <!--
<ul class="list-group">
    <a href="#" class="list-group-item active">
        <i class="fa fa-cogs"></i>Input Beranda</a>
    <li class="list-group-item">PELAMAR
        <ul class="list-group">
          <a href="/pelamar" class="list-group-item"><i class="fa fa-home"></i>PELAMAR</a>
        </ul>
    </li>
</ul>
-->

                </div>

            </div>
        </div>
        </div>

      </div>
    </div>
</div>

@endsection
