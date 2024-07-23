<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid" style="background-color: gold">
          <a class="navbar-brand"  href="#">CRED</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{'/'}}">Home</a>
              <a class="nav-link" href="{{'/form'}}">Registration</a>
              <a class="nav-link" href="{{route('customer.list')}}">Customers</a>
              
             
            </div>
          </div>
        </div>
      </nav>
      <h2 style="text-align: center;">Trashed Data</h2>


    <div class="container">
        <table class="table">
            <thead>
            <tr>
              
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">Action</th>
              </tr>
            
            </thead>
            <tbody>
             
              @foreach ($peoples as $people )  
              
              <tr>
                <td>{{$people->name}}</td>
                <td>{{$people->email}}</td>
                <td>{{$people->password}}</td>
                <td> <a href="{{route('customer_restore',['id'=>$people->users_id])}}" ><button class="btn btn-danger">Restore</button></a> 
                  <a href="{{route('force_dltd',['id'=>$people->users_id])}}" onclick="return confirm('Are Youe sure to  delete  Permently')"> <button class="btn btn-primary">Delete</button></a> 
               </td>
            </tr>
            @endforeach
           
          
            </tbody>
          </table>


    </div>
    

    


</body>
</html>