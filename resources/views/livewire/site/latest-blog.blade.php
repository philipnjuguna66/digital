
    @foreach($blogs as $blog)
        <div class="col-md-6 col-lg-4 @if(! $loop->last) mb-1-6 mb-md-1-9 mb-lg-0   @endif wow fadeInUp" data-wow-delay=".{{( $loop->index + 1 ) *2}}s">
            <article class="card card-style2 border-none h-100">
                <div class="card-img">
                    <img src="{{ $blog->featured_image_path }}" alt="{{ $blog->seo_title }}">
                </div>
               {{-- <div class="blog-info-tag">
                    <div class="text-end"><a href="#!" class="bg-yellow">Marketing</a></div>
                </div>--}}
                <div class="card-body">
                 {{--   <small class="font-weight-500">01 Feb 2021</small>--}}
                    <h3 class="h4 mt-2 mb-3"><a href="{{ route('blog.show', $blog) }}">
                            {{ $blog->title }}.</a></h3>
                    <p class="mb-3">
                        {{ strip_tags($blog->excerpt) }}
                    </p>

                </div>
            </article>
        </div>
    @endforeach
