@extends('layouts.main')

@section('content')
<div class="w-full mx-auto">
    <div class="object-fit object-contain h-44 md:h-full">
        <img class="w-full h-full" src="/img/slideshows/10.png" alt="">
    </div>
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-3xl font-semibold text-gray-900 text-center py-4">{{ $project->name }}</h2>
        <p class="text-lg font-semibold text-gray-900 px-4">{!! $project->description !!}</p>
    </div>
    {{-- End about us section --}}
    {{-- Youtube video section --}}
    <div class="container mx-auto px-8 mb-8">
        <div class="grid place-items-center aspect-w-10 aspect-h-4">
            {!! $project->iframe !!}
        </div>
    </div>
    {{-- End of Video section --}}
</div>
@endsection