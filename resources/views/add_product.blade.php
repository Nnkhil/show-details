<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<div class = "container ">
    <div class="col-md-5 mx-auto mt-5"> 
  
        <a href="category"><button class="btn btn-primary">ADD CATEGORY</button></a>
        <a class= "m-5" href="brand"><button class="btn btn-primary">ADD BRAND</button></a>

        <h2 class="text-center p-4 ">add products</h2>
           
        <form action="add" method = "post">
        @csrf 
            <lable for = "name"> Name<lable><br>
            <input value="{{ old('name')}}" class="form-control mt-2" type="text" name="name">
            <span class="text-danger">@error('name') 
                {{$message}}
            @enderror</span>
            <br>


            <lable for = "name"> Category<lable><br>
            <select  class="form-control mt-2" name="category">
                @foreach($categories as $category)    
                <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
            <span class="text-danger">@error('category') 
                {{$message}}
            @enderror</span>
            <br>

            <label for="brand">Brand</label><br>
            <select class ="form-control mt-2" name="brand" >
                <option value="">Select Brand</option>
                @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                @endforeach
            </select>
            <span class="text-danger">@error('brand') 
                {{$message}}
            @enderror</span><br>


            <lable for = "name"> Quantity<lable>
            <input value ="{{ old('quantity')}}" class="form-control mt-2" type="text" name="quantity">
            <span  class="text-danger">@error('quantity') 
                {{$message}}
            @enderror</span><br>

            <input class = "form-control mt-2 border border-primary bg-gradient bg-primary" type="submit" name="submit" value = "submit">

        </form>
    </div>
    <table class ="table table-striped table-bordered  border-black  " >
        <thead class="table-dark ">
            <tr>
                <th>name</th>
                <th>category</th>
                <th>quantity</th>
                <th>Brand</th>  
            </tr>
        </thead>
        <tbody>
            @foreach($add as $details)    
            <tr>
                <td>{{$details->product_name}}</td>
                <td>{{$details->category_name}}</td>
                <td>{{$details->quantity}}</td>
                <td>{{$details->brand_name}}</td>
            </tr>
            @endforeach      
   
        </tbody>
    </table>


</div>


    
