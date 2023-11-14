<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body>
    <h1>upload form</h1>
    <form class="form-select" action="{{Route('image.upload')}}" method="post">
        @csrf
        <input type="file" name="file[]" multiple >
        <button type="submit">Upload</button>
    </form>
</body>

</html>