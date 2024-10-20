 <footer id="react-footer" class="react-footer home-main">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 md-mb-30">
                            <div class="footer-widget footer-widget-1">
                                <div class="footer-logo white ">
                                    <a href="/" class="logo-text"> <img class='rounded' style='height:56px;' src="{{ asset('backend/frontassets/images/logo/header-logo.png') }}" alt="logo"></a>
                                </div>
                                <h5 class="footer-subtitle">{{ config('sitevars.about') }}</h5>
                                <ul class="footer-address">
                                    <li class='d-none'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg><a href="tel:{{ config('sitevars.phone') }}"> +91 {{ config('sitevars.phone') }} </a></li>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><a href="mailto:{{ config('sitevars.email') }}"> {{ config('sitevars.email') }} </a></li>
                                </ul>                               
                            </div>
                        </div>
                        <div class="col-md-4 md-mb-30">
                            <div class="footer-widget footer-widget-2">
                                <h3 class="footer-title">About Us</h3>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="/page/about-us">About</a></li>
                                        <li><a href="/contact">Contact</a></li>
                                        <li><a href="/">Home</a></li>
                                        <!--<li><a href="#">Career</a></li>-->
                                        <!--<li><a href="profile.html">Become a Teacher</a></li>-->
                                        <!--<li><a href="contact.html">Contact</a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 md-mb-30">
                            <div class="footer-widget footer-widget-3">
                                <h3 class="footer-title">Useful Links</h3>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="/page/privacy-policy">Privacy Policy</a></li>
                                        <li><a href="/page/terms-and-conditions">Terms & Conditions</a></li>
                                        <li><a href="/page/desclaimer">Desclimer</a></li>
                                        <li><a href="/page/faq">FAQ</a></li>
                                        <!--<li><a href="#">FAQ</a></li>-->
                                        <!--<li><a href="#">Tutorials</a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-none">
                            <div class="footer-widget footer-widget-4">
                                <h3 class="footer-title">Newsletter</h3> 
                                <div class="footer3__form">
                                    <p>Get the latest Echooling news <br>delivered to you inbox</p>
                                    <form action="#">
                                        <input type="email" placeholder="Enter your email">
                                        <button class="footer3__form-1">
                                            <i class="arrow_right"></i>
                                        </button>
                                    </form>
                                </div>                                                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="copyright">  
                <div class="container">                  
                    <div class="react-copy-left">© 2022 <a href="/">{{config('sitevars.appnamecaps')}}</a> All Rights Reserved</div>
                    <div class="react-copy-left">Powered by <a href="{{config('sitevars.devlink')}}">{{config('sitevars.devname')}}</a></div>
                    <div class="react-copy-right">
                        <ul class="social-links d-none">
                            <li class="follow">Follow us</li>
                            <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                            <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                            <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>