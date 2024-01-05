<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chaet Sheet</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <header>

    </header>
    <div class="flex ">
        <div class="min-w-min p-4 ">
            sidebarasdasda
        </div>
        <div class="p-4 max-w-0">
            <div class=" overflow-hidden bg-slate-900 p-2 ">
                <ul class="flex flex-nowrap overflow-scroll no-scrollbar  ">
                    @foreach ($data as $language)
                        <li class="whitespace-nowrap  shadow-md space-x-2 py-1 px-2">
                            <a class="bg-slate-600 text-white select-none rounded-sm py-1 px-2"
                                href="#">{{ $language->language_name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


</body>

</html>
