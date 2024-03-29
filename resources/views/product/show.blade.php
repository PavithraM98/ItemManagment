<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Datatables Server Side Data Processing - Cairocoders</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> 
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Laravel 9 Datatables Server Side Data Processing</h2>
    <table class="table table-bordered table-striped" id="data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Price</th>           
                <th>Description</th>     
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<script type="text/javascript">
  $(function () {
     
    var table = $('#data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('products.show') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'price', name: 'price'}, 
            {data: 'description', name: 'description'},           
        ]
    });
     
  });
</script>
</body>
</html>