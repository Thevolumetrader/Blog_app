@extends('frontend.master')
@section('content')
<div id="wrapper">
    <!-- content    -->
    <div class="content">
        <div class="breadcrumbs-header fl-wrap">
            <div class="container">
                <div class="breadcrumbs-header_url">
                    <a href="#">Home</a><span>Blog List style</span>
                </div>
                <div class="scroll-down-wrap">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                    <span>Scroll Down To Discover</span>
                </div>
            </div>
            <div class="pwh_bg"></div>
        </div>
        <!--section   -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="main-container fl-wrap fix-container-init">
                            <!-- single-post-header  -->
                            <div class="single-post-header fl-wrap">
                                <a class="post-category-marker" href="category.html">Technology</a>
                                <div class="clearfix"></div>
                                <h1>{{$post->title}}</h1>

                                <div class="clearfix"></div>
                                <div class="author-link"><a href="author-single.html"><img src="images/avatar/2.jpg" alt="">  <span>By Mark Rose</span></a></div>
                                <span class="post-date"><i class="far fa-clock"></i> 05 April 2022</span>
                                <ul class="post-opt">
                                    <li><i class="far fa-comments-alt"></i> {{$post->comments->count()}}</li>
                                    <li><i class="fal fa-eye"></i>  </li>
                                </ul>
                            </div>
                            <!-- single-post-header end   -->
                            <!-- single-post-media   -->
                            <div class="single-post-media fl-wrap">
                                <div class="single-slider-wrap fl-wrap">
                                    <div class="single-slider fl-wrap">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper lightgallery">
                                                <!-- swiper-slide   -->
                                                <div class="swiper-slide hov_zoom">
                                                    <img src="images/all/20.jpg" alt="">
                                                    <a href="images/all/20.jpg" class="box-media-zoom   popup-image"><i class="fas fa-search"></i></a>
                                                    <span class="post-media_title pmd_vis">© Image Copyrights Title</span>
                                                </div>
                                                <!-- swiper-slide end   -->
                                                <!-- swiper-slide   -->
                                                <div class="swiper-slide hov_zoom">
                                                    <img src="images/all/13.jpg" alt="">
                                                    <a href="images/all/13.jpg" class="box-media-zoom   popup-image"><i class="fas fa-search"></i></a>
                                                    <span class="post-media_title pmd_vis">© Image Copyrights Title</span>
                                                </div>
                                                <!-- swiper-slide end   -->
                                                <!-- swiper-slide   -->
                                                <div class="swiper-slide hov_zoom">
                                                    <img src="images/all/15.jpg" alt="">
                                                    <a href="images/all/15.jpg" class="box-media-zoom   popup-image"><i class="fas fa-search"></i></a>
                                                    <span class="post-media_title pmd_vis">© Image Copyrights Title</span>
                                                </div>
                                                <!-- swiper-slide end   -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ss-slider-controls2">
                                        <div class="ss-slider-pagination pag-style"></div>
                                    </div>
                                    <div class="ss-slider-cont ss-slider-cont-prev"><i class="fas fa-caret-left"></i></div>
                                    <div class="ss-slider-cont ss-slider-cont-next"><i class="fas fa-caret-right"></i></div>
                                </div>
                            </div>
                            <!-- single-post-media end   -->
                            <!-- single-post-content   -->
                            <div class="single-post-content spc_column fl-wrap">
                                <div class="single-post-content_column">

                                </div>
                                <div class="fs-wrap smpar fl-wrap">
                                    <div class="fontSize"><span class="fs_title">Font size: </span><input type="text" class="rage-slider" data-step="1" data-min="12" data-max="15" value="12"></div>
                                    <div class="show-more-snopt smact"><i class="fal fa-ellipsis-v"></i></div>
                                    <div class="show-more-snopt-tooltip">
                                        <a href="#comments" class="custom-scroll-link"> <i class="fas fa-comment-alt"></i> Write a Comment</a>
                                        <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                                    </div>
                                    <a class="print-btn" href="javascript:window.print()" data-microtip-position="bottom"><span>Print</span><i class="fal fa-print"></i></a>
                                </div>
                                <div class="clearfix"></div>
                                <div class="single-post-content_text" id="font_chage">



                                    <div class="single-post-content_text_media fl-wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="has-drop-cap">   {{$post->content}}</p>
                                            </div>
                                            <div class="col-md-6"><img src="images/all/18.jpg" alt="" class="respimg"></div>
                                        </div>
                                    </div>



                                </div>
                                <div class="single-post-footer fl-wrap">
                                    <div class="post-single-tags">
                                        <span class="tags-title"><i class="fas fa-tag"></i> Tags : </span>
                                        <div class="tags-widget">
                                            <a href="#">Science</a>
                                            <a href="#">Technology</a>
                                            <a href="#">Business</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-post-nav"   -->
                                <div class="single-post-nav fl-wrap">
                                    <a href="post-single.html" class="single-post-nav_prev spn_box">
                                        <div class="spn_box_img">
                                            <img src="images/all/2.jpg" class="respimg" alt="">
                                        </div>
                                        <div class="spn-box-content">
                                            <span class="spn-box-content_subtitle"><i class="fas fa-caret-left"></i> Prev Post</span>
                                            <span class="spn-box-content_title">New VR Glasses and Headset System Release</span>
                                        </div>
                                    </a>
                                    <a href="post-single.html" class="single-post-nav_next spn_box">
                                        <div class="spn_box_img">
                                            <img src="images/all/20.jpg" class="respimg" alt="">
                                        </div>
                                        <div class="spn-box-content">
                                            <span class="spn-box-content_subtitle">Next Post <i class="fas fa-caret-right"></i></span>
                                            <span class="spn-box-content_title">$310m to help businesses in latest Lockdow</span>
                                        </div>
                                    </a>
                                </div>
                                <!-- single-post-nav"  end   -->
                            </div>
                            <!-- single-post-content  end   -->
                            <div class="limit-box2 fl-wrap"></div>
                            <!-- post-author-->
                            <div class="post-author fl-wrap">
                                <div class="author-img">
                                    <img  src="images/avatar/2.jpg" alt="">
                                </div>
                                <div class="author-content fl-wrap">
                                    <h5>Written By <a href="author-single.html">Mark Rose</a></h5>
                                    <p>At one extremity the rope was unstranded, and the separate spread yarns were all braided and woven round the socket of the harpoon; the pole was then driven hard up into the socket..</p>
                                </div>

                            </div>
                            <!--post-author end-->
                            <div class="more-post-wrap  fl-wrap">
                                <div class="pr-subtitle prs_big">Related Posts</div>
                                <div class="list-post-wrap list-post-wrap_column fl-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!--list-post-->
                                            <div class="list-post fl-wrap">
                                                <a class="post-category-marker" href="category.html">Science</a>
                                                <div class="list-post-media">
                                                    <a href="post-single.html">
                                                        <div class="bg-wrap">
                                                            <div class="bg" data-bg="images/all/16.jpg"></div>
                                                        </div>
                                                    </a>
                                                    <span class="post-media_title">&copy; Image Copyrights Title</span>
                                                </div>
                                                <div class="list-post-content">
                                                    <h3><a href="post-single.html">How to start Home renovation.</a></h3>
                                                    <span class="post-date"><i class="far fa-clock"></i>  05 April 2022</span>
                                                </div>
                                            </div>
                                            <!--list-post end-->
                                        </div>
                                        <div class="col-md-6">
                                            <!--list-post-->
                                            <div class="list-post fl-wrap">
                                                <a class="post-category-marker" href="category.html">Sports</a>
                                                <div class="list-post-media">
                                                    <a href="post-single.html">
                                                        <div class="bg-wrap">
                                                            <div class="bg" data-bg="images/all/24.jpg"></div>
                                                        </div>
                                                    </a>
                                                    <span class="post-media_title">&copy; Image Copyrights Title</span>
                                                </div>
                                                <div class="list-post-content">
                                                    <h3><a href="post-single.html">Warriors face season defining clash</a></h3>
                                                    <span class="post-date"><i class="far fa-clock"></i> 11 March 2022</span>
                                                </div>
                                            </div>
                                            <!--list-post end-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--comments  -->
                            <div id="comments" class="single-post-comm fl-wrap">
                                <div class="pr-subtitle prs_big">Commnets <span>{{$post->comments->count()}}</span></div>
                                <ul class="commentlist clearafix">
                                    @forelse ($post->comments as $comment )
                                    <li class="comment">
                                        <div class="comment-author">
                                            <img alt="" src="https://ui-avatars.com/api/?name={{ strlen($comment->users->name) > 0 ? substr($comment->users->name, 0, 1) : '' }}" width="50" height="50">
                                        </div>

                                        <div class="comment-body smpar">

                                            <h4><a href="#">{{$comment->users->name}}  </a></h4>
                                            <div class="box-widget-menu-btn smact"><i class="far fa-ellipsis-h"></i></div>
                                            <div class="show-more-snopt-tooltip bxwt">
                                                <a href="#"> <i class="fas fa-reply"></i> Reply</a>

                                            </div>
                                            <div class="clearfix"></div>
                                            <p>{{$comment->comment}}</p>

                                            <div class="comment-meta"><i class="far fa-clock"></i>  {{$comment->created_at->diffForHumans()}}</div>
                                            <div class="comment-body_dec"></div>
                                        </div>

                                    </li>
                                    @empty
                                    <p class="text-danger" style="color:red;">No Comment</p>
                                  @endforelse

                                </ul>


                                <div id="addcom" class="clearafix">
                                    <div class="pr-subtitle"> Leave A Comment <i class="fas fa-caret-down"></i></div>
                                    <div class="comment-reply-form fl-wrap">
                                        <form id="commentForm" class="add-comment custom-form">
                                            @csrf
                                            <fieldset>
                                                <input type="hidden" name="posts_id" value="{{ $post->id }}">
                                                <textarea name="comment" placeholder="Your Comment:"></textarea>
                                            </fieldset>
                                            <button class="btn float-btn color-btn">  Submit Comment <i class="fas fa-caret-right"></i> </button>
                                        </form>
                                    </div>
                                </div>

                                <!--end respond-->
                            </div>
                            <!--comments end -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- sidebar   -->
                        <div class="sidebar-content fl-wrap fixed-bar">
                            <!-- box-widget -->
                            <div class="box-widget fl-wrap">
                                <div class="box-widget-content">
                                    <div class="search-widget fl-wrap">
                                        <form action="#">
                                            <input name="se" id="se12" type="text" class="search" placeholder="Search..." value="" />
                                            <button class="search-submit2" id="submit_btn12"><i class="far fa-search"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- box-widget  end -->
                            <!-- box-widget -->
                            <div class="box-widget fl-wrap">
                                <div class="box-widget-content">
                                    <div class="banner-widget fl-wrap">
                                        <div class="bg-wrap bg-parallax-wrap-gradien">
                                            <div class="bg  " data-bg="images/bg/7.jpg"></div>
                                        </div>
                                        <div class="banner-widget_content">
                                            <h5>Visit our awesome merch and souvenir online shop.</h5>
                                            <a href="#" class="btn float-btn color-bg small-btn">Our shop</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- box-widget  end -->
                            <!-- box-widget -->
                            <div class="box-widget fl-wrap">
                                <div class="widget-title">Categories</div>
                                <div class="box-widget-content">
                                    <ul class="cat-wid-list">
                                        <li><a href="#">Science</a><span>3</span></li>
                                        <li><a href="#">Politics</a> <span>6</span></li>
                                        <li><a href="#">Technology</a> <span>12</span></li>
                                        <li><a href="#">Sports</a> <span>4</span></li>
                                        <li><a href="#">Business</a> <span>22</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- box-widget  end -->
                            <!-- box-widget -->
                            <div class="box-widget fl-wrap">
                                <div class="widget-title">Popular Tags</div>
                                <div class="box-widget-content">
                                    <div class="tags-widget">
                                        <a href="#">Science</a>
                                        <a href="#">Politics</a>
                                        <a href="#">Technology</a>
                                        <a href="#">Business</a>
                                        <a href="#">Sports</a>
                                        <a href="#">Food</a>
                                    </div>
                                </div>
                            </div>
                            <!-- box-widget  end -->
                            <!-- box-widget -->
                            <div class="box-widget fl-wrap">
                                <div class="widget-title">Follow Us</div>
                                <div class="box-widget-content">
                                    <div class="social-widget">
                                        <a href="#" target="_blank" class="facebook-soc">
                                        <i class="fab fa-facebook-f"></i>
                                        <span class="soc-widget-title">Likes</span>
                                        <span class="soc-widget_counter">2640</span>
                                        </a>
                                        <a href="#" target="_blank" class="twitter-soc">
                                        <i class="fab fa-twitter"></i>
                                        <span class="soc-widget-title">Followers</span>
                                        <span class="soc-widget_counter">1456</span>
                                        </a>
                                        <a href="#" target="_blank" class="youtube-soc">
                                        <i class="fab fa-youtube"></i>
                                        <span class="soc-widget-title">Followers</span>
                                        <span class="soc-widget_counter">1456</span>
                                        </a>
                                        <a href="#" target="_blank" class="instagram-soc">
                                        <i class="fab fa-instagram"></i>
                                        <span class="soc-widget-title">Followers</span>
                                        <span class="soc-widget_counter">1456</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- box-widget  end -->
                            <!-- box-widget -->
                            <div class="box-widget fl-wrap">
                                <div class="box-widget-content">
                                    <!-- content-tabs-wrap -->
                                    <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                                        <div class="content-tabs fl-wrap">
                                            <ul class="tabs-menu fl-wrap no-list-style">
                                                <li class="current"><a href="#tab-popular"> Popular News </a></li>
                                                <li><a href="#tab-resent">Resent News</a></li>
                                            </ul>
                                        </div>
                                        <!--tabs -->
                                        <div class="tabs-container">
                                            <!--tab -->
                                            <div class="tab">
                                                <div id="tab-popular" class="tab-content first-tab">
                                                    <div class="post-widget-container fl-wrap">
                                                        <!-- post-widget-item -->
                                                        <div class="post-widget-item fl-wrap">
                                                            <div class="post-widget-item-media">
                                                                <a href="post-single.html"><img src="images/all/thumbs/1.jpg"  alt=""></a>
                                                            </div>
                                                            <div class="post-widget-item-content">
                                                                <h4><a href="post-single.html">How to start Home education.</a></h4>
                                                                <ul class="pwic_opt">
                                                                    <li><span><i class="far fa-clock"></i> 25 may 2022</span></li>
                                                                    <li><span><i class="far fa-comments-alt"></i> 12</span></li>
                                                                    <li><span><i class="fal fa-eye"></i> 654</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- post-widget-item end -->
                                                        <!-- post-widget-item -->
                                                        <div class="post-widget-item fl-wrap">
                                                            <div class="post-widget-item-media">
                                                                <a href="post-single.html"><img src="images/all/thumbs/2.jpg"  alt=""></a>
                                                            </div>
                                                            <div class="post-widget-item-content">
                                                                <h4><a href="post-single.html">The secret to moving this   screening.</a></h4>
                                                                <ul class="pwic_opt">
                                                                    <li><span><i class="far fa-clock"></i> 13 april 2021</span></li>
                                                                    <li><span><i class="far fa-comments-alt"></i> 6</span></li>
                                                                    <li><span><i class="fal fa-eye"></i> 1227</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- post-widget-item end -->
                                                        <!-- post-widget-item -->
                                                        <div class="post-widget-item fl-wrap">
                                                            <div class="post-widget-item-media">
                                                                <a href="post-single.html"><img src="images/all/thumbs/3.jpg"  alt=""></a>
                                                            </div>
                                                            <div class="post-widget-item-content">
                                                                <h4><a href="post-single.html">Fall ability to keep Congress on rails.</a></h4>
                                                                <ul class="pwic_opt">
                                                                    <li><span><i class="far fa-clock"></i> 02 December 2021</span></li>
                                                                    <li><span><i class="far fa-comments-alt"></i> 12</span></li>
                                                                    <li><span><i class="fal fa-eye"></i> 654</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- post-widget-item end -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--tab  end-->
                                            <!--tab -->
                                            <div class="tab">
                                                <div id="tab-resent" class="tab-content">
                                                    <div class="post-widget-container fl-wrap">
                                                        <!-- post-widget-item -->
                                                        <div class="post-widget-item fl-wrap">
                                                            <div class="post-widget-item-media">
                                                                <a href="post-single.html"><img src="images/all/thumbs/5.jpg"  alt=""></a>
                                                            </div>
                                                            <div class="post-widget-item-content">
                                                                <h4><a href="post-single.html">Magpie nesting zone sites.</a></h4>
                                                                <ul class="pwic_opt">
                                                                    <li><span><i class="far fa-clock"></i> 05 april 2021</span></li>
                                                                    <li><span><i class="far fa-comments-alt"></i> 16</span></li>
                                                                    <li><span><i class="fal fa-eye"></i> 727</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- post-widget-item end -->
                                                        <!-- post-widget-item -->
                                                        <div class="post-widget-item fl-wrap">
                                                            <div class="post-widget-item-media">
                                                                <a href="post-single.html"><img src="images/all/thumbs/6.jpg"  alt=""></a>
                                                            </div>
                                                            <div class="post-widget-item-content">
                                                                <h4><a href="post-single.html">Locals help create whole new community.</a></h4>
                                                                <ul class="pwic_opt">
                                                                    <li><span><i class="far fa-clock"></i> 22 march 2021</span></li>
                                                                    <li><span><i class="far fa-comments-alt"></i> 31</span></li>
                                                                    <li><span><i class="fal fa-eye"></i> 63</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- post-widget-item end -->
                                                        <!-- post-widget-item -->
                                                        <div class="post-widget-item fl-wrap">
                                                            <div class="post-widget-item-media">
                                                                <a href="post-single.html"><img src="images/all/thumbs/7.jpg"  alt=""></a>
                                                            </div>
                                                            <div class="post-widget-item-content">
                                                                <h4><a href="post-single.html">Tennis season still to proceed.</a></h4>
                                                                <ul class="pwic_opt">
                                                                    <li><span><i class="far fa-clock"></i> 06 December 2021</span></li>
                                                                    <li><span><i class="far fa-comments-alt"></i> 05</span></li>
                                                                    <li><span><i class="fal fa-eye"></i> 145</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- post-widget-item end -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--tab end-->
                                        </div>
                                        <!--tabs end-->
                                    </div>
                                    <!-- content-tabs-wrap end -->
                                </div>
                            </div>
                            <!-- box-widget  end -->
                        </div>
                        <!-- sidebar  end -->
                    </div>
                </div>
                <div class="limit-box fl-wrap"></div>
            </div>
        </section>
        <!-- section end -->
        <!-- section  -->
        <div class="gray-bg ad-wrap fl-wrap">
            <div class="content-banner-wrap">
                <img src="images/all/banner.jpg" class="respimg" alt="">
            </div>
        </div>
        <!-- section end -->
    </div>
    <!-- content  end-->
    <!-- footer -->
    <footer class="fl-wrap main-footer">
        <div class="container">
            <!-- footer-widget-wrap -->
            <div class="footer-widget-wrap fl-wrap">
                <div class="row">
                    <!-- footer-widget -->
                    <div class="col-md-4">
                        <div class="footer-widget">
                            <div class="footer-widget-content">
                                <a href="index.html" class="footer-logo"><img src="images/logo2.png" alt=""></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
                                <div class="footer-social fl-wrap">
                                    <ul>
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-md-2">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Categories </div>
                            <div class="footer-widget-content">
                                <div class="footer-list footer-box fl-wrap">
                                    <ul>
                                        <li> <a href="#">Politics</a></li>
                                        <li> <a href="#">Technology</a></li>
                                        <li> <a href="#">Business</a></li>
                                        <li> <a href="#">Sports</a></li>
                                        <li> <a href="#">Science</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-md-2">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Links</div>
                            <div class="footer-widget-content">
                                <div class="footer-list footer-box fl-wrap">
                                    <ul>
                                        <li> <a href="#">Home</a></li>
                                        <li> <a href="#">About</a></li>
                                        <li> <a href="#">Contacts</a></li>
                                        <li> <a href="#">News</a></li>
                                        <li> <a href="#">Shop</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-md-4">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Subscribe</div>
                            <div class="footer-widget-content">
                                <div class="subcribe-form fl-wrap">
                                    <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                    <form id="subscribe" class="fl-wrap">
                                        <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                        <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send </button>
                                        <label for="subscribe-email" class="subscribe-message"></label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                </div>
            </div>
            <!-- footer-widget-wrap end-->
        </div>
        <div class="footer-bottom fl-wrap">
            <div class="container">
                <div class="copyright"><span>&#169; Gmag 2022</span> . All rights reserved. </div>
                <div class="to-top"> <i class="fas fa-caret-up"></i></div>
                <div class="subfooter-nav">
                    <ul>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end-->
    <div class="aside-panel">
        <ul>
            <li> <a href="category.html"><i class="far  fa-podium"></i><span>Politics</span></a></li>
            <li> <a href="category.html"><i class="far fa-atom"></i><span>Technology</span></a></li>
            <li> <a href="category.html"><i class="far fa-user-chart"></i><span>Business</span></a></li>
            <li> <a href="category.html"><i class="far fa-tennis-ball"></i><span>Sports</span></a></li>
            <li> <a href="category.html"><i class="far fa-flask"></i><span>Science</span></a></li>
        </ul>
    </div>
