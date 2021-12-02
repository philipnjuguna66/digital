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
                            We are one of the best SEO agencies in Kenya. With over 2 years of experience, we have honed our craft to provide you with marketing services that will help you achieve your marketing goals.
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
    <section>
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="ps-lg-1-9">
                        <h2 class="h1 mb-1-6">
                            What is SEO MARKETING in Kenya?
                        </h2>
                        <p class="alt-font font-weight-600 mb-1-6">
                            This is a question many people ask, and can be hard to fully answer. But it's worth pointing out that there are many different types of SEO marketing campaigns, each with their own purpose.
                        </p>
                        <h3 class="h1 mb-1-6">
                            How long does it take for SEO to work?
                        </h3>

                        <p class="alt-font font-weight-600 mb-1-6">
                            Unfortunately, there's no definite answer for how long it will take SEO marketing to work.
                            There are many factors that affect how fast your site will rank higher on Google search results pages (SERPs). Some factors include how competitive your industry is, the quality of your content, and the number of backlinks you have.
                        </p>
                        <h3 class="h1 mb-1-6">
                            Types of SEO Marketing
                        </h3>

                        <p class="alt-font font-weight-600 mb-1-6">
                            There are three different types of SEO marketing campaigns:

                            - Black Hat - These are spammy backlink building techniques that violate Google's guidelines and penalize sites by putting them on the blacklist or blocking them entirely from indexing.

                            - Grey Hat - These are sorta shady tactics that crawl the line between ethical and </p>

                        <p class="alt-font font-weight-600 mb-1-6">
                            Call us today: {{ setting('tel','254 787 698173') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 mb-1-9 mb-md-2-5 mb-lg-0">
                    <img src="{{ asset('img/content/seo-optimization-01.svg') }}" alt="...">
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
