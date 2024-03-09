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
                  <div class="row">
                       <div class="col-md-6">
                           <a href="{{route('permissions.create')}}" class="btn btn-primary">Add Permissions</a>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                        
                              @if (!empty($permissionLoginUser))
                                 @foreach($permissionLoginUser as $permission)
                                    <p>{{$permission->name}} </p>
                                    <div class="d-flex">
                                     <a href="{{route('permissions.edit',$permission)}}" class="btn btn-primary">Edit</a>
                                     <form action="{{route('permissions.destroy', $permission)}}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <button class="btn btn-danger">Delete</button>
                                     </form>
                                    </div>
                                  @endforeach
                              @endif

                       </div>
                  </div>
             </div>
        </div>
     </div>
</body>
</html>