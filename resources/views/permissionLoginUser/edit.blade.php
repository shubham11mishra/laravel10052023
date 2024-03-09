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
             <div class="col-md-6">
                 <p>Edit permissions</p>
                 <form action="{{ route('permissions.update', $permission) }}" method="POST">
                     @csrf
                     @method('PUT')
                     <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" name="name" class="form-control" value="{{ $permission->name }}">
                         @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                            <a href="{{ route('permissions.index') }}" class="btn btn-secondary mt-2">Back</a>
                     </div>
                 </form>   
             </div>
        </div>
    </div>
</body>
</html>