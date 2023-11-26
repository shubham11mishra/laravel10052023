<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Blog</title>

    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-200">

    <header class="  fixed  h-12 w-full  bg-white py-2 shadow-md">
        <div class="flex items-center justify-between container mx-auto px-20">
            <div class="flex items-center justify-start">
                <div class="pl-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" role="img" aria-labelledby="aqhafcdc661jjzhu34eqnxydievi9euu" class="crayons-icon">
                        <title id="aqhafcdc661jjzhu34eqnxydievi9euu">Navigation menu</title>
                        <path d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z"></path>
                    </svg>
                </div>
                <div class="pl-5">
                    <img class="max-h-8" src="https://dev-to-uploads.s3.amazonaws.com/uploads/logos/resized_logo_UQww2soKuUsjaOGNB38o.png" alt="DEV Community" />
                </div>
            </div>
            <div class="flex items-center justify-end">
                <div class="pr-5">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" role="img" aria-labelledby="ai13u6ddlylgh4kxqk8213pz67i4pfl2" class="crayons-icon">
                            <title id="ai13u6ddlylgh4kxqk8213pz67i4pfl2">Search</title>
                            <path d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0111 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 01-1.969 5.617zm-2.006-.742A6.977 6.977 0 0018 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 004.875-1.975l.15-.15z">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="pr-5">
                    <a href="#" class="rounded-md bg-slate-500 p-2 font-semibold text-white shadow-md"> Create account
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="mb-10  container px-20 pt-14   mx-auto md:grid md:grid-cols-3 md:gap-4 lg:grid-cols-5 lg:gap-4">
        <div class="hidden md:block">
            <aside class="">
                <div class="m-4 rounded-md bg-white p-4 shadow-md">
                    <h2 class="mb-4 text-xl font-bold text-gray-900">DEV Community is a community of 1,187,928 amazing
                        developers</h2>
                    <p class="color-base-70 mb-4">We're a place where coders share, stay up-to-date and grow their
                        careers.</p>
                    <div class="flex flex-col">
                        <a href="/enter?state=new-user" class="mb-2 rounded-md bg-slate-900 p-2 text-center text-white" aria-label="Create new account">Create account</a>
                        <a href="/enter" class="rounded-md bg-slate-900 p-2 text-center text-white" aria-label="Log in">Log in</a>
                    </div>
                </div>
            </aside>
        </div>
        <div class="md:col-span-2 lg:col-span-3">
            <nav class="flex justify-between items-center">
                <ul class="flex py-5 space-x-5">
                    <a href="{{route('post.index',collect([...request()->query()])->except('d','page')->merge(['type' => 'relevent'])->toArray())}}">
                        <li class=" {{ request()->query('type') == 'relevent'  ? 'font-bold' : '' }}">Relevant</li>
                    </a>
                    <a href="{{route('post.index',collect([...request()->query()])->except('d','page')->merge(['type' => 'latest'])->toArray())}}">
                        <li class=" {{ request()->query('type') == 'latest'  ? 'font-bold' : '' }}">Latest</li>
                    </a>
                    <a href="{{route('post.index',collect([...request()->query()])->except('d','page')->merge(['type' => 'top'])->toArray())}}">
                        <li class=" {{ request()->query('type') == 'top'  ? 'font-bold' : '' }}">Top</li>
                    </a>
                </ul>
                <ul class="flex py-5 space-x-5 mr-5 {{request()->query('type') != 'top'  ? 'hidden' : ''}}">
                    <a href="{{route('post.index',[...request()->query(),'d' => 'week'])}}">
                        <li class="{{ request()->query('d') == 'week'  ? 'font-bold' : '' }}">Week</li>
                    </a>
                    <a href="{{route('post.index',[...request()->query(),'d' => 'month'])}}">
                        <li class="{{ request()->query('d') == 'month'  ? 'font-bold' : '' }}">Month</li>
                    </a>
                    <a href="{{route('post.index',[...request()->query(),'d' => 'year'])}}">
                        <li class="{{ request()->query('d') == 'year'  ? 'font-bold' : '' }}">Year</li>
                    </a>
                </ul>
            </nav>

            @if(count($response) > 0)
            @foreach ($response as $item)

            <article class="mb-5 bg-slate-100 shadow-md">
                <div>
                    <a href="#">
                        <img class="rounded-t-md" src="https://res.cloudinary.com/practicaldev/image/fetch/s--wP48g-um--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/zfzl1bmezdynbmhj5smy.png" />
                    </a>
                </div>

                <div class="mx-5 mt-5 flex items-center">
                    <div class="mr-2">
                        <a href="#">
                            <img class="max-h-10 rounded-full border border-gray-700" src="https://res.cloudinary.com/practicaldev/image/fetch/s--4L_SFF-C--/c_fill,f_auto,fl_progressive,h_90,q_auto,w_90/https://dev-to-uploads.s3.amazonaws.com/uploads/user/profile_image/159737/10b8de99-9383-42da-80e2-851af40d5d0f.png" alt="madza profile" loading="lazy" />
                        </a>
                    </div>
                    <div class="flex flex-col">
                        <a href="#" class="text-16 font-semibold"> {{$item->user->name}} </a>
                        <a href="#">
                            <time datetime="2023-11-07T10:43:39Z" title="Tuesday, November 7, 2023 at 4:13:39 PM">
                                {{$item->PublisherAtHuman}}
                            </time>
                        </a>
                    </div>
                </div>
                <h2 class="mt-5 pl-5 text-xl font-bold text-gray-900">
                    <a href="{{route('post.show',$item->slug)}}">{{ $item->title }}</a>
                </h2>
                <div class="my-5 flex flex-wrap">
                    @foreach ($item->tags as $tags)
                    <a class="ml-5" href="{{route('post.index',['tag' => $tags->slug])}}">
                        <span class="crayons-tag__prefix">#</span>{{ $tags->title }}
                    </a>
                    @endforeach


                </div>
                <div class="mx-5 flex items-center justify-around pb-5">


                    <div>
                        <a href="#" class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" role="img" aria-labelledby="acv7kflv8liflqp4jqufw6zk6ng1taan" class="crayons-icon">
                                <title id="acv7kflv8liflqp4jqufw6zk6ng1taan">Comments</title>
                                <path d="M10.5 5h3a6 6 0 110 12v2.625c-3.75-1.5-9-3.75-9-8.625a6 6 0 016-6zM12 15.5h1.5a4.501 4.501 0 001.722-8.657A4.5 4.5 0 0013.5 6.5h-3A4.5 4.5 0 006 11c0 2.707 1.846 4.475 6 6.36V15.5z">
                                </path>
                            </svg>
                            {{$item->comments_count}}
                        </a>
                    </div>
                    <div class="flex items-center justify-center">
                        <small class="crayons-story__tertiary fs-xs mr-2"> 7 min read </small>
                        <button type="button" class="c-btn c-btn--icon-alone bookmark-button">
                            <span class="bm-initial hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true">
                                    <path d="M6.75 4.5h10.5a.75.75 0 01.75.75v14.357a.375.375 0 01-.575.318L12 16.523l-5.426 3.401A.375.375 0 016 19.607V5.25a.75.75 0 01.75-.75zM16.5 6h-9v11.574l4.5-2.82 4.5 2.82V6z">
                                    </path>
                                </svg>
                            </span>
                            <span class="bm-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true">
                                    <path d="M6.75 4.5h10.5a.75.75 0 01.75.75v14.357a.375.375 0 01-.575.318L12 16.523l-5.426 3.401A.375.375 0 016 19.607V5.25a.75.75 0 01.75-.75z">
                                    </path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </article>
            @endforeach

            {{ $response->links() }}
            @else
            <div class="bg-white p-5 text-center">
                <h3 class="font-bold pb-5 text-2xl">No post found</h3>
                <p class="">
                    <a class="hover:text-red-600 hover:underline cursor-pointer" href="{{route('post.index')}}">Go to home page</a>
                </p>
            </div>
            @endif
        </div>
        <div class="m-5 hidden lg:block">
            <div class="rounded-md bg-white p-5 shadow-md">
                <h2 class="mb-5 text-2xl font-bold"># Tagname</h2>
                <ul class="">
                    <li>
                        <a class="" href="/devteam/why-should-standing-out-be-non-negotiable-58fb">
                            Why Should Standing Out Be Non-Negotiable?
                            <div class="">4 comments</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</body>

</html>