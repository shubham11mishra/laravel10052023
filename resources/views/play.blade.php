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
    <x-mycomponent.alert type="error" message="this is error" > Failed</x-mycomponent.alert>

    <x-mycomponent.alert type="success"  message="this is success" > success</x-mycomponent.alert>
</body>
</html>