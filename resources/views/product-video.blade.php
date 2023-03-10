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
                {{-- Youtube video section --}}
                <div class="container mx-auto">
                        @if ($productVideo)
                        <div class="grid place-items-center aspect-w-9 aspect-h-5">
                            {!! $productVideo->iframe !!}
                        </div>
                        @else
                        <div class="grid place-items-center">
                            <p class="text-lg font-semibold">No Product Video Found</p>
                        </div>
                        @endif

                        {{--  <iframe class="" src="https://www.youtube.com/embed/jxt3v7kTlvw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>  --}}
                </div>
                {{-- End of Video section --}}
            </div>
            <div class="basis-1/5 py-12">
                <ul class="px-2">
                    @foreach ($categories as $category)
                    <li class="pb-5"><a class="font-semibold text-lg" href="{{ route('products.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                    @endforeach
                    {{--  @foreach ($categories as $category)
                        <li class="pb-5"><a class="font-semibold text-lg" href="#">{{ $category->name }}</a></li>
                    @endforeach  --}}
                </ul>
                {{-- @include('partials.product-nav') --}}
            </div>
        </div>
    </div>
</div>
@endsection