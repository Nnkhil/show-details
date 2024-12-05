
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<div class="container mx-auto my-5" >
  <div class = "row p-3">
  <h2 class =" text-center p-3">PRODUCT DETAILS</h2>
    <table class ="table table-striped table-bordered  border-black  " >
      <thead class="table-dark ">
    <tr>
      <th>id</th>
      <th>name</th>
      <th>category</th>
      <th>quantity</th>
      <th>DELETE RECORDS</th>
      <th>UPDATE RECORDS</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $details)    
    <tr>
      <td>{{$details->id}}</td>
      <td>{{$details->name}}</td>
      <td>{{$details->category}}</td>
      <td>{{$details->quantity}}</td>
      <td><a href="{{'delete/'.$details->id}}">delete</a></td>
      <td><a href="{{'update/'.$details->id}}">update</a></td>

    </tr>
    <tr>
  @endforeach      
   
  </tbody>
</table>
</div>
</div>
