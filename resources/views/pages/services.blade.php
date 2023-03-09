@extends('layouts.guest')
@section('title','Services')

@include('components.breadcrumber')
@include('components.service')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    .typed-section {

        mix-blend-mode: screen;
        display: flex;
        justify-content: start;
        align-items: center;
        /* padding: 100px; */
    }

    .typed-section .printStr {
        /* font-size: 64px; */
    }

    .typed-cursor {
        opacity: 1;
        height: 64px;
        /* background: #111; */
    }
</style>
<section id="web&socialmedia">
    <!-- Start Why Choose Us Area
    ============================================= -->
    <div class="why-choose-us-area default-padding-bottom bg-cover text-light" style="background-image: url(assets/img/banner/5.jpg);">
        <div class="container">
            <div class="inner-items">
                <div class="row">
                    <div class="col-lg-7 offset-lg-5">
                        <div class="info">
                            <h2>SOCIAL MEDIA OPTIMIZATION</h2>
                            <div class=" mb-3">
                                <p>
                                    From &nbsp;<strong style="font-size: 20px; color:#fff;">followers to buyers </strong>
                                </p>
                            </div>
                            <div class=" mt-8">
                                <p>
                                    The future of business is social.
                                    We help you create social communities on social media,
                                    &nbsp;<strong style="font-size: 20px; color:#fff;">boost engagement </strong>
                                    and convert &nbsp;<strong style="font-size: 20px; color:#fff;">followers into buyers</strong> of your products and services.
                                </p>
                            </div>

                            <ul>
                                <li>
                                    <div class=" mb-4">
                                        <p>For daily social media tips,</p>
                                    </div>
                                    <div class="button wow fadeInDown mt-8" data-wow-delay="200ms">
                                        <a href="#" class="popup-youtube video-btn"><i class="fa fa-paper-plane"></i>Follow us</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us Area -->
</section>
<section id="consulting">
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area circle-bg">
        <div class="item">
            <div class="box-table">
                <div class="box-cell">
                    <div class="container">
                        <div class="banner-items">
                            <div class="row align-center">
                                <div class="col-lg-6">
                                    <div class="content">
                                        <h2 class="wow fadeInDown" data-wow-duration="400ms">Consulting</h2>
                                        <p class="wow fadeInUp" data-wow-duration="450ms">
                                            No man is an island, you know that, right?
                                        </p>
                                        <p class="wow fadeInUp" data-wow-duration="500ms">
                                            Don’t be overwhelmed. Together things get simple, smart,and faster.

                                            We sit with your business torch bailers, brainstorm, and strategize your marketing system to find solutions that boost your sales, mark your position on the market, and earn trust from customers.

                                        </p>
                                        <a href="https://calendly.com/bigblank100/30min" class="btn-animate wow  fadeInLeft" data-wow-duration="600ms">
                                            <span class="circle">
                                                <span class="icon arrow"></span>
                                            </span>
                                            <span class="button-text">Let’s schedule a meet</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 thumb multi-items">
                                    <div class="thumb-box">
                                        <img class="wow fadeInDown" src="assets/img/illustration/dashboard.png" alt="Dashbaord">
                                        <img class="wow fadeInUp" data-wow-delay="300ms" src="assets/img/illustration/man-1.png" alt="illustration">
                                        <img class="wow fadeInUp" data-wow-delay="800ms" src="assets/img/illustration/man-2.png" alt="illustration">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->
</section>
<section id="branding" class="mt-2">
    <div class="py-lg-16 bg-dark pt-8 pb-10">
        <!-- container -->

        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 col-md-12 col-12">

                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-12 col-12">
                            <div class="mb-8">
                                <!-- heading -->
                                <h1 class="fw-bold mt-3 text-white mb-2" style="font-size: 50px; font-weight:900;">
                                    WEB DEVELOPMENT
                                </h1>
                                <!-- text -->
                                <div class="typed-section">
                                    <div class="strings-box">
                                        <p></p>
                                        <p><strong style="font-size: 20px; color:#fff;">Don’t fall behind</strong></p>
                                    </div>
                                    <p class="mb-0 text-white fs-4" data-animation="animated slideInRight">
                                        <span class="printStr"> </span> check if your website is communicating the right message to the right people.
                                    </p>
                                </div>
                            </div>
                            <div class="mb-4 mt-2 mb-lg-0 pt-5 text-white me-lg-4">
                                <!-- text -->
                                <p class="display-6 mb-4 lh-2">
                                    Blank builds websites that make people stop and scroll through to see what is in it for them.
                                    We can help you revamp or build yours from scratch.
                                    Don’t worry about costs, we thought about that, and that’s why our rates are pocket-friendly.
                                </p>
                                <!-- text -->
                            </div>
                        </div>
                        <!-- col -->

                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="mt-6" style="margin-top: 50px;">
                                <!-- Img -->
                                <img src="assets/img/foundations.svg" alt="" class="img-fluid rounded-3 ">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-5">
                            <!-- button -->
                            <a class="btn-animation border light" href="/get_quotes" data-animation="animated slideInUp">
                                Get a quote now <i class="arrow_right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Star Services
    ============================================= -->

