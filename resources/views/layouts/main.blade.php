<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name=”description” content=”xeezackssolar.com has all the solar products and smart solar tech resources you need. Find solar products such as, flood lights, solar panel, street lights, camping lights, solar batteries, solar systems, solar bulbs, water pump solars e.t.c.”>
    <title>Xeezacks Solar</title>
    <link rel="stylesheet" href="{{ asset('/css/flickity.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/css/glide.core.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/glide.theme.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/slider.min.css') }}">
    <link rel="stylesheet" href="/fonts'"> <!-- Scripts -->
    @vite('resources/css/app.css')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/flickity.js') }}"></script>
    <script src="{{ asset('js/slider.min.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
</head>
<body class="font-sans bg-secondary-body overflow-x-hidden">
        <nav class="bg-primary flex flex-col flex-auto items-center lg:flex-row justify-between px-10 py-2">
            <div class="logo border border-black border-spacing-1 mb-2">
                <a class="" href="/">
                    <img class="w-24 h-20 md:overflow-hidden object-cover" src="{{ asset('/img/logos/logo-header.png') }}" alt="">
                </a>
            </div>
            {{-- End of logo div --}}
            <div class="menu-navs order-2 sm:order-2 md:order-2 lg:order-1">
                <ul class="hidden sm:hidden md:flex flex flex-col sm:flex-col md:flex-row lg:flex-row items-center transition ease-in-out delay-150">
                    <li class="px-8 py-4">
                        <a class="text-lg font-semibold text-gray-300 hover:text-gray-200" href="{{ route('about-page.index') }}">About</a>
                    </li>
                    <li class="px-8 py-4">
                        <a class="text-lg font-semibold text-gray-300 hover:text-gray-200" href="{{ route('landing-page.index') }}">Home</a>
                    </li>
                    <li class="px-8 py-4">
                        <a class="text-lg font-semibold text-gray-300 hover:text-gray-200" href="{{ route('products.index') }}">Products</a>
                    </li>
                    <li class="px-8 py-4">
                        <a class="text-lg font-semibold text-gray-300 hover:text-gray-200" href="{{ route('project.index') }}">Projects</a>
                    </li>
                    <li class="px-8 py-4">
                        <a class="text-lg font-semibold text-gray-300 hover:text-gray-200" href="{{ route('contact-page.index') }}">Contact</a>
                    </li>
                </ul>
            </div>
            {{-- End of nav divs div --}}
            <div class="search order-1 sm:order-1 md:order-1 lg:order-2 mt-1 outline-none">
                <div class="sm:inline lg:block lg:relative">
                    <form action="{{ route('search') }}" method="get">
                        <input class="w-auto sm:w-auto md:w-auto lg:w-auto bg-gray-200 rounded-full px-8 py-1 mx-5 focus:outline-none focus:shadow-outline" type="text" name="query" placeholder="Search"
                        value="{{ request()->input('query') }}">
                    </form>
                    <div class="relative">
                        <svg class="absolute bottom-1.5 left-8 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>
                </div>
                {{-- End of input & svg --}}
                <div class="block sm:block md:hidden mobile-menu absolute top-2 right-4">
                    <svg class="w-10 h-14 cursor-pointer text-lg text-bold text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </div>
                {{-- End of svg div --}}
            </div>
            {{-- End of search box div div --}}
        </nav>
        <div class="w-full">@yield('content')</div>
        {{-- Footer contents --}}
        <div class="w-full mx-auto footer bg-primary">
            <div class="container mx-auto py-5 px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3 bg-primary">
                <div class="container mx-auto">
                    <div class="">
                        <div class="text-start">
                            <a class="" href="/">
                            <img class="w-64 md:overflow-hidden object-cover" src="{{ asset('/img/logos/logo-footer.png') }}" alt="">
                        </a>
                        </div>
                    </div>
                    <div class="mt-4 md:text-center">
                        <a href="#" class="pr-4 inline-block">
                            <span class="">
                                <svg class="w-5 h-5 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                            </span>
                        </a>
                        <a href="#" class="pr-4 inline-block">
                            <span class="text-gray-100">
                                <svg class="w-5 h-5 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
                            </span>
                        </a>
                        <a href="#" class="pr-4 inline-block">
                            <span class="">
                                <svg class="w-5 h-5 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                            </span>
                        </a>
                        <a href="#" class="pr-4 inline-block">
                            <span class="">
                                <svg class="w-5 h-5 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="container mx-auto">
                    <ul>
                        <h2 class="text-2xl font-bold text-gray-200 py-2">Main Links</h2>
                        <li class="py-2">
                            <a class="text-lg font-bold text-gray-200" href="{{ route('about-page.index') }}">About</a>
                        </li>
                        <li class="py-2">
                            <a class="text-lg font-bold text-gray-200" href="{{ route('landing-page.index') }}">Home</a>
                        </li>
                        <li class="py-2">
                            <a class="text-lg font-bold text-gray-200" href="{{ route('products.index') }}">Products</a>
                        </li>
                        <li class="py-2">
                            <a class="text-lg font-bold text-gray-200" href="/certificates/1">Awards</a>
                        </li>
                        <li class="py-2">
                            <a class="text-lg font-bold text-gray-200" href="{{ route('project.index') }}">Projects</a>
                        </li>
                    </ul>
                </div>
                <div class="container mx-auto">
                    <ul>
                        <h2 class="text-2xl font-bold text-gray-200 py-2">Categories</h2>
                        @foreach ($categories as $category)
                            <li class="py-2"><a class="text-lg font-bold text-gray-200" href="{{ route('products.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="container mx-auto">
                    <ul>
                        <h2 class="text-2xl font-bold text-gray-200 py-2">Contact:</h2>
                        <li class="py-2">
                            <p class="text-lg font-bold text-gray-200">
                                <div class="flex">
                                <svg class="w-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                                </svg>
                                <p class="pl-1 text-lg font-bold text-gray-100">+234(0)14539141</p>
                                </div>
                            </p>
                        </li>
                        <li class="py-2">
                            <p class="text-lg font-bold text-gray-200">
                                <div class="flex">
                                <svg class="w-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                                </svg>
                                <p class="pl-1 text-lg font-bold text-gray-100">+2347038989839</p>
                                </div>
                            </p>
                        </li>
                        <li class="py-2">
                            <p class="text-lg font-bold text-gray-200">
                                <div class="flex">
                                <svg class="w-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                                </svg>
                                <p class="pl-1 text-lg font-bold text-gray-100">+2348026909707</p>
                                </div>
                            </p>
                        </li>
                        <li class="py-2">
                            <p class="text-lg font-bold text-gray-200">
                                <div class="flex">
                                <svg class="w-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                                </svg>
                                <p class="pl-1 text-lg font-bold text-gray-100">+2348077250300</p>
                                </div>
                            </p>
                        </li>
                        <li class="py-2">
                            <p class="text-lg font-bold text-gray-200">
                                <div class="flex">
                                <svg class="w-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                                </svg>
                                <p class="pl-1 text-lg font-bold text-gray-100">+2348099331115</p>
                                </div>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="container mx-auto">
                    <ul>
                        <h2 class="text-2xl font-bold text-gray-200 py-2">Office Address:</h2>
                        <li class="py-2">
                            <p class="text-lg font-bold text-gray-200">#6 Ground Floor Challenge Plaza, Ali Akilu Road, Kaduna Nigeria</p>
                        </li>
                        <li class="py-2">
                            <p class="text-lg font-bold text-gray-200">Abuja Office:Plot 561, Sani Zangon Daura Estate Kado, Abuja Nigeria</p>
                        </li>
                    </ul>
                </div>
                {{-- <div class="col-span-3">
                    <div class="py-12">
                        <div class="">
                            <a class="" href="/">
                            <img class="w-64 md:overflow-hidden object-cover" src="{{ asset('/img/logos/1-logo.png') }}" alt="">
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-9">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 py-12">
                    <div class="container mx-auto">
                        <ul>
                            <h2 class="text-2xl font-bold text-gray-200 py-2">Main Links</h2>
                            <li class="py-2">
                                <a class="text-lg font-bold text-gray-200" href="{{ route('about-page.index') }}">About</a>
                            </li>
                            <li class="py-2">
                                <a class="text-lg font-bold text-gray-200" href="{{ route('landing-page.index') }}">Home</a>
                            </li>
                            <li class="py-2">
                                <a class="text-lg font-bold text-gray-200" href="{{ route('products.index') }}">Products</a>
                            </li>
                            <li class="py-2">
                                <a class="text-lg font-bold text-gray-200" href="/certificates/1">Awards</a>
                            </li>
                            <li class="py-2">
                                <a class="text-lg font-bold text-gray-200" href="{{ route('project.index') }}">Projects</a>
                            </li>
                        </ul>
                    </div>
                    <div class="container mx-auto">
                        <ul>
                            <h2 class="text-2xl font-bold text-gray-200 py-2">Categories</h2>
                            @foreach ($categories as $category)
                                <li class="py-2"><a class="text-lg font-bold text-gray-200" href="{{ route('products.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="container mx-auto">
                        <ul>
                            <h2 class="text-2xl font-bold text-gray-200 py-2">Contact:</h2>
                            <li class="py-2">
                                <p class="text-lg font-bold text-gray-200">
                                    <div class="flex">
                                    <svg class="w-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                                    </svg>
                                    <p class="pl-1 text-lg font-bold text-gray-100">+234(0)14539141</p>
                                    </div>
                                </p>
                            </li>
                            <li class="py-2">
                                <p class="text-lg font-bold text-gray-200">
                                    <div class="flex">
                                    <svg class="w-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                                    </svg>
                                    <p class="pl-1 text-lg font-bold text-gray-100">+2347038989839</p>
                                    </div>
                                </p>
                            </li>
                            <li class="py-2">
                                <p class="text-lg font-bold text-gray-200">
                                    <div class="flex">
                                    <svg class="w-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                                    </svg>
                                    <p class="pl-1 text-lg font-bold text-gray-100">+2348026909707</p>
                                    </div>
                                </p>
                            </li>
                            <li class="py-2">
                                <p class="text-lg font-bold text-gray-200">
                                    <div class="flex">
                                    <svg class="w-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                                    </svg>
                                    <p class="pl-1 text-lg font-bold text-gray-100">+2348077250300</p>
                                    </div>
                                </p>
                            </li>
                            <li class="py-2">
                                <p class="text-lg font-bold text-gray-200">
                                    <div class="flex">
                                    <svg class="w-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                                    </svg>
                                    <p class="pl-1 text-lg font-bold text-gray-100">+2348099331115</p>
                                    </div>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="container mx-auto">
                        <ul>
                            <h2 class="text-2xl font-bold text-gray-200 py-2">Office Address:</h2>
                            <li class="py-2">
                                <p class="text-lg font-bold text-gray-200">#6 Ground Floor Challenge Plaza, Ali Akilu Road, Kaduna Nigeria</p>
                            </li>
                            <li class="py-2">
                                <p class="text-lg font-bold text-gray-200">Abuja Office:Plot 561, Sani Zangon Daura Estate Kado, Abuja Nigeria</p>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="footer-socket px-4 py-8 border-t border-secondary-slogan bg-primary">
            <p class="text-xl text-center text-secondary-slogan">&copy;2023 All Rights Reserved</p>
        </div>
        {{-- End of footer div --}}
        <script>
            $('.main-carousel').flickity({
            // options
                cellAlign: 'left',
                contain: true,
                wrapAround: true,
                autoPlay: true,
            });

            let menu = document.querySelector('.mobile-menu');
            let navs = document.querySelector('.menu-navs ul');

            menu.onclick = function () {
                navs.classList.toggle('hidden');
                navs.classList.toggle('sm:hidden');
            }
        </script>
</body>
</html>
