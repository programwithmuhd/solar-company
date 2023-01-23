@extends('layouts.main')

@section('content')
    <div class="object-fit object-contain h-44 md:h-full">
        <img class="w-full h-full" src="/img/slideshows/10.png" alt="">
    </div>
    <div class="container mx-auto flex flex-col-reverse sm:flex-col-reverse md:flex-col-reverse lg:flex-row">
        <div class="">
            <h1 class="px-4 py-8 text-xl font-bold text-gray-900">Categories</h1>
            <ul class="px-4">
                @foreach ($categories as $category)
                <li class="pb-5"><a class="font-semibold text-lg" href="{{ route('products.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul> 
        </div>
        <div class="basis-4/5 px-4">
            <h1 class="text-2xl font-bold text-gray-900 py-4">{{ $categoryName }}</h1>
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
                    <h4 class="text-center font-semibold text-lg">No products</h4>
                @endforelse
            </div>
            <div class="container mx-auto py-8">
                {{ $products->appends(request()->input())->links() }}
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
@endsection