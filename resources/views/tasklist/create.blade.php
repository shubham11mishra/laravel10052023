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
                 <h1>Add Task</h1>
            </div>
            <form action="{{route('task.save')}}" method="POST">
                @csrf
             <div class="col-md-6">
                <label> Add Title</label>
                <input type="text" name="title" class="form-control">
                <label> Add Description</label>
                <input type="text" name="description" class="form-control">
                <button class="btn btn-primary">Add Task</button>
             </div>
            </form>
        </div>
    </div>
</body>
</html>