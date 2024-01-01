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
    <div class="flex mx-auto">
        <form action="{{ route('s.registerrequest') }}" method="post" class="flex flex-col space-y-2">
            @csrf

            <label for="username" class="flex flex-col">
                <input id="username" type="text" name="username" value="{{ old('username') }}"
                    placeholder="Username">
                <span class="text-red-400 text-sm">
                    @error('username')
                        {{ $message }}
                    @enderror
                </span>
            </label>

            <label for="email" class="flex flex-col">
                <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="email">
                <span class="text-red-400 text-sm">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </label>

            <label for="password" class="flex flex-col">
                <input id="password" type="password" name="password" placeholder="password">
                <span class="text-red-400 text-sm">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </label>

            <label for="cpassword" class="flex flex-col">
                <input id="cpassword" type="password" name="cpassword" placeholder="confirm password">
                <span class="text-red-400 text-sm">
                    @error('cpassword')
                        {{ $message }}
                    @enderror
                </span>
            </label>

            @if (session('error'))
                <span class="text-red-400 text-sm">{{ session('error') }}</span>
            @endif

            <button type="submit" class="bg-slate-600 text-white">Submit</button>

            <div>
                <a href="{{ route('s.login') }}" class="bg-slate-600 text-white">Login</a>
                <a href="" class="bg-slate-600 text-white">Forget Password</a>
            </div>

        </form>
    </div>
</body>

</html>
