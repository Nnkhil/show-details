<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="container">
    <div class="row col-md-5 mx-auto">
        <h1 class="text-center p-4 m-4">ADD BRANDS</h1>
        <form action="brand" method = "post">
        @csrf 
            <label for="name">Brand Name</label><br>
            <input class="form-control"  type="text" name="brand_name"><br>
            
            <input class="form-control mt-2 border border-primary bg-gradient bg-primary"  type="submit" name = "submit" value = "submit">
        </form>
    </div>
</div>
