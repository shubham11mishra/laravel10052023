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
                  <p>Add Permission </p>
                  <form action="{{ route('permissions.store') }}" method="post">
                      @csrf
                      <div class="form-group">
                          <label for="">Permission Name</label>
                          <input type="text" name="name" class="form-control">
                          @error('name')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Permission</button>
                            <a href="{{ route('permissions.index') }}" class="btn btn-secondary">Back</a>
                        </div>
                  </form>
             </div>
         </div>
    </div>
</body>
</html>