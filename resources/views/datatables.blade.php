<!DOCTYPE html>
<html leng="en">
<head>
  <title>My DataTables</title>
</head>
<body>
  <table id="tests" class="display">
    <thead>

      <th>Nomor ID</th>
      <th>Nama Calon Pegawai</th>
      <th>Pendidikan Terakhir</th>
    </thead>
    <tbody></tbody>
  </table>
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="//code.jquery.com/jquery.js"></script>
  <script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js">
  </script>

  <script type="text/javascript">
  $(function(){
    $('#tests').DataTable({
      processing  :true,
      serverSide  :true,
      ajax        :'{{ URL::asset('data') }}',
      columns     : [
        {data: 'id',name:'id'},
        {data: 'name',name:'name'},
        {data: 'pendidikan',name:'pendidikan'},

      ]
    });
  });

  </script>
  <div class="form-group">
      <div class="col-md-10 col-md-offset-4">
          <button type="submit" class="btn btn-primary">
          <li><a href="home">Back</a></li>
          </button>

    </body>

</html>
