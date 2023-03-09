<style>
    .flip-card {
        background-color: transparent;
        /* width: 300px;
  height: 300px;
  perspective: 1000px; */
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .flip-card-front {
        background-color: #bbb;
        color: black;
    }

    .flip-card-back p {
        padding-top: 50px;
    }

    .flip-card-back {
        background-color: #000;
        color: white;
        transform: rotateY(180deg);
    }
</style>
<!-- Star Services
    ============================================= -->
<div class="services-area default-padding" id="service">
    <div class="container">
        <div class="services-box">
            <div class="row align-center">
                <div class="col-lg-3">
                    <div class="heading-side">
                        <div class="shape-fixed animation-rotation">
                            <img src="assets/img/round-shappe.png" alt="Thumb">
                        </div>
                        <h5 style="font-size: 40px;">we do</h5>
                        <!-- <h3>We brand, develop, execute digital marketing campaigns, and handle event communications.</h3>
                        <p>
                            we believe in learning and giving.
                        </p> -->
                        <!-- <a class="btn-animation border dark" href="#Contact" data-animation="animated slideInUp">Get
                            Started <i class="arrow_right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="services-items">
                        <div class="row justify-content-center">

                            <div class="item-grid col-lg-4 col-md-4">
                                <!-- Single Item -->
                                <div class="single-item" style="height:180px;">
                                    <div class="flip-card ">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front item">
                                                <div class="icon text-center">
                                                    <i class="flaticon-creativity"></i>
                                                </div>
                                                <div class="info">
                                                    <h5 class="text-center mb-3">
                                                        <a href="#branding">Branding & Design</a>
                                                    </h5>
                                                    <!-- <p>
                                                        Abode words began enjoy years no do ﻿no. Tried spoil as heart visit.
                                                    </p> -->
                                                </div>
                                            </div>
                                            <div class="flip-card-back">
                                                <p class="text-center">
                                                    Until your business has a face, no one will notice your work. - We said.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="single-item" style="height:180px;">
                                    <div class="flip-card ">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front item">
                                                <div class="icon text-center">
                                                    <i class="flaticon-technical-support"></i>
                                                </div>
                                                <div class="info">
                                                    <h5 class="text-center mb-3">
                                                        <a href="#content">Content Marketing</a>
                                                    </h5>
                                                    <!-- <p>
                                                        Abode words began enjoy years no do ﻿no. Tried spoil as heart visit.
                                                    </p> -->
                                                </div>
                                            </div>
                                            <div class="flip-card-back">
                                                <p>
                                                    Words, videos, and photos that sell,
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>
                            <div class="item-grid col-lg-4 col-md-4" style="margin-top: 60px;">
                                <!-- Single Item -->
                                <div class="single-item" style="height:180px;">
                                    <div class="flip-card ">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front item">
                                                <div class="icon text-center">
                                                    <i class="flaticon-coding"></i>
                                                </div>
                                                <div class="info">
                                                    <h5 class="text-center mb-3">
                                                        <a href="#branding">Web Development</a>
                                                    </h5>
                                                    <!-- <p>
                                                        Abode words began enjoy years no do ﻿no. Tried spoil as heart visit.
                                                    </p> -->
                                                </div>
                                            </div>
                                            <div class="flip-card-back">
                                                <p>
                                                    Don’t fall behind; check if your website is communicating the right message
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="single-item" style="height:180px;">
                                    <div class="flip-card ">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front item">
                                                <div class="icon text-center">
                                                    <i class="flaticon-bullhorn"></i>
                                                </div>
                                                <div class="info">
                                                    <h5 class="text-center mb-3">
                                                        <a href="#content">Social Media Optimization</a>
                                                    </h5>
                                                    <!-- <p>
                                                        Abode words began enjoy years no do ﻿no. Tried spoil as heart visit.
                                                    </p> -->
                                                </div>
                                            </div>
                                            <div class="flip-card-back">
                                                <p>
                                                    From followers to buyers
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>

                            <div class="item-grid col-lg-4 col-md-4">
                                <!-- Single Item -->
                                <div class="single-item" style="height:180px;">
                                    <div class="flip-card ">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front item">
                                                <div class="icon text-center">
                                                    <i class="flaticon-rocket"></i>
                                                </div>
                                                <div class="info">
                                                    <h5 class="text-center mb-3">
                                                        <a href="#branding">Event Promotion</a>
                                                    </h5>
                                                    <!-- <p>
                                                        Abode words began enjoy years no do ﻿no. Tried spoil as heart visit.
                                                    </p> -->
                                                </div>
                                            </div>
                                            <div class="flip-card-back">
                                                <p class="text-center">
                                                    Attract the right participants, partners, and sponsors for your event to stand out.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="single-item" style="height:180px;">
                                    <div class="flip-card ">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front item">
                                                <div class="icon text-center">
                                                    <i class="flaticon-seo"></i>
                                                </div>
                                                <div class="info">
                                                    <h5 class="text-center mb-3">
                                                        <a href="#content">Consulting</a>
                                                    </h5>
                                                    <!-- <p>
                                                        Abode words began enjoy years no do ﻿no. Tried spoil as heart visit.
                                                    </p> -->
                                                </div>
                                            </div>
                                            <div class="flip-card-back">
                                                <p>
                                                    Together things get simple, smart,and faster.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services -->