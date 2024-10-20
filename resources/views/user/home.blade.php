@extends('user.layouts.master')

@section('styles')
@endsection

@section('content')
    <style>

    </style>
    <!--=================  Banner Section Start Here ================= -->
    <div class="hero3__area p-relative">
        <div class="hero3__shape">
            <img class="hero3__shape-1" src="assets/images/banner2/shape/01.png" alt="Banner shape image">
            <img class="hero3__shape-2" src="assets/images/banner2/shape/02.png" alt="Banner shape image">
            <img class="hero3__shape-3" src="assets/images/banner2/shape/03.png" alt="Banner shape image">
        </div>
        <div class="container p-relative">
            <div class="hero3__content">
                <h1 class="hero3__title">Learn Course Online <br> <em>New Today</em></h1>
                <img src="https://res.cloudinary.com/dawjtloik/image/upload/v1729433948/reviewsapp/skcddtuppx4cpu4bvrf3.png"
                    alt="line">
                <form class="search-form" method='GET' action="{{ route('searchprofessors') }}">
                    @csrf
                    <input type="text" class="form-input" name='name' placeholder="Search Professor">
                    <button type="submit" class="form-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-search">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </form>

            </div>
            <div class="about__content">
                <ul>
                    <li>
                        <div class="icon">
                            <img src="https://res.cloudinary.com/dawjtloik/image/upload/v1729433818/reviewsapp/gz4plhdg2aggkhxfqfaf.png"
                                alt="image">
                        </div>
                        <div class="text">
                            <h4>9.4k+</h4>
                            <p>Total active students taking <br> gifted courses.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/banner2/bg11.png') }}" alt="image">
                        </div>
                        <div class="text">
                            <h4>70+</h4>
                            <p>Available field programs <br> gifted courses.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="hero3__image">
                <img class="hero3__image-1" src="{{ asset('frontend/assets/images/banner2/normal-image/01.png') }}"
                    alt="image">
                <img class="hero3__image-2" src="{{ asset('frontend/assets/images/banner2/normal-image/02.png') }}"
                    alt="image">
            </div>
        </div>
    </div>
    <!--=================  Banner Section End Here ================= -->
@endsection
@section('script')
@endsection
