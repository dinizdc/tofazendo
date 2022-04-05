<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <a href="{{ route('home') }}">
                    <img class="align-content" src="{{ asset('images/logo.png') }}" alt="">
                </a>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path d="M 128.00,0.00
                                C 57.32,0.00 0.00,57.31 0.00,128.00
                                  0.00,184.56 36.68,232.54 87.53,249.46
                                  93.93,250.65 96.28,246.68 96.28,243.30
                                  96.28,240.25 96.16,230.17 96.11,219.47
                                  60.50,227.22 52.98,204.37 52.98,204.37
                                  47.16,189.57 38.77,185.64 38.77,185.64
                                  27.16,177.70 39.65,177.86 39.65,177.86
                                  52.50,178.76 59.27,191.05 59.27,191.05
                                  70.68,210.62 89.21,204.96 96.52,201.69
                                  97.66,193.42 100.98,187.77 104.64,184.57
                                  76.21,181.34 46.32,170.36 46.32,121.32
                                  46.32,107.34 51.33,95.92 59.51,86.96
                                  58.18,83.73 53.80,70.72 60.75,53.08
                                  60.75,53.08 71.50,49.64 95.96,66.20
                                  106.17,63.37 117.12,61.95 128.00,61.90
                                  138.88,61.95 149.84,63.37 160.07,66.20
                                  184.50,49.64 195.23,53.08 195.23,53.08
                                  202.20,70.72 197.82,83.73 196.49,86.96
                                  204.69,95.92 209.66,107.34 209.66,121.32
                                  209.66,170.48 179.72,181.30 151.21,184.47
                                  155.80,188.44 159.90,196.23 159.90,208.18
                                  159.90,225.30 159.75,239.09 159.75,243.30
                                  159.75,246.71 162.05,250.70 168.54,249.44
                                  219.37,232.50 256.00,184.54 256.00,128.00
                                  256.00,57.31 198.69,0.00 128.00,0.00 Z
                                M 47.94,182.34
                                C 47.66,182.98 46.66,183.17 45.75,182.73
                                  44.82,182.31 44.30,181.45 44.60,180.81
                                  44.87,180.15 45.88,179.97 46.80,180.41
                                  47.73,180.83 48.26,181.70 47.94,182.34 Z
                                M 54.24,187.96
                                C 53.63,188.52 52.43,188.26 51.62,187.37
                                  50.79,186.47 50.63,185.28 51.25,184.71
                                  51.88,184.14 53.03,184.41 53.87,185.30
                                  54.71,186.20 54.87,187.39 54.24,187.96 Z
                                M 58.56,195.15
                                C 57.77,195.69 56.49,195.18 55.70,194.04
                                  54.91,192.90 54.91,191.54 55.71,190.99
                                  56.51,190.44 57.77,190.94 58.58,192.07
                                  59.36,193.22 59.36,194.59 58.56,195.15 Z
                                M 65.86,203.47
                                C 65.16,204.24 63.67,204.04 62.57,202.98
                                  61.45,201.95 61.14,200.48 61.84,199.71
                                  62.55,198.94 64.06,199.15 65.16,200.20
                                  66.27,201.23 66.61,202.71 65.86,203.47 Z
                                M 75.30,206.28
                                C 74.99,207.28 73.55,207.74 72.10,207.31
                                  70.66,206.88 69.71,205.70 70.00,204.69
                                  70.30,203.68 71.75,203.20 73.21,203.66
                                  74.65,204.10 75.60,205.26 75.30,206.28 Z
                                M 86.05,207.47
                                C 86.08,208.53 84.85,209.40 83.33,209.42
                                  81.80,209.46 80.56,208.60 80.55,207.56
                                  80.55,206.50 81.75,205.63 83.28,205.61
                                  84.80,205.58 86.05,206.42 86.05,207.47 Z
                                M 96.60,207.07
                                C 96.78,208.10 95.73,209.16 94.22,209.44
                                  92.73,209.71 91.35,209.07 91.17,208.05
                                  90.98,207.00 92.06,205.94 93.54,205.67
                                  95.05,205.40 96.41,206.02 96.60,207.07 Z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="#github"><i class="fa fa-github"></i> fa-github</a>
                                <a href="https://github.com/dinizdc/tofazendo"
                                    class="underline text-gray-900 dark:text-white">GitHub</a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos impedit dolor ea
                                esse eius aspernatur, dolore ducimus cumque magni maiores iusto, ad tempore vel debitis
                                ipsum dicta. Repellendus, placeat totam.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                </path>
                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com"
                                    class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                development. Check them out, see for yourself, and massively level up your development
                                skills in the process.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/"
                                    class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel News is a community driven portal and newsletter aggregating all of the latest
                                and most important news in the Laravel ecosystem, including new package releases and
                                tutorials.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant
                                Ecosystem</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel's robust library of first-party tools and libraries, such as <a
                                    href="https://forge.laravel.com" class="underline">Forge</a>, <a
                                    href="https://vapor.laravel.com" class="underline">Vapor</a>, <a
                                    href="https://nova.laravel.com" class="underline">Nova</a>, and <a
                                    href="https://envoyer.io" class="underline">Envoyer</a> help you take your
                                projects to the next level. Pair them with powerful open source libraries like <a
                                    href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a
                                    href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a
                                    href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a
                                    href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a
                                    href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a
                                    href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and
                                more.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>

                        <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                            Shop
                        </a>

                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>

                        <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>