<div class="our-process-area default-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="heading-center">
                    <h5>Content Creation</h5>
                    <h2>Words, videos, and <br />photos <span style="color: #ff1e00;">that sell,</span><br> and seal your position on the market.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="process-list-items">
            <div class="row text-center">
                <!-- Single Item -->
                <div class="col-lg-3 col-md-6 single-item">
                    <div class="item">
                        <div class="icon">
                            <img src="assets/img/copywriter.png" style="width:60px; height:auto;">
                            <!-- <span>01</span> -->
                        </div>
                        <h4>Content writing</h4>
                        <!-- <p>
                            Such on help ye some door if in. Laughter proposal laughing any son law consider. Needed except up piqued an.
                        </p> -->
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-3 col-md-6 single-item">
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
                <div class="col-lg-3 col-md-6 single-item">
                    <div class="item">
                        <div class="icon">
                            <img src="assets/img/take-a-photo.png" style="width:60px; height:auto;">
                            <!-- <span>02</span> -->
                        </div>
                        <h4>PhotoGraphy</h4>
                        <!-- <p>
                            Such on help ye some door if in. Laughter proposal laughing any son law consider. Needed except up piqued an.
                        </p> -->
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-3 col-md-6 single-item">
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
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="heading-side text-center">
                        <a class="btn-animation border dark" href="#" data-animation="animated slideInUp">Get Started <i class="arrow_right"></i></a>
                    </div>
                </div>
                <!-- <div class="col-lg-12">
                        <div class="sliding-text mt-3">
                            <marquee behavior="scroll" direction="left">
                                <h2>At Blank, We do more than recording videos, writing texts and, or taking photographs</h2>
                            </marquee>
                        </div>
                    </div> -->
            </div>

        </div>
    </div>
</div>
<!-- End Services -->

<section id="consulting">
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area circle-bg">
        <div class="item">
            <div class="box-table">
                <div class="box-cell">
                    <div class="container">
                        <div class="banner-items">
                            <div class="row align-center">
                                <div class="col-lg-6">
                                    <div class="content">
                                        <h2 class="wow fadeInDown" data-wow-duration="400ms" style="font-size: 35px;">EVENT PROMOTION </h2>
                                        <p style="font-size: 25px; font-weight:800;">
                                            Attract participants, partners, and sponsors. You want your event to stand out.
                                        </p>
                                        <p>
                                            You will get a customized marketing plan that includes social media promotion,
                                            email marketing, influencers, advertising, and more. All this to fly your message across.
                                        </p>
                                        <ul>
                                            <li>
                                                <div class=" mb-4">
                                                    <p><strong>Want a free event promotion template?</strong></p>
                                                </div>
                                                <div class="button wow fadeInDown mt-8" data-wow-delay="200ms">
                                                    <a class="btn-animation border red" href="#" data-animation="animated slideInUp">Yes</a>
                                                    <a class="btn-animation border dark" href="#" data-animation="animated slideInUp">I don’t want my event to be noticed.</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 brand">
                                    <div class="row justify-content-center"><img src="assets/img/website-seo-promotion-svgrepo-com.svg" alt="Brand" style="height:auto; width:50%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.cta')

    <!-- Star Faq
    ============================================= -->
    <div class="faq-area default-padding bg-gray">
        <div class="container">
            <div class="faq-items">
                <div class="row">

                    <div class="col-lg-6 info">
                        <h2>We Are Happy to Assist <br> You all Time Moment</h2>
                        <p>
                            Mirth his quick its set front enjoy hoped had there. Who connection imprudence middletons too but increasing celebrated principles joy. Herself too improve gay winding ask expense are compact.
                        </p>
                        <ul>
                            <li>Branding & Design</li>
                            <li>Content Marketing</li>
                            <li>Consulting</li>
                            <li>Social media Optimization</li>
                            <li>Event Promotions</li>
                            <li>Web Development</li>
                        </ul>
                        <a class="btn-animation border dark" href="#" data-animation="animated slideInUp">Let's Chat <i class="arrow_right"></i></a>
                    </div>

                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="accordion" id="accordionExample">
                                @foreach( $faqs as $faq)
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{ $faq->question}}
                                        </h4>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                {!! $faq->answer !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Faq -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script>
        $(document).ready(function() {
            var typed = new Typed('.printStr', {
                stringsElement: '.strings-box',
                loop: true,
                typeSpeed: 100
            });
        });
    </script>