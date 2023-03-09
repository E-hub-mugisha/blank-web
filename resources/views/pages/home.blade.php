@extends('layouts.guest')
@section('title','Home')
@include('components.hero')
<style>
    #ubercontainer {
        /* border: 1px solid #eaeaea; */
        /* border-radius: 2px; */
        background-color: #ff1e00;
        width: 500px;
        margin: 20px auto;
        padding: 30px 0;
    }

    #container {
        position: relative;
        text-align: center;
        font-family: sans-serif;
        font-size: 32px;
        font-weight: 800;
        color: #4a6b82;
        height: 78px;
    }

    .measurable {
        position: absolute;
        visibility: hidden;
    }

    .static.first,
    .static.second {
        transition: transform 1s ease;
    }
</style>

<div class="mt-8">
    @include('components.about')
</div>
<div class="mt-4">
    @include('components.service')
</div>
<div class="our-process-area default-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="heading-center">
                    <h5>Content Creation</h5>
                    <h2>Words, videos, <br /> and photos <span style="color: #ff1e00;">that sell,</span><br> and seal your position on the market.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="process-list-items">
            <div class="row text-center">
                <!-- Single Item -->
                <div class="col-lg-3 col-sm-6 col-md-6 single-item">
                    <div class="item">
                        <div class="icon">
                            <img src="assets/img/copywriter.png" style="width:60px; height:auto;">
                            <!-- <span>01</span> -->
                        </div>
                        <h4>Copywriting</h4>
                        <!-- <p>
                            Such on help ye some door if in. Laughter proposal laughing any son law consider. Needed except up piqued an.
                        </p> -->
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-3 col-sm-6 col-md-6 single-item">
                    <div class="item">
                        <div class="icon">
                            <img src="assets/img/mic.png" style="width:60px; height:auto;">
                            <!-- <span>02</span> -->
                        </div>
                        <h4>Podcast</h4>
                        <!-- <p>
                            Such on help ye some door if in. Laughter proposal laughing any son law consider. Needed except up piqued an.
                        </p> -->
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-3 col-sm-6 col-md-6 single-item">
                    <div class="item">
                        <div class="icon">
                            <img src="assets/img/take-a-photo.png" style="width:60px; height:auto;">
                            <!-- <span>02</span> -->
                        </div>
                        <h4>Photography</h4>
                        <!-- <p>
                            Such on help ye some door if in. Laughter proposal laughing any son law consider. Needed except up piqued an.
                        </p> -->
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-3 col-sm-6 col-md-6 single-item">
                    <div class="item">
                        <div class="icon">
                            <img src="assets/img/video.png" style="width:60px; height:auto;">
                            <!-- <span>03</span> -->
                        </div>
                        <h4>Video Production</h4>
                        <!-- <p>
                            Such on help ye some door if in. Laughter proposal laughing any son law consider. Needed except up piqued an.
                        </p> -->
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<section id="branding" class="mt-2">
    <div class="py-lg-16 pt-8 pb-10" style="background: #f8f9fa; ">
        <!-- container -->

        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 col-md-12 col-12">

                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-12 col-12">
                            <div class="mb-8">
                                <!-- heading -->
                                <h1 class="fw-bold mt-3 text-black mb-2" style="font-size: 55px; font-weight:900;">
                                    Branding & Design
                                </h1>
                                <!-- text -->
                                <p class="mb-0 text-red-50 fs-4">
                                    Until your business has a face, no one will  notice your work. - We said.
                                </p>
                            </div>
                            <div class="mb-4 mt-6 mb-lg-0 pt-5 text-black me-lg-4">
                                <!-- text -->
                                <p class="display-6 mb-4 lh-2">
                                    <span class="animate__animated animate__backInLeft"><strong style="font-size: x-large;">In fact, here we breathe branding.</strong></span> From concept to reality,
                                    we bring your brand to life. Our team of creative geeks help you
                                    craft unique and memorable brand identities that truly capture
                                    the essence of your business and help communicate your value to your target market.
                                </p>
                                <!-- text -->
                            </div>
                        </div>
                        <!-- col -->

                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="mt-6 wow fadeInDown" data-wow-delay="100ms" style="margin-top: 50px;">
                                <!-- Img -->
                                <img src="assets/img/foundations.svg" alt="" class="img-fluid rounded-3 ">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col mb-5">
                            <a class="btn-animation border dark" href="#" data-animation="animated slideInUp">
                                See How <i class="arrow_right"></i>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<div class="mt-4 mb-4 pt-8 pb-10">
    <div class="container black-cta">
        <div class="row ">
            <div class="col-lg-6 col-md-12 pt-8 pb-10">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <div id="ubercontainer">
                    <div class="heading-side">
                        <h5 style="color: #000;">Bring your brand to life </h5>
                    </div>
                    <div id="container">
                        <span class="the-first" style="color: #f8f9fa;"></span>
                        <span class="static first">brands</span><br />
                        <!-- <span class="static second">Want to see your brand</span>
                        <span class="the-second"></span> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 pt-8 pb-10 text-center">
                <!-- <span class="fs-4 text-warning ls-md text-uppercase fw-semi-bold">
                    get things done
                </span> -->
                <!-- heading  -->
                <h2 class=" mt-4 mb-3 text-black fw-bold">
                    Want to see your brand performing better?
                </h2>
                <!-- para  -->
                <a class="btn-animation border dark" href="/blogs" data-animation="animated slideInUp">Show Me How <i class="arrow_right"></i></a>
            </div>
        </div>
    </div>
