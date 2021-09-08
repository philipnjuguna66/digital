@foreach(\App\Models\Setting::all() as $setting)
<div class="bg-white sm:pt-16 lg:pt-8 lg:pb-20 lg:overflow-hidden">
    <div class="mx-auto max-w-7xl lg:px-8">
        <h3 class="mt-4 text-3xl font-bold text-center text-gray-900 tracking-tight">
            {{$setting->feature_title}}
        </h3>
        <p class="text-2xl text-gray-700 text-center py-4">{{$setting->feature_summary}}
        </p>
        <div class="lg:grid lg:grid-cols-2 lg:gap-4 ">
            <div class="mt-1 -mb-10 sm:-mb-48 lg:m-0 lg:relative">
                <div class="mx-auto max-w-md px-8 py-20 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                    <img class="w-auto lg:relative lg:left-0 "
                         src="/images/innovation.png" alt="pic">
                </div>
            </div>

                <div class="relative lg:py-3 md:py-2 md:max-w-xl sm:max-w-lg sm:mx-auto">
                    <div class="absolute inset-0 bg-yellow-400 shadow-lg transform lg:-skew-y-4 sm:skew-y-0 -rotate-6 sm:rounded-3xl"></div>
                    <div class="relative px-4 py-2 bg-white  shadow-lg sm:rounded-3xl sm:p-20">
                    <div class="lg:py-15 ">
                        <h1 class="text-2xl tracking-tight font-bold text-gray-700 sm:mt-5 sm:text-1xl lg:mt-6 xl:text-3xl">
                        <span
                            class="block">{{$setting->feature_subtitle}}</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-700 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                            {{$setting->feature_description}}</p>
                        @endforeach

                        <ul class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                            @foreach(\App\Models\Feature::whereRaw('MOD(id,2)=0')->get() as $feature)
                            <li class="flex items-start lg:col-span-1">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-indigo-800" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <p class="ml-3 text-sm text-gray-800">
                                    {{$feature->feature_list}}
                                </p>
                            </li>
                            @endforeach
                               {{-- @foreach(\App\Models\Feature::whereRaw('MOD(id,2)!=0')->get() as $feature)
                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-indigo-800" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-800">
                                            {{$feature->feature_list}}
                                        </p>
                                    </li>
                                @endforeach--}}

                        </ul>

                    </div>
                </div>
                </div>

        </div>
    </div>
</div>


<!-- Gradient Feature Section -->
<div class="bg-gradient-to-r from-purple-800 to-indigo-700">
    <div class="max-w-4xl mx-auto px-4 py-16 sm:px-6 sm:pt-20 sm:pb-24 lg:max-w-7xl lg:pt-24 lg:px-8">
        <h2 class="text-4xl text-center text-white tracking-tight">
            Know More
        </h2>
        <p class="mt-4 text-2xl max-w-full text-center text-lg text-purple-200">
            Simplicity is the essence of happiness. (Cedric Bledsoe)
        </p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:mt-16 lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16">
            @foreach(\App\Models\CoreValues::all() as $coreValue)
            <div class=" items-center">
                <div>
              <span class="flex items-center justify-center h-12 w-12 ml-40 rounded-md bg-white text-white bg-opacity-10">
               {!! $coreValue->icon !!}
              </span>
                </div>
                <div class="mt-6 text-center">
                    <h3 class="text-lg font-medium text-white">{{$coreValue->title}}</h3>
                    <p class="mt-2 text-base text-purple-200">
                        {{$coreValue->summary}}
                    </p>
                    <a href="{{route('about')}}">
                        <span class="flex items-center justify-center text-indigo-300">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                                    </svg>
                          </span>
                    </a>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>


