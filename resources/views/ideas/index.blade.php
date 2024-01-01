<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <form action="{{route('s.ideas.store')}}" method="post">
        @csrf
        <input type="text" name="title" id="">
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <button type="submit">Add </button>
    </form>

    @foreach ($ideas as $idea)
        <div>
            <h1>{{ $idea->title }}</h1>
            <p>{{ $idea->description }}</p>

            <form action="" method="post">
                <button type="submit">Delete</button>
            </form>
            
        </div>
    @endforeach
</body>

</html>
