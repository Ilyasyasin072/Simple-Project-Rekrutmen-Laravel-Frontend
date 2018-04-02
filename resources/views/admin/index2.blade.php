<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Rekrutmen</title>
{{ HTML::style('assets1/css/bootstrap.min.css') }}
{{ HTML::style('assets1/css/datepicker3.css') }}
{{ HTML::style('assets1/css/styles.css') }}
{{ HTML::style('assets1/css/sweetalert.css')}}
<script src="assets/js/lumino.glyphs.js"></script>
</head>

<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
		</br>
				<div class="pane-body text-center">
					@include('includes.header')
					@include('includes.sidebar')
		</div>
		</div>

		<div class="row">

			<div class="container">
					@yield('content')
			</div>
			</div><!--/.col-->
{{ HTML::script('assets1/js/jquery-1.11.1.min.js') }}
{{ HTML::script('assets1/js/bootstrap.min.js') }}
{{ HTML::script('assets1/js/chart.min.js') }}
{{ HTML::script('assets1/js/chart-data.js') }}
{{ HTML::script('assets1/js/easypiechart.js') }}
{{ HTML::script('assets1/js/easypiechart-data.js') }}
{{ HTML::script('assets1/js/bootstrap-datepicker.js') }}

</body>

</html>
