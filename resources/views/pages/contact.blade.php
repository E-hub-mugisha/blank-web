@extends('layouts.guest')
@section('title','Contact us')
@section('content')

@include('components.breadcrumber')
<!-- Star Contact Area
    ============================================= -->

<div class="contact-area overflow-hidden default-padding bg-gray" id="contact">

    <div class="container">
        <div class="contact-items">
            <!-- Fixed BG -->
            <div class="fixed-bg left">
                <img src="assets/img/shape/38.png" alt="Shape">
            </div>
            <!-- Fixed BG -->
            <div class="row align-center">

                <div class="col-lg-6 contact-box wow fadeInUp" data-wow-delay="100ms">
                    <div class="form-items">
                        <h2>You can connect with us when need help!</h2>
                        <form action="{{route('sendContact')}}" method="POST" enctype="multipart/form-data" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="subject" name="subject" placeholder="subject" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group message">
                                        <textarea class="form-control" id="message" name="message" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn-animation dark border" type="submit" name="submit" id="submit">
                                        Send Message <i class="arrow_right"></i>
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 left-info wow fadeInUp" data-wow-delay="100ms">
                    <div class="info-items text-light">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-location"></i>
                            </div>
                            <div class="info">
                                <h5>Location</h5>
                                <p>
                                    KN 202 ST <br>Kigali City, Rwanda
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-telephone"></i>
                            </div>
                            <div class="info">
                                <h5>Make a Call</h5>
                                <p>
                                    +250 789 963 931
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info">
                                <h5>Send a Mail</h5>
                                <p>
                                    hello@blank.rw
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->
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

@endsection