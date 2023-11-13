<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Blog</title>

    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>
    <header class="flex h-12 w-full items-center justify-between bg-white py-2 shadow-md">
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
                        <path d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0111 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 01-1.969 5.617zm-2.006-.742A6.977 6.977 0 0018 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 004.875-1.975l.15-.15z"></path>
                    </svg>
                </a>
            </div>
            <div class="pr-5">
                <a href="#" class="rounded-md bg-slate-500 p-2 font-semibold text-white shadow-md"> Create account </a>
            </div>
        </div>
    </header>
    <main class="mb-10 bg-gray-100 md:grid md:grid-cols-3 md:gap-4 lg:grid-cols-5 lg:gap-4">
        <div class="hidden md:block">
            <aside class="">
                <div class="m-4 rounded-md bg-white p-4 shadow-md">
                    <h2 class="mb-4 text-xl font-bold text-gray-900">DEV Community is a community of 1,187,928 amazing developers</h2>
                    <p class="color-base-70 mb-4">We're a place where coders share, stay up-to-date and grow their careers.</p>
                    <div class="flex flex-col">
                        <a href="/enter?state=new-user" class="mb-2 rounded-md bg-slate-900 p-2 text-center text-white" aria-label="Create new account">Create account</a>
                        <a href="/enter" class="rounded-md bg-slate-900 p-2 text-center text-white" aria-label="Log in">Log in</a>
                    </div>
                </div>

                <nav class="m-4" aria-label="DEV Community">
                    <ul class="">
                        <li>
                            <a href="/" class="flex">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="24" height="24">
                                        <g class="nc-icon-wrapper">
                                            <path fill="#A0041E" d="M13.344 18.702h-2a.5.5 0 01-.5-.5v-7a.5.5 0 01.5-.5h2a.5.5 0 01.5.5v7a.5.5 0 01-.5.5z"></path>
                                            <path fill="#FFE8B6" d="M9 20L22 7l13 13v17H9z"></path>
                                            <path fill="#FFCC4D" d="M22 20h1v16h-1z"></path>
                                            <path fill="#66757F" d="M35 21a.997.997 0 01-.707-.293L22 8.414 9.707 20.707a1 1 0 11-1.414-1.414l13-13a.999.999 0 011.414 0l13 13A.999.999 0 0135 21z"></path>
                                            <path fill="#66757F" d="M22 21a.999.999 0 01-.707-1.707l6.5-6.5a1 1 0 111.414 1.414l-6.5 6.5A.997.997 0 0122 21z"></path>
                                            <path fill="#C1694F" d="M14 30h4v6h-4z"></path>
                                            <path fill="#55ACEE" d="M14 21h4v4h-4zm12.5 0h4v4h-4zm0 9h4v4h-4z"></path>
                                            <path fill="#5C913B" d="M37.5 37.5A1.5 1.5 0 0136 39H8a1.5 1.5 0 010-3h28a1.5 1.5 0 011.5 1.5z"></path>
                                        </g>
                                    </svg>
                                </span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/" class="flex">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="24" height="24">
                                        <g class="nc-icon-wrapper">
                                            <path fill="#A0041E" d="M13.344 18.702h-2a.5.5 0 01-.5-.5v-7a.5.5 0 01.5-.5h2a.5.5 0 01.5.5v7a.5.5 0 01-.5.5z"></path>
                                            <path fill="#FFE8B6" d="M9 20L22 7l13 13v17H9z"></path>
                                            <path fill="#FFCC4D" d="M22 20h1v16h-1z"></path>
                                            <path fill="#66757F" d="M35 21a.997.997 0 01-.707-.293L22 8.414 9.707 20.707a1 1 0 11-1.414-1.414l13-13a.999.999 0 011.414 0l13 13A.999.999 0 0135 21z"></path>
                                            <path fill="#66757F" d="M22 21a.999.999 0 01-.707-1.707l6.5-6.5a1 1 0 111.414 1.414l-6.5 6.5A.997.997 0 0122 21z"></path>
                                            <path fill="#C1694F" d="M14 30h4v6h-4z"></path>
                                            <path fill="#55ACEE" d="M14 21h4v4h-4zm12.5 0h4v4h-4zm0 9h4v4h-4z"></path>
                                            <path fill="#5C913B" d="M37.5 37.5A1.5 1.5 0 0136 39H8a1.5 1.5 0 010-3h28a1.5 1.5 0 011.5 1.5z"></path>
                                        </g>
                                    </svg>
                                </span>
                                Home
                            </a>
                        </li>
                    </ul>
                </nav>

                <nav class="m-4" aria-label="DEV Community">
                    <ul class="">
                        <li>
                            <a href="/" class="flex">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="24" height="24">
                                        <g class="nc-icon-wrapper">
                                            <path fill="#A0041E" d="M13.344 18.702h-2a.5.5 0 01-.5-.5v-7a.5.5 0 01.5-.5h2a.5.5 0 01.5.5v7a.5.5 0 01-.5.5z"></path>
                                            <path fill="#FFE8B6" d="M9 20L22 7l13 13v17H9z"></path>
                                            <path fill="#FFCC4D" d="M22 20h1v16h-1z"></path>
                                            <path fill="#66757F" d="M35 21a.997.997 0 01-.707-.293L22 8.414 9.707 20.707a1 1 0 11-1.414-1.414l13-13a.999.999 0 011.414 0l13 13A.999.999 0 0135 21z"></path>
                                            <path fill="#66757F" d="M22 21a.999.999 0 01-.707-1.707l6.5-6.5a1 1 0 111.414 1.414l-6.5 6.5A.997.997 0 0122 21z"></path>
                                            <path fill="#C1694F" d="M14 30h4v6h-4z"></path>
                                            <path fill="#55ACEE" d="M14 21h4v4h-4zm12.5 0h4v4h-4zm0 9h4v4h-4z"></path>
                                            <path fill="#5C913B" d="M37.5 37.5A1.5 1.5 0 0136 39H8a1.5 1.5 0 010-3h28a1.5 1.5 0 011.5 1.5z"></path>
                                        </g>
                                    </svg>
                                </span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/" class="flex">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="24" height="24">
                                        <g class="nc-icon-wrapper">
                                            <path fill="#A0041E" d="M13.344 18.702h-2a.5.5 0 01-.5-.5v-7a.5.5 0 01.5-.5h2a.5.5 0 01.5.5v7a.5.5 0 01-.5.5z"></path>
                                            <path fill="#FFE8B6" d="M9 20L22 7l13 13v17H9z"></path>
                                            <path fill="#FFCC4D" d="M22 20h1v16h-1z"></path>
                                            <path fill="#66757F" d="M35 21a.997.997 0 01-.707-.293L22 8.414 9.707 20.707a1 1 0 11-1.414-1.414l13-13a.999.999 0 011.414 0l13 13A.999.999 0 0135 21z"></path>
                                            <path fill="#66757F" d="M22 21a.999.999 0 01-.707-1.707l6.5-6.5a1 1 0 111.414 1.414l-6.5 6.5A.997.997 0 0122 21z"></path>
                                            <path fill="#C1694F" d="M14 30h4v6h-4z"></path>
                                            <path fill="#55ACEE" d="M14 21h4v4h-4zm12.5 0h4v4h-4zm0 9h4v4h-4z"></path>
                                            <path fill="#5C913B" d="M37.5 37.5A1.5 1.5 0 0136 39H8a1.5 1.5 0 010-3h28a1.5 1.5 0 011.5 1.5z"></path>
                                        </g>
                                    </svg>
                                </span>
                                Home
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="m-4 flex flex-wrap justify-start space-x-4">
                    <a href="https://twitter.com/thepracticaldev" target="_blank" class="c-link c-link--icon-alone c-link--block" rel="noopener me">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" role="img" aria-labelledby="akd1ghfeghf69vp04cd85hr2sq76k2pr" class="crayons-icon c-link__icon">
                            <title id="akd1ghfeghf69vp04cd85hr2sq76k2pr">Twitter</title>
                            <path d="M22.162 5.656a8.383 8.383 0 01-2.402.658A4.196 4.196 0 0021.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 00-7.126 3.814 11.874 11.874 0 01-8.62-4.37 4.168 4.168 0 00-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 01-1.894-.523v.052a4.185 4.185 0 003.355 4.101 4.211 4.211 0 01-1.89.072A4.185 4.185 0 007.97 16.65a8.395 8.395 0 01-6.191 1.732 11.83 11.83 0 006.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.495 8.495 0 002.087-2.165l-.001-.001z" fill="#65bbf2"></path>
                        </svg>
                    </a>
                    <a href="https://facebook.com/thepracticaldev" target="_blank" class="c-link c-link--icon-alone c-link--block" rel="noopener me">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" role="img" aria-labelledby="a2r2e2vaky2if787v6d1p7i0gvxx56s9" class="crayons-icon c-link__icon">
                            <title id="a2r2e2vaky2if787v6d1p7i0gvxx56s9">Facebook</title>
                            <path d="M15.402 21v-6.966h2.333l.349-2.708h-2.682V9.598c0-.784.218-1.319 1.342-1.319h1.434V5.857a19.188 19.188 0 00-2.09-.107c-2.067 0-3.482 1.262-3.482 3.58v1.996h-2.338v2.708h2.338V21H4a1 1 0 01-1-1V4a1 1 0 011-1h16a1 1 0 011 1v16a1 1 0 01-1 1h-4.598z"></path>
                        </svg>
                    </a>
                    <a href="https://github.com/forem" target="_blank" class="c-link c-link--icon-alone c-link--block" rel="noopener me">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" role="img" aria-labelledby="a7724gmx409w0toxmwev2slttorlijku" class="crayons-icon c-link__icon">
                            <title id="a7724gmx409w0toxmwev2slttorlijku">Github</title>
                            <path d="M12 2C6.475 2 2 6.475 2 12a9.994 9.994 0 006.838 9.488c.5.087.687-.213.687-.476 0-.237-.013-1.024-.013-1.862-2.512.463-3.162-.612-3.362-1.175-.113-.288-.6-1.175-1.025-1.413-.35-.187-.85-.65-.013-.662.788-.013 1.35.725 1.538 1.025.9 1.512 2.338 1.087 2.912.825.088-.65.35-1.087.638-1.337-2.225-.25-4.55-1.113-4.55-4.938 0-1.088.387-1.987 1.025-2.688-.1-.25-.45-1.275.1-2.65 0 0 .837-.262 2.75 1.026a9.28 9.28 0 012.5-.338c.85 0 1.7.112 2.5.337 1.912-1.3 2.75-1.024 2.75-1.024.55 1.375.2 2.4.1 2.65.637.7 1.025 1.587 1.025 2.687 0 3.838-2.337 4.688-4.562 4.938.362.312.675.912.675 1.85 0 1.337-.013 2.412-.013 2.75 0 .262.188.574.688.474A10.016 10.016 0 0022 12c0-5.525-4.475-10-10-10z"></path>
                        </svg>
                    </a>
                    <a href="https://instagram.com/thepracticaldev" target="_blank" class="c-link c-link--icon-alone c-link--block" rel="noopener me">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" role="img" aria-labelledby="agji1egbyarcp6jupj0967qbgkkevkfj" class="crayons-icon c-link__icon">
                            <title id="agji1egbyarcp6jupj0967qbgkkevkfj">Instagram</title>
                            <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153.509.5.902 1.105 1.153 1.772.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 01-1.153 1.772c-.5.508-1.105.902-1.772 1.153-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 01-1.772-1.153 4.904 4.904 0 01-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 011.153-1.772A4.897 4.897 0 015.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 100 10 5 5 0 000-10zm6.5-.25a1.25 1.25 0 10-2.5 0 1.25 1.25 0 002.5 0zM12 9a3 3 0 110 6 3 3 0 010-6z"></path>
                        </svg>
                    </a>
                    <a href="https://twitch.com/thepracticaldev" target="_blank" class="c-link c-link--icon-alone c-link--block" rel="noopener me">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" role="img" aria-labelledby="ahrqrxhlnhicr0bwok2tryasuxeqnmlz" class="crayons-icon c-link__icon">
                            <title id="ahrqrxhlnhicr0bwok2tryasuxeqnmlz">Twitch</title>
                            <path d="M4.3 3H21v11.7l-4.7 4.7h-3.9l-2.5 2.4H7v-2.4H3V6.2L4.3 3zM5 17.4h4v2.4h.095l2.5-2.4h3.877L19 13.872V5H5v12.4zM15 8h2v4.7h-2V8zm0 0h2v4.7h-2V8zm-5 0h2v4.7h-2V8z"></path>
                        </svg>
                    </a>
                    <a href="https://fosstodon.org/@thepracticaldev" target="_blank" class="c-link c-link--icon-alone c-link--block" rel="noopener me">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" role="img" aria-labelledby="afhzuek6gzpos1gduufwatmrfh539xqq" class="crayons-icon c-link__icon">
                            <title id="afhzuek6gzpos1gduufwatmrfh539xqq">Mastodon</title>
                            <path d="M21.258 13.99c-.274 1.41-2.456 2.955-4.962 3.254-1.306.156-2.593.3-3.965.236-2.243-.103-4.014-.535-4.014-.535 0 .218.014.426.04.62.292 2.215 2.196 2.347 4 2.41 1.82.062 3.44-.45 3.44-.45l.076 1.646s-1.274.684-3.542.81c-1.25.068-2.803-.032-4.612-.51-3.923-1.039-4.598-5.22-4.701-9.464-.031-1.26-.012-2.447-.012-3.44 0-4.34 2.843-5.611 2.843-5.611 1.433-.658 3.892-.935 6.45-.956h.062c2.557.02 5.018.298 6.451.956 0 0 2.843 1.272 2.843 5.61 0 0 .036 3.201-.397 5.424zm-2.956-5.087c0-1.074-.273-1.927-.822-2.558-.567-.631-1.308-.955-2.229-.955-1.065 0-1.871.41-2.405 1.228l-.518.87-.519-.87C11.276 5.8 10.47 5.39 9.405 5.39c-.921 0-1.663.324-2.229.955-.549.631-.822 1.484-.822 2.558v5.253h2.081V9.057c0-1.075.452-1.62 1.357-1.62 1 0 1.501.647 1.501 1.927v2.79h2.07v-2.79c0-1.28.5-1.927 1.5-1.927.905 0 1.358.545 1.358 1.62v5.1h2.08V8.902l.001.001z"></path>
                        </svg>
                    </a>
                </div>

                <nav class="m-6" aria-label="Secondary sidebar nav">
                    <h3 class="text-lg font-bold text-gray-900">Popular Tags</h3>
                    <div id="sidebar-nav-default-tags" class="overflow-y-auto" style="max-height: 42vh">
                        <div class="sidebar-nav-element" id="default-sidebar-element-webdev">
                            <a class="c-link c-link--block" href="/t/webdev"> #webdev </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-javascript">
                            <a class="c-link c-link--block" href="/t/javascript"> #javascript </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-programming">
                            <a class="c-link c-link--block" href="/t/programming"> #programming </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-beginners">
                            <a class="c-link c-link--block" href="/t/beginners"> #beginners </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-tutorial">
                            <a class="c-link c-link--block" href="/t/tutorial"> #tutorial </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-react">
                            <a class="c-link c-link--block" href="/t/react"> #react </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-python">
                            <a class="c-link c-link--block" href="/t/python"> #python </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-devops">
                            <a class="c-link c-link--block" href="/t/devops"> #devops </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-opensource">
                            <a class="c-link c-link--block" href="/t/opensource"> #opensource </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-productivity">
                            <a class="c-link c-link--block" href="/t/productivity"> #productivity </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-discuss">
                            <a class="c-link c-link--block" href="/t/discuss"> #discuss </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-aws">
                            <a class="c-link c-link--block" href="/t/aws"> #aws </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-ai">
                            <a class="c-link c-link--block" href="/t/ai"> #ai </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-node">
                            <a class="c-link c-link--block" href="/t/node"> #node </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-css">
                            <a class="c-link c-link--block" href="/t/css"> #css </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-career">
                            <a class="c-link c-link--block" href="/t/career"> #career </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-news">
                            <a class="c-link c-link--block" href="/t/news"> #news </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-typescript">
                            <a class="c-link c-link--block" href="/t/typescript"> #typescript </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-html">
                            <a class="c-link c-link--block" href="/t/html"> #html </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-testing">
                            <a class="c-link c-link--block" href="/t/testing"> #testing </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-api">
                            <a class="c-link c-link--block" href="/t/api"> #api </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-database">
                            <a class="c-link c-link--block" href="/t/database"> #database </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-codenewbie">
                            <a class="c-link c-link--block" href="/t/codenewbie"> #codenewbie </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-learning">
                            <a class="c-link c-link--block" href="/t/learning"> #learning </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-cloud">
                            <a class="c-link c-link--block" href="/t/cloud"> #cloud </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-security">
                            <a class="c-link c-link--block" href="/t/security"> #security </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-java">
                            <a class="c-link c-link--block" href="/t/java"> #java </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-github">
                            <a class="c-link c-link--block" href="/t/github"> #github </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-frontend">
                            <a class="c-link c-link--block" href="/t/frontend"> #frontend </a>
                        </div>
                        <div class="sidebar-nav-element" id="default-sidebar-element-go">
                            <a class="c-link c-link--block" href="/t/go"> #go </a>
                        </div>
                    </div>
                </nav>
            </aside>
        </div>
        <div class="md:col-span-2 lg:col-span-3">
            <nav>
                <ul class="flex py-5">
                    <li class="ml-5 font-bold">Relevant</li>
                    <li class="ml-5">Latest</li>
                    <li class="ml-5">Top</li>
                </ul>
            </nav>

            <article class="mb-5 bg-slate-100 shadow-md">
                <div>
                    <a href="#" title="17 Essential Tools to Boost Your Productivity 🚀🔥" aria-label="article">
                        <img class="rounded-t-md" src="https://res.cloudinary.com/practicaldev/image/fetch/s--wP48g-um--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/zfzl1bmezdynbmhj5smy.png" />
                    </a>
                </div>

                <div class="mx-5 mt-5 flex items-center">
                    <div class="mr-2">
                        <a href="#" class="">
                            <img class="max-h-10 rounded-full border border-gray-700" src="https://res.cloudinary.com/practicaldev/image/fetch/s--4L_SFF-C--/c_fill,f_auto,fl_progressive,h_90,q_auto,w_90/https://dev-to-uploads.s3.amazonaws.com/uploads/user/profile_image/159737/10b8de99-9383-42da-80e2-851af40d5d0f.png" alt="madza profile" loading="lazy" />
                        </a>
                    </div>
                    <div class="flex flex-col">
                        <a href="#" class="text-16 font-semibold"> Madza </a>
                        <a href="#">
                            <time datetime="2023-11-07T10:43:39Z" title="Tuesday, November 7, 2023 at 4:13:39 PM">Nov 7</time>
                        </a>
                    </div>
                </div>
                <h2 class="mt-5 pl-5 text-xl font-bold text-gray-900">
                    <a href="#"> 17 Essential Tools to Boost Your Productivity 🚀🔥 </a>
                </h2>
                <div class="my-5 flex flex-wrap">
                    <a class="ml-5" href="/t/python"><span class="crayons-tag__prefix">#</span>python</a>
                    <a class="ml-5" href="/t/testing"><span class="crayons-tag__prefix">#</span>testing</a>
                    <a class="ml-5" href="/t/tutorial"><span class="crayons-tag__prefix">#</span>tutorial</a>
                    <a class="ml-5" href="/t/automation"><span class="crayons-tag__prefix">#</span>automation</a>
                </div>
                <div class="mx-5 flex items-center justify-between pb-5">
                    <div class="flex items-center justify-between space-x-3">
                        <span class="flex space-x-1">
                            <span class="crayons_icon_container">
                                <img src="https://dev.to/assets/fire-f60e7a582391810302117f987b22a8ef04a2fe0df7e3258a5f49332df1cec71e.svg" width="18" height="18" />
                            </span>
                            <span class="crayons_icon_container">
                                <img src="https://dev.to/assets/raised-hands-74b2099fd66a39f2d7eed9305ee0f4553df0eb7b4f11b01b6b1b499973048fe5.svg" width="18" height="18" />
                            </span>
                            <span class="crayons_icon_container">
                                <img src="https://dev.to/assets/exploding-head-daceb38d627e6ae9b730f36a1e390fca556a4289d5a41abb2c35068ad3e2c4b5.svg" width="18" height="18" />
                            </span>
                            <span class="crayons_icon_container">
                                <img src="https://dev.to/assets/multi-unicorn-b44d6f8c23cdd00964192bedc38af3e82463978aa611b4365bd33a0f1f4f3e97.svg" width="18" height="18" />
                            </span>
                            <span class="crayons_icon_container">
                                <img src="https://dev.to/assets/sparkle-heart-5f9bee3767e18deb1bb725290cb151c25234768a0e9a2bd39370c382d02920cf.svg" width="18" height="18" />
                            </span>
                        </span>
                        <span class="aggregate_reactions_counter">43<span class="s:inline hidden">&nbsp;reactions</span></span>
                    </div>

                    <div>
                        <a href="/m4rri4nne/automating-your-api-tests-using-python-and-pytest-23cc#comments" class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" role="img" aria-labelledby="acv7kflv8liflqp4jqufw6zk6ng1taan" class="crayons-icon">
                                <title id="acv7kflv8liflqp4jqufw6zk6ng1taan">Comments</title>
                                <path d="M10.5 5h3a6 6 0 110 12v2.625c-3.75-1.5-9-3.75-9-8.625a6 6 0 016-6zM12 15.5h1.5a4.501 4.501 0 001.722-8.657A4.5 4.5 0 0013.5 6.5h-3A4.5 4.5 0 006 11c0 2.707 1.846 4.475 6 6.36V15.5z"></path>
                            </svg>4
                        </a>
                    </div>
                    <div class="flex items-center justify-center">
                        <small class="crayons-story__tertiary fs-xs mr-2"> 7 min read </small>
                        <button type="button" id="article-save-button-1663252" class="c-btn c-btn--icon-alone bookmark-button" data-reactable-id="1663252" data-article-author-id="827329" aria-label="Save post Automating your API tests using Python and Pytest to reading list" title="Save post Automating your API tests using Python and Pytest to reading list" data-save-initialized="true">
                            <span class="bm-initial hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true">
                                    <path d="M6.75 4.5h10.5a.75.75 0 01.75.75v14.357a.375.375 0 01-.575.318L12 16.523l-5.426 3.401A.375.375 0 016 19.607V5.25a.75.75 0 01.75-.75zM16.5 6h-9v11.574l4.5-2.82 4.5 2.82V6z"></path>
                                </svg>
                            </span>
                            <span class="bm-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true">
                                    <path d="M6.75 4.5h10.5a.75.75 0 01.75.75v14.357a.375.375 0 01-.575.318L12 16.523l-5.426 3.401A.375.375 0 016 19.607V5.25a.75.75 0 01.75-.75z"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </article>
            <article class="mb-5 bg-slate-100 shadow-md">
                <div>
                    <a href="#" title="17 Essential Tools to Boost Your Productivity 🚀🔥" aria-label="article">
                        <img class="rounded-t-md" src="https://res.cloudinary.com/practicaldev/image/fetch/s--wP48g-um--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/zfzl1bmezdynbmhj5smy.png" />
                    </a>
                </div>

                <div class="mx-5 mt-5 flex items-center">
                    <div class="mr-2">
                        <a href="#" class="">
                            <img class="max-h-10 rounded-full border border-gray-700" src="https://res.cloudinary.com/practicaldev/image/fetch/s--4L_SFF-C--/c_fill,f_auto,fl_progressive,h_90,q_auto,w_90/https://dev-to-uploads.s3.amazonaws.com/uploads/user/profile_image/159737/10b8de99-9383-42da-80e2-851af40d5d0f.png" alt="madza profile" loading="lazy" />
                        </a>
                    </div>
                    <div class="flex flex-col">
                        <a href="#" class="text-16 font-semibold"> Madza </a>
                        <a href="#">
                            <time datetime="2023-11-07T10:43:39Z" title="Tuesday, November 7, 2023 at 4:13:39 PM">Nov 7</time>
                        </a>
                    </div>
                </div>
                <h2 class="mt-5 pl-5 text-xl font-bold text-gray-900">
                    <a href="#"> 17 Essential Tools to Boost Your Productivity 🚀🔥 </a>
                </h2>
                <div class="my-5 flex flex-wrap">
                    <a class="ml-5" href="/t/python"><span class="crayons-tag__prefix">#</span>python</a>
                    <a class="ml-5" href="/t/testing"><span class="crayons-tag__prefix">#</span>testing</a>
                    <a class="ml-5" href="/t/tutorial"><span class="crayons-tag__prefix">#</span>tutorial</a>
                    <a class="ml-5" href="/t/automation"><span class="crayons-tag__prefix">#</span>automation</a>
                </div>
                <div class="mx-5 flex items-center justify-between pb-5">
                    <div class="flex items-center justify-between space-x-3">
                        <span class="flex space-x-1">
                            <span class="crayons_icon_container">
                                <img src="https://dev.to/assets/fire-f60e7a582391810302117f987b22a8ef04a2fe0df7e3258a5f49332df1cec71e.svg" width="18" height="18" />
                            </span>
                            <span class="crayons_icon_container">
                                <img src="https://dev.to/assets/raised-hands-74b2099fd66a39f2d7eed9305ee0f4553df0eb7b4f11b01b6b1b499973048fe5.svg" width="18" height="18" />
                            </span>
                            <span class="crayons_icon_container">
                                <img src="https://dev.to/assets/exploding-head-daceb38d627e6ae9b730f36a1e390fca556a4289d5a41abb2c35068ad3e2c4b5.svg" width="18" height="18" />
                            </span>
                            <span class="crayons_icon_container">
                                <img src="https://dev.to/assets/multi-unicorn-b44d6f8c23cdd00964192bedc38af3e82463978aa611b4365bd33a0f1f4f3e97.svg" width="18" height="18" />
                            </span>
                            <span class="crayons_icon_container">
                                <img src="https://dev.to/assets/sparkle-heart-5f9bee3767e18deb1bb725290cb151c25234768a0e9a2bd39370c382d02920cf.svg" width="18" height="18" />
                            </span>
                        </span>
                        <span class="aggregate_reactions_counter">43<span class="s:inline hidden">&nbsp;reactions</span></span>
                    </div>

                    <div>
                        <a href="/m4rri4nne/automating-your-api-tests-using-python-and-pytest-23cc#comments" class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" role="img" aria-labelledby="acv7kflv8liflqp4jqufw6zk6ng1taan" class="crayons-icon">
                                <title id="acv7kflv8liflqp4jqufw6zk6ng1taan">Comments</title>
                                <path d="M10.5 5h3a6 6 0 110 12v2.625c-3.75-1.5-9-3.75-9-8.625a6 6 0 016-6zM12 15.5h1.5a4.501 4.501 0 001.722-8.657A4.5 4.5 0 0013.5 6.5h-3A4.5 4.5 0 006 11c0 2.707 1.846 4.475 6 6.36V15.5z"></path>
                            </svg>4
                        </a>
                    </div>
                    <div class="flex items-center justify-center">
                        <small class="crayons-story__tertiary fs-xs mr-2"> 7 min read </small>
                        <button type="button" id="article-save-button-1663252" class="c-btn c-btn--icon-alone bookmark-button" data-reactable-id="1663252" data-article-author-id="827329" aria-label="Save post Automating your API tests using Python and Pytest to reading list" title="Save post Automating your API tests using Python and Pytest to reading list" data-save-initialized="true">
                            <span class="bm-initial hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true">
                                    <path d="M6.75 4.5h10.5a.75.75 0 01.75.75v14.357a.375.375 0 01-.575.318L12 16.523l-5.426 3.401A.375.375 0 016 19.607V5.25a.75.75 0 01.75-.75zM16.5 6h-9v11.574l4.5-2.82 4.5 2.82V6z"></path>
                                </svg>
                            </span>
                            <span class="bm-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true">
                                    <path d="M6.75 4.5h10.5a.75.75 0 01.75.75v14.357a.375.375 0 01-.575.318L12 16.523l-5.426 3.401A.375.375 0 016 19.607V5.25a.75.75 0 01.75-.75z"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </article>
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
