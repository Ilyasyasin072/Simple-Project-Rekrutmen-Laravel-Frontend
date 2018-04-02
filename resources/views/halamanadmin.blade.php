@extends('layouts.app')
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
  <div class="row">
    <div class="col-md-12 col-md-offset">
      <div class="panel panel-default">
        <div class="pane-body text-center">
          <img class="profile-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhkavtdi5sa3yk8k0xXdT_j9UXKlHVx8fQ8WyM8-T_OHr_AafBMA"/>
          <h1>
          Administrasi Rekrutmen Pegawai
        </h1>
        <h2>{{ Auth::user()->name }}</h2>
          <h5>{{ Auth::user()->email }}</h5>
          <p>
            <a href="{{ url('/penerimaan/create') }}" class="btn btn-primary">
              <span class="fa fa-google"></span> Isi data penerimaan
            </a>
          </p>
        </div>
      </div>
    
      <div class="col-md-6 col-md-offset">
          <div class="pane-body text-left">
            <div class="panel panel-default">
                <div class="panel-heading">Form Input Data Perusahaan</div>
                <div class="panel-body">
                <div class="list-group">
                  <a href="#" class="list-group-item active">
                      <i class="fa fa-cogs"></i></a>
                          <a href="/perusahaan/1/edit" class="list-group-item"><i class="fa fa-home"></i>Input Data Perushaan</a>
                          <a href="/belumada" class="list-group-item"><i class="fa fa-home"></i>Input Data Bagian</a>
                          <a href="/chart " class="list-group-item"><i class="fa fa-home"></i>View Data Penerimaan</a>

                        </div>
                </div>
            </div>
        </div>
      </div>
      <div class="col-md-6 col-md-offset">
        <div class="pane-body text-left">
          <div class="panel panel-default">
              <div class="panel-heading">Menu Input Data</div>
              <div class="panel-body">
              <div class="list-group">
                <a href="#" class="list-group-item active">
                    <i class="fa fa-cogs"></i></a>
                        <a href="/perusahaan/1/edit" class="list-group-item"><i class="fa fa-home"></i>Input Data Penerimaan</a>
                        <a href="/images" class="list-group-item"><i class="fa fa-home"></i>Upload Foto</a>
                        <a href="/https://mailtrap.io/inboxes/164742/messages" class="list-group-item"><i class="fa fa-home"></i>Upload Foto</a>

                      </div>
              </div>

          </div>
      </div>
        </div>
      </div>
      </div>
    </div>


@endsection
