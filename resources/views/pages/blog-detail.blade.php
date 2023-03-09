@extends('layouts.guest')
@section('title','blog-detail')

<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url(../assets/img/banner/12.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>{{ Str::limit($blog->title,50) }}</h1>
                <ul class="breadcrumb">
                    <li><a href="/"><i class="fas fa-home" style="color: #ff1e00;"></i> Home</a></li>
                    <li class="active">{{Str::limit($blog->title,40)}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Blog
    ============================================= -->
<div class="blog-area single full-blog right-sidebar full-blog default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <div class="blog-content col-lg-8 col-md-12">

                    <div class="blog-item-box">

                        <div class="item">
                            <!-- Start Post Thumb -->
                            <div class="thumb">
                                <img src="../assets/img/blog/{{$blog->image}}" alt="Thumb">
                                <div class="date">{{ $blog->created_at }}</div>
                            </div>
                            <!-- Start Post Thumb -->

                            <div class="info">
                                <h3>{{ $blog->title }}</h3>

                                <div class="footer-meta">
                                    <ul>
                                        <li>
                                            <img src="{{ asset('assets/img/teams/1.jpg') }}" alt="Author">
                                            <span>By </span>
                                            <a href="#">John Baus</a>
                                        </li>
                                        <li>
                                            <span>In </span>
                                            <a href="#">{{ $blog->blog_category }}</a>
                                        </li>
                                    </ul>
                                </div>

                                <p>
                                {!! $blog->content !!}
                                </p>
                                <div class="row gallery">
                                    <div class="col-lg-6 col-md-6">
                                        <img src="{{ asset('assets/img/blog/1.jpg') }} " alt="Thumb">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <img src="{{ asset('assets/img/blog/3.jpg') }} " alt="Thumb">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Start Post Pagination -->
                    <div class="post-pagi-area">
                        <a href="#">
                            <i class="fas fa-angle-double-left"></i> Previus Post
                            <h5>Hello World</h5>
                        </a>
                        <a href="#">
                            Next Post <i class="fas fa-angle-double-right"></i>
                            <h5>The earth brown</h5>
                        </a>
                    </div>
                    <!-- End Post Pagination -->

                    <!-- Start Post Tags-->
                    <div class="post-tags share">
                        <div class="tags">
                            <a href="#">{{ $blog->blog_tags }}</a>
                        </div>
                        <div class="social">
                            <ul>
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="pinterest">
                                    <a href="#">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li class="linkedin">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Post Tags -->

                    <!-- Start Blog Comment -->
                    <div class="blog-comments">
                        <div class="comments-area">
                            <div class="comments-title">
                                <h3>5 comments</h3>
                                <div class="comments-list">
                                    <div class="commen-item">
                                        <div class="avatar">
                                            <img src="{{ asset('assets/img/teams/1.jpg') }}" alt="Author">
                                        </div>
                                        <div class="content">
                                            <div class="title">
                                                <h5>Bubhan Prova <span class="reply"><a href="#"><i class="fas fa-reply"></i> Reply</a></span></h5>
                                                <span>28 Feb, 2021</span>
                                            </div>
                                            <p>
                                                Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="commen-item reply">
                                        <div class="avatar">
                                            <img src="{{ asset('assets/img/teams/3.jpg') }}" alt="Author">
                                        </div>
                                        <div class="content">
                                            <div class="title">
                                                <h5>Mickel Jones <span class="reply"><a href="#"><i class="fas fa-reply"></i> Reply</a></span></h5>
                                                <span>15 Mar, 2021</span>
                                            </div>
                                            <p>
                                                Arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. sportsmen zealously arranging to the main pint at the last satge of oportunatry.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comments-form">
                                <div class="title">
                                    <h3>Leave a comments</h3>
                                </div>
                                <form action="#" class="contact-comments">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <!-- Name -->
                                                <input name="name" class="form-control" placeholder="Name *" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <!-- Email -->
                                                <input name="email" class="form-control" placeholder="Email *" type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group comments">
                                                <!-- Comment -->
                                                <textarea class="form-control" placeholder="Comment"></textarea>
                                            </div>
                                            <div class="form-group full-width submit">
                                                <button class="btn-animation dark border" type="submit">Post Comments <i class="arrow_right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Comments Form -->
                </div>
                <!-- Start Sidebar -->
                <div class="sidebar col-lg-4 col-md-12">
                    <aside>
                        <div class="sidebar-item search">
                            <div class="sidebar-info">
                                <form>
                                    <input type="text" name="text" class="form-control">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-item recent-post">
                            <div class="title">
                                <h4>Recent Post</h4>
                            </div>
                            <ul>
                                @foreach( $r_blog as $blog )
                                <li>
                                    <div class="thumb">
                                        <a href="/blog-detail/{{ $blog->slug }}">
                                            <img src="../assets/img/blog/{{$blog->image}}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date"><i class="fas fa-clock"></i> {{ $blog->created_at }}</span>
                                        </div>
                                        <a href="/blog-detail/{{ $blog->slug }}">{{Str::limit($blog->title,40)}}</a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>category list</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    @foreach( $r_blog as $blog )
                                    <li>
                                        <a href="#">{{ $blog->blog_category }} <span>69</span></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item gallery">
                            <div class="title">
                                <h4>Gallery</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="blog-single-with-sidebar.html">
                                            <img src="{{ asset('assets/img/gallery/2.jpg')}}" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-single-with-sidebar.html">
                                            <img src="{{ asset('assets/img/gallery/1.jpg')}}" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-single-with-sidebar.html">
                                            <img src="{{ asset('assets/img/gallery/3.jpg')}}" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-single-with-sidebar.html">
                                            <img src="{{ asset('assets/img/gallery/4.jpg')}}" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-single-with-sidebar.html">
                                            <img src="{{ asset('assets/img/gallery/5.jpg')}}" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog-single-with-sidebar.html">
                                            <img src="{{ asset('assets/img/gallery/6.jpg')}}" alt="thumb">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item archives">
                            <div class="title">
                                <h4>Archives</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li><a href="blog-2-colum.html">Aug 2021</a></li>
                                    <li><a href="blog-2-colum.html">Sept 2021</a></li>
                                    <li><a href="blog-2-colum.html">Nov 2021</a></li>
                                    <li><a href="blog-2-colum.html">Dec 2021</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item social-sidebar">
                            <div class="title">
                                <h4>follow us</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="g-plus">
                                        <a href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item tags">
                            <div class="title">
                                <h4>tags</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    @foreach( $r_blog as $blog )
                                    <li><a href="#">{{ $blog->blog_tags}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- End Start Sidebar -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->