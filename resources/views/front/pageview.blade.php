@extends('user.layouts.master')


@section('meta')

@endsection

@section('title')
{{$data->name}}
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
                                    <h1 class="breadcrumbs-title">{{$data->name}}</h1>
                                    <div class="back-nav">
                                        <ul>
                                            <li><a href="/">Home</a></li>
                                            <li>{{$data->name}}</li>
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
                        <div class="row pb-2">
                              {!! $data->body1 !!}
                        </div>
                        <div class="row pb-2">
                              {!! $data->body2 !!}
                        </div>
                        <div class="row pb-2">
                              {!! $data->body3 !!}
                        </div>
                        <div class="row pb-2">
                              {!! $data->body4 !!}
                        </div>
                        <div class="row pb-2">
                              {!! $data->body5 !!}
                        </div>
                        <div class="row pb-2">
                              {!! $data->body6 !!}
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