@extends('layouts.main')

@section('content')
    <div class="container mx-auto flex flex-col sm:flex-col md:flex-col lg:flex-row justify-between gap-10">
        <div class="container mx-auto">
            <div class="container mx-auto flex flex-col gap-8 sm:flex-col md:flex-col lg:flex-row justify-end">
                <div class="w-12/12 sm:w-12/12 md:w-12/12 lg:w-6/12 justify-self-center py-8
                md:overflow-hidden object-fit">
                    <img class="" src="/img/3.jpg" alt="" style="text-align: center;">
                </div>
                <div class="w-12/12 sm:w-12/12 md:w-12/12 lg:w-6/12 justify-self-start py-8 px-4 lg:overflow-y-scroll">
                    <h4 class="text-2xl font-bold text-gray-900 text-center pb-3">Shingled Mono 400m Module</h4>
                    <p class="text-lg text-gray-900">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus nulla, quidem, voluptatibus quasi animi omnis est assumenda maiores doloribus, quisquam autem culpa sunt delectus et distinctio quaerat hic eligendi? Corrupti pariatur quam ducimus eveniet nihil modi veritatis voluptatem dolorem? Nobis in, sunt possimus perspiciatis culpa magni vitae animi assumenda illo.</p>
                </div>
            </div>
            {{-- Himongus detail --}}
            {{-- Nav lists detail --}}
            @include('partials.navs-list-detail')
            {{-- <div class="container mx-auto mt-6">
                <ul class="px-4 sm:px-4 lg:px-0 flex flex-wrap md:flex-row items-center box-border">
                    <li class="py-2"><a class="inline-block uppercase px-4 py-3 box-border bg-blue-800 shadow-lg rounded-lg hover:opacity-75 transition ease-in-out 150 text-white" href="#">Description</a></li>
                    <li class="p-2"><a class="inline-block uppercase px-4 py-3 box-border bg-blue-800 shadow-lg rounded-lg hover:opacity-75 transition ease-in-out 150 text-white" href="#">Parameter</a></li>
                    <li class="p-2"><a class="inline-block uppercase px-4 py-3 box-border bg-blue-800 shadow-lg rounded-lg hover:opacity-75 transition ease-in-out 150 text-white" href="#">Application</a></li>
                    <li class="p-2"><a class="inline-block uppercase px-4 py-3 box-border bg-blue-800 shadow-lg rounded-lg hover:opacity-75 transition ease-in-out 150 text-white" href="#">Video</a></li>
                    <li class="p-2"><a class="inline-block uppercase px-4 py-3 box-border bg-blue-800 shadow-lg rounded-lg hover:opacity-75 transition ease-in-out 150 text-white" href="#">Certificate</a></li>
                    <li class="p-2"><a class="inline-block uppercase px-4 py-3 box-border bg-blue-800 shadow-lg rounded-lg hover:opacity-75 transition ease-in-out 150 text-white" href="#">Faq</a></li>
                </ul>
            </div> --}}
            {{-- Certificates --}}
            <div class="container mx-auto py-8 px-4 sm:px-4 md:px-0 lg:px-0">
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="bg-red-600 w-64 h-32 rounded-lg"></div>
                <div class="bg-blue-600 w-64 h-32 rounded-lg"></div>
                <div class="bg-red-600 w-64 h-32 rounded-lg"></div>
                <div class="bg-blue-600 w-64 h-32 rounded-lg"></div>
                <div class="bg-red-600 w-64 h-32 rounded-lg"></div>
                <div class="bg-blue-600 w-64 h-32 rounded-lg"></div>
                <div class="bg-red-600 w-64 h-32 rounded-lg"></div>
                <div class="bg-blue-600 w-64 h-32 rounded-lg"></div>
                <div class="bg-red-600 w-64 h-32 rounded-lg"></div>
                <div class="bg-blue-600 w-64 h-32 rounded-lg"></div>
                <div class="bg-red-600 w-64 h-32 rounded-lg"></div>
                <div class="bg-blue-600 w-64 h-32 rounded-lg"></div>
            </div>
            </div>
        </div>
        {{-- Product nav section --}}
        @include('partials.product-nav')
        {{-- End of product nav section --}}
    </div>
@endsection
