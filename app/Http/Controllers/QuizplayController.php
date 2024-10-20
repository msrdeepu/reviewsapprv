<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Attempt;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Childcategory;
use App\Models\Quizreview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizplayController extends Controller
{
    public function playview($slug)
    {
        $user = Auth::user();
        $quiz = Quiz::where('slug', $slug)->first();
        $quiz_id = $quiz->id;
        $questions = Question::where('quiz_id', $quiz_id)->get();
        
        $result = new Attempt();
        $result->user_id = $user->id;
        $result->quiz_id = $quiz_id;
        $result->attempted_on = now()->format('Y-m-d H:i:s');
        $result->save();
        
        $attempt_id = $result->id;
        
        return view('user.playview', compact('questions', 'quiz', 'attempt_id'));
    }
    
    public function searchbycategory($slug)
    {
        $subcatdata = Subcategory::where('slug', $slug)->first();
        
        $quizzes = Quiz::where('status', 1)->where('subcategory_id', $subcatdata->id)->paginate(6);
        
        $childcatdata = Childcategory::where('subcategory_id', $subcatdata->id)->get();
        
        return view('user.categorybyview', compact('quizzes', 'childcatdata'));
    }
    
    public function validateAnswer(Request $request)
    {
        if($request->attempt_id){
            
            $quiz_id = $request->quiz_id;
            
            $attempt_id = $request->attempt_id;
            
             $new_marks = $request->marks;
            
             $attempt = Attempt::find($attempt_id);
             
             $correct_ones = $attempt->correct_answers;
             $wrong_ones = $attempt->wrong_answers;
             $no_questions = $attempt->no_questions;
             $current_marks = $attempt->marks;
             
             
            $attempt->no_questions = $no_questions + 1;
           
            
            if($request->answer_type == 1){
               
                $attempt->correct_answers = $correct_ones + 1;
                 $attempt->marks = $current_marks + $new_marks;
            }elseif($request->answer_type == 0){
                 $attempt->wrong_answers = $wrong_ones + 1;
            }
                $attempt->save();
            
   
        }
        
        
    }
    
    public function viewresults(Request $request)
    {
        if($request->attempt_id){
            $attempt_id = $request->attempt_id;
            $data = Attempt::find($attempt_id);
            
            $quizid = $data->quiz_id;
            
            $quizdata = Quiz::find($quizid);
            
            $subcatid = $quizdata->subcategory_id;
            
            $subcategory = Subcategory::find($subcatid);
            
            $relatedquizzes = Quiz::where('status',1)->orderBy('created_at', 'desc')->take(3)->get();
            
            $ratingoptions = Setting::where('type', 'Rating')->orderBy('created_at', 'desc')->get();
            
            
            return view('user.quizresults', compact('data', 'quizdata', 'ratingoptions', 'subcategory', 'relatedquizzes'));
        }
    }
    
    public function feedback(Request  $request)
    {
        $result = new Quizreview();
        $result->user_id = Auth::user()->id;
        $result->quiz_id = $request->quiz_id;
        $result->rating = $request->rating;
        $result->feedback = $request->feedback;
        $result->save();
        
        toastr()->success('Feedback Sent Succesfuly!');
        
        return redirect()->route('main.home');
    }
}
