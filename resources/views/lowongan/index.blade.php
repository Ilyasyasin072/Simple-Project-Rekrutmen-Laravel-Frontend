@extends('layouts.app')


<head>
<meta charset="utf-8">
<title>E - Rekrutmen Karyawan</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
<!-- css -->
<link href="/assets/user/css/bootstrap.min.css" rel="stylesheet" />
<link href="/assets/user/plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
<link href="/assets/user/css/cubeportfolio.min.css" rel="stylesheet" />
<link href="/assets/user/css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link id="t-colors" href="/assets/user/skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->

<!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>


@section('content')
<body style="background-color:white;">


    <div class="container">
        <div class="row">

          <div class="col-lg-4">
            <aside class="left-sidebar">
          <div class="widget">
              <h5 class="widgetheading">E-Rekrument Karyawan</h5>

            </div>


            <div class="widget">
              <h5 class="widgetheading">Menu</h5>
              <ul class="cat">
                <li><i class="fa fa-angle-right"></i><a href="/login">Login</a></li>
                <li><i class="fa fa-angle-right"></i><a href="#">About Us</a></li>

              </ul>
            </div>
            <div class="widget">
              <h5 class="widgetheading"></h5>
              <ul class="cat">
              <!--	<li><i class="fa fa-angle-right"></i><a href="#">Penerimaan</a></li>-->

              </ul>
            </div>


            </aside>
          </div>

            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Lowongan</div>
                    <div class="panel-body">

                        <!--<a href="{{ url('/lowongan/create') }}" class="btn btn-primary btn-xs" title="Add New lowongan"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>-->

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Bagian </th><th> Gaji </th><th> Keterangan </th>
                                        <!--<th>Actions</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($lowongan as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->bagian }}</td><td>{{ $item->gaji }}</td><td>{{ $item->keterangan }}</td>
                                        <!--<td>
                                            <a href="{{ url('/lowongan/' . $item->id) }}" class="btn btn-success btn-xs" title="View lowongan"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/lowongan/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit lowongan"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/lowongan', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete lowongan" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete lowongan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>-->
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $lowongan->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/assets/user/js/jquery.min.js"></script>
<script src="/assets/user/js/modernizr.custom.js"></script>
<script src="/assets/user/js/jquery.easing.1.3.js"></script>
<script src="/assets/user/js/bootstrap.min.js"></script>
<script src="/assets/user/plugins/flexslider/jquery.flexslider-min.js"></script>
<script src="/assets/user/plugins/flexslider/flexslider.config.js"></script>
<script src="/assets/user/js/jquery.appear.js"></script>
<script src="/assets/user/js/stellar.js"></script>
<script src="/assets/user/js/classie.js"></script>
<script src="/assets/user/js/uisearch.js"></script>
<script src="/assets/user/js/jquery.cubeportfolio.min.js"></script>
<script src="/assets/user/js/google-code-prettify/prettify.js"></script>
<script src="/assets/user/js/animate.js"></script>
<script src="/assets/user/js/custom.js"></script>
