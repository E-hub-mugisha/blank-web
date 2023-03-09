<!-- Start Banner 
    ============================================= -->
<div class="banner-area text-default ">
    <!-- Shape -->
    <!-- <div class="shape-left" style="background-image: url(assets/img/shape/40.png);"></div> -->
    <!-- End Shape -->
    <div class="item">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="content">
                        <div class="row align-center">
                            <div class="col-lg-7 info">
                                <h2 class="wow fadeInDown" data-wow-duration="1s"><strong>Stay tuned</strong>&nbsp;to exclusive new and best deals</h2>
                                <p class="wow fadeInLeft" data-wow-duration="1.3s">
                                    No spam, only truly and helpful contents guarantee.
                                </p>
                                
                            </div>
                            <div class="col-lg-5">
                                <div class="form-info wow fadeInDown" data-wow-duration="1.6s">
                                    <h4>Join our exclusive community</h4>
                                    <form action="{{route('sendMail')}}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input class="form-control" name="email" id="email" placeholder="Email*" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <button type="submit">
                                                    Join &nbsp;<i class="fa fa-paper-plane" style="color: #ff1e00;"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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