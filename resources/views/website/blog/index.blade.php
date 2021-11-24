@extends('layout.front_layout')

@section('title','Blog')


@section('content')
    <!-- start of breadcumb-section -->
    <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2>Blog</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><span>Blog</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-shape-img-1"><img src="{{asset('assets-front/images/slider/img-2.png')}}" alt=""></div>
            <div class="hero-shape-img-2"><img src="{{asset('assets-front/images/slider/img-3.png')}}" alt=""></div>
        </div>
        <!-- end of tp-breadcumb-section-->


        <!-- start blog-pg-section -->
        <section class="blog-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-12">
                        <div class="blog-posts clearfix">
                            <div class="post">
                                <div class="entry-media">
                                    <img src="{{asset('assets-front/images/blog/img-7.jpg')}}" alt>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="{{asset('assets-front/images/blog/author.jpg')}}" alt>
                                            &nbsp; By <a href="#">Lily Anne</a>
                                        </li>
                                        <li>January 12,2021</li>
                                    </ul>
                                    <h3><a href="#">How to get more traffic in your website of ecommerce</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum, you need to be sure there isn't </p>
                                    <a href="#" class="read-more">Read More..</a>
                                </div>
                            </div>
                            <div class="post">
                                <div class="entry-media">
                                    <img src="{{asset('assets-front/images/blog/img-8.jpg')}}" alt>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="{{asset('assets-front/images/blog/author.jpg')}}" alt>
                                            &nbsp; By <a href="#">Lily Anne</a>
                                        </li>
                                        <li>January 12,2021</li>
                                    </ul>
                                    <h3><a href="#">25 Rules and regulation to be successful in your business.</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum, you need to be sure there isn't </p>
                                    <a href="#" class="read-more">Read More..</a>
                                </div>
                            </div>
                            <div class="post format-video">
                                <div class="entry-media video-holder">
                                    <img src="{{asset('assets-front/images/blog/img-9.jpg')}}" alt>
                                    <a href="https://www.youtube.com/embed/Z54bL6kjyOI" class="video-btn"
                                        data-type="iframe">
                                        <i class="ti-control-play"></i>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="{{asset('assets-front/images/blog/author.jpg')}}" alt>
                                            &nbsp; By <a href="#">Lily Anne</a>
                                        </li>
                                        <li>January 12,2021</li>
                                    </ul>
                                    <h3><a href="#">We automatically search for and apply coupons when.</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum, you need to be sure there isn't </p>
                                    <a href="#" class="read-more">Read More..</a>
                                </div>
                            </div>
                            <div class="post format-quote">
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="{{asset('assets-front/images/blog/author.jpg')}}" alt>
                                            &nbsp; By <a href="#">Lily Anne</a>
                                        </li>
                                        <li>January 12,2021</li>
                                    </ul>
                                    <h3><a href="#">25 Rules and regulation to be successful in your business.</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum, you need to be sure there isn't </p>
                                    <a href="#" class="read-more">Read More..</a>
                                </div>
                            </div>
                            <div class="post">
                                <div class="entry-media">
                                    <img src="{{asset('assets-front/images/blog/img-10.jpg')}}" alt>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li>
                                            <img src="{{asset('assets-front/images/blog/author.jpg')}}" alt>
                                            &nbsp; By <a href="#">Lily Anne</a>
                                        </li>
                                        <li>January 12,2021</li>
                                    </ul>
                                    <h3><a href="#">How to get more traffic in your website of ecommerce</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum, you need to be sure there isn't </p>
                                    <a href="#" class="read-more">Read More..</a>
                                </div>
                            </div>
                            <div class="pagination-wrapper pagination-wrapper-left">
                                <ul class="pg-pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="ti-arrow-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-12">
                        <div class="blog-sidebar">
                            <div class="widget search-widget">
                                <h3>Search</h3>
                                <form>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="widget category-widget">
                                <h3>Categories</h3>
                                <ul>
                                    <li><a href="#">Queen Bee Honey <span>(10)</span></a></li>
                                    <li><a href="#">Sunflower Honey <span>(07)</span></a></li>
                                    <li><a href="#">Manuka Honey <span>(09)</span></a></li>
                                    <li><a href="#">Wildflower Honey <span>(11)</span></a></li>
                                    <li><a href="#">Mango Flower Honey <span>(18)</span></a></li>
                                    <li><a href="#">Mustard Flower Honey <span>(17)</span></a></li>
                                </ul>
                            </div>
                            <div class="widget recent-post-widget">
                                <h3>Recent post</h3>
                                <div class="posts">
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{asset('assets-front/images/recent-posts/img-1.jpg')}}" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Actual teachings of the great explorer of the truth.</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{asset('assets-front/images/recent-posts/img-2.jpg')}}" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">The truth, the master-builder of human happiness</a></h4>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{asset('assets-front/images/recent-posts/img-3.jpg')}}" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Explorer of the truth, the master-builder of human
                                                    happiness</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget tag-widget">
                                <h3>Tags</h3>
                                <ul>
                                    <li><a href="#">Flower</a></li>
                                    <li><a href="#">Hill</a></li>
                                    <li><a href="#">Honey</a></li>
                                    <li><a href="#">Forest</a></li>
                                    <li><a href="#">Queen</a></li>
                                    <li><a href="#">Manuka</a></li>
                                    <li><a href="#">Mango</a></li>
                                    <li><a href="#">Raw</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-pg-section -->
@endsection

@section('page_style')

@endsection