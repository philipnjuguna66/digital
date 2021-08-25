<x-guest-layout>
    @section('title', $blog->meta_title)
    @push('metas')
        @og('title', $blog->meta_title)
        @og('description', $blog->meta_description)
        @og('url', route('blog.show', $blog))
        <meta property="description" content="{{ $blog->meta_description }}." />


    @endpush

    <div class="bg-white overflow-hidden">
        <div class="relative max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="hidden lg:block bg-gray-50 absolute top-0 bottom-0 left-3/4 w-screen"></div>
            <div class="mx-auto text-base max-w-prose lg:grid lg:grid-cols-2 lg:gap-8 lg:max-w-none">
                <div class="mt-6">

                    <h1 class="mt-2 text-xl leading-8 text-center tracking-tight uppercase text-gray-900 sm:text-4xl">{{ $blog->title }}</h1>
                </div>
            </div>
            <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
                <div class="relative lg:row-start-1 lg:col-start-2">
                    <svg class="hidden lg:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                        <defs>
                            <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
                    </svg>
                    <div class="relative text-base mx-auto max-w-prose lg:max-w-none">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8438942375783163"
                                crossorigin="anonymous"></script>
                        <ins class="adsbygoogle"
                             style="display:block; text-align:center;"
                             data-ad-layout="in-article"
                             data-ad-format="fluid"
                             data-ad-client="ca-pub-8438942375783163"
                             data-ad-slot="4381467362"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
                <div class="mt-8 lg:mt-0">

                    <div class="mt-5 prose prose-indigo text-gray-500 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1">

                       {!! $blog->content !!}

                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8438942375783163"
                                crossorigin="anonymous"></script>
                        <!-- Display Ads -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-8438942375783163"
                             data-ad-slot="6377075317"
                             data-ad-format="auto"
                             data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                </div>
            </div>
        </div>
    </div>
    </div>



</x-guest-layout>



