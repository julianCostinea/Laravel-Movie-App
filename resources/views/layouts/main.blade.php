<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>

    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/ee17b9c6d0.js" crossorigin="anonymous"></script>
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container px-4 mx-auto flex flex-col md:flex-row
         items-center justify-between px-4 py-6">
            <ul class="flex items-center flex-col md:flex-row">
                <li class="text-2xl">
                    <a href="{{ route('movies.index') }}">
                        <i class="fas fa-video"></i>
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('tv.index') }}" class="hover:text-gray-300">Tv Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('actors.index') }}" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex items-center flex-col md:flex-row">
                @livewire('search-dropdown')
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="{{ asset('img/image-2.png') }} " alt="avatar" 
                        class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    @livewireScripts
    @yield('scripts')
</body>
</html>