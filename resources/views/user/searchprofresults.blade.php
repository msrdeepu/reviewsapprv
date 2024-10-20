@extends('user.layouts.master')

@section('styles')
@endsection

@section('content')
    <!--================= Course Filter Section Start Here =================-->
    <div class="react-course-filter back__course__page_grid pb---40 pt---110">
        <div class="container pb---70">

            <div>
                <h1 class="text-center">Meet Our Professors</h1>
            </div>


            <div class="row">

                @foreach ($data as $item)
                    <div class="single-studies col-lg-4 grid-item">
                        <div class="inner-course">
                            <div class="case-img">

                                <img src="{{ $item->avatar }}" alt="Course Image">
                            </div>
                            <div class="case-content">
                                <h4 class="case-title"> <a href="coureses-single.html">Name: {{ $item->name }}</a></h4>
                                <p>{{ $item->bio }}</p>
                                <ul class="meta-course">
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                        </svg> {{ $item->lectures }} Lessons </li>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                        </svg>Subject: {{ $item->subject }} </li>


                                </ul>

                                <ul class="react-ratings">
                                    <li class="react-book">

                                    </li>
                                    <li class="price"><button class="btn btn-sm btn-primary">View Profile</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!--================= Pagination Section Start Here =================-->
            <ul class="back-pagination pt---20">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li class="back-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg></a></li>
            </ul>
            <!--================= Pagination Section End Here =================-->
        </div>
    </div>
    <!--================= Course Filter Section End Here =================-->
@endsection
@section('script')
@endsection
