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
                <div class="overflow-auto rounded-lg shadow-lg mt-8">
                    <table class="w-full border border-spacing-1 border-gray-400">
                <thead class="border-b border-gray-400">
                    {{-- <tr class="even:bg-white odd:bg-gray-200">
                        <th colspan="5" class="p-4 text-xl font-semibold tracking-wide">{{ $configParamName->name }}</th>
                    </tr> --}}
                    <tr class="">
                        <th class="w-25 p-3 text-xl font-semibold tracking-wide text-center">Applications</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-400">
                    @forelse ($applications as $application)
                    <tr class="even:bg-white odd:bg-gray-200">
                        <td class="p-3 text-center text-xl text-gray-700 whitespace-nowrap">{{ $application->name }}</td>
                    </tr>
                    @empty
                        <td colspan="1" class="p-3 text-sm text-gray-700 whitespace-nowrap">
                            <h2 class="text-lg text-gray-900 text-center">No application found</h2>
                        </td>
                    @endforelse
                </tbody>
            </table>
                </div>
                {{-- End of the table div --}}
                </div>
                <div class="container mx-auto py-12 px-12">
                    {{ $applications->links() }}
                </div>
                {{-- End of Application section section --}}
            </div>
            <div class="basis-1/5 px-8 py-12 border  border-solid">
                {{-- @include('partials.product-nav') --}}
                <ul class="px-2">
                    @foreach ($categories as $category)
                    <li class="pb-5"><a class="font-semibold text-lg" href="{{ route('products.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                    @endforeach
                    {{--  @foreach ($categories as $category)
                        <li class="pb-5"><a class="font-semibold text-lg" href="#">{{ $category->name }}</a></li>
                    @endforeach  --}}
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection