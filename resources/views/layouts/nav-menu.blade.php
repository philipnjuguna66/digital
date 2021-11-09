<header class="header-style1 menu_area-light">

    <div class="navbar-default">

        <!-- start top search -->
        <div class="top-search bg-primary">
            <div class="container">
                <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                    <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                                </span>
                        <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                        <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- end top search -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">

                            <div class="navbar-header navbar-header-custom">
                                <!-- start logo -->
                                <a href="{{ route('home') }}" class="navbar-brand"><img id="logo" src="img/logos/logo-inner.png" alt="logo"></a>
                                <!-- end logo -->
                            </div>

                            <div class="navbar-toggler"></div>

                            <!-- menu area -->
                            <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about_us') }}">Home</a></li>

                                <li><a href="#!">Services</a>
                                    <ul>
                                        <li><a href="{{ route('seo_optimization') }}">SEO Optimization</a></li>
                                        <li><a href="{{ route('seo_marketing') }}">SEO Marketing</a></li>
                                        <li><a href="{{ route('web_design') }}">Web Design</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{ route('blog') }}">Home</a></li>

                                <li><a href="{{ route('contact_us') }}">Contacts</a></li>
                            </ul>
                            <!-- end menu area -->

                            <!-- start attribute navigation -->
                            <div class="attr-nav">
                                <ul>
                                    <li class="search"><a href="#!"><i class="fas fa-search"></i></a></li>
                                </ul>
                            </div>
                            <!-- end attribute navigation -->

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
