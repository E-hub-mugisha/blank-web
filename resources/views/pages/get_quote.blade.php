@extends('layouts.guest')
@section('title','Get Quote')
@section('content')

<style>
    body {
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
        font-family: 'Gotham', sans-serif;
        letter-spacing: 0px;
        font-size: 18px;
        color: #50595e;
        font-weight: 400;
        line-height: 28px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: 500;
        color: #06131a;
        margin: 0px 0px 15px 0px;
        font-family: 'Gotham', sans-serif;
    }

    h1 {
        font-size: 36px;
    }

    h2 {
        font-size: 30px;
        line-height: 38px;
    }

    h3 {
        font-size: 22px;
    }

    h4 {
        font-size: 18px;
    }

    h5 {
        font-size: 16px;
    }

    h6 {
        font-size: 14px;
    }

    p {
        margin: 0 0 20px;
        line-height: 1.7;
    }

    p:last-child {
        margin: 0px;
    }

    ul,
    ol {}

    a {
        text-decoration: none;
        color: #50595e;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }

    a:focus,
    a:hover {
        text-decoration: none;
        color: #ff1e00;
    }

    sub {
        bottom: 0em;
    }

    .lead {
        font-size: 20px;
        font-weight: 500;
        line-height: 1.7;
        font-family: 'Gotham', sans-serif;
        color: #06131a;
        margin-bottom: 20px;
    }


    .feature-left {
        margin-bottom: 40px;
    }

    .feature-left .feature-icon {
        font-size: 30px;
        color: #ff1e00;
        display: inline-block;
        float: left;
        padding-right: 30px;
        padding-top: 3px;
    }

    .feature-left .feature-content {
        font-size: 20px;
    }

    .feature-left:last-child {}

    textarea.form-control {
        height: 90px;
    }

    .required {}

    .form-group {
        margin-bottom: 5px;
    }

    select.form-control:not([size]):not([multiple]) {
        height: 56px;
        color: #50595e;
    }

    .hero-section .form-control {
        border: 1px solid #8c897d;
        height: 58px;
    }

    .form-control {
        border-radius: 0px;
        font-size: 14px;
        font-weight: 500;
        width: 100%;
        height: 56px;
        padding: 14px 18px;
        line-height: 1.42857143;
        border: 1px solid #d2d8db;
        background-color: #fff;
        text-transform: capitalize;
        letter-spacing: 0px;
        margin-bottom: 14px;
        -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, 1);
        box-shadow: inset 0 0px 0px rgba(0, 0, 0, 1);
        -webkit-appearance: none;
    }

    .form-control:focus {
        color: #06131a !important;
        outline: 0;
        box-shadow: 0 0 0 0.1rem rgb(234, 231, 222);
        border-color: #06131a;
    }

    input::-webkit-input-placeholder {
        color: #50595e !important;
    }

    textarea::-webkit-input-placeholder {
        color: #50595e !important;
    }

    .input-group-addon {
        background-color: transparent;
        border: 1px solid #eee;
        border-radius: 0px;
        position: absolute;
        right: 16px;
        top: 16px;
        font-size: 12px;
    }

    .focus {
        border: 1px solid #d2d8db;
    }

    .focus:focus {
        border: 1px solid #06131a;
    }

    .input-group-addon i {
        color: #63480f;
    }

    .btn-select {
        font-size: 14px;
    }

    select option {
        margin: 40px;
        background: rgba(255, 255, 255, 1);
        color: #50595e;
        text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
        position: relative;
    }

    select.form-control {
        position: relative;
    }

    select {
        -moz-appearance: none;
        border-radius: 0px;
        font-size: 14px;
        font-weight: 700;
        width: 100%;
        padding: 14px;
        line-height: 1.42857143;
        border: 1px solid #e0e5e9;
        background-color: #fff;
        text-transform: capitalize;
        -webkit-appearance: none;
        -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
        box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
    }

    .select {
        position: relative;
        display: block;
        line-height: 2.2;
        overflow: hidden;
    }

    select {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0 0 0 .5em;
        cursor: pointer;
        color: #50595e;
        font-size: 16px;
    }

    .select::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        padding: 10px 17px 0px 0px;
        background: transparent;
        pointer-events: none;
        font-family: 'FontAwesome';
        content: "\f107";
        font-size: 16px;
    }

    .select:hover::after {
        color: #50595e;
    }

    .select::after {
        -webkit-transition: .25s all ease;
        -o-transition: .25s all ease;
        transition: .25s all ease;
    }

    select option {
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        cursor: pointer;
        padding: 10px;
        width: 100%;
        background-color: #fff;
        font-family: 'Gotham', sans-serif;
    }

    .input-group>.custom-select:not(:last-child),
    .input-group>.form-control:not(:last-child) {
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
    }

    .service-form {
        background-color: #fafbfb;
        border: 1px solid #e4e8ea;
        padding: 40px 40px 20px 40px;
    }

    .service-form-group {
        position: relative;
    }

    .form-icon {
        position: absolute;
        right: 14px;
        bottom: 15px;
        font-size: 13px;
    }

    .btn {
        font-family: 'Gotham', sans-serif;
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 700;
        padding: 10px 26px;
        letter-spacing: 0px;
        border-radius: 0px;
        line-height: 2;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
        word-wrap: break-word;
        white-space: normal !important;
    }


    .btn-default {
        background-color: #ff1e00;
        color: #fff;
        border: 2px solid #ff1e00;
    }

    .btn-default:hover {
        background-color: transparent;
        color: #ff1e00;
        border: 2px solid #ff1e00;
    }

    .btn-default.focus,
    .btn-default:focus {
        background-color: transparent;
        color: #ff1e00;
        border: 2px solid #ff1e00;
        box-shadow: 0 0 0 0.2rem rgb(206, 0, 88);
    }

    .space-medium {
        padding-top: 80px;
        padding-bottom: 80px;
    }
