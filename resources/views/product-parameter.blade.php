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
                {{-- Image description section --}}
                <div class="description-section container mx-auto">
                <div class="overflow-auto rounded-lg shadow-lg mt-8">
                    <table class="w-full border border-spacing-1 border-gray-400">
                <thead class="border-b border-gray-400">
                    <tr class="even:bg-white odd:bg-gray-200">
                        <th colspan="5" class="p-4 text-xl font-semibold tracking-wide">{{ $configurationName->name }}</th>
                    </tr>
                    <tr class="">
                        <th class="w-25 p-3 text-xl font-semibold tracking-wide text-center">Item</th>
                        <th class="w-25 p-3 text-xl font-semibold tracking-wide text-center">Model</th>
                        <th class="w-25 p-3 text-xl font-semibold tracking-wide text-center">Description</th>
                        <th class="w-25 p-3 text-xl font-semibold tracking-wide text-center">Quantity</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-400">
                    @forelse ($productParam as $prodParam)
                    <tr class="even:bg-white odd:bg-gray-200">
                        <td class="p-3 text-center text-xl text-gray-700 whitespace-nowrap">{{ $prodParam->id }}</td>
                        <td class="p-3 text-center text-xl text-gray-700 whitespace-nowrap">{{ $prodParam->model_name }}</td>
                        <td class="p-3 text-center text-xl text-gray-700 whitespace-nowrap">{{ $prodParam->desc }}</td>
                        <td class="p-3  text-center text-xl text-gray-700 whitespace-nowrap">{{ $prodParam->quantity }}</td>
                    </tr>
                    @empty
                        <td colspan="4" class="p-3 text-sm text-gray-700 whitespace-nowrap">
                            <h2 class="text-lg text-gray-900 text-center">No product parameter found</h2>
                        </td>
                    @endforelse
                </tbody>
            </table>
                </div>
                {{-- End of the table div --}}
                </div>
                {{-- End of Parameter section --}}
            </div>
            <div class="basis-1/5 py-12">
                <ul class="px-2">
                    @foreach ($categories as $category)
                        <li class="pb-5"><a class="font-semibold text-lg" href="#">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
                {{-- @include('partials.product-nav') --}}
            </div>
        </div>
    </div>
</div>
@endsection