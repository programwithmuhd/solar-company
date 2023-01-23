@extends('layouts.main')

@section('content')
<div class="w-full mx-auto">
    <div class="object-fit object-contain h-44 md:h-full">
        <img class="w-full h-full" src="/img/slideshows/10.png" alt="">
    </div>
    {{--  end of banner  --}}
    <div class="container mx-auto px-4 py-4">
        <h2 class="text-center font-semibold text-2xl">({{ $products->count() }}) Search Results</h2>
        {{--  grid cell  --}}
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @forelse ($products as $product)
            <div class="place-items-center">
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
            <div class="justify-items-center self-center">
                <h2 class="text-xl font-semibold text-gray-900 py-6">Search Results not found</h2>
            </div>
            @endforelse
        </div>
        {{--  end grid cell  --}}
    </div>
    {{-- End of container search--}}
</div>
@endsection