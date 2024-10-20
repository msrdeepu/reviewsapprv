@extends('user.layouts.master')


@section('meta')

@endsection

@section('title')

@endsection


@section('styles')
<style>
    #quizStatusChart {
        margin: 20px auto;
        max-width: 400px; /* Adjust as necessary */
    }

    .progress-value {
        font-size: 1.5rem;
        color: #333;
        margin-top: 10px;
    }

    .stat-item {
        margin: 15px 0;
    }

    .dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 10px;
    }

    .success { background: #4caf50; }
    .wrong { background: #999999; }
    .unattempted { background: #ff9800; }

    @media (max-width: 768px) {
        #quizStatusChart {
            width: 100%;
            max-width: 300px; /* Adjust as necessary */
        }
        .progress-value {
            font-size: 1rem;
        }
    }
    
    
     #feedbackForm {
        max-width: 500px;
        margin: auto;
    }
    
    .form-control {
        border-radius: 0.25rem;
    }

    .btn {
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn:hover {
        background-color: #0056b3; /* Darker shade for hover effect */
        transform: translateY(-2px);
    }

    h5 {
        font-weight: bold;
    }
</style>



@endsection

@section('content')


  <!--================= Course Filter Section Start Here =================-->
        <div class="react-course-filter back__course__page_grid pb---40 pt-4">
    <div class="d-flex justify-content-center">
        <div class="card text-center" style="width:100%; max-width:600px;">
    <div class='container'>
            <h4 class="text-center mt-2 mb-3">{{$quizdata->name}}</h4>
</div>
            <div id="quizStatusChart"></div>
            
             
           <!-- Display Total Marks -->
           <div class='container mb-3'>
         <table class="table ">
  <thead>
    <tr>
     
      <th scope="col">Total Marks</th>
      <th scope="col">Correct Ans.</th>
      <th scope="col">Wrong Ans.</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>{{$data->marks}}</td>
      <td>{{$data->correct_answers}}</td>
      <td>{{$data->wrong_answers}}</td>
    </tr>
    
   
  </tbody>
</table>
</div>
            
            
            
            
            <div class='d-flex flex-row justify-content-around mb-3'>
                
            <a class="btn btn-success" href='{{route("quiz.categorysearch", $subcategory->slug)}}' type="button">Play More</a>
            <a class="btn btn-primary" href='/' type="button">Home</a>
            <button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Feedback</button>
            </div>
            
            <hr />
             <h4 class="text-center mt-2 mb-3">Related Quizzes</h4>
             <div class='container'>
                @foreach($relatedquizzes as $item)  
            <div class='d-flex flex-row justify-content-center mt-4'>
                
          
                <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$item->name}}</h5>
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
</div>

                
            </div>
            @endforeach
              </div>  



        </div>
        
        
        
 
    </div>
    
    
    

    
    
    
 
    
</div>




  <!--drawer feedback form  -->
  
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Provide Your Valuble Feedback</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
   <div class="d-flex justify-content-center">
       <div id="feedbackForm" class="card" style="width:100%; max-width:600px;">
    <h5 class="text-center mt-4">We Value Your Feedback!</h5>
   <form id="userFeedback" method="POST" class="p-4 rounded" action="{{route('quiz.feedback')}}">
    @csrf
    <input type='hidden' name='quiz_id' value="{{$data->quiz_id}}" />
    <div class="form-group">
        <label for="feedbackRating mb-1">How would you rate the quiz?</label>
        <select id="feedbackRating" class="form-control" required name='rating'>
            <option value="">Select Rating</option>
            @foreach($ratingoptions as $item)
            <option value="{{$item->value}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mt-3">
        <label for="feedback" class="mb-1">Feedback</label>
        <textarea id="feedback" class="form-control" rows="3" name='feedback' placeholder="Your Feedback..."></textarea>
    </div>
    <div class='d-flex flex-row justify-content-around'>
        <button type="submit" class="btn btn-primary btn-block mt-3">Submit Feedback</button>
        <a type="button" class="btn btn-danger btn-block mt-3" data-bs-dismiss="offcanvas">Close</a>
    </div>
</form>

<!-- Success alert placeholder (initially hidden) -->
<div id="feedbackAlert" class="alert alert-success alert-dismissible fade show mt-3" role="alert" style="display: none;">
    Feedback submitted successfully!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
        
        
    </div>
  </div>
</div>

       
@endsection
@section('script')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const correctAnswers = {{$data->correct_answers}};
        const wrongAnswers = {{$data->wrong_answers}};
        const unattempted = {{$quizdata->questions - ($data->correct_answers + $data->wrong_answers)}};

        const options = {
            chart: {
                type: 'donut',
                animations: {
                    enabled: true,
                    easing: 'easeinout',
                    speed: 800,
                    animateGradually: {
                        enabled: true,
                        delay: 150
                    },
                    dynamicAnimation: {
                        enabled: true,
                        speed: 350
                    }
                }
            },
            series: [correctAnswers, wrongAnswers, unattempted],
            labels: ['Correct', 'Wrong', 'Unattempted'],
            colors: ['#4caf50', '#999999', 'dodgerblue'],
            legend: {
                position: 'bottom',
                horizontalAlign: 'center',
            },
            responsive: [{
                breakpoint: 768,
                options: {
                    chart: {
                        width: '100%'
                    },
                    legend: {
                        position: 'top'
                    }
                }
            }]
        };

        const chart = new ApexCharts(document.querySelector("#quizStatusChart"), options);
        chart.render();
    });
    
    
    
    // form ajax request
    
   $(document).ready(function() {
        $('#userFeedback').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            let formData = $(this).serialize(); // Serialize form data

            $.ajax({
                url: $(this).attr('action'), // Use form's action URL
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Display the success alert
                    $('#feedbackAlert').show();

                    // Reset the form
                    $('#userFeedback')[0].reset();

                    // Close the offcanvas after 2 seconds
                    setTimeout(function() {
                        var offcanvasElement = document.querySelector('.offcanvas'); // Assuming offcanvas has the class "offcanvas"
                        var offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvasElement);
                        offcanvasInstance.hide();
                    }, 2000); // 2-second delay before closing
                },
                error: function(xhr, status, error) {
                    // Display an error alert or handle the error accordingly
                    alert('An error occurred: ' + error);
                }
            });
        });
    });
</script>





@endsection
