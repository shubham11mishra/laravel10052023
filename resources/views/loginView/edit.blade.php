<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                  <p>Edit  Permission</p>
                  <form action="{{ route('login.update',$loginuser) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $loginuser->name }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>   
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $loginuser->email }}">
                        
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <input type="hidden" name="password" value="{{ $loginuser->password }}">
                    <div class="form-group">

                    <label for="permissions">Select Permissions:</label>
                    @foreach ($permissions as $permission)
                        <div>
                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" 
                                {{ in_array($permission->id, $userPermissions) ? 'checked' : '' }}>
                            {{ $permission->name }}
                        </div>
                    @endforeach
                    </div>

                    <button type="submit">Update</button> 
                  </form>

            </div>
        </div>
    </div>
</body>
</html>