    <x-guest-layout>
    @section('title','Tech survyes')

    <!-- This example requires Tailwind CSS v2.0+ -->
        <!-- This example requires Tailwind CSS v2.0+ -->
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
            <div class="absolute inset-0">
                <div class="bg-white h-1/3 sm:h-2/3"></div>
            </div>
            <div class="relative max-w-7xl mx-auto">
                <div class="text-center">
                    <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                        From the blog
                    </h2>

                </div>
                <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">

                    @foreach($blogs as $blog)
                        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                            {{-- <div class="flex-shrink-0">
                                 <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
                             </div>--}}
                            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-indigo-600">
                                        <a href="{{ route('blog.show', $blog) }}" class="hover:underline">
                                            Article
                                        </a>
                                    </p>
                                    <a href="{{ route('blog.show', $blog) }}" class="block mt-2">
                                        <p class="text-xl font-semibold text-gray-900">
                                            {{ \Illuminate\Support\Str::title(\Illuminate\Support\Str::ucfirst(strtolower($blog->title )))}}
                                        </p>
                                        <p class="mt-3 text-base text-gray-500">
                                            {{ \Illuminate\Support\Str::lower(strip_tags(\Illuminate\Support\Str::limit($blog->content, 200 , '...')) )}}
                                        </p>
                                    </a>
                                </div>

                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>

    </x-guest-layout>