</style>

@include('components.breadcrumber')

<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="feature-description">
                    <h2 style="margin-bottom: 40px;">We’re ready to listen to your needs &
                        would like to talk about how we can grow your brand.</h2>

                    <div class="feature-left">
                        <div class="feature-icon"><i class="far fa-edit"></i></div>
                        <div class="feature-content">
                            <p>Copywriting</p>
                        </div>
                    </div>
                    <div class="feature-left">
                        <div class="feature-icon"><i class="fa fa-podcast" aria-hidden="true"></i></div>
                        <div class="feature-content">
                            <p>Podcast</p>
                        </div>
                    </div>
                    <div class="feature-left">
                        <div class="feature-icon"><i class="fa fa-camera" aria-hidden="true"></i></div>
                        <div class="feature-content">
                            <p>Photography</p>
                        </div>
                    </div>
                    <div class="feature-left">
                        <div class="feature-icon"><i class="fa fa-video" aria-hidden="true"></i></div>
                        <div class="feature-content">
                            <p>Video Production</p>
                        </div>
                    </div>
                    <hr>
                    <h3>We Are Happy to Assist You all Time Moment</h3>
                </div>
            </div>
            <!-- /.feature-sections -->
            <div class="offset-xl-1 col-xl-6 offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12 mt30">
                <form action="{{route('sendQuote')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- service-form -->
                    <div class="service-form">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb10 ">
                                <h3>Get Affordable & Best Services</h3>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                <div class="form-group service-form-group">
                                    <label class="control-label sr-only" for="name"></label>
                                    <input id="names" name="names" type="text" placeholder="Names" class="form-control" required>
                                    <div class="form-icon"><i class="fa fa-user"></i></div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ">
                                <div class="form-group service-form-group">
                                    <label class="control-label sr-only" for="phone"></label>
                                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control" required>
                                    <div class="form-icon"><i class="fa fa-phone"></i></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="form-group service-form-group">
                                    <label class="control-label sr-only" for="email"></label>
                                    <input id="email" name="email" type="email" placeholder="Email" class="form-control" required>
                                    <div class="form-icon"><i class="fa fa-envelope"></i></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="form-group service-form-group">
                                    <label class="control-label sr-only" for="profile"></label>
                                    <input id="profile" name="profile" type="text" placeholder="Profile URL" class="form-control" required>
                                    <div class="form-icon"><i class="fa fa-link"></i></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="form-group">
                                    <label class="control-label sr-only" for="select"></label>
                                    <div class="select">
                                        <select id="service" name="service" class="form-control">
                                            <option value="">Service</option>
                                            <option value="brandingdesign">Branding & Design</option>
                                            <option value="contentmarketing">Content Marketing</option>
                                            <option value="consulting">Consulting</option>
                                            <option value="socialmediaoptimization">Social media Optimization</option>
                                            <option value="eventcommunication">Event Communications</option>
                                            <option value="webdevelopment">Web Development</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="form-group">
                                    <label class="control-label sr-only" for="select"></label>
                                    <div class="select">
                                        <select id="budget" name="budget" class="form-control">
                                            <option value="">Budget</option>
                                            <option value="">$1000</option>
                                            <option value="">$5000</option>
                                            <option value="">$10000</option>
                                            <option value="">Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="form-group">
                                    <label class="control-label sr-only" for="textarea"></label>
                                    <textarea class="form-control" id="detail" name="detail" rows="3" placeholder="Messages"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <button type="submit" name="singlebutton" class="btn btn-default btn-block mb10">send message</button>
                                <p><small>We promise we will never SPAM you with unwanted emails.</small></p>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /.service-form -->
            </div>
        </div>
    </div>
</div>
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