@extends('user.layouts.master')

@section('meta')

@endsection

@section('title')

@endsection

@section('styles')

@endsection

@section('content')
  <!--================= Course Filter Section Start Here =================-->
                <div class="react-course-filter back__course__page_grid pb---40 pt---110">
                    <div class="container "> 
                        <div class="row align-items-center back-vertical-middle shorting__course mb-50">
                            <div class="col-md-2">
                                <div class="all__icons">                                    
                                    <div class="list__icons">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
                                    </div>
                                    <div class="result-count">Filters</div>
                                </div>
                            </div>
                            <div class="col-md-10 text-right">
                                <select class="from-control">
                                    <option>All Categories</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by lates</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                                <select class="from-control">
                                    <option>All Language</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by lates</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                                <select class="from-control">
                                    <option>All Prices</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by lates</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                                <select class="from-control">
                                    <option>All Skills</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by lates</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center back-vertical-middle shorting__course2 mb-50">
                            <div class="col-md-6">
                                <div class="all__icons">                                   
                                    <div class="result-count">We found 104 courses available for you</div>
                                </div>
                            </div>
                            <div class="col-md-6 text-right">                                
                                <select class="from-control">
                                    <option>Sort by: Default</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by lates</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                            </div>
                        </div>                                                  
                        <div class="row">                            
                            <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w"><img src="assets/images/course/beg.png" alt="Beginner"> Beginner</a>
                                        <img src="assets/images/course-filter/1.jpg" alt="Course Image">
                                    </div>
                                    <div class="case-content">                                        
                                        <h4 class="case-title"> <a href="coureses-single.html">The Most Complete Design <br>Thinking Course On The Market.</a></h4> 
                                        <ul class="meta-course">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> 10 Lesson </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 5h 24m</li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Justin Case </li>
                                        </ul>

                                        <ul class="react-ratings">
                                            <li class="react-book"> <em>4.5</em>  
                                                <span class="icon_star"></span> 
                                                <span class="icon_star"></span> 
                                                <span class="icon_star"></span> (101)
                                            </li>
                                            <li class="price">$34.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w"><img src="assets/images/course/beg.png" alt="Beginner"> Intermediate</a>
                                        <img src="assets/images/course-filter/2.jpg" alt="Course Image">
                                    </div>
                                    <div class="case-content">                                        
                                        <h4 class="case-title"> <a href="coureses-single.html">Everything You Need to Know <br> About Business.</a></h4> 
                                        <ul class="meta-course">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> 19 Lesson </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 2h 29m</li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Oilla Molta </li>
                                        </ul>

                                        <ul class="react-ratings">
                                            <li class="react-book"> <em>4.0</em>  
                                                <span class="icon_star"></span> 
                                                <span class="icon_star"></span> 
                                                <span class="icon_star"></span> (235)
                                            </li>
                                            <li class="price">$89.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w"><img src="assets/images/course/beg.png" alt="Beginner"> Expert</a>
                                        <img src="assets/images/course-filter/3.jpg" alt="Course Image">
                                    </div>
                                    <div class="case-content">                                        
                                        <h4 class="case-title"> <a href="coureses-single.html">Statistics Data Scince and <br> Business Analysis</a></h4> 
                                        <ul class="meta-course">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> 18 Lesson </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 5h 24m</li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Will Barrow </li>
                                        </ul>

                                        <ul class="react-ratings">
                                            <li class="react-book"> <em>4.5</em>  
                                                <span class="icon_star"></span> 
                                                <span class="icon_star"></span> 
                                                <span class="icon_star"></span> (144)
                                            </li>
                                            <li class="price">$39.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w"><img src="assets/images/course/beg.png" alt="Beginner"> Beginner</a>
                                        <img src="assets/images/course-filter/4.jpg" alt="Course Image">
                                    </div>
                                    <div class="case-content">                                        
                                        <h4 class="case-title"> <a href="coureses-single.html">Become a UI/UX Designer <br> Everything You need To Know.</a></h4> 
                                        <ul class="meta-course">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> 35 Lesson </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 6h 22m</li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Justin Case </li>
                                        </ul>

                                        <ul class="react-ratings">
                                            <li class="react-book"> <em>3.5</em>  
                                                <span class="icon_star"></span> 
                                                <span class="icon_star"></span> 
                                                <span class="icon_star"></span> (205)
                                            </li>
                                            <li class="price">$89.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w"><img src="assets/images/course/beg.png" alt="Beginner"> Expert</a>
                                        <img src="assets/images/course-filter/5.jpg" alt="Course Image">
                                    </div>
                                    <div class="case-content">                                        
                                        <h4 class="case-title"> <a href="coureses-single.html">Learn Essentials of User Interface <br>Design in Figma.</a></h4> 
                                        <ul class="meta-course">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> 20 Lesson </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 3h 30m</li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Milar One </li>
                                        </ul>

                                        <ul class="react-ratings">
                                            <li class="react-book"> <em>4.5</em>  
                                                <span class="icon_star"></span> 
                                                <span class="icon_star"></span> 
                                                <span class="icon_star"></span> (75)
                                            </li>
                                            <li class="price">$54.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w"><img src="assets/images/course/beg.png" alt="Beginner"> Expert</a>
                                        <img src="assets/images/course-filter/6.jpg" alt="Course Image">
                                    </div>
                                    <div class="case-content">                                        
                                        <h4 class="case-title"> <a href="coureses-single.html">AWS Certified Solutions <br> Architect Associate.</a></h4> 
                                        <ul class="meta-course">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> 24 Lesson </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 4h 20m</li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Astin kista </li>
                                        </ul>

                                        <ul class="react-ratings">
                                            <li class="react-book"> <em>4.0</em>  
                                                <span class="icon_star"></span> 
                                                <span class="icon_star"></span> 
                                                <span class="icon_star"></span> (99)
                                            </li>
                                            <li class="price">$79.00</li>
                                        </ul>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <!--================= Pagination Section Start Here =================-->
                        <ul class="back-pagination pt---20">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="back-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a></li>
                        </ul>
                        <!--================= Pagination Section End Here =================-->
                    </div>
                </div>
                <!--================= Course Filter Section End Here =================--> 
                
            </div>
        </div>
        <!--================= Wrapper End Here =================-->
@endsection
