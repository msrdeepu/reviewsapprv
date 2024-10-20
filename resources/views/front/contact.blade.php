@extends('user.layouts.master')


@section('meta')

@endsection

@section('title')
Contact
@endsection

@section('styles')

<style>
    
</style>

@endsection

@section('content')


   <!--================= Wrapper Start Here =================-->
        <div class="react-wrapper">
            <div class="react-wrapper-inner">
                <!--================= Breadcrumbs Section Start Here =================-->
                <div class="react-breadcrumbs">
                    <div class="breadcrumbs-wrap">
                        <img class="desktop" src="{{asset('backend/frontassets/images/breadcrumbs/1.jpg')}}" alt="Breadcrumbs">
                        <img class="mobile" src="{{asset('backend/frontassets/images/breadcrumbs/1.jpg')}}" alt="Breadcrumbs">
                        <div class="breadcrumbs-inner">
                            <div class="container">
                                <div class="breadcrumbs-text">
                                    <h1 class="breadcrumbs-title">Contact</h1>
                                    <div class="back-nav">
                                        <ul>
                                            <li><a href="/">Home</a></li>
                                            <li>Contact Us</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
                <!--================= Breadcrumbs Section End Here =================-->
                <div id="react-contact" class="react-contact-page pt---100">
                    <div class="container">
                        <div class="row pb---96">
                            <div class="col-lg-4 pt---10">
                                <ul class="address-sec">
                                    
                                    <li>
                                        <em class="icon"><img src="{{asset('backend/frontassets/images/contact/3.png')}}" alt="image"></em>
                                        <span class="text"> <a href="#">Mail: {{config('sitevars.email')}}</a></span>
                                    </li>
                                   
                                </ul>
                            </div>
                            <div class="col-lg-8">
                                <!--================= Form Section Start Here =================-->
                                <div class="react-blog-form"> 
                                    <h2 class="contact-title">Questions? <br> Feel free to contact uo.</h2>
                                    <div id="blog-form" class="blog-form">
                                        <div id="form-messages"></div>
                                        <form id="contact-form" method='POST' action='{{route("create.contact")}}'>  
                                        @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="back-input">
                                                        <input id="name" type="text" name="name" placeholder="Name">
                                                    </div>
                                                </div>
                                                 <div class="col-lg-6 pdl-5">
                                                    <div class="back-input">
                                                        <input id="phone" type="text" name="phone" placeholder="Phone">                   
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 pdl-5">
                                                    <div class="back-input">
                                                        <input id="email" type="email" name="email" placeholder="Email">                          
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6">
                                                    <div class="back-input">
                                                        <input id="subject" type="text" name="subject" placeholder="Subject">                          
                                                    </div>
                                                </div>

                                               

                                                <div class="col-lg-12">
                                                    <div class="back-textarea">
                                                        <textarea id="message" name="message" placeholder="Message"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">                                                
                                                    <button type="submit" class="back-btn">Send Message <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></button>
                                                </div>
                                            </div>                                                    
                                        </form>
                                    </div>               
                                </div>
                                <!--================= Form Section End Here =================-->
                            </div>
                        </div>
                        
                       
                    </div>
                </div>                
            </div>
        </div>
        <!--================= Wrapper End Here =================-->

@endsection
@section('script')

<script>

    </script>
@endsection
