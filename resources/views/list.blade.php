<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/jquery.dataTables.css')}}">
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.js')}}"></script>
</head>
<body>
    <div>
        <table id="datatable" class="display">
            <thead>
                <tr align="left"></tr>
                <th>#</th>
                <th data-sortable="true">Name</th>
                <th data-sortable="false">Email</th>
                <th data-sortable="false">Created</th>
            </thead>
            <tbody></tbody>
        </table>
    </div>

</body>
<script>
    $(document).ready(function(){ 
        $('#datatable').DataTable({ 
            processing: true, 
            serverSide: true, 
            order: [[ 0, "desc" ]], 
            ajax: "{{ url('users-data') }}", 
            columns: [ 
                { data: 'id' }, 
                { data: 'name' }, 
                { data: 'email' }, 
                { data: 'created_at'}, 
            ]           
        });        
    });
</script>
</html>