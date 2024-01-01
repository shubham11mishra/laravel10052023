<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Image</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('images.message')

    <div class="flex justify-center items-center px-4 py-6">
        <div class="bg-white w-full max-w-md rounded-md shadow-md p-4">
            <h1 class="text-3xl font-bold text-gray-800 text-center mb-4">Edit Image</h1>

            <form method="POST" action="{{ route('images.update', $image->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="image-container">
                    <img id="previewImage" src="{{ asset('storage/'.$image->path) }}" alt="Image Preview">
                  
                    <label for="newImage">Select New Image:</label>
                    <input type="file" id="newImage" name="newImage">
                  
                    <button type="submit" class="btn btn-primary  bg-blue-500 text-white">Update Image</button>
                  </div>
            </form>
        </div>
    </div>


</body>

</html>
