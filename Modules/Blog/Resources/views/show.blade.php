<x-app-layout>
    @section('title', \Illuminate\Support\Str::of( $blog->title)->headline())
    @section('description', Str::of($blog->meta_description))

    @section('metas')
        @og('site_name', "Digital Marketing, SEO and Web Design in Kenya")
        @og('description', $blog->meta_description)
        @twitter('site_name', "Digital Marketing, SEO and Web Design in Kenya")
        @twitter('title',$blog->title)
        @twitter('description', $blog->meta_description)

         @endsection
    <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section top-position bg-primary">
            <div class="container z-index-1 position-relative">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>{{ $blog->title }}</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="mb-0 ps-0">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a class="dot-divider"></a></li>
                            <li><a href="#!">{{ $blog->title }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <img src="{{ asset('img/banner/page-title2.png') }}" class="position-absolute top-0 start-0" alt="...">
            <img src="{{ asset('img/banner/page-title1.png') }}" class="position-absolute bottom-0 end-0" alt="...">
            <div class="home_bubble">
                <div class="square-shape2"></div>
                <div class="bubble b_three"></div>
                <div class="square-shape1 d-none d-sm-block"></div>
                <div class="bubble b_six d-none d-sm-block"></div>
            </div>
        </section>

        <!-- BLOG DETAILS
        ================================================== -->
        <section class="blogs">
            <div class="container">
                <div class="row">
                    <!-- blog left -->
                    <div class="col-lg-8 col-md-12 mb-1-9 mb-lg-0">
                        <div class="posts-wrapper">
                            <!-- post -->

                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="mb-1-6 mb-md-1-9">
                                        <img src="{{ $blog->featured_image_path }}" alt="{{ $blog->title }}">
                                    </div>
                                    <h2 class="h3">{{ $blog->title }}</h2>
                                    <ul class="meta-list ps-0">
                                        <li>
                                            <a href="#!">
                                                <i class="fa fa-user me-1 text-primary-color"></i> Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <i class="fa fa-calendar me-1 text-primary-color"></i> Jan 18, 2021
                                            </a>
                                        </li>
                                        <li class="mr-0">
                                            <a href="#!">
                                                <i class="fa fa-comments me-1 text-primary-color"></i> 10 Comments
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-1-6 mb-md-1-9">
                                    {!! $blog->content !!}

                                </div>

                                <div class="separator"></div>
                                <div class="row g-0">
                                    <div class="col-md-6 mb-1-6 mb-md-0">
                                        <div class="tags">
                                            <h5 class="h6 mb-2">Related Tags</h5>
                                            <ul class="blog-tags ps-0">
                                                <li><a href="#!">Marketing</a></li>
                                                <li><a href="#!">SEO</a></li>
                                                <li><a href="#!">PPC</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="h6 text-md-end text-start mb-2">Share Post</h5>
                                        <div class="share-post">
                                            <ul class="mb-0">
                                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                                                <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end post -->


                           {{-- <div class="mb-1-6 mb-sm-2-9">
                                <h3 class="h4 mb-1-6">Related Posts</h3>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 mb-1-6 mb-md-1-9 mb-lg-0">
                                        <article class="card card-style2 border-none h-100">
                                            <div class="card-img">
                                                <img src="img/blog/blog-01.jpg" alt="...">
                                            </div>
                                            <div class="blog-info-tag">
                                                <div class="text-end"><a href="#!" class="bg-light-pink">Optimization</a></div>
                                            </div>
                                            <div class="card-body">
                                                <small class="font-weight-500">05 Feb. 2021</small>
                                                <h3 class="h4 mt-2 mb-3"><a href="blog-detail.html">This story behind Seo will haunt you forever.</a></h3>
                                                <p class="mb-3">It supplies data on generally look for explicit catchphrase terms, so you can measure how significant and serious they are.</p>
                                                <div class="blog-author">
                                                    <div class="blog-author-img">
                                                        <img src="img/avatar/avatar-01.jpg" alt="...">
                                                    </div> <span class="text-light-pink">Linda Bivens</span>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <article class="card card-style2 border-none h-100">
                                            <div class="card-img">
                                                <img src="img/blog/blog-02.jpg" alt="...">
                                            </div>
                                            <div class="blog-info-tag">
                                                <div class="text-end"><a href="#!" class="bg-yellow">Marketing</a></div>
                                            </div>
                                            <div class="card-body">
                                                <small class="font-weight-500">01 Feb 2021</small>
                                                <h3 class="h4 mt-2 mb-3"><a href="blog-detail.html">The seven secrets that you shouldn't know about Seo.</a></h3>
                                                <p class="mb-3">It supplies data on generally look for explicit catchphrase terms, so you can measure how significant and serious they are.</p>
                                                <div class="blog-author">
                                                    <div class="blog-author-img">
                                                        <img src="img/avatar/avatar-02.jpg" alt="...">
                                                    </div> <span class="text-yellow">Ivo Janata</span>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>--}}


                        </div>

                    </div>
                    <!-- end blog left -->

                    <!-- blog right -->
                    <div class="col-lg-4 col-md-12">
                        <div class="ps-lg-1-6 ps-xl-1-9">
                            @include('blog::sidebar')
                        </div>
                    </div>
                    <!-- end blog right -->
                </div>
            </div>
        </section>
</x-app-layout>
