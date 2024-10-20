@extends('user.layouts.master')

@section('meta')

@endsection

@section('title')

@endsection

@section('styles')
<style>
    .description {
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2; /* Show only 5 lines */
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
}

.read-more-btn {
    color: #007bff;
    cursor: pointer;
    text-decoration: underline;
}

.full-text {
    -webkit-line-clamp: unset;
}

</style>
<style>
    .inner-course:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .case-title a:hover {
        color: #0056b3;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>
@endsection

@section('content')

  <!--================= Course Filter Section Start Here =================-->
                <div class="react-course-filter back__course__page_grid pb---40 pt-4">
                    <div class="container "> 
                        <div class="row align-items-center back-vertical-middle shorting__course mb-50 d-none ">
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
                                    <option>Filter By Topic</option>
                                    @foreach($childcatdata as $item)
                                    <option><a href='#'>{{$item->childcategory}}</a></option>
                                    @endforeach
                                    
                                </select>
                                
                            </div>
                        </div>
                                                                         
                        <div class="row">  
                        
                        
                        @if($quizzes->isEmpty())
        <!-- Display 'Quizzes Coming Soon' screen if data is empty -->
        <div class="coming-soon text-center">
            <h1 class="display-4"> Quizzes Coming Soon</h1>
            <p class="lead">Stay tuned! Exciting quizzes will be available soon.</p>
            <div class="spinner-grow text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    @else
                        
                        @foreach($quizzes as $item)
                     
                            <div class="single-studies col-lg-3 grid-item">
    <div class="inner-course" style="border-radius: 15px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
        <div class="case-img">
            <!--<a href="#" class="cate-w"><p>{{$item->category}}</p></a>-->
            <img src="{{ asset('storage/' . $item->image) }}" alt="Course Image" style="width: 100%; height: auto; object-fit: cover;">
        </div>
        <div class="case-content" style="padding: 20px; background-color: #fff;">
            <h4 class="case-title" style="margin-bottom: 10px; font-weight: 600;">
                <a href="coureses-single.html" style="color: #333; text-decoration: none;">{{$item->name}}</a>
            </h4>
            <p class="description" style="color: #666; line-height: 1.6;">{{$item->description}}</p>
            <a href="javascript:void(0)" class="read-more-btn" style="color: #007bff; font-weight: bold; text-decoration: underline;">Read more</a>
            
            <ul class="react-ratings" style="display: flex; justify-content: space-between; padding: 0; margin-top: 15px; list-style: none;">
                <li style="display: flex; align-items: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock" style="margin-right: 5px;">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <span>{{$item->duration}}m</span>
                </li>
                
                <li class="price mt-2">
                    <a href='{{ route("quiz.playview", $item->slug) }}' class="btn btn-primary" style="border-radius: 25px; padding: 8px 16px;">Start Quiz</a>
                </li>
            </ul>
        </div>
    </div>
</div>
                    
                        @endforeach
                           
                        </div>
        @endif                 
                        <!--================= Pagination Section Start Here =================-->
                       <div class='d-flex flex-row justify-content-center'>
                           {{$quizzes->links()}}
                       </div>
                        <!--================= Pagination Section End Here =================-->
                    </div>
                </div>
                <!--================= Course Filter Section End Here =================--> 
                
            </div>
        </div>
        <!--================= Wrapper End Here =================-->
@endsection
@section('script')

<script>
$(document).ready(function() {
    $('.read-more-btn').click(function() {
        var description = $(this).prev('.description');
        description.toggleClass('full-text');

        if (description.hasClass('full-text')) {
            $(this).text('Read less');
        } else {
            $(this).text('Read more');
        }
    });
});
</script>
@endsection
