<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')
</head>
<body>

<!-- component -->
<section>
    <form  action="{{route('todo.store')}}" method="post" class="">
        @csrf
        <input type="text" name="title" placeholder="title" value="{{old('title')}}" class="border">
        <input type="submit" name="submit" >
    </form>
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</section>
<div>
    <ul>
        @foreach($todos as $todo)
            <li>
                <div class="block mb-5">
                    <h3>{{$todo->title}}</h3>
                    <p>{{$todo->body}}</p>
                </div>
            </li>
        @endforeach
    </ul>
    {{ $todos->links() }}
</div>
</body>
</html>
