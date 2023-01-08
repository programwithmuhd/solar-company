@extends('layouts.main')

@section('content')
<div class="w-full mx-auto">
    <div class="container mx-auto px-4 py-10">
        <div class="flex flex-col sm:flex-col md:flex-col lg:flex-row">
            <div class="basis-4/5">
                <div class="flex flex-col md:flex md:flex-row lg:flex-row">
                    <div class="basis-2/4 object-cover object-center overflow-hidden">
                        <img class="" src="/img/{{ $product->id }}.jpg" alt="" width="400" height="250">
                    </div>
                    <div class="basis-2/4 p-4 lg:overflow-y-scroll">
                        <h4 class="text-2xl py-4 font-bold text-gray-900 text-center">{{ $product->name }}</h4>
                        <p class="text-lg text-gray-900">{{ $product->description }}</p>
                    </div>
                </div>
                {{-- Nav list goes under this two section --}}
                @include('partials.navs-list-detail')
                {{-- application section --}}
                <div class="description-section container mx-auto">
                    <div class="container mx-auto px-4 sm:px-4 lg:px-0">
                        <p class="text-lg text-gray-900 py-2 tracking-wide">On grid&off grid solar system</p>
                        <p class="text-lg text-gray-900 py-2 tracking-wide">Residential roof system</p>
                        <p class="text-lg text-gray-900 py-2 tracking-wide">Car charging station</p>
                        <p class="text-lg text-gray-900 py-2 tracking-wide">Water pump solar</p>
                    </div>
                    {{-- Application gallery --}}
                    <div class="container p-4 mx-auto grid grid-cols sm:grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="bg-red-600  md:justify-self-end lg:justify-self-end w-64 h-32 rounded-lg"></div>
                        <div class="bg-blue-600 md:justify-self-start lg:justify-self-start w-64 h-32 rounded-lg"></div>
                        <div class="bg-red-600  md:justify-self-end lg:justify-self-end w-64 h-32 rounded-lg"></div>
                        <div class="bg-blue-600 md:justify-self-start lg:justify-self-start w-64 h-32 rounded-lg"></div>
                    </div>
                </div>
                {{-- End of Application section section --}}
            </div>
            <div class="basis-1/5 px-8 py-12 border  border-solid">
                {{-- @include('partials.product-nav') --}}
                <ul class="px-2">
                    @foreach ($categories as $category)
                        <li class="pb-5"><a class="font-semibold text-lg" href="#">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection