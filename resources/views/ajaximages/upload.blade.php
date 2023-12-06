<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

 @include('images.message')

 <div class="flex justify-center items-center px-4 py-6">
    <div class="bg-white w-full max-w-md rounded-md shadow-md p-4">
        <h1 class="text-3xl font-bold text-gray-800 text-center mb-4">Upload Image</h1>

       
            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Select Image</label>
                <input type="file" id="image" name="image" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-md focus:outline-none focus:shadow-outline-primary">
            </div>

            <button onclick="uploadImage()" class="btn btn-primary px-4 py-2 bg-blue-500 text-white">Upload Image</button>
       
    </div>
</div>

<script>
    function uploadImage() {
        var input = document.getElementById('image');
        var file = input.files[0];

        if (file) {
            var formData = new FormData();
            formData.append('image', file);
            // Add CSRF token to the FormData
            let csrfToken = document.querySelector('meta[name="csrf-token"]');
            formData.append('_token', csrfToken ? csrfToken.content : '');

            fetch('/upload-save', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                console.log('Success:', data.message);
                // Perform a client-side redirect to the list-image page
                    window.location.href = '/ajaxindex';
                } else if (data.error) {
                    console.error('Error:', data.error);
                    // Handle error (show an error message, update UI, etc.)
                } else {
                    console.warn('Unexpected response format:', data);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle error (show an error message, etc.)
            });
        } else {
            console.error('No file selected');
            // Handle the case where no file is selected
        }
    }
</script>
</body>
</html>

