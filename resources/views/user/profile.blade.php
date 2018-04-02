@extends('layouts.app')
<style type="text/css">
.profile-img {
  max-width: 170px;
  border: 10px solid #fff;
  border-radius: 100%;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
}
</style>
@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
      <div class="pane-body text-center">
        <img class="profile-img" src="https://cdn0.iconfinder.com/data/icons/finance-1-8/151/25-128.png">
        <h2>{{ Auth::user()->name }}</h2>
        <h5>{{ Auth::user()->email }}</h5>
        <p>
          <a href="{{ url('/home') }}" class="btn btn-primary">
            <span class="fa fa-google"></span> Masuk Menu
          </a>
        </p>
      </div>

    </div>
  </div>
</div>
@endsection
