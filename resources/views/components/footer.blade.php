<!-- Star Footer
    ============================================= -->
<footer class="bg-dark text-light">
    <div class="container">
        <div class="f-items default-padding" style="padding-bottom: 40px;">
            <div class="row">
                <div class="col-lg-3 col-md-6 item">
                    <div class="f-item about">
                        <img src="{{ asset('assets/img/blank-logo-white.png')}}" alt="Logo" style="height:2rem;"></a>
                        <p>
                            We brand, develop, execute digital marketing, and handle event communications.
                        </p>
                        <div class="social">
                            <ul>
                                <li class="facebook">
                                    <a href="#"><i class="fab fa-facebook-f" style="color: #ff1e00;"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fab fa-twitter" style="color: #ff1e00;"></i></a>
                                </li>
                                <li class="youtube">
                                    <a href="#"><i class="fab fa-youtube" style="color: #ff1e00;"></i></a>
                                </li>
                                <li class="instagram">
                                    <a href="#"><i class="fab fa-instagram" style="color: #ff1e00;"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Services</h4>
                        <ul class="row">
                            <div class="col-6">
                            <li>
                                <a href="/service#branding">Branding & Design</a>
                            </li>
                            <li>
                                <a href="/service#content">Content Marketing</a>
                            </li>
                            <li>
                                <a href="/service#consulting">Consulting</a>
                            </li>
                            </div>
                            <div class="col-6">
                            <li>
                                <a href="/service#web&socialmedia">Web Development</a>
                            </li>
                            <li>
                                <a href="/service#web&socialmedia">Social Media Optimization</a>
                            </li>
                            <li>
                                <a href="/service#web&socialmedia">Event Promotions</a>
                            </li>
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Useful link</h4>
                        <ul>
                            <li>
                                <a href="/about">About Us</a>
                            </li>
                            <li>
                                <a href="/service">Services</a>
                            </li>
                            <li>
                                <a href="/blogs">Blogs</a>
                            </li>
                            <li>
                                <a href="/contact">Contact</a>
                            </li>
                            <!-- @if (Route::has('login'))
                            <li>
                                @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ Auth::user()->name }}</a>
                                @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                                @endauth
                            </li>
                            @endif -->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item contact">
                        <h4 class="widget-title">Contact Us</h4>
                        <div class="address">
                            <ul>
                                <li>
                                    <p>Address</p>
                                    <strong>KN 202 ST, Kigali Rwanda</strong>
                                </li>
                                <li>
                                    <p>Email</p>
                                    <strong>hello@blank.rw</strong>
                                </li>
                                <li>
                                    <p>Contact</p>
                                    <strong>+250 789 963 931</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-4">
                    <p>&copy; Copyright <?php echo date("Y"); ?>. All Rights Reserved</p>
                </div>
                <div class="col-lg-4 text-center logo">
                    <a href="#"><img src="{{ asset('assets/img/blank-logo-white.png')}}" alt="Logo" style="height:2rem;"></a>
                </div>
                <div class="col-lg-4 text-right newsletter">
                    <form action="{{route('sendMail')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group stylish-input-group">
                            <input type="email" id="email" placeholder="Enter your e-mail" class="form-control" name="email">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <i class="fa fa-paper-plane"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer-->