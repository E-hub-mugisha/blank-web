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
<!-- Start Banner 
    ============================================= -->
<div class="banner-area top-pad-90 bg-mixed double-items text-light" style="background-image: url(assets/img/23.png);">
    <div id="bootcarousel" class="carousel slide carousel-fade animate_text" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="box-table">
                    <div class="box-cell">
                        <div class="container">
                            <div class="content">
                                <div class="row align-center">
                                    <div class="col-lg-6 info">

                                        <div class="typed-section">
                                            <div class="strings-box">
                                                <p></p>
                                                <p>marketing strategies.</p>
                                            </div>
                                            <h2 data-animation="animated slideInRight">
                                            Supercharge your <br/> <span class="printStr"> </span>
                                            </h2>
                                        </div>
                                        <p data-animation="animated slideInLeft">
                                            Get attention and trust from your target market.
                                        </p>
                                        <a class="btn-animation border light" href="#" data-animation="animated slideInUp">Get Started <i class="arrow_right"></i></a>
                                    </div>
                                    <!-- <div class="col-lg-6 thumb" data-animation="animated slideInUp">
                                        <img src="assets/img/illustration/4.png" alt="Thumb">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <!-- <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
            <i class="arrow_left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bootcarousel" data-slide="next">
            <i class="arrow_right"></i>
            <span class="sr-only">Next</span>
        </a> -->
    </div>
</div>
<!-- End Banner --><!-- Header 
    ============================================= -->
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