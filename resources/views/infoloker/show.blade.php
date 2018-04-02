@extends('admin.index')
</br>
</br>
</br>

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
                          <td>{{ $post->id }}</td>
                      </tr>
                      <tr>
                          <td><b>NO TESTING</b></td>
                          <td>{{ $post->title   }}</td>
                      </tr>
                      <tr>
                          <td><b>TANGGAL PENERIMA</b></td>
                          <td>{{ $post->text }}</td>

                  </tbody>
              </table>
              <p>
                <a href="{{ url('/infoloker') }}" class="btn btn-success">
                  <span class="fa fa-google"></span> kembali
                </a>
                <a href="{{ url('infoloker/' . $post->id . '/edit') }}" class="btn btn-primary">
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