</div>
@include('components.review')
@include('components.clients')
@include('components.cta')

<!-- Star Blog
    ============================================= -->
<div class="blog-area full-blog default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="heading-center text-center">
                    <h5>Latest News</h5>
                    <h2>Most Popular Breaking News & Top Stories</h2>
                </div>
            </div>
        </div>
        <div class="blog-items">
            <div class="row">
                <!-- Single Item -->
                @foreach( $blogs as $blog )
                <div class="col-lg-4 col-md-6 single-item wow fadeInUp" data-wow-delay="100ms">
                    <div class="item">
                        <div class="thumb">
                            <img src="../assets/img/blog/{{$blog->image}}" alt="{{Str::limit($blog->slug,64)}}">
                            <div class="date">{{ $blog->created_at->format('Y-m-d') }}</div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="/blog-detail/{{ $blog->slug }}">{{Str::limit($blog->title,64)}}</a>
                            </h4>
                            <!-- <div class="footer-meta">
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
                            </div> -->
                            <p>
                            {!! Str::limit($blog->short_description,100) !!}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->
@include('components.twitterFeeds')
@include('components.newsletter')
<script>
    var first = ['we Create', 'we improve', 'we talk'];
    var second = ['performing better', 'capturing the essence', 'crafting unique'];
    var firstM = [],
        secondM = [],
        el;

    var $first = $('.the-first');
    var $second = $('.the-second');
    var $container = $('#container');

    // init static //    
    $first.text(first[0]);
    $second.text(second[0]);

    // create measurables //
    for (var i = 0; i < first.length; i++) {
        el = $('<div class="measurable">' + first[i] + '</div>');
        $container.append(el);
        firstM.push(el.width());
    }
    for (var i = 0; i < second.length; i++) {
        el = $('<div class="measurable">' + second[i] + '</div>');
        $container.append(el);
        secondM.push(el.width());
    }

    // absolutize //
    var positions = [];
    $('#container > span').each(function() {
        positions.push($(this).position());
    });
    $('#container > span').each(function() {
        var pos = positions.shift();
        $(this).css({
            position: 'absolute',
            left: pos.left,
            top: pos.top
        });
    });

    // remember initial sizes //
    var firstInitialWidth = $first.width();
    var secondInitialWidth = $second.width();

    // loop the loop //
    var activeWordsIndex = 0;
    setInterval(function() {
        activeWordsIndex++;
        var firstIndex = activeWordsIndex % first.length;
        var secondIndex = activeWordsIndex % second.length;

        $first.text(first[firstIndex]);
        $second.text(second[secondIndex]);

        var firstLineOffset = (firstM[firstIndex] - firstInitialWidth) / 2;
        var secondLineOffset = (secondM[secondIndex] - secondInitialWidth) / 2;

        $('.static.first').css({
            transform: 'translateX(' + firstLineOffset + 'px)'
        });
        $('.static.second').css({
            transform: 'translateX(' + (-secondLineOffset) + 'px)'
        });

        $first.css({
            transition: 'none',
            transform: 'translate(' + (-firstLineOffset) + 'px, -30px)',
            opacity: '0'
        });
        setTimeout(function() {
            $first.css({
                transition: 'all 1s ease',
                transform: 'translate(' + (-firstLineOffset) + 'px, 0px)',
                opacity: '1'
            });
        }, 50);

        $second.css({
            transition: 'none',
            transform: 'translate(' + (-secondLineOffset) + 'px, 30px)',
            opacity: '0'
        });
        setTimeout(function() {
            $second.css({
                transition: 'all 1s ease',
                transform: 'translate(' + (-secondLineOffset) + 'px, 0px)',
                opacity: '1'
            });
        }, 50);
    }, 2000);
</script>