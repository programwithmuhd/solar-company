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
                    <img class="w-24 h-20 md:overflow-hidden object-cover" src="{{ asset('/img/logos/4-logo.png') }}" alt="">
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
            <div class="container mx-auto py-5 px-4 grid grid-cols-1 md:grid-cols-12 gap-3 bg-primary">
                <div class="col-span-3">
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
                </div>
            </div>
        </div>
        <div class="footer-socket px-4 py-8 border-t border-secondary-slogan">
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
