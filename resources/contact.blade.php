@extends('layouts.main')

@section('content')
<div class="w-full mx-auto">
    <div class="grid place-items-center h-64 bg-gray-200">
        <h4 class="text-2xl text-gray-900 font-bold">Page Under Construction</h4>
    </div>
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-3xl font-semibold text-gray-900 text-center py-4">Contact Us</h2>
        <div class="text-center">
            <h2 class="text-lg font-semibold text-gray-700 py-2 text-center">Our Office Address:</h2>
            <p class="text-cent text-lg font-semibold text-gray-700">#6 Ground Floor Challenge Plaza, Ali Akilu Road, Kaduna Nigeria</p>
            <p class="text-center text-lg font-semibold text-gray-900">Abuja Office:Plot 561, Sani Zangon Daura Estate Kado, Abuja Nigeria</p>
            <h2 class="text-lg font-semibold text-gray-700 py-2">Contact numbers:</h2>
            <p class="text-center text-lg font-semibold text-gray-900">+234(0)14539141, +2347038989839, +2348026909707, +2348077250300, +2348099331115</p>
            {{-- End of contact --}}
        </div>
        {{-- End of address div --}}
    </div>
    {{-- End contact section --}}
    <div class="container mx-auto">
        <div class="flex flex-col-reverse sm:flex-col-reverse md:flex-row lg:flex-row py-6">
            <div class="basis-1/2">
                <div class="object-cover object-center overflow-hidden">
                    <img class="" src="/img/1.jpg" alt="">
                </div>
            </div>
            <div class="basis-1/2 bg-white">
                <div class="sm:mx-auto sm:w-full sm:max-w-md md:mx-auto md:w-full md:max-w-md">
                    <div class="bg-white py-8 px-6 shadow rounded-lg sm:px-10">
                        <h4 class="text-2xl text-center text-gray-900 font-bold py-8">Make Your Enquiry with Us</h4>
                        <form class="mb-0 space-y-6">
                            <div>
                                <label for="" class="block text-sm font-medium text-gray-700">
                                    Your Name
                                </label>
                                <div class="mt-1">
                                    <input type="text" class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                </div>
                            </div>
                            <div>
                                <label for="" class="block text-sm font-medium text-gray-700">
                                    Email
                                </label>
                                <div class="mt-1">
                                    <input type="text" class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                </div>
                            </div>
                            <div>
                                <label for="" class="block text-sm font-medium text-gray-700">
                                    Contact number
                                </label>
                                <div class="mt-1">
                                    <input type="text" class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                </div>
                            </div>
                            <div>
                                <label for="" class="block text-sm font-medium text-gray-700">
                                    Message
                                </label>
                                <div class="mt-1">
                                    <textarea type="text" class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"></textarea>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit Question</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End of container flex wrapper --}}
    </div>
    {{-- End of container div --}}
</div>
@endsection