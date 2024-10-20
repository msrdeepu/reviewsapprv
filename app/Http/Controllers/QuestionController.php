<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\Setting;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    
    public function viewquestion($id)
    {
        $data = Question::where('quiz_id', $id)->paginate(15);
        
        return view('superadmin.question.index',compact('data'));
    }
    
     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        
        $result = new Question();
        $result-> quiz_id = $request->quiz_id;
        $result-> question = $request->question;
        $result-> option_1 = $request->option_1;
        $result-> option_2 = $request->option_2;
        $result-> option_3 = $request->option_3;
        $result-> option_4 = $request->option_4;
        $result-> answer = $request->answer;
        $result-> marks = $request->marks;
        $result-> hint = $request->hint;
        $result-> explanation = $request->explanation;
        $result->save();
        
        toastr()->success('Question Added');

        return redirect()->back();

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

   

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $data = Question::find($id);
        
         $quiz_id = $data->quiz_id;
        
        $optioncount =  Setting::where('type', 'OPTIONCOUNT')->where('status', 1)->get();
        

        return view('superadmin.question.edit', compact('quiz_id', 'data', 'optioncount'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $result = Question::find($id);
        $result-> quiz_id = $request->quiz_id;
        $result-> question = $request->question;
        $result-> option_1 = $request->option_1;
        $result-> option_2 = $request->option_2;
        $result-> option_3 = $request->option_3;
        $result-> option_4 = $request->option_4;
        $result-> answer = $request->answer;
        $result-> marks = $request->marks;
        $result-> hint = $request->hint;
        $result-> explanation = $request->explanation;
        $result->save();
        
        toastr()->success('Question Added');
        

        
         return redirect()->route('quiz.viewuestion', $result->quiz_id);
        //  return redirect()->route('quiz.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result = Question::find($id);
        
        $result->delete();

        toastr()->success('Question Deleted');

        return redirect()->back();
    }
}
