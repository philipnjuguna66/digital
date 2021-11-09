<x-app-layout>
    @section('title','SEO Nairobi, Nairobi SEO Marketing and Branding Company & Nairobi web Design')
    @section('description','The Digital Marketing Kenya will improve your website’s organic rankings using proven, white-hat SEO tactics. We help you grow your business online. Call for a Free Quote!')

    @section('metas')
        @og('title','SEO Nairobi • Local, Nairobi SEO Company & Nairobi web Design')
        @og('description','The Digital Marketing Kenya will improve your website’s organic rankings using proven, white-hat SEO tactics. We help you grow your business online. Call for a Free Quote!')
        @twitter('title','SEO Nairobi • Local, Nairobi SEO Company & Nairobi web Design')
        @twitter('description','The Digital Marketing Kenya will improve your website’s organic rankings using proven, white-hat SEO tactics. We help you grow your business online. Call for a Free Quote!')
    @endsection


    <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section top-position bg-primary">
            <div class="container z-index-1 position-relative">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>Blog List</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="mb-0 ps-0">
                            <li><a href="{{ url('/')  }}">Home</a></li>
                            <li><a class="dot-divider"></a></li>
                            <li><a href="#!">Blog List</a></li>
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

        <!-- BLOG LIST
        ================================================== -->
        <section class="blog-list">
            <div class="container">
                <div class="row">
                    <!-- blog left -->
                    <div class="col-lg-8 col-md-12 mb-6 mb-lg-0">
                        <div class="row">

                            @foreach($blogs as $blog)
                                <div class="col-lg-12 mb-1-6 mb-md-1-9">
                                    <article class="card card-style2 border-none">
                                        <div class="card-img">
                                            <img src="{{ $blog->featured_image}}" alt="{{ $blog->title }}">
                                        </div>
                                        <div class="blog-info-tag">
                                            <div class="text-end"><a href="#!" class="bg-light-pink">Optimization</a></div>
                                        </div>
                                        <div class="card-body">
                                            <small class="font-weight-500">05 Feb. 2021</small>
                                            <h3 class="h4 mt-2 mb-3"><a href="{{ route('blog.show' , ['blog' => $blog->slug]) }}">{{ $blog->title }}</a></h3>
                                            <p class="mb-3">
                                                {{ strip_tags($blog->excerpt) }}
                                            </p>

                                            @if($loop->iteration == 4)
                                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8438942375783163"
                                                        crossorigin="anonymous"></script>
                                                <ins class="adsbygoogle"
                                                     style="display:block; text-align:center;"
                                                     data-ad-layout="in-article"
                                                     data-ad-format="fluid"
                                                     data-ad-client="ca-pub-8438942375783163"
                                                     data-ad-slot="5074880126"></ins>
                                                <script>
                                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                                </script>
                                            @endif
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                            {!! $blogs->links()  !!}

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
                            </div>

                        </div>
                    </div>
                    <!-- end blog right -->
                </div>
            </div>
        </section>
</x-app-layout>
