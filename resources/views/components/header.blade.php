<!-- Header 
    ============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container-full">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="ti-search"></i></a></li>
                    <li class="side-menu">
                        <a href="#">
                            <span class="bar-1"></span>
                            <span class="bar-2"></span>
                            <span class="bar-3"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/img/blank-logo-white.png')}}" class="logo logo-display" alt="Logo" style="height: 3rem;">
                    <img src="{{ asset('assets/img/blank-logo-trans.png')}}" class="logo logo-scrolled" alt="Logo" style="height: 3rem;">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a href="/about">About</a></li>
                    <li class="dropdown">
                            <a href="/service" class="dropdown-toggle" data-toggle="dropdown" >Services</a>
                            <ul class="dropdown-menu">
                                <li><a href="#branding">Branding & Design</a></li>
                                <li><a href="#content">Content Marketing</a></li>
                                <li><a href="#consulting">Web Development</a></li>
                                <li><a href="#web&socialmedia">Social Media Optimization</a></li>
                                <li><a href="#">Event Promotions</a></li>
                                <li><a href="#">Consulting</a></li>
                            </ul>
                        </li>
                    <li><a href="/blogs">Blogs</a></li>
                    <li><a href="/contact">contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="icon_close"></i></a>
            <div class="widget">
                <img src="{{ asset('assets/img/blank-logo-trans.png') }}" alt="Logo" style="height: 3rem;">
                <p>
                    Blank is here to create new pathways that add value to you and your work
                </p>
            </div>
            <div class="widget address">
                <div>
                    <ul>
                        <li>
                            <div class="content">
                                <p>Address</p>
                                <strong>KN 202 ST, Kigali Rwanda</strong>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <p>Email</p>
                                <strong>hello@blank.rw</strong>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <p>Contact</p>
                                <strong>+250 789 963 931</strong>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="widget newsletter">
                <h4 class="title">Get Subscribed!</h4>
                <form action="{{route('sendMail')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="input-group stylish-input-group">
                        <input type="email" id="email" placeholder="Enter your e-mail" class="form-control" name="email">
                        <span class="input-group-addon">
                            <button type="submit">
                                <i class="arrow_right"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="widget social">
                <ul class="link">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->