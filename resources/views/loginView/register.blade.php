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
    
    <div class="row">
        <div class="col-md-12">
              <form action = "{{route('login.save')}}" method="POST">
                  @csrf
                  <div class="">
                      <label> User name</label>
                      <input type="input" name="name" value="">
                  </div>

                  <div class="">
                      <label> Email</label>
                      <input type="email" name="email"> 
                  </div>
                  <div class="">
                     <label>Password</label>
                     <input type="password" name="password">
                  </div>
                  

                  <button type="submit">Register</button>
                  <a href="{{route('login.index')}}">Login</a>

                  
              </form>
        </div>
    </div>
</body>
</html>