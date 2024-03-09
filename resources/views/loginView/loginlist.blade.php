<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
         <div class="row">
              <div class="col-md-12">
                   <div class="card">
                        <div class="card-header">
                             Login List
                        </div>
                        <div class="card-body">
                             <table class="table table-bordered">
                                  <thead>
                                       <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                       </tr>
                                  </thead>
                                  <tbody>
                                        @foreach ($loginlist as $login)
                                        <tr>
                                            <td>{{ $login->id }}</td>
                                            <td>{{ $login->name }}</td>
                                            <td>{{ $login->email }}</td>                                          
                                            <td>
                                                 <a href="{{route('login.edit',$login)}}" class="btn btn-primary">Edit</a>
                                                 <a href="" class="btn btn-danger">Delete</a>
                                             </td>
                                        </tr>
                                       @endforeach

                                  </tbody>
                             </table>
                        </div>
                   </div>
              </div>
         </div>
    </div>
    
</body>
</html>