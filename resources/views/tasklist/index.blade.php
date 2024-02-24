<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
           @if(Auth::guard('loginUser')->check())
                <div class="col-md-6">
                    <a href="{{route('task.create')}}" class="btn btn-primary">Create Task</a>
                </div>
            @else
                <div class="col-md-6">
                    <a href="{{route('login.index')}}" >Please login to create task</a>
                </div>
            
            @endif
            <div class="col-md-6">
                 <h1>Task List</h1>

                 @if(!empty($taskLists))
                    @foreach($taskLists as $task)
                        <div class="card">
                            <div class="card-header">
                                <h3>{{$task->title}}
                                   
                                </h3>
                            </div>
                            <div class="card-body">
                                <p>{{$task->description}}</p>
                                <p>Status: <?= ($task->is_completed == 1) ? 'Completed' : 'Pending' ?></p>
                                <span class="float-right">
                                @if(Auth::guard('loginUser')->user()->id === $task->user_id)
                                    <a href="{{route('task.show', $task )}}" class="btn btn-primary">Edit</a>
                                   
                                @else
                                    <div class="col-md-6">
                                        <a href="{{route('login.index')}}" >Please login to edit task</a>
                                    </div>
                                
                                @endif
                              
                                </span>
                            </div>
                        </div>
                    @endforeach
                    @else
                        <p>No task found</p>
                    @endif
            </div>
        </div>
    </div>
</body>
</html>