<ul class="px-2">
                    @foreach ($categories as $category)
                        <li class="pb-5"><a class="font-semibold text-lg" href="#">{{ $category->name }}</a></li>
                    @endforeach
                </ul>