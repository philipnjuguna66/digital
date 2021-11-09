<x-app-layout>
    @section('title', \Illuminate\Support\Str::of( $blog->title)->headline())
    @section('description', Str::of($blog->meta_description))

    @section('metas')
        @og('site_name', "Digital Marketing, SEO and Web Design in Kenya")
        @og('description', $blog->meta_description)
        @og('image',  is_null($blog->featured_image) ? asset('images/blog-04.jpeg') :  Storage::url($blog->featured_image))
        @twitter('site_name', "Digital Marketing, SEO and Web Design in Kenya")
        @twitter('title',$blog->title)
        @twitter('description', $blog->meta_description)
        @twitter('image',  is_null($blog->featured_image) ? asset('images/blog-04.jpeg') :  Storage::url($blog->featured_image))

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
                                        <img src="{{ is_null($blog->featured_image) ? asset('images/blog-04.jpeg') :  Storage::url($blog->featured_image)}}" alt="...">
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
                            <div class="side-bar">

                                <div class="widget">
                                    <h6 class="widget-title">Categories</h6>
                                    <ul class="cat-list">
                                        <li>
                                            <a href="#!"><i class="fas fa-angle-right"></i>Marketing Flavour<span>4</span></a>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="fas fa-angle-right"></i>Optimization<span>3</span></a>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="fas fa-angle-right"></i>SEO<span>1</span></a>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="fas fa-angle-right"></i>SMM<span>7</span></a>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="fas fa-angle-right"></i>PPC<span>2</span></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="widget">

                                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8438942375783163"
                                            crossorigin="anonymous"></script>
                                    <!-- Blogsidebar -->
                                    <ins class="adsbygoogle"
                                         style="display:block"
                                         data-ad-client="ca-pub-8438942375783163"
                                         data-ad-slot="3485857471"
                                         data-ad-format="auto"
                                         data-full-width-responsive="true"></ins>
                                    <script>
                                        (adsbygoogle = window.adsbygoogle || []).push({});
                                    </script>
                                </div>
                                <div class="widget">
                                    <h6 class="widget-title">Popular Posts</h6>
                                    <div class="media mb-3 border-bottom pb-3 border-color-extra-light-gray">
                                        <img class="me-3 border-radius-4" src="img/blog/insta-01.jpg" alt="...">
                                        <div class="media-body align-self-center">
                                            <h4 class="h6 mb-1"><a href="#!">Analysis tips you need to learn now.</a></h4>
                                            <a href="#!" class="small"><i class="far fa-calendar-check me-2"></i>Feb. 05, 2021</a>
                                        </div>
                                    </div>
                                    <div class="media mb-3 border-bottom pb-3 border-color-extra-light-gray">
                                        <img class="me-3 border-radius-4" src="img/blog/insta-02.jpg" alt="...">
                                        <div class="media-body align-self-center">
                                            <h4 class="h6 mb-1"><a href="#!">Instructions to choose the right SEO agency.</a></h4>
                                            <a href="#!" class="small"><i class="far fa-calendar-check me-2"></i>Jan. 28, 2021</a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img class="me-3 border-radius-4" src="img/blog/insta-03.jpg" alt="...">
                                        <div class="media-body align-self-center">
                                            <h4 class="h6 mb-1"><a href="#!">How to grow your business with SEo.</a></h4>
                                            <a href="#!" class="small"><i class="far fa-calendar-check me-2"></i>Jan. 18, 2021</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget">
                                    <h6 class="widget-title">Popular Tags</h6>
                                    <ul class="blog-tags ps-0">
                                        <li><a href="#!">SEO</a></li>
                                        <li><a href="#!">Analysis</a></li>
                                        <li><a href="#!">PPC</a></li>
                                        <li><a href="#!">Marketing</a></li>
                                        <li><a href="#!">SMM</a></li>
                                        <li><a href="#!">Digital</a></li>
                                        <li><a href="#!">Optimize</a></li>
                                        <li><a href="#!">Agency</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end blog right -->
                </div>
            </div>
        </section>
</x-app-layout>
