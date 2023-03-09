@extends('layouts.guest')
@section('title','About')

@include('components.breadcrumber')
@include('components.about')

<!-- Start Features
    ============================================= -->
<div class="feature-area default-padding-bottom bottom-less">

    <div class="container">
        <div class="feature-items text-center">
            <div class="row">
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="item">
                        <div class="info">
                            <h4>Vision</h4>
                            <p>
                                Building a community of world-class creators and
                                communicators dedicated to paving new pathways for
                                positive impacts in human life.
                            </p>
                        </div>
                        <div class="icon">
                            <img src="assets/img/icon/management.png" alt="Icon">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="item">
                        <div class="info">
                            <h4>Mission</h4>
                            <p>
                                We are proudly helping innovators get their messages
                                delivered to their target audience in an innovative
                                way that adds value and builds production relationships.
                            </p>
                        </div>
                        <div class="icon">
                            <img src="assets/img/icon/branding.png" alt="Icon">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="item">
                        <div class="info">
                            <h4>Values</h4>
                            <p>Creativity, humility, simplicity and productivity</p>
                        </div>
                        <div class="icon">
                            <img src="assets/img/icon/Interaction.png" alt="Icon">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Features -->

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
                        <li>Event Communications</li>
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