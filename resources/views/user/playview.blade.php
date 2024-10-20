@extends('user.layouts.master')


@section('meta')

@endsection

@section('title')

@endsection

@section('styles')


<style>
.question_card_body{
    font-size: 18px;
    color: #00306E;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;

}
.option-card {
    border: none;
    border-radius: 8px;
    margin: 10px 0;
    background-color: #ffffff;
    cursor: pointer;
    transition: all 0.3s ease;
}

.option-card:hover {

    transform: scale(1.02);
}


.correct-answer {
    background-color: #28a745;
    font-weight: bold;
    color: white;
    font-size: 18px;
    border-radius: 8px;
}

.wrong-answer {
    background-color: #dc3545;
    font-weight: bold;
    color: white;
    font-size: 18px;
    border-radius: 8px;
}

.disabled-answer {
    pointer-events: none;

}
.submit-btn{
     background-color: #00306E;
    border-radius: 8px;
    padding: 12px;
    color: white;
    text-align: center;
    font-size: 18px;
    width: 100%;
    margin-top: 15px;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #0055a5;
}


/*badge*/
.custom-heading {
    color: #ffcc00;
    text-align: center;
}

.custom-badge {
    background-image: linear-gradient(145deg, rgba(24, 160, 255, 1) 20%, rgba(5, 80, 155, 1) 80%);
    color: #ffffff;
    padding: 12px 20px;
    border-radius: 50px;
    font-weight: bold;
    font-size: 16px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    display: inline-block;
    text-align: center;
    transition: all 0.3s ease;
}
.custom-badge:hover {
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    transform: translateY(-3px);
}


.quiz-question {
    font-size: 22px;
    color: #333333;
    margin-bottom: 20px;
}

