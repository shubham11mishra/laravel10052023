@if ($images->count())
<div class="grid grid-cols-2 gap-4 mt-4 text-center">
    @foreach ($images as $image)
        <div class="bg-white p-4 rounded-md shadow">
            <img src="{{ stor($image->path) }}" alt="" width="100" height="100">
            <div class="mt-4">
                <h2 class="text-gray-800">{{ $image->name }}</h2>
                
                <button onclick="editImage({{ $image->id }})" class="btn btn-secondary mr-2">Edit</button>
                <button onclick="deleteImage({{ $image->id }})" class="btn btn-danger">Delete</button>
            </div>
        </div>
    @endforeach
</div>
@else
<div class="mt-4 text-center">
    No images found.
</div>
@endif