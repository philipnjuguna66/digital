<x-app-layout>
    @section('title','Nairobi web developers and Seo Ex[perts')
    @section('description','Professional Nairobi Web design  and SEO Company with over 5 years of experience in web design &amp; development & SEO')


    @section('metas')
        @og('description','Professional Nairobi Web design  and SEO Company with over 5 years of experience in web design &amp; development & SEO')
        @twitter('description','Professional Nairobi Web design  and SEO Company with over 5 years of experience in web design &amp; development & SEO')
        @og('title','Nairobi web developers and Seo Ex[perts')
        @twitter('title','Nairobi web developers and Seo Experts')
        @article('modified_time', now()->startOfMonth())
@endsection


<!-- PAGE TITLE
      ================================================== -->
    <section class="page-title-section top-position bg-primary">
        <div class="container z-index-1 position-relative">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1>NAIROBI WEB DESIGN & DEVELOPMENT</h1>
                </div>
                <div class="col-md-12">
                    <ul class="mb-0 ps-0">
                        <li><a href="#!">
                                NAIROBI WEB DESIGN, WORDPRESS, ECOMMERCE AND INTERNET MARKETING.
                            </a></li>
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

    <!-- SEO OPTIMIZATION
    ================================================== -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-1-9 mb-md-2-5 mb-lg-0">
                    <img src="{{ asset('img/content/seo-optimization-01.svg') }}" alt="...">
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-1-9">
                        <h2 class="h1 mb-1-6">
                            BUILDING NAIROBI WEBSITES THAT CONVERT
                        </h2>
                        <p class="alt-font font-weight-600 mb-1-6">
                            Your Nairobi company need a website. However, a website isn't enough.
                            You'll need a website that looks beautiful, is mobile-friendly,
                            is simple to maintain, and converts visitors.
                            That is exactly what our web design team can provide.
                        </p>
                        <p class="alt-font font-weight-600 mb-1-6">
                            We specialize in practical, user-friendly websites, world-class internet lead generation,
                            and digital marketing that spreads your brand to the digital world –
                            each with a goal on achieving immediate financial results.
                        </p>
                        <p class="alt-font font-weight-600 mb-1-6">
                            We collaborate with you during the the development,
                            listening to your ideas and designing the precise website you desire.
                        </p>
                        <p class="alt-font font-weight-600 mb-1-6">
                            Call us today: {{ setting('tel','254 787 698173') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US
    ================================================== -->
    <section class="pt-10  bg-primary">
        <div class="container">
            <div class="section-heading mb-2-3 mb-lg-2-9 wow fadeInDown" data-wow-delay=".2s">
                <h2 class="text-white mb-4"><span>Why Digital Marketing Kenya Web Design Services?</span></h2>
                <p class="mb-0 text-white ">
                    Every Nairobi company is unique, as are their website requirements.
                    Your website will be custom-made to fit the requirements of the business.
                    We do not use templates and all of our Nairobi sites are mobile-friendly.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-1-9 mb-md-2-5 mb-lg-0 wow fadeInUp" data-wow-delay=".2s">
                    {{--<div class="process-wrapper">
                        <div class="process-icon">
                            <img class="mx-auto d-block w-60 w-sm-70 w-md-65 w-lg-70" src="img/icons/icon-04.svg"
                                 alt="...">
                            <span class="process-steps">01</span>
                        </div>
                    </div>--}}
                    <div class="text-center">
                        <h3 class="text-white h5 mb-3">01.SCHEDULE A CALL</h3>
                        <p class="text-white mb-0">
                            When you're not getting the Google rankings and company success you expect,
                            it's time to consult with an SEO expert.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-1-9 mb-md-2-5 mb-lg-0 wow fadeInUp" data-wow-delay=".4s">
                    {{-- <div class="process-wrapper">
                         <div class="process-icon process-border">
                             <img class="mx-auto d-block w-60 w-sm-70 w-md-65 w-lg-70" src="img/icons/icon-05.svg"
                                  alt="...">
                             <span class="process-steps">02</span>
                         </div>
                     </div>--}}
                    <div class="text-center">
                        <h3 class="text-white h5 mb-3">02. CUSTOM STRATEGY</h3>
                        <p class="text-white mb-0">Discuss your objectives on the call. Before you hang up,
                            you'll have the blueprint for a plan that will propel you to the top of the search results.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-1-9 mb-md-0 wow fadeInUp" data-wow-delay=".6s">
                    {{--<div class="process-wrapper">
                        <div class="process-icon process-border">
                            <img class="mx-auto d-block w-60 w-sm-70 w-md-65 w-lg-70" src="img/icons/icon-06.svg"
                                 alt="...">
                            <span class="process-steps">03</span>
                        </div>
                    </div>--}}
                    <div class="text-center">
                        <h3 class="text-white h5 mb-3">03. Start Optimize</h3>
                        <p class="text-white mb-0">
                            Begin creating more traffic and interest in your company. It's the year 2021, and it's time to see a favorable return on your investment.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    {{--<div class="process-wrapper">
                        <div class="process-icon process-border">
                            <img class="mx-auto d-block w-60 w-sm-70 w-md-65 w-lg-70" src="img/icons/icon-07.svg"
                                 alt="...">
                            <span class="process-steps">04</span>
                        </div>
                    </div>--}}
                    <div class="text-center">
                        <h3 class="text-white h5 mb-3">04. Reach Target</h3>
                        <p class="text-white mb-0">Build up a promoting technique to build brand and arrive at your
                            target.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- EXTRA
    ================================================== -->
    <section class="bg-img bg-inverse position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-1-9 mb-md-2-5 mb-lg-0">
                    <img src="{{ asset('img/content/seo-optimization-03.svg') }}" alt="...">
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-2-5">
                        <div class="p-1-9 p-sm-2-5 bg-white rounded">
                            <h3 class="h4 mb-1-9">Want free Nairobi Website design quotes?</h3>

                            <livewire:site.contact-form/>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="home_bubble">
            <div class="square-shape2"></div>
            <div class="bubble b_three"></div>
            <div class="square-shape1 d-none d-sm-block"></div>
            <div class="bubble b_six d-none d-sm-block"></div>
        </div>
    </section>


</x-app-layout>
