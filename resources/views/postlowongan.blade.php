@extends('admin.index')
</br>
@section('content')
<div id="content">
  <div class="inner" style="min-height: 700px;">
     <div class="row">
       <div class="col-lg-10">
         <div class="container">
           <div class="page-header">
         <div class="col-md-10 col-md-offsite-2">
            <div class="panel panel-default">
              <ul class="list-group">
                  <a href="#" class="list-group-item active">
                      <i class="fa fa-cogs"></i><h2>Informasi Lowongan Penerimaan PT SHARIFA CORPORATION</h2></a>
                    </br>
           <div class="panel-heading"><p><a class="btn btn-lg btn-primary" href="{{url('/lowongan/create')}}">Tambah Lowongan</a></p></div>
         </br>
         </div>
       </div>
     </div>
        <div class="col-md-10 col-md-offsite-2">
           <div class="panel panel-default">

             <tbody>
                  @foreach($lowongan as $item)
               <div class="panel-body text-left>">
                 <td><h1>{{ $item->bagian}}</h1></td>
                   <td><h5>Gaji Perbulan            :{{ $item->gaji }}</h5></td>
                 <td><h5>Syarat Kualifikasi         :{{ $item->keterangan }}</h5></td>
               </tr>

               </tbody>
                 <div class="panel-heading"><p><a class="btn btn-lg btn-primary" href="{{url('/lowongan/'. $item->id . '/edit')}}">Apply</a></p></div>
                 @endforeach
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 </div>
 </div>
 </div>
@endsection
