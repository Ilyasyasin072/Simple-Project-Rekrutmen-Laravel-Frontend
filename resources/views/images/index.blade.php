@extends('layouts.main')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Images</p>
            </div>
            <div class="panel-body">
                @foreach ($images as $image)
                    <div class="col-sm-3">
                        <a href="" class="thumbnail">
                            <img src="upload/{{ $image->photo, $image->title }}" alt="">
                            <div class="caption">
                              <a href="upload/{{ $image->photo, $image->tittle }}" target="_blank">tes</a>
                              {{ $image->photo }}

                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
