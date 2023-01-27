@extends('layouts.main')

@section('content')
    <div class="w-full object-fit object-contain">
        <ul class="slider" id="slider">
            <li>
              <img class="" src="{{ asset('img/sliders/1.png') }}" alt="slide1"/>
            </li>
            <li>
              <img class="" src="{{ asset('img/sliders/2.png') }}" alt="slide2"/>
            </li>
            <li>
              <img class="" src="{{ asset('img/sliders/3.png') }}" alt="slide3"/>
            </li>
        </ul>
    </div>
    <div class="container mx-auto px-4 border-t border-t-red-500 bg-secondary-body">
        <h2 class="text-3xl font-semibold text-gray-900 text-center py-4">Welcome To Xeezacks Smart Solar Technologies</h2>
        <p class="text-lg text-gray-900 px-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque impedit assumenda facere distinctio illo hic deserunt, praesentium autem illum iusto blanditiis corrupti dolore unde totam magni nisi, doloremque corporis voluptatibus architecto! Corrupti, assumenda omnis repellat tempora nihil commodi ut similique, cumque dolore unde atque eos aut? Eos assumenda aspernatur atque velit vel beatae impedit omnis obcaecati, eius sequi porro tempore ratione animi quas veniam perspiciatis sint recusandae eaque unde iusto dignissimos cumque. Facere vero aliquid provident blanditiis at. Quo facilis iure, cum deserunt, consequuntur quisquam quos nam hic ratione vel ipsa esse sapiente eveniet animi cumque dolorum voluptate culpa recusandae at minus, dignissimos doloremque aliquam! Nesciunt assumenda optio cumque quisquam debitis vitae maxime voluptatum, fugiat quis. Eveniet porro quia, officiis veniam sint consectetur aliquid cupiditate iste ipsam cumque. Neque expedita pariatur tempore, quaerat eligendi molestias assumenda velit, vero iure, dignissimos hic? Obcaecati culpa laboriosam nihil labore praesentium vitae illum eaque.</p>
    </div>
    {{-- End about us section --}}
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-3xl font-semibold text-gray-900 text-center py-6">Our Projects</h2>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 px-4 py-6">
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
        {{-- End of sub service item --}}
    </div>
    {{-- <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true }'></div> --}}
    {{-- End of our services section div --}}
    <div class="products container mx-auto px-4 py-6">
        <h2 class="text-3xl font-semibold text-gray-900 text-center py-6">Our Products</h2>
        <div class="container mx-auto grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach ($products as $product)
                <div class="">
                <div class="object-cover object-center overflow-hidden">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="">
                </div>
                <div>
                    <h4 class="text-center font-semibold text-lg truncate">{{ $product->name }}</h4>
                </div>
                <div>
                    <p class="text-center mt-1 truncate">{{ $product->description }}</p>
                </div>
                <div class="text-center mt-2 mb-8">
                    <a class="inline-block mt-2 mb-2 px-4 py-2 bg-primary shadow-lg rounded-lg outline-none text-white uppercase" href="#">View Detail</a>
                </div>        
            </div>
            @endforeach
            {{-- <div class="">
                <div class="object-cover object-center overflow-hidden">
                    <img src="/img/1.jpg" alt="">
                </div>
                <div>
                    <h4 class="text-center font-semibold text-lg truncate">Shingled Solar Panel</h4>
                </div>
                <div>
                    <p class="text-center mt-1 truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto in voluptatem numquam provident, accusantium inventore totam error harum corrupti iure voluptate eaque. Enim quod eligendi, omnis laboriosam accusamus consectetur deserunt laudantium maxime cum, quaerat obcaecati repudiandae similique, ab autem optio?</p>
                </div>
                <div class="text-center mt-2 mb-8">
                    <a class="inline-block mt-2 mb-2 px-4 py-2 bg-primary shadow-lg rounded-lg outline-none text-white uppercase" href="#">View Detail</a>
                </div>        
            </div>
            <div class="">
                <div class="object-cover object-center overflow-hidden">
                    <img src="/img/1.jpg" alt="">
                </div>
                <div>
                    <h4 class="text-center font-semibold text-lg truncate">Shingled Solar Panel</h4>
                </div>
                <div>
                    <p class="text-center mt-1 truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto in voluptatem numquam provident, accusantium inventore totam error harum corrupti iure voluptate eaque. Enim quod eligendi, omnis laboriosam accusamus consectetur deserunt laudantium maxime cum, quaerat obcaecati repudiandae similique, ab autem optio?</p>
                </div>
                <div class="text-center mt-2 mb-8">
                    <a class="inline-block mt-2 mb-2 px-4 py-2 bg-primary shadow-lg rounded-lg outline-none text-white uppercase" href="#">View Detail</a>
                </div>        
            </div>
            <div class="">
                <div class="object-cover object-center overflow-hidden">
                    <img src="/img/1.jpg" alt="">
                </div>
                <div>
                    <h4 class="text-center font-semibold text-lg truncate">Shingled Solar Panel</h4>
                </div>
                <div>
                    <p class="text-center mt-1 truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto in voluptatem numquam provident, accusantium inventore totam error harum corrupti iure voluptate eaque. Enim quod eligendi, omnis laboriosam accusamus consectetur deserunt laudantium maxime cum, quaerat obcaecati repudiandae similique, ab autem optio?</p>
                </div>
                <div class="text-center mt-2 mb-8">
                    <a class="inline-block mt-2 mb-2 px-4 py-2 bg-primary shadow-lg rounded-lg outline-none text-white uppercase" href="#">View Detail</a>
                </div>        
            </div>
            <div class="">
                <div class="object-cover object-center overflow-hidden">
                    <img src="/img/1.jpg" alt="">
                </div>
                <div>
                    <h4 class="text-center font-semibold text-lg truncate">Shingled Solar Panel</h4>
                </div>
                <div>
                    <p class="text-center mt-1 truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto in voluptatem numquam provident, accusantium inventore totam error harum corrupti iure voluptate eaque. Enim quod eligendi, omnis laboriosam accusamus consectetur deserunt laudantium maxime cum, quaerat obcaecati repudiandae similique, ab autem optio?</p>
                </div>
                <div class="text-center mt-2 mb-8">
                    <a class="inline-block mt-2 mb-2 px-4 py-2 bg-primary shadow-lg rounded-lg outline-none text-white uppercase" href="#">View Detail</a>
                </div>        
            </div>
            <div class="">
                <div class="object-cover object-center overflow-hidden">
                    <img src="/img/1.jpg" alt="">
                </div>
                <div>
                    <h4 class="text-center font-semibold text-lg truncate">Shingled Solar Panel</h4>
                </div>
                <div>
                    <p class="text-center mt-1 truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto in voluptatem numquam provident, accusantium inventore totam error harum corrupti iure voluptate eaque. Enim quod eligendi, omnis laboriosam accusamus consectetur deserunt laudantium maxime cum, quaerat obcaecati repudiandae similique, ab autem optio?</p>
                </div>
                <div class="text-center mt-2 mb-8">
                    <a class="inline-block mt-2 mb-2 px-4 py-2 bg-primary shadow-lg rounded-lg outline-none text-white uppercase" href="#">View Detail</a>
                </div>        
            </div>
            <div class="">
                <div class="object-cover object-center overflow-hidden">
                    <img src="/img/1.jpg" alt="">
                </div>
                <div>
                    <h4 class="text-center font-semibold text-lg truncate">Shingled Solar Panel</h4>
                </div>
                <div>
                    <p class="text-center mt-1 truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto in voluptatem numquam provident, accusantium inventore totam error harum corrupti iure voluptate eaque. Enim quod eligendi, omnis laboriosam accusamus consectetur deserunt laudantium maxime cum, quaerat obcaecati repudiandae similique, ab autem optio?</p>
                </div>
                <div class="text-center mt-2 mb-8">
                    <a class="inline-block mt-2 mb-2 px-4 py-2 bg-primary shadow-lg rounded-lg outline-none text-white uppercase" href="#">View Detail</a>
                </div>        
            </div>
            <div class="">
                <div class="object-cover object-center overflow-hidden">
                    <img src="/img/1.jpg" alt="">
                </div>
                <div>
                    <h4 class="text-center font-semibold text-lg truncate">Shingled Solar Panel</h4>
                </div>
                <div>
                    <p class="text-center mt-1 truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto in voluptatem numquam provident, accusantium inventore totam error harum corrupti iure voluptate eaque. Enim quod eligendi, omnis laboriosam accusamus consectetur deserunt laudantium maxime cum, quaerat obcaecati repudiandae similique, ab autem optio?</p>
                </div>
                <div class="text-center mt-2 mb-8">
                    <a class="inline-block mt-2 mb-2 px-4 py-2 bg-primary shadow-lg rounded-lg outline-none text-white uppercase" href="#">View Detail</a>
                </div>        
            </div> --}}
        </div>
        {{-- End of products section --}}
        <div class="more-information container mx-auto text-center my-6">
            <h2 class="text-3xl font-semibold text-gray-900 py-4">Do you have any Projects?</h2>
            <p class="text-lg text-gray-900">Whether you want to work with us or are interested in knowing more about what we do, we will love to hear from you</p>
            <a class="inline-block mt-10 mb-2 px-4 py-2 bg-primary shadow-lg rounded-lg outline-none text-white uppercase" href="{{ route('contact-page.index') }}">Contact now</a>
        </div>
        {{-- End of more-info section --}}
    </div>
@endsection