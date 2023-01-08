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
                    {{-- Certificate section --}}
                    <div class="container mx-auto">
                        <h2 class="text-3xl font-semibold text-gray-900 text-center py-6">Award Certificate</h2>
                        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-5">
                            @foreach ($certificates as $certificate)    
                                <div class="">
                                    <div class="flex justify-center">
                                        <img src="{{ asset('storage/'. $certificate->image ) }}" alt="">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                {{-- End of the table div --}}
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


