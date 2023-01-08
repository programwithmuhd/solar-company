<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solar App</title>
    <link rel="stylesheet" href="{{ asset('/css/flickity.css') }}" media="screen">
    @vite('resources/css/app.css')
    @vite('/css/flickity.css')
</head>
<body class="font-sans bg-secondary-body">
        <nav class="bg-primary flex justify-between">
            <div class="py-4 px-6">
                <a href="/">
                    <img class="w-32 md:overflow-hidden object-cover" src="/img/4-logo.png" alt="">
                </a>
            </div>
            <div class="">
                <ul class="hidden sm:hidden lg:flex items-center">
                    <li class="px-8 py-10">
                        <a class="text-lg font-semibold text-gray-300 hover:text-gray-200" href="/about">About</a>
                    </li>
                    <li class="px-8 py-4">
                        <a class="text-lg font-semibold text-gray-300 hover:text-gray-200" href="/">Home</a>
                    </li>
                    <li class="px-8 py-4">
                        <a class="text-lg font-semibold text-gray-300 hover:text-gray-200" href="/products">Product</a>
                    </li>
                    <li class="px-8 py-4">
                        <a class="text-lg font-semibold text-gray-300 hover:text-gray-200" href="/services">Cases</a>
                    </li>
                    <li class="px-8 py-4">
                        <a class="text-lg font-semibold text-gray-300 hover:text-gray-200" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="hidden sm:hidden lg:block lg:relative py-10">
                <input class="w-60 bg-gray-200 rounded-full px-8 py-1 mx-5 focus:outline-none focus:shadow-outline" type="text" placeholder="Search">
                <div class="absolute top-11 left-7">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </div>
            </div>
            <div class="lg:hidden mobile-menu py-8 px-4">
                <svg class="w-14 h-14 cursor-pointer text-lg text-bold text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
        </nav>
        @yield('content')
        {{-- Footer contents --}}
        <div class="footer bg-primary">
            <div class="container mx-auto py-5 px-4 grid grid-cols-1 md:grid-cols-12 gap-3 bg-primary">
                <div class="col-span-3">
                    <div class="py-12">
                        <div class="">
                            <a class="" href="/">
                            <img class="w-64 md:overflow-hidden object-cover" src="/img/1-logo.png" alt="">
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
                                <a class="text-lg font-bold text-gray-200" href="#">About</a>
                            </li>
                            <li class="py-2">
                                <a class="text-lg font-bold text-gray-200" href="#">Home</a>
                            </li>
                            <li class="py-2">
                                <a class="text-lg font-bold text-gray-200" href="#">Product</a>
                            </li>
                            <li class="py-2">
                                <a class="text-lg font-bold text-gray-200" href="#">Services</a>
                            </li>
                        </ul>
                    </div>
                    <div class="container mx-auto">
                        <ul>
                            <h2 class="text-2xl font-bold text-gray-200 py-2">Products</h2>
                            <li class="py-2">
                                <a class="text-lg font-bold text-gray-200" href="#">Solar Panel</a>
                            </li>
                            <li class="py-2">
                                <a class="text-lg font-bold text-gray-200" href="#">Camping lights</a>
                            </li>
                            <li class="py-2">
                                <a class="text-lg font-bold text-gray-200" href="#">Solar Flood Light</a>
                            </li>
                            <li class="py-2">
                                <a class="text-lg font-bold text-gray-200" href="#">Solar battery</a>
                            </li>
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
        {{-- <div class="contact-address container mx-auto flex justify-between">
            <p class="text-xl text-gray-100">
                <div class="flex justify-between">
                <svg class="w-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                    <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                </svg>
                <p class="pl-1 text-lg font-bold text-gray-100">
                    <span>zakariyya@solartech.com.ng</span>
                </p>
                </div>
            </p>
            <p class="text-xl text-gray-100">
                <div class="flex">
                    <svg class="w-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                    </svg>
                    <p class="pl-1 text-lg font-bold text-gray-100">08036854530</p>
                </div>
            </p>
        </div>
        End of contact address --}}
        <div class="footer-socket px-4 py-8 border-t border-secondary-slogan">
            <p class="text-xl text-center text-secondary-slogan">&copy;2023 All Rights Reserved</p>
        </div>
        {{-- End of footer div --}}
        <script src="{{ asset('js/flickity.js') }}"></script>
        <script>
            var elem = document.querySelector('.main-carousel');
            var flkty = new Flickity( elem, {
            // options
            cellAlign: 'left',
            contain: true,
            wrapAround: true,
            freeScroll: true,
            wrapAround: true,
            autoPlay: true
            });

        </script>
</body>
</html>