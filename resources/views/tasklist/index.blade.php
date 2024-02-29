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
        @if(Auth::guard('loginUser')->check())
        <div class="col-md-6">
            <a href="{{route('task.create')}}" class="btn btn-primary">Create Task</a>
        </div>
        @else
        <div class="col-md-6">
            <a href="{{route('login.index')}}">Please login to create task</a>
        </div>

        @endif


        <div class="row">


            @if(!empty($taskLists))
            @foreach($taskLists as $task)
            <div class="col-md-6">
                <div class="card mb-5">
                    <div class="card-header">
                        <h3>{{$task->title}}

                        </h3>
                    </div>
                    <div class="card-body">
                        <p>{{$task->description}}</p>
                        <p>Status: <?= ($task->is_completed == 1) ? 'Completed' : 'Pending' ?></p>
                        <span class="float-right">
                            <!-- @if(Auth::guard('loginUser')->check() && Auth::guard('loginUser')->user()->id === $task->user_id)
                                    <a href="{{route('task.show', $task )}}" class="btn btn-primary">Edit</a>
                                   
                                @else
                                    <div class="col-md-6">
                                        <a href="{{route('login.index')}}" >Please login to edit task</a>
                                    </div>
                                
                                @endif -->
                            @can('update-tasklist', $task)
                            <a href="{{route('task.show', $task )}}" class="btn btn-primary">Edit</a>
                            @endcan
                            @can('delete-tasklist', $task)
                            <form action="{{route('task.destroy', $task)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit">Delete</button>
                            </form>
                            @endcan

                        </span>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p>No task found</p>
            @endif

        </div>
    </div>
</body>

</html>