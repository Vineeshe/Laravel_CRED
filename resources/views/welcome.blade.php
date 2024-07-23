<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
  h1{
    text-align: center;
    margin-top: 10%;
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


      <h1>Welcome !</h1>
    
    
</body>
</html>