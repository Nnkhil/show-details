<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class = "container ">
 <div class="row col-md-6 mx-auto"> 
 <h2 class="text-center p-4 m-4">Update Employee Data</h2>
<form action="/updatedata_employee/{{$updatedata->id}}" method = "post">
@csrf
<lable for = "name"> Employee Name<lable><br>
<input  class="form-control mt-2" type="text" name="name" value = "{{$updatedata->username}}">
<br>

<lable for = "name"> Email<lable><br>
<input class="form-control mt-2"  type="text" name="email" value = "{{$updatedata->email}}">
<br>

<lable for = "name"> Address<lable><br>
<input  class="form-control mt-2" type="text" name="address" value = "{{$updatedata->address}}">

<br>
<br>
<input class = "form-control mt-2 border border-primary bg-gradient bg-primary" type="submit" name="submit" value = "submit">

</form>

</div>

