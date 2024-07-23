<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>
  #adbtn{
    margin-left: 85%;
  }
</style>
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

 <div class="container">
        <table class="table">
          <a class="btn btn-success" href="{{'/form'}}" role="button" id="adbtn">+Add</a> <span>
            <a class="btn btn-danger" href="{{route('trashed_data')}}" role="button" id="adbt">Trash</a>
          </span>
        
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
                <td> <a href="{{route('customer_dlt',['id'=>$people->users_id])}}" onclick="return confirm('Are you  sure to Delete?')" ><button class="btn btn-danger">Trash</button></a> 
                  <a href="{{route('customer_edit',['id'=>$people->users_id])}}"> <button class="btn btn-primary">Edit</button></a> 
               </td>
            </tr>
            @endforeach
          
            </tbody>
          </table>


    </div>
    
</body>
</html>