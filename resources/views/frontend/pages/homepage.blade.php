@extends('frontend.master')
@section('content')
<div class="content">

    <!--section   -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main-container fl-wrap fix-container-init">
                        <div class="section-title">
                            <h2>Most Recent World News</h2>
                            <h4>Don't miss daily news</h4>

                        </div>
                        <div class="list-post-wrap">
                           @forelse ( $posts as $post )
                           <div class="list-post fl-wrap">
                            <div class="list-post-media">



                                <a href="{{route('singleBlog', $post->id)}}">
                                    <div class="bg-wrap">
                                        <div class="bg" data-bg="{{ asset('upload/post/' . $post->image) }}"></div>
                                    </div>
                                </a>
                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                            </div>
                            <div class="list-post-content">
                                <a class="post-category-marker" href="{{route('categoryWisePost', $post->id)}}">{{$post->Categories->name}}</a>
                                <h3><a href="{{route('singleBlog', $post->id)}}">{{$post->title}}</a></h3>
                                <span class="post-date"><i class="far fa-clock"></i> {{date ('M j, Y h:ia', strtotime($post->created_at))}}</span>
                                <a href="{{route('singleBlog', $post->id)}}">
                                <p>{!!$post->content!!} </p>
                                </a><span ><a style= "color:red;" href="{{route('singleBlog', $post->id)}}">Readmore</a></span>
                                <ul class="post-opt">
                                    {{-- <li><i class="far fa-comments-alt"></i> {{$post->comments->count()}}  </li> --}}
                                    <li><i class="fal fa-eye"></i>{{$post->count}}</li>
                                </ul>

                            </div>
                        </div>
                           @empty
                            <p>no post yet</p>
                           @endforelse

                            <!--list-post end-->
                        </div>

                        <!--pagination-->
                        <div class="pagination">
                            {{ $posts->links() }}

                        </div>
                        <!--pagination end-->
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
                                        @foreach ($sidepost as  $post)

                                        <div class="bg  " data-bg="{{ asset('upload/post/' . $post->image) }}"></div>
                                    </div>
                                    <div class="banner-widget_content">


                                        <h5>{{$post->title}}</h5>
                                        <a href="#" class="btn float-btn color-bg small-btn">Read</a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- box-widget  end -->
                        <!-- box-widget -->
                        <div class="box-widget fl-wrap">
                            <div class="widget-title">Categories</div>
                            <div class="box-widget-content">
                                <ul class="cat-wid-list">
                                    @forelse ($categories as $category )
                                    <li><a href="{{route('categoryWisePost', [$category->id])}}">{{$category->name}}</a></li>
                                    @empty
                                              <p>no categories</p>
                                    @endforelse


                                </ul>
                            </div>
                        </div>
                        <!-- box-widget  end -->
                        <!-- box-widget -->
                        <div class="box-widget fl-wrap">
                            <div class="widget-title">Popular Tags</div>
                            <div class="box-widget-content">
                                <div class="tags-widget">
                                    @forelse ( $tags as $tag )
                                    <a href="#">{{$tag->name}}</a>
                                    @empty
                               <p>not tag </p>
                                    @endforelse


                                </div>
                            </div>
                        </div>
                        <!-- box-widget  end -->
                        <!-- box-widget -->

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
@endsection
