<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
         <div class="row">
             <div class="col-md-12">
                   <h1>Login Form</h1>
                    <form action="{{route('login.user')}}" method="post">
                         @csrf
                         <div class="col-md-3">
                             <label for="">Email</label>
                             <input type="email" name="email" class="form-control"> 
                         </div>

                         <div class="col-md-3">
                             <label for="">Password</label>
                             <input type="password" name="password" class="form-control"> 
                         </div>
                         <button type="submit" class="btn btn-primary">Login</button>
                         <a href="{{route('register.user')}}">Register</a>
                    </form>
             </div>
         </div>
    </div>
</body>
</html>