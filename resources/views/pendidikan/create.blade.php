@extends('layouts.app')
<head>
<style type="text/css">
.profile-img {
  max-width: 150px;
  border: 10px solid #fff;
  border-radius: 100%;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
}
</style>
<link href="/assets/user/css/bootstrap.min.css" rel="stylesheet" />
<link href="/assets/user/plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
<link href="/assets/user/css/cubeportfolio.min.css" rel="stylesheet" />
<link href="/assets/user/css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link id="t-colors" href="/assets/user/skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->


</head>

@section('content')


<!-- Theme skin -->
<link id="t-colors" href="assets/user/skins/default.css" rel="stylesheet" />
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-md-offset">
              <div class="panel panel-default">
                <div class="pane-body text-center">


                  <div class="pane-body text-left">
                    <div class="panel panel-default">



                        <div class="panel-heading">Menu</div>
                        <div class="panel-body">
                        <div class="list-group">


                              <aside class="left-sidebar">



                              <div class="widget">
                                <h5 class="widgetheading">Data</h5>
                                <ul class="cat">
                                  <li><i class="fa fa-angle-right"></i><a href="{{ url('/pelamar/create') }}">Data Umum</a></li>
                                  <li><i class="fa fa-angle-right"></i><a href="{{ url('/pendidikan/create') }}">Data Riyawat Pendidikan</a></li>
                                  <li><i class="fa fa-angle-right"></i><a href="{{ url('/pengalaman/create') }}">Data Pengalaman Bekerja</a></li>
                                  <li><i class="fa fa-angle-right"></i><a href="{{ url('/images/create') }}">Upload File</a></li>
                                  <li><i class="fa fa-angle-right"></i><a href="/pelamar">View Data</a></li>

                                </ul>
                              </div>
                              <div class="widget">
                                <h5 class="widgetheading">Pengumuman</h5>
                                <ul class="cat">
                                  <li><i class="fa fa-angle-right"></i><a href="#">Hasil</a></li>

                                </ul>
                              </div>


                              </aside>

                              <!--  <a href="tidak ada" class="list-group-item"><i class="fa fa-refresh"></i>BERANDA</a>
                                  <a href="/perusahaan/1" class="list-group-item"><i class="fa fa-home"></i>PROFIL PERUSAHAAN</a>
                                  <a href="tidak ada" class="list-group-item"><i class="fa fa-home"></i>ABOUT</a>
                                  <a href="/chart" class="list-group-item"><i class="fa fa-home"></i>View data pelamar</a>
                                  <a href="/images/create" class="list-group-item"><i class="fa fa-home"></i>Upload Foto</a>-->

            </div>

                        </div>

                    </div>
                </div>
                </div>

              </div>
            </div>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Pendidikan</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/pendidikan', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('pendidikan.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