/* Main Question Section Container */
.question-section {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

/* Custom Heading (Q 1 - Marks) */
.custom-heading {
    color: #333333;
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
}

/* Custom Badge */
.custom-badge {
    background-image: linear-gradient(145deg, rgba(24, 160, 255, 1) 20%, rgba(5, 80, 155, 1) 80%);
    color: #ffffff;
    padding: 8px 16px;
    border-radius: 30px;
    font-size: 14px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
    display: inline-block;
    transition: all 0.3s ease;
}

/* Smooth hover effect for badge */
.custom-badge:hover {
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    transform: translateY(-2px);
}

/* Quiz Question Text */
.quiz-question {
    font-size: 20px;
    font-weight: 600;
    color: #00306E;
    margin-top: 15px;
    margin-bottom: 25px;
    text-align: center;
}



/* Smooth transition on hover for the entire question section */
.question-section:hover {
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
}

h5 {
    font-size: 24px;
    color: #333333;
}

hr {
    border-top: 2px solid #ddd;
}
.question-container {
    display: none;
    animation: fadeIn 0.3s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
.explanation {
    text-align:center;
    display: none; /* Initially hidden */
    padding: 10px;
    margin-top: 10px;
    border: 2px solid #90ee90; /* Light green border */
    border-radius: 10px; /* Smooth, curved edges */
    background-color: #f9fff9; /* Light greenish background for subtle highlight */
    color: #333; /* Text color */
    font-size: 16px;
    transition: all 0.5s ease-in-out; /* Smooth transition for all properties */
    opacity: 0; /* Hidden by opacity for smoother animation */
}

.explanation.show {
    display: block; /* Display when triggered */
    opacity: 1; /* Fully visible */
}



</style>
@endsection

@section('content')


  <!--================= Course Filter Section Start Here =================-->
                <div class="react-course-filter back__course__page_grid pb---40 pt-4">
                    <div class="container "> 
                    
                    
                  <div class="card mb-4 p-3 d-none d-md-block">
    <div class="row ">
        <div class="col-12 text-center">
            <h4 class="quiz-name">{{ $quiz->name }}</h4>
            <!--<p class="quiz-details mb-0">-->
            <!--    <span class="badge bg-primary">{{ $quiz->marks }} Marks</span>-->
            <!--    <span class="badge bg-info">{{ $quiz->duration }} min</span>-->
            <!--</p>-->
        </div>
    </div>
</div>

                                                                       
                       <div class="row justify-content-center">
                           
    <div class="col-12">
        <div class="card quiz-card p-4 shadow">
            <div class="card-body">
               
                <form id="quizForm" action='{{route("quiz.viewresults")}}' method='POST'>
                    @csrf
                    
                    <input id="attempt_id" type='hidden' value="{{$attempt_id}}" name='attempt_id' />
                    
      @foreach($questions as $index => $item)

      
    <div class="question-container" data-question-id="{{ $item->id }}"  style="display: {{ $index == 0 ? 'block' : 'none' }};">
        <h5 class="text-center custom-heading">
            <span class="custom-badge mt-3">Q {{ $index + 1 }} - Marks: {{ $item->marks }}</span>
        </h5>
        <p class="quiz-question text-left" id="question_{{ $item->id }}" data-answer="{{ $item->answer }}" data-marks="{{ $item->marks }}" style="font-weight: bold; color: #00306E; font-size: 18px;">
             {!! strip_tags($item->question) !!}
        </p>
        
         <p class="explanation" id="explanation_{{ $item->id }}" style="display: none;">
           <b>Explanation:</b> {!! strip_tags($item->explanation) !!}
        </p>

        <div class="card option-card mt-2 d-flex justify-content-center" data-option="option_1">
            <div class="card-body question_card_body text-center">
                {!! strip_tags($item->option_1) !!}
            </div>
        </div>
        <div class="card option-card mt-2 d-flex justify-content-center" data-option="option_2">
            <div class="card-body question_card_body text-center">
              {!! strip_tags($item->option_2) !!}
            </div>
        </div>
        <div class="card option-card mt-2 d-flex justify-content-center" data-option="option_3">
            <div class="card-body question_card_body text-center">
       {!! strip_tags($item->option_3) !!}
            </div>
        </div>
        <div class="card option-card mt-2 d-flex justify-content-center" data-option="option_4">
            <div class="card-body question_card_body text-center">
              {!! strip_tags($item->option_4) !!}
            </div>
        </div>

        <!-- Only show the "Next" button if it's not the last question -->
        @if($index + 1 < count($questions))
    <div class="d-flex justify-content-center mt-3">
        <button type="button" class="btn btn-primary next-question-btn w-100" style="max-width: 300px;">Next</button>
    </div>
@else
    <div class="d-flex justify-content-center mt-3">
        <button type="submit" class="btn btn-success w-100" style="max-width: 300px;">Submit</button>
    </div>
@endif

    </div>
@endforeach

       
    </form>
               
            </div>
        </div>
    </div>
</div>

                    </div>
                </div>
              
                
            </div>
        </div>
        
        <audio id="correctSound" src="{{ asset('sounds/rightanswer.mp3') }}" preload="auto"></audio>
<audio id="wrongSound" src="{{ asset('sounds/wronganswer.mp3') }}" preload="auto"></audio>

        <!--================= Wrapper End Here =================-->
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function() {
    // When next button is clicked, show the next question
    $('.next-question-btn').on('click', function() {
        var currentQuestion = $(this).closest('.question-container');
        var nextQuestion = currentQuestion.next('.question-container');

        // Hide the current question and show the next one
        currentQuestion.hide();
        nextQuestion.show();
    });
});

$(document).ready(function() {
    // When an option card is clicked
    $('.option-card').on('click', function() {
        var selectedOption = $(this).data('option');  // Get the selected option
        var questionId = $(this).closest('.question-container').data('question-id');
        var questionContainer = $(this).closest('.question-container');
        var correctAnswer =  $('#question_' + questionId).data('answer'); // Get the correct answer
        var marks = $('#question_' + questionId).data('marks'); // Get the marks
        

    

        // If marks is undefined, log the entire question element for debugging
        if (marks === undefined) {
            console.error($('#question_' + questionId)); // Log the entire element to inspect it
        }

        // Clear previous background color for siblings
        $(this).siblings('.option-card').css('background-color', ''); 
        //$(this).css('background-color', 'lightblue'); // Highlight the selected answer
        
        // Check if the selected option is correct
        if (selectedOption === correctAnswer) {
            // Correct answer
            $('#correctSound')[0].play();
            $(this).addClass('correct-answer');
            $(this).find('.question_card_body').css('color', 'white');

        } else {
            // Incorrect answer
            $('#wrongSound')[0].play();
            //alert(explanation);
            
            let explanationText = $('#explanation_' + questionId).data('explanation');
            $('#explanation_' + questionId).text(explanationText); // Set the explanation text
            $('#explanation_' + questionId).css('display', 'block').addClass('show');
            
            $(this).addClass('wrong-answer'); 
            $(this).find('.question_card_body').css('color', 'white'); // Set text color to white for the selected option card

          
           questionContainer.find('.option-card').each(function() {
                // Debugging statement to check the current option and correct answer
                console.log('Current Option:', $(this).data('option'), 'Correct Answer:', correctAnswer);
                
                if ($(this).data('option') === correctAnswer) {
                    $(this).addClass('correct-answer'); // Highlight the correct answer
                    $(this).css('background-color', '#28a745'); // Set background color to green
                    $(this).find('.question_card_body').css('color', 'white'); // Set text color to white
                }
            });
        }

        // Send AJAX request to validate the answer
        $.ajax({
            url: '/validate', 
            method: 'POST',
            data: {
                answer_type: selectedOption === correctAnswer ? 1 : 0, // Determine answer type based on correctness
                attempt_id: $('#attempt_id').val(),
                marks: marks,
                _token: $('meta[name="csrf-token"]').attr('content') 
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });

        // Disable further selection for this question
        $(this).siblings('.option-card').addClass('disabled-answer');
        $(this).addClass('disabled-answer');
    });
});


    </script>
@endsection
