<div class="relative bg-white shadow bg-local">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center py-2 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <div class="flex px-2 lg:px-0">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/">
                            <x-jet-application-logo class="block lg:hidden h-10 w-auto"/>
                            <x-jet-application-logo class="hidden lg:block h-14 w-auto"/>
                        </a>

                    </div>
                </div>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button @click="mobile=true" type="button"
                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
            <nav class="hidden md:flex space-x-10">
               {{--
                <x-nav-drop-down title="Services">
                    @foreach(\App\Models\Service::all() as $service)
                        <x-nav-link url="{{route('show.service',$service->slug)}}" icon="{{ $service->icon }}"
                                    title="{{$service->title}}"
                                    Summary="{{\Illuminate\Support\Str::limit($service->summary,20)}}"></x-nav-link>
                    @endforeach
                    <x-slot name="flow">

                    </x-slot>
                </x-nav-drop-down>--}}



            </nav>
           {{-- <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                <a href="{{ route('frequent') }}"
                   class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                    FAQ
                </a>
                <a href="{{ route('contact.us') }}"
                   class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                    Contact Us
                </a>
            </div>--}}
        </div>
    </div>

    <div class="absolute top-0 inset-x-0 z-10 p-2 transition transform origin-top-right md:hidden"
         x-show="mobile"
         x-transition:enter="duration-200 ease-out"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="duration-100 ease-in"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
    >
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <a href="/">
                        <x-jet-application-logo class="block lg:hidden h-10 w-auto"/>

                    </a>
                    <div class="-mr-2">
                        <button @click="mobile = false" type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <nav class="grid gap-y-8">


                      {{--
                        </x-nav-drop-down>

                        <x-nav-drop-down title="Services">
                            @foreach(\App\Models\Service::all() as $service)
                                <x-nav-link url="{{route('show.service',$service->slug)}}" icon="{{ $service->icon }}"
                                            title="{{$service->title}}"
                                            Summary="{{\Illuminate\Support\Str::limit($service->summary,20)}}"></x-nav-link>
                            @endforeach
                            <x-slot name="flow">

                            </x-slot>
                        </x-nav-drop-down>--}}
                       {{-- <div class="">
                            <a href="{{route('career')}}" class="text-base font-medium text-gray-500 hover:by-gray-900">
                                Careers
                            </a>
                        </div>--}}

                        
                       {{-- <a href="{{ route('frequent') }}"
                           class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                            FAQ
                        </a>--}}

                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

