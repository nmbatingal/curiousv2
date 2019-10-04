<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">

    @yield('styles')

</head>
<body>
    <div id="app" class="super_container">

        <!-- Header -->

        <header class="header">
            <!-- Top Bar -->
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <ul class="top_bar_contact_list">
                                        <li><div class="question">Have any questions?</div></li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <div>001-1234-88888</div>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <div>info.deercreative@gmail.com</div>
                                        </li>
                                    </ul>
                                    <div class="top_bar_login ml-auto">
                                        @guest
                                            @if (!Route::is('login') && !Route::is('register'))
                                                <div class="login_button"><a href="{{ route('login') }}">Register or Login</a></div>
                                            @endif
                                        @else
                                            <div class="login_button dropdown">
                                                <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="{{ route('admin.index') }}">Admin settings</a>
                                                    <a class="dropdown-item" href="{{ route('researcher.index', auth()->user()->id) }}">My Research</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                </div>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        @endguest
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>				
            </div>
    
            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="#">
                                        <div class="logo_text">Unic<span>at</span></div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li class="active"><a href="#">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="#">Page</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Header Search Panel -->
            <div class="header_search_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                                <form action="#" class="header_search_form">
                                    <input type="search" class="search_input" placeholder="Search" required="required">
                                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>			
            </div>			
        </header>

        <!-- Home -->

        <div class="home">
            <div class="home_slider_container">
                
                <!-- Home Slider -->
                <div class="owl-carousel owl-theme home_slider">
                    
                    <!-- Home Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                        <div class="home_slider_content">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <div class="home_slider_title">The Premium System Education</div>
                                        <div class="home_slider_subtitle">Future Of Education Technology</div>
                                        <div class="home_slider_form_container">
                                            <form action="#" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                                <div class="d-flex flex-row align-items-center justify-content-start">
                                                    <input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
                                                    <select class="dropdown_item_select home_search_input">
                                                        <option>Category Courses</option>
                                                        <option>Category</option>
                                                        <option>Category</option>
                                                    </select>
                                                    <select class="dropdown_item_select home_search_input">
                                                        <option>Select Price Type</option>
                                                        <option>Price Type</option>
                                                        <option>Price Type</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="home_search_button">search</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Home Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                        <div class="home_slider_content">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <div class="home_slider_title">The Premium System Education</div>
                                        <div class="home_slider_subtitle">Future Of Education Technology</div>
                                        <div class="home_slider_form_container">
                                            <form action="#" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                                <div class="d-flex flex-row align-items-center justify-content-start">
                                                    <input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
                                                    <select class="dropdown_item_select home_search_input">
                                                        <option>Category Courses</option>
                                                        <option>Category</option>
                                                        <option>Category</option>
                                                    </select>
                                                    <select class="dropdown_item_select home_search_input">
                                                        <option>Select Price Type</option>
                                                        <option>Price Type</option>
                                                        <option>Price Type</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="home_search_button">search</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Home Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                        <div class="home_slider_content">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <div class="home_slider_title">The Premium System Education</div>
                                        <div class="home_slider_subtitle">Future Of Education Technology</div>
                                        <div class="home_slider_form_container">
                                            <form action="#" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                                <div class="d-flex flex-row align-items-center justify-content-start">
                                                    <input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
                                                    <select class="dropdown_item_select home_search_input">
                                                        <option>Category Courses</option>
                                                        <option>Category</option>
                                                        <option>Category</option>
                                                    </select>
                                                    <select class="dropdown_item_select home_search_input">
                                                        <option>Select Price Type</option>
                                                        <option>Price Type</option>
                                                        <option>Price Type</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="home_search_button">search</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Home Slider Nav -->

            <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        </div>

        <!-- Features -->

        <div class="features">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <h2 class="section_title">Welcome To Unicat E-Learning</h2>
                            <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
                        </div>
                    </div>
                </div>
                <div class="row features_row">
                    
                    <!-- Features Item -->
                    <div class="col-lg-3 feature_col">
                        <div class="feature text-center trans_400">
                            <div class="feature_icon"><img src="images/icon_1.png" alt=""></div>
                            <h3 class="feature_title">The Experts</h3>
                            <div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
                        </div>
                    </div>

                    <!-- Features Item -->
                    <div class="col-lg-3 feature_col">
                        <div class="feature text-center trans_400">
                            <div class="feature_icon"><img src="images/icon_2.png" alt=""></div>
                            <h3 class="feature_title">Book & Library</h3>
                            <div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
                        </div>
                    </div>

                    <!-- Features Item -->
                    <div class="col-lg-3 feature_col">
                        <div class="feature text-center trans_400">
                            <div class="feature_icon"><img src="images/icon_3.png" alt=""></div>
                            <h3 class="feature_title">Best Courses</h3>
                            <div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
                        </div>
                    </div>

                    <!-- Features Item -->
                    <div class="col-lg-3 feature_col">
                        <div class="feature text-center trans_400">
                            <div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
                            <h3 class="feature_title">Award & Reward</h3>
                            <div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- About -->

        <div class="about mt-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <h2 class="section_title">Welcome To Unicat E-Learning</h2>
                            <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu Vestibulum</p></div>
                        </div>
                    </div>
                </div>
                <div class="row about_row">
                    
                    <!-- About Item -->
                    <div class="col-lg-4 about_col about_col_left">
                        <div class="about_item">
                            <div class="about_item_image"><img src="images/about_1.jpg" alt=""></div>
                            <div class="about_item_title"><a href="#">Our Stories</a></div>
                            <div class="about_item_text">
                                <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim en consectet adipisi elit, sed do consectet adipisi elit, sed doadesg.</p>
                            </div>
                        </div>
                    </div>

                    <!-- About Item -->
                    <div class="col-lg-4 about_col about_col_middle">
                        <div class="about_item">
                            <div class="about_item_image"><img src="images/about_2.jpg" alt=""></div>
                            <div class="about_item_title"><a href="#">Our Mission</a></div>
                            <div class="about_item_text">
                                <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim en consectet adipisi elit, sed do consectet adipisi elit, sed doadesg.</p>
                            </div>
                        </div>
                    </div>

                    <!-- About Item -->
                    <div class="col-lg-4 about_col about_col_right">
                        <div class="about_item">
                            <div class="about_item_image"><img src="images/about_3.jpg" alt=""></div>
                            <div class="about_item_title"><a href="#">Our Vision</a></div>
                            <div class="about_item_text">
                                <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim en consectet adipisi elit, sed do consectet adipisi elit, sed doadesg.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    
        <!-- /.container -->
        @yield('content')

        <!-- Latest News -->

        <div class="news">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <h2 class="section_title">Latest News</h2>
                            <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
                        </div>
                    </div>
                </div>
                <div class="row news_row">
                    <div class="col-lg-7 news_col">
                        
                        <!-- News Post Large -->
                        <div class="news_post_large_container">
                            <div class="news_post_large">
                                <div class="news_post_image"><img src="images/news_1.jpg" alt=""></div>
                                <div class="news_post_large_title"><a href="blog_single.html">Here’s What You Need to Know About Online Testing for the ACT and SAT</a></div>
                                <div class="news_post_meta">
                                    <ul>
                                        <li><a href="#">admin</a></li>
                                        <li><a href="#">november 11, 2017</a></li>
                                    </ul>
                                </div>
                                <div class="news_post_text">
                                    <p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take. Can America learn anything from other nations...</p>
                                </div>
                                <div class="news_post_link"><a href="blog_single.html">read more</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 news_col">
                        <div class="news_posts_small">

                            <!-- News Posts Small -->
                            <div class="news_post_small">
                                <div class="news_post_small_title"><a href="blog_single.html">Home-based business insurance issue (Spring 2017 - 2018)</a></div>
                                <div class="news_post_meta">
                                    <ul>
                                        <li><a href="#">admin</a></li>
                                        <li><a href="#">november 11, 2017</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- News Posts Small -->
                            <div class="news_post_small">
                                <div class="news_post_small_title"><a href="blog_single.html">2018 Fall Issue: Credit Card Comparison Site Survey (Summer 2018)</a></div>
                                <div class="news_post_meta">
                                    <ul>
                                        <li><a href="#">admin</a></li>
                                        <li><a href="#">november 11, 2017</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- News Posts Small -->
                            <div class="news_post_small">
                                <div class="news_post_small_title"><a href="blog_single.html">Cuentas de cheques gratuitas una encuesta de Consumer Action</a></div>
                                <div class="news_post_meta">
                                    <ul>
                                        <li><a href="#">admin</a></li>
                                        <li><a href="#">november 11, 2017</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- News Posts Small -->
                            <div class="news_post_small">
                                <div class="news_post_small_title"><a href="blog_single.html">Troubled borrowers have fewer repayment or forgiveness options</a></div>
                                <div class="news_post_meta">
                                    <ul>
                                        <li><a href="#">admin</a></li>
                                        <li><a href="#">november 11, 2017</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
            <div class="container">
                <div class="row footer_row">
                    <div class="col">
                        <div class="footer_content">
                            <div class="row">

                                <div class="col-lg-3 footer_col">
                        
                                    <!-- Footer About -->
                                    <div class="footer_section footer_about">
                                        <div class="footer_logo_container">
                                            <a href="#">
                                                <div class="footer_logo_text">Unic<span>at</span></div>
                                            </a>
                                        </div>
                                        <div class="footer_about_text">
                                            <p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="footer_social">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="col-lg-3 footer_col">
                        
                                    <!-- Footer Contact -->
                                    <div class="footer_section footer_contact">
                                        <div class="footer_title">Contact Us</div>
                                        <div class="footer_contact_info">
                                            <ul>
                                                <li>Email: Info.deercreative@gmail.com</li>
                                                <li>Phone:  +(88) 111 555 666</li>
                                                <li>40 Baria Sreet 133/2 New York City, United States</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="col-lg-3 footer_col">
                        
                                    <!-- Footer links -->
                                    <div class="footer_section footer_links">
                                        <div class="footer_title">Contact Us</div>
                                        <div class="footer_links_container">
                                            <ul>
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="#">Features</a></li>
                                                <li><a href="courses.html">Courses</a></li>
                                                <li><a href="#">Events</a></li>
                                                <li><a href="#">Gallery</a></li>
                                                <li><a href="#">FAQs</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="col-lg-3 footer_col clearfix">
                        
                                    <!-- Footer links -->
                                    <div class="footer_section footer_mobile">
                                        <div class="footer_title">Mobile</div>
                                        <div class="footer_mobile_content">
                                            <div class="footer_image"><a href="#"><img src="images/mobile_1.png" alt=""></a></div>
                                            <div class="footer_image"><a href="#"><img src="images/mobile_2.png" alt=""></a></div>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row copyright_row">
                    <div class="col">
                        <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
                            <div class="cr_text">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy; 2019. All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                            <div class="ml-lg-auto cr_links">
                                <ul class="cr_list">
                                    <li><a href="#">Copyright notification</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/custom.js') }}" defer></script>
    @stack('scripts')

</body>
</html>
