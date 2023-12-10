<div class="top-bar fl-wrap">
    <div class="container">
        <div class="date-holder">
            <span class="date_num"></span>
            <span class="date_mounth"></span>
            <span class="date_year"></span>
        </div>
        <div class="header_news-ticker-wrap">
            <div class="hnt_title"><a href="{{route('admin.get.login')}}" >Admin</a></div>

        </div>
        <ul class="topbar-social">
            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
        </ul>
    </div>
</div>
<!-- top bar end -->
<div class="header-inner fl-wrap">
    <div class="container">
        <!-- logo holder  -->
        <a href="index.html" class="logo-holder"><img src="images/logo.png" alt=""></a>
        <!-- logo holder end -->
        <div class="search_btn htact show_search-btn"><i class="far fa-search"></i> <span class="header-tooltip">Search</span></div>
        <div class="srf_btn htact show-reg-form">@if (auth()->check())
            {{-- User is authenticated --}}
          <a href="{{route('logout')}}" style="color: red;">logout</a>
        @else
            {{-- User is not authenticated --}}

            <a href="{{ route('user.getlogin') }}">Login</a>
        @endif<span class="header-tooltip">

        </span></div>
        <div class="show-cart sc_btn htact"><i class="fal fa-shopping-bag"></i><span class="show-cart_count">2</span><span class="header-tooltip">Your Cart</span></div>
        <!-- header-search-wrap -->
        <div class="header-search-wrap novis_sarch">
            <div class="widget-inner">
                <form action="#">
                    <input name="se" id="se" type="text" class="search" placeholder="Search..." value="" />
                    <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
                </form>
            </div>
        </div>
        <!-- header-search-wrap end -->
        <!-- header-cart_wrap  -->
        <div class="header-cart_wrap novis_cart">
            <div class="header-cart_title">Your Cart <span><strong>2</strong> items</span></div>
            <div class="header-cart_wrap_container fl-wrap">
                <div class="box-widget-content">
                    <div class="widget-posts fl-wrap">
                        <ol>
                            <li class="clearfix">
                                <a href="#" class="widget-posts-img"><img src="images/shop/1.jpg" class="respimg" alt=""></a>
                                <div class="widget-posts-descr">
                                    <a href="#" title="">Awesome Merch Wallet</a>
                                    <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $845</div>
                                </div>
                                <div class="clear-cart_button"><i class="far fa-times"></i></div>
                            </li>
                            <li class="clearfix">
                                <a href="#" class="widget-posts-img"><img src="images/shop/2.jpg" class="respimg" alt=""></a>
                                <div class="widget-posts-descr">
                                    <a href="#" title="">Gmag Merch Wallet</a>
                                    <div class="widget-posts-descr_calc clearfix">2 <span>x</span> $222</div>
                                </div>
                                <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="header-cart_wrap_total fl-wrap">
                <div class="header-cart_wrap_total_item">Subtotal : <span>$1559</span></div>
            </div>
            <div class="header-cart_wrap_footer fl-wrap">
                <a href="cart.html"> View Cart</a>
                <a href="checkout.html"> Checkout</a>
            </div>
        </div>
        <!-- header-cart_wrap end  -->
        <!-- nav-button-wrap-->
        <div class="nav-button-wrap">
            <div class="nav-button">
                <span></span><span></span><span></span>
            </div>
        </div>
        <!-- nav-button-wrap end-->
        <!--  navigation -->
        <div class="nav-holder main-menu">
            <nav>
                <ul>
                    <li>
                        <a href="#">Home <i class="fas fa-caret-down"></i></a>
                        <!--second level -->
                        <ul>
                            <li><a href="index.html">Slider</a></li>
                            <li><a href="index2.html">Carousel</a></li>
                            <li><a href="index3.html">Grid</a></li>
                        </ul>
                        <!--second level end-->
                    </li>
                    <li>
                        <a href="#" class="act-link">Posts<i class="fas fa-caret-down"></i></a>
                        <!--second level -->
                        <ul>
                            <li><a href="blog.html">List</a></li>
                            <li><a href="blog2.html">2 Sidebars</a></li>
                            <li><a href="blog3.html">Grid Sidebar</a></li>
                            <li><a href="blog4.html">Full Width Sidebar </a></li>
                            <li><a href="blog5.html">3 Columns Grid</a></li>
                            <li>
                                <a href="#">Single<i class="fas fa-caret-down"></i></a>
                                <!--second level -->
                                <ul>
                                    <li><a href="post-single.html">Style 1</a></li>
                                    <li><a href="post-single2.html">Style 2</a></li>
                                </ul>
                                <!--second level end-->
                            </li>
                        </ul>
                        <!--second level end-->
                    </li>
                    <li><a href="blog.html">Business</a></li>
                    <li><a href="blog.html">Technology</a></li>


                </ul>
            </nav>
        </div>
        <!-- navigation  end -->
    </div>
</div>
