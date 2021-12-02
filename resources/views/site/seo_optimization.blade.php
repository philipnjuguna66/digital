<x-app-layout>
    @section('title','Nairobi SEO Optimization')
    @section('description','Professional Nairobi Web design  and SEO Company with over 5 years of experience in web design &amp; development & SEO')


    @section('metas')
        @og('description','Professional Nairobi Web design  and SEO Company with over 5 years of experience in web design &amp; development & SEO')
        @twitter('description','Professional Nairobi Web design  and SEO Company with over 5 years of experience in web design &amp; development & SEO')
        @og('title','Nairobi SEO Optimization')
        @twitter('title','Nairobi SEO Optimization')
        @article('modified_time', now()->startOfMonth())
@endsection


<!-- PAGE TITLE
      ================================================== -->
    <section class="page-title-section top-position bg-primary">
        <div class="container z-index-1 position-relative">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1>What is SEO Optimization</h1>
                </div>
                <div class="col-md-12">
                    <ul class="mb-0 ps-0">
                        <li><a href="#!">
                                What is SEO Optimization
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
                            SEO is the process of optimizing a website to be able to rank higher in search engine results pages.
                        </h2>
                        <p class="alt-font font-weight-600 mb-1-6">
                            SEO Optimization has become increasingly important as more and more people are using the internet.
                            The goal of SEO optimization is to make sure that your
                            website ranks high on search engine results pages so that it can be seen by as many people as possible
                        </p>
                        <p class="alt-font font-weight-600 mb-1-6">
                            SEO optimization has been around for a while now.
                            In essence, it’s aimed at improving the visibility of websites on search engines like Google,
                            Yahoo, Bing and others. This is achieved by optimizing the content of your site to
                            improve its ranking with keywords that are relevant to your site niche.
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
                <h2 class="text-white mb-4"><span>Why SEO Optimization in Kenya ?</span></h2>
                <p class="mb-0 text-white ">
                    There are many reasons why SEO Optimization is so important.
                    It has become a necessity for any business that wants to grow.
                    The first reason why SEO Optimization is crucial is that it improves the visibility of your website on search engine results pages (SERPS).
                    When potential customers search for your business on Google, you want to show up at the top of the list.

                    A second reason is that more than 50% of people use a search engine as their preferred way to find a local company,
                    and this percentage is growing every day.
                    This means that if you're not showing up in these searches, you're going to miss out on a lot of potential customers

                    Whatever your industry may be, there's a good chance that someone will be searching for what you offer online.
                    In this case it
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
                            <h3 class="h4 mb-1-9">Want free Nairobi SEO Optimization design quotes?</h3>

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
