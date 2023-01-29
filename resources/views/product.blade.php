@extends('layouts.main')

@section('content')
<div class="w-full mx-auto">
    {{-- Product banner --}}
    <div class="container mx-auto px-4 py-10">
        <div class="flex flex-col sm:flex-col md:flex-col lg:flex-row">
            <div class="basis-4/5">
                <div class="flex flex-col md:flex md:flex-row lg:flex-row bg-secondary-body">
                    <div class="basis-2/4 object-cover object-center overflow-hidden">
                        <img class="" src="{{ asset('storage/'. $product->image ) }}" alt="" width="400" height="250">
                    </div>
                    <div class="basis-2/4 p-4 lg:overflow-y-scroll">
                        <h4 class="text-2xl py-4 font-bold text-gray-900 text-center">{{ $product->name }}</h4>
                        <p class="text-lg text-gray-900">{{ $product->description }}</p>
                    </div>
                </div>
                {{-- Nav list goes under this two section --}}
                @include('partials.navs-list-detail')
                {{-- Image description section --}}
                <div class="description-section container mx-auto">
                <p class="text-lg text-gray-900 px-6 py-2">Conventional solar modules are made up of a number of solar cells electrically connected using metallic busbars. The solar cells on conventional solar modules have gaps around them and busbars typically cross over the cells to link them together. Shingled solar modules have layers of solar cells which touch each other and electrically connected using an electrically conductive adhesive (ECA).
                </p>
                <p class="text-lg text-gray-900 px-6 py-2">This eliminates the need for metallic busbars. This method means there are no gaps between the solar cells increasing the surface area of the silicon cells in the solar module. Plus there are no busbars covering the cells which reduce the light on the solar cells. This improves the electrical and mechanical performance and the aesthetics of the solar module.</p>
                <div class="px-6 py-2 object-cover object-center overflow-hidden">
                    <img src="/img/21.jpg" alt="">
                    <img src="/img/22.jpg" alt="">
                </div>
            </div>
            {{-- End of image description --}}
            </div>
            <div class="basis-1/5 px-8 py-12 border  border-solid">
                <h1 class="px-2 py-8 text-xl font-bold">Categories</h1>
                <ul class="px-2">
                @foreach ($categories as $category)
                    <li class="pb-5"><a class="font-semibold text-lg" href="{{ route('products.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                @endforeach
                </ul>
                {{-- @include('partials.product-nav') --}}
            </div>
        </div>
    </div>
</div>
@endsection
