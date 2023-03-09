@extends('layouts.guest')
@section('title','Blogs')

@include('components.breadcrumber')

<!-- Start Blog
    ============================================= -->
<div class="blog-area full-blog default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="blog-content">
                <div class="blog-item-box">
                    <div class="row">
                        @foreach( $blogs as $blog )
                        <!-- Single Item -->
                        <div class="col-lg-4 col-md-6 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="../assets/img/blog/{{$blog->image}}" alt="Thumb">
                                    <div class="date">{{ $blog->created_at->format('Y-m-d') }}</div>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="/blog-detail/{{ $blog->slug }}">{{Str::limit($blog->title,64)}}</a>
                                    </h4>
                                    <div class="footer-meta">
                                        <ul>
                                            <li>
                                                <img src="assets/img/teams/1.jpg" alt="Author">
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
                                    {!! Str::limit($blog->short_description,100) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 pagi-area text-center">
                            <nav aria-label="navigation">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->