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
    <form class="form-select" action="{{Route('image.upload')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" multiple >
        <button type="submit">Uploaded</button>
    </form>
    <img src="{{asset('storage/bvK5oiyxD7YAlczfysXf6YkUqOkk43937faBRCqf.jpg')}}" alt="" srcset="">

</body>

</html>
