@extends('layouts.main')

@section('content')
<div class="w-full mx-auto">
    <div class="object-fit object-contain h-44 md:h-full">
        <img class="w-full h-full" src="/img/slideshows/10.png" alt="">
    </div>
    <div class="container mx-auto px-4 py-6">
        <div class="grid place-items-center py-2">
            <h2 class="text-2xl font-semibold py-1">Thank you for contacting us!</h2>
            <p class="text-lg text-center font-semibold text-gray-900 py-1">We received your message successfully & will get back to you soon!</p>
            <a class="inline-block mt-2 mb-2 px-4 py-2 bg-primary shadow-lg rounded-lg outline-none text-white uppercase" href="{{ route('landing-page.index') }}">Home page</a>
        </div>
    </div>
    {{-- End about us section --}}
</div>
@endsection