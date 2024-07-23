<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
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
    
  


    <div class="container">
        <form action="{{url('/')}}/form"  method="post">
            @csrf <!-- Add this if using Laravel or a similar framework for CSRF protection -->
            <h1 class="text-center">Registarion form</h1>
    
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="name" value= {{old('name')}}>
                <span class="text-danger"> @error('name')
                    {{$message}}
                    @enderror</span>
            </div>
    
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
                <span class="text-danger"> @error('email')
                    {{$message}}
                    @enderror</span>
            </div>
    
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <span class="text-danger"> @error('password')
                    {{$message}}
                    @enderror</span>
            </div>
    
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    


















    
</body>
</html>