</div>
<!-- wrapper end -->
<!--register form -->
<div class="main-register-container">
    <div class="reg-overlay close-reg-form"></div>
    <div class="main-register-holder">
        <div class="main-register-wrap fl-wrap">
            <div class="main-register_bg">
                <div class="bg-wrap">
                    <div class="bg par-elem "  data-bg="images/bg/1.jpg"></div>
                    <div class="overlay"></div>
                </div>
                <div class="mg_logo"><img src="images/logo2.png" alt=""></div>
            </div>
            <div class="main-register tabs-act fl-wrap">
                <ul class="tabs-menu">
                    <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                    <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                </ul>
                <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div>
                <!--tabs -->
                <div id="tabs-container">
                    <div class="tab">
                        <!--tab -->
                        <div id="tab-1" class="tab-content first-tab">
                            <div class="custom-form">
                                <form method="post" name="registerform">
                                    <label>Username or Email Address <span>*</span> </label>
                                    <input name="email" type="text" onClick="this.select()" value="">
                                    <label>Password <span>*</span> </label>
                                    <input name="password" type="password" onClick="this.select()" value="">
                                    <div class="filter-tags">
                                        <input id="check-a" type="checkbox" name="check" checked>
                                        <label for="check-a">Remember me</label>
                                    </div>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <button type="submit" class="log-submit-btn color-bg"><span>Log In</span></button>
                                </form>
                            </div>
                        </div>
                        <!--tab end -->
                        <!--tab -->
                        <div class="tab">
                            <div id="tab-2" class="tab-content">
                                <div class="custom-form">
                                    <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                        <label>Full Name <span>*</span> </label>
                                        <input name="name" type="text" onClick="this.select()" value="">
                                        <label>Email Address <span>*</span></label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password <span>*</span></label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn color-bg"><span>Register</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--tab end -->
                    </div>
                    <!--tabs end -->
                    <div class="log-separator fl-wrap"><span>or</span></div>
                    <div class="soc-log  fl-wrap">
                        <p>For faster login or register use your social account.</p>
                        <a href="#"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('child-scripts')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include SweetAlert2 via CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Your JavaScript -->
<script>
    $(document).ready(function () {
        // Handle form submission
        $('#commentForm').submit(function (e) {

            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: '{{ route('comments.store') }}',
                data: $(this).serialize(),
                success: function (response) {
                    // Clear the form
                    $('#commentForm')[0].reset();
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Comment posted successfully!',
                    });
                    // Append the new comment to the list
                    $('#commentList').append('<li>' + response.body + '</li>');
                },
                error: function (error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to post the comment. Login OR Register',
                    });

                    window.location.href = '{{ route('user.getlogin') }}';
                }
            });
        });

        // Load comments on page load
        loadComments();
    });

    function loadComments() {
        var postId = '{{ $post->id }}';

        $.ajax({
            type: 'GET',
            url: '/comments/' + postId,
            success: function (comments) {
                // Update the comments list
                $.each(comments, function (index, comment) {
                    $('#commentList').append('<li>' + comment.comment+ '</li>');
                });
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
</script>
@endpush
