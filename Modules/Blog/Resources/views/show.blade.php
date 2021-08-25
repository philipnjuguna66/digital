<x-guest-layout>
    @section('title', $blog->meta_title)
    @push('metas')
        @og('title', $blog->meta_title)
        @og('description', $blog->meta_description)
        @og('url', route('blog.show', $blog))
        <meta property="description" content="{{ $blog->meta_description }}." />


    @endpush

    <div class="relative px-4 sm:px-6 lg:px-8 mt-12">
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                <span class="block text-base text-center text-indigo-600 font-semibold tracking-wide uppercase">{{ $blog->title }}</span>
                <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{ $blog->title }}</span>
            </h1>
        </div>
        <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">


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

            {!! $blog->content !!}


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




</x-guest-layout>



