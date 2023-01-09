@extends('layouts.main')

@section('content')
<div class="w-full mx-auto">
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-3xl font-semibold text-gray-900 text-center py-4">{{$products->count()}} Product(s) Results</h2>
        <div class="container mx-auto grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-5">
        @forelse ($products as $product)
                    <div class="">
                    <div class="object-cover object-center overflow-hidden">
                        <img src="{{ asset('storage/'. $product->image ) }}" alt="">
                    </div>
                    <div>
                        <h4 class="text-center font-semibold text-lg truncate">{{ $product->name }}</h4>
                    </div>
                    <div>
                        <p class="text-center mt-1 truncate">{{ $product->description }}</p>
                    </div>
                    <div class="text-center mt-2 mb-8">
                        <a class="inline-block mt-2 mb-2 px-4 py-2 bg-primary shadow-lg rounded-lg outline-none text-white uppercase" href="{{ route('product.show', ['product' => $product->id] ) }}">View Detail</a>
                    </div>        
                </div>   
                @empty
                    <h4 class="text-center font-semibold text-lg">Search not found</h4>
        @endforelse
            <!-- <div class="">
                <div class="object-cover object-center overflow-hidden">
                    <img src="{{ asset('img/1.jpg') }}" alt="">
                </div>
                <div>
                    <h4 class="text-center font-semibold text-lg truncate">Solar 550Watt</h4>
                </div>
                <div>
                    <p class="text-center mt-1 truncate">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore odit fugit earum? Dolorem aut cumque dolorum consequuntur unde deserunt magnam eaque voluptates? Tempora voluptas eveniet eaque saepe dolor praesentium atque?</p>
                </div>
                <div class="text-center mt-2 mb-8">
                    <a class="inline-block mt-2 mb-2 px-4 py-2 bg-primary shadow-lg rounded-lg outline-none text-white uppercase" href="#">View Detail</a>
                </div>
            </div>

            <div class="">
                <div class="object-cover object-center overflow-hidden">
                    <img src="{{ asset('img/1.jpg') }}" alt="">
                </div>
                <div>
                    <h4 class="text-center font-semibold text-lg truncate">Solar 550Watt</h4>
                </div>
                <div>
                    <p class="text-center mt-1 truncate">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore odit fugit earum? Dolorem aut cumque dolorum consequuntur unde deserunt magnam eaque voluptates? Tempora voluptas eveniet eaque saepe dolor praesentium atque?</p>
                </div>
                <div class="text-center mt-2 mb-8">
                    <a class="inline-block mt-2 mb-2 px-4 py-2 bg-primary shadow-lg rounded-lg outline-none text-white uppercase" href="#">View Detail</a>
                </div>
            </div>

            <div class="">
                <div class="object-cover object-center overflow-hidden">
                    <img src="{{ asset('img/1.jpg') }}" alt="">
                </div>
                <div>
                    <h4 class="text-center font-semibold text-lg truncate">Solar 550Watt</h4>
                </div>
                <div>
                    <p class="text-center mt-1 truncate">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore odit fugit earum? Dolorem aut cumque dolorum consequuntur unde deserunt magnam eaque voluptates? Tempora voluptas eveniet eaque saepe dolor praesentium atque?</p>
                </div>
                <div class="text-center mt-2 mb-8">
                    <a class="inline-block mt-2 mb-2 px-4 py-2 bg-primary shadow-lg rounded-lg outline-none text-white uppercase" href="#">View Detail</a>
                </div>
            </div> -->
        </div>
    </div>
    <div class="container mx-auto py-6">
                <h1>Muhammad</h1>
        {{ $products->appends(request()->input())->links() }}
    </div>
    {{-- End about us section --}}
</div>
@endsection