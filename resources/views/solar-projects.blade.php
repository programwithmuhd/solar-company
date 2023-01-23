@extends('layouts.main')

@section('content')
<div class="w-full mx-auto">
    <div class="object-fit object-contain h-44 md:h-full">
        <img class="w-full h-full" src="/img/slideshows/10.png" alt="">
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-5 px-4 py-6">
            @forelse ($projects as $project)
            <div class="text-center">
                <div class="object-cover object-center overflow-hidden">
                    <img src="{{ asset('storage/'. $project->image ) }}" alt="">
                </div>
                <div class="mt-4">
                    <h4 class="text-center font-semibold text-lg truncate">{{ $project->name }}</h4>
                </div>
                <div class="flex justify-center py-4">
                    <svg class="pr-1 w-5 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                      
                    <p>{{ $project->date }}</p>
                </div>
                <div>
                    <div>
                        <p class="text-center mt-1">{!! Str::limit($project->description, 135) !!}</p>
                    </div>
                </div>
                <div class="text-center mt-2 mb-8">
                    <a class="inline-block mt-2 mb-2 px-4 py-2 bg-primary shadow-lg rounded-lg outline-none text-white uppercase" href="{{ route('project.show', $project->id ) }}">Read More</a>
                </div>
            </div>
            @empty
                <p class="text-lg font-semibold text-center">No project found</p>
            @endforelse
        </div>
        {{--  End of project section  --}}
    </div>
    {{--  End of container section  --}}
</div>
@endsection