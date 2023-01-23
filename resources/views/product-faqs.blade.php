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
                {{-- Faqs description section --}}
                <div class="faqs-section container mx-auto">
                    @forelse ($faqs as $faq)
                    <div class="mx-10 py-4">
                        <h4 class="text-lg font-semibold text-gray-900">{!! $faq->question !!}</h4>
                        <p class="">{!! $faq->answer !!}</p>
                    </div>
                    @empty
                    <h4 class="text-center text-lg font-semibold text-gray-900">Frequently asked questions not found!</h4>
                    @endforelse

                    {{--  <div class="mx-10 py-4">
                        <h4 class="text-lg font-semibold text-gray-900">Q1: How about the delivery time?</h4>
                        <p class="">A1: 7 days for sample, 15 days for order</p>
                    </div>  --}}
                {{-- End of the faqs div --}}
                </div>
                {{-- End of Faqs section --}}
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