<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
    {{-- <link rel="stylesheet" href="/vendors/@form-validation/umd/styles/index.min.css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
     

    <title>Document</title>
</head>

<body>
    <x-resume.successmessage for="success_resume" />
    <form action="{{ route('resume.store') }}" id="myForm" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container mx-auto p-4">
            <h2 class="text-2xl font-bold mb-4">Personal Information</h2>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your name">
                    <x-resume.errormessage for="name" />
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="text" id="email" name="email" value="{{ old('email') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your email">
                    <x-resume.errormessage for="email" />
            </div>
            <div class="mb-4">
                <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
                <input type="text" id="address"  name="address" value="{{ old('address') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your address">
                    <x-resume.errormessage for="address" />
            </div>
            <div class="mb-4">
                <label for="mobile_number" class="block text-gray-700 font-bold mb-2">Mobile NUmber</label>
                <input type="text" id="mobile_number" name="mobile_number" value="{{ old('mobile_number') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter your Mobile Number">
                    <x-resume.errormessage for="mobile_number" />
            </div>

            <div class="mb-4">
                <label for="photo" class="block text-gray-700 font-bold mb-2">Photo (JPG or PNG, max 400px)</label>
                <input type="file" id="photo" name="photo" value="{{ old('photo') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <x-resume.errormessage for="photo" />

            </div>

            <div class="mb-4">
                <label for="resume" class="block text-gray-700 font-bold mb-2">Resume (PDF or DOC)</label>
                <input type="file" id="resume" name="resume" value="{{ old('resume') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <x-resume.errormessage for="resume" />
            </div>

            <button type="submit" id="submitBtn"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </div>

    </form>
    
    

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>
    <script src="/vendors/@form-validation/umd/bundle/popular.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function(e) {
            FormValidation.formValidation(
                document.getElementById('myForm'), {
                    fields: {
                        name: {
                            validators: {
                                notEmpty: {
                                    message: 'The name is required and cannot be empty'
                                },

                            }
                        }
                    },
                }
            );
        });
    </script> --}}
</body>

</html>
