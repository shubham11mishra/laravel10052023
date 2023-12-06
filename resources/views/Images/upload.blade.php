<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

 @include('images.message')

 <div class="flex justify-center items-center px-4 py-6">
    <div class="bg-white w-full max-w-md rounded-md shadow-md p-4">
        <h1 class="text-3xl font-bold text-gray-800 text-center mb-4">Upload Image</h1>

        <form action="/upload" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Select Image</label>
                <input type="file" id="image" name="image" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-md focus:outline-none focus:shadow-outline-primary">
            </div>

            <button type="submit" class="btn btn-primary px-4 py-2 bg-blue-500 text-white">Upload Image</button>
        </form>
    </div>
</div>


</body>
</html>

