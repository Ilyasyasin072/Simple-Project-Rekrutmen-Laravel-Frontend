@extends('layouts.main')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Add Image</p>
                <p>Title Sertakan dengan Nama lengkap</p>
            </div>
            <div class="panel-body">
                <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="tittle" class="control-label col-md-3">Nama File</label>
                        <div class="col-md-9">
                            <input type="text" name="tittle" class="form-control" placeholder="Write title for your image...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo" class="control-label col-md-3">Upload Photo</label>
                        <div class="col-md-9">
                            <input type="file" name="photo" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('images.index') }}" class="btn btn-default">Cancel</a>
                            <a href="{{ url ('/home') }}" class="btn btn-default">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
