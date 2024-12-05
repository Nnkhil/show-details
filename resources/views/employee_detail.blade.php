
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

<div class="container mx-auto my-5" >
  <div class = "row p-3">
  <h2 class =" text-center p-3">Employee DETAILS</h2>
    <table  id="myTable" class="table table-success table-striped">
      <thead>
    <tr>
      <th>id</th>
      <th>Employee Name</th>
      <th>email</th>
      <th>Address</th>
      <th>Department</th>
      <th>Action</th>
      
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>



<script type="text/javascript">
    $(function () {
          var table = $('#myTable').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('employee') }}",
              columns: [
                  {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                  {data: 'username', name: 'username'},
                  {data: 'email', name: 'email'},
                  {data: 'address', name: 'address'},
                  {data: 'department_name', name: 'department_name'},
                  {data: 'action', name: 'action'},
                  

              ]
          });        });
</script>
