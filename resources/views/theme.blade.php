<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')


</head>

<body>
    <header class="w-full bg-white h-12 py-2 flex justify-between items-center shadow-md ">
        <div class="flex justify-start items-center">
            <div class="pl-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" role="img" aria-labelledby="aqhafcdc661jjzhu34eqnxydievi9euu" class="crayons-icon">
                    <title id="aqhafcdc661jjzhu34eqnxydievi9euu">Navigation menu</title>
                    <path d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z"></path>
                </svg>
            </div>
            <div class="pl-5">
                <img class="max-h-8" src="https://dev-to-uploads.s3.amazonaws.com/uploads/logos/resized_logo_UQww2soKuUsjaOGNB38o.png" alt="DEV Community">
            </div>
        </div>
        <div class="flex justify-end items-center">
            <div class="pr-5">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" role="img" aria-labelledby="ai13u6ddlylgh4kxqk8213pz67i4pfl2" class="crayons-icon">
                        <title id="ai13u6ddlylgh4kxqk8213pz67i4pfl2">Search</title>
                        <path d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0111 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 01-1.969 5.617zm-2.006-.742A6.977 6.977 0 0018 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 004.875-1.975l.15-.15z"></path>
                    </svg>

                </a>
            </div>
            <div class="pr-5">
                <a href="#" class="bg-slate-500 p-2 text-white rounded-md shadow-md font-semibold">
                    Create account
                </a>
            </div>
        </div>
    </header>
    <main class="bg-slate-100 mb-20">
        <nav>
            <ul class="flex py-5 ">
                <li class="ml-5 font-bold">Relevant</li>
                <li class="ml-5">Latest</li>
                <li class="ml-5">Top</li>
            </ul>
        </nav>

        <div>
            <a href="#" title="17 Essential Tools to Boost Your Productivity 🚀🔥" aria-label="article">
                <img class="rounded-t-md " src="https://res.cloudinary.com/practicaldev/image/fetch/s--wP48g-um--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/zfzl1bmezdynbmhj5smy.png">
            </a>
        </div>

        <div class="flex items-center mt-5 mx-5">
            <div class="mr-2 ">
                <a href="#" class="">
                    <img class="max-h-10 border rounded-full border-gray-700" src="https://res.cloudinary.com/practicaldev/image/fetch/s--4L_SFF-C--/c_fill,f_auto,fl_progressive,h_90,q_auto,w_90/https://dev-to-uploads.s3.amazonaws.com/uploads/user/profile_image/159737/10b8de99-9383-42da-80e2-851af40d5d0f.png" alt="madza profile" loading="lazy">
                </a>
            </div>
            <div class="flex flex-col">
                <a href="#" class="font-semibold text-16">
                    Madza
                </a>
                <a href="#">
                    <time datetime="2023-11-07T10:43:39Z" title="Tuesday, November 7, 2023 at 4:13:39 PM">Nov 7</time>
                </a>
            </div>
        </div>
        <h2 class="font-bold text-gray-900 text-xl mt-5 pl-5">
            <a href="#">
                17 Essential Tools to Boost Your Productivity 🚀🔥
            </a>
        </h2>
        <div>

        </div>


    </main>

</body>

</html>
