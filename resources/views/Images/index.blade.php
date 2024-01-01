<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: sans-serif;
        }

        .container {
            margin: 0 auto;
            max-width: 1140px;
            padding: 20px;
        }

        .h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

       

        .grid .bg-white {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }

        @media (max-width: 768px) {
            .grid {
                grid-template-columns: 1fr;
                /* Single column for smaller screens */
            }

            .bg-white {
                width: 100%;
                /* Make the image container full-width */
            }

            img {
                max-width: 100%;
                /* Scale the image to fit the container */
                height: auto;
                /* Maintain aspect ratio */
            }
        }
    </style>
</head>

<body>
    @include('images.message')
    <div class="container mx-auto flex justify-center items-center px-4 py-6">
        <div class="w-full max-w-4xl">
            <h1 class="text-3xl font-bold text-gray-800 text-center">Images</h1>

            <div class="flex justify-between mt-4">
                <a href="{{ route('images.create') }}" class="btn btn-primary">Create Image</a>
            </div>

            @if ($images->count())
                <div class="grid grid-cols-2 gap-4 mt-4 text-center">
                    @foreach ($images as $image)
                        <div class="bg-white p-4 rounded-md shadow">
                            <img src="{{ asset('storage/'.$image->path) }}" alt="" width="100" height="100">
                            <div class="mt-4">
                                <h2 class="text-gray-800">{{ $image->name }}</h2>
                                <a href="{{ route('images.edit', $image->id) }}" class="btn btn-secondary mr-2">Edit</a>
                                <form action="{{ route('images.destroy', $image->id) }}" method="post" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="mt-4 text-center">
                    No images found.
                </div>
            @endif
        </div>
    </div>
</body>

</html>
