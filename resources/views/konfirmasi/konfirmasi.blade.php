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
         </br>
         </div>
       </div>
     </div>
        <div class="col-md-10 col-md-offsite-2">
           <div class="panel panel-default">
             <tbody>

                  @foreach($pelamar as $item)
               <div class="panel-body text-left>">
                 <td><h5>{{ $item->pelamar_no_ktp}}</h5></td>
                   <td><h5>{{ $item->pelamar_nama }}</h5></td>
                 <td><h5>{{ $item->pelamar_email }}</h5></td>
                 <td<h5>Status konfirmasi</h5></td>
               </tr>
               </tbody>
                 <div class="panel-heading"><p><a class="btn btn-default" href="{{url('/pelamar/'. $item->id . '/edit')}}">View Data Pelamar</a></p></div>
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
