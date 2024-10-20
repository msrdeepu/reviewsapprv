<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Setting;
use App\Models\Question;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Childcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = Quiz::all();
        return view('superadmin.quiz.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $data = new Quiz();
        $list = Setting::where('type', 'LIST')->where('status', 1)->get();
        $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        $subcategories = Subcategory::where('status', 1)->get();
        $childcategories = Childcategory::where('status', 1)->get();
        return view('superadmin.quiz.create', compact('data', 'list', 'status', 'categories','subcategories', 'childcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
        
        
         $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    
    
    
        
        
        $result = new Quiz();
        $result->name =$request->name;
        $result->category_id =$request->category_id;
        $result->subcategory_id =$request->subcategory_id;
        $result->childcategory_id =$request->childcategory_id;
        $result->marks =$request->marks;
        $result->questions =$request->questions;
        $result->slug =Str::slug($request->name);
        $result->metadata =$request->metadata;
        $result->keywords =$request->keywords;
        $result->description =$request->description;
        $result->status =$request->status;
        $result->duration =$request->duration;
     
        
         if ($request->hasFile('image')) {
        // Handle the image upload
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('thumbnails', $imageName, 'public');
        
        // Update the image path in the database
        $result->image = $imagePath;
    }
         $result->save();
        
        toastr()->success('New Quiz Added');

        return redirect()->route('quiz.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        
        $data = Quiz::find($id);
        $list = Setting::where('type', 'LIST')->where('status', 1)->get();
        $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        $subcategories = Subcategory::where('status', 1)->get();
        $childcategories = Childcategory::where('status', 1)->get();
        return view('superadmin.quiz.edit', compact('data', 'list', 'status', 'categories','subcategories', 'childcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $input = $request->except(['_token', '_method']);

        $result = Quiz::find($id);
        
        
        if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($result->image) {
            Storage::delete('public/' . $result->image);
        }

        // Upload the new image
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('thumbnails', $imageName, 'public');

        $result->image = $imagePath;
    }
    
    
        $result->name =$request->name;
        $result->category_id =$request->category_id;
        $result->subcategory_id =$request->subcategory_id;
        $result->childcategory_id =$request->childcategory_id;
        $result->marks =$request->marks;
        $result->questions =$request->questions;
        $result->slug =Str::slug($request->name);
        $result->metadata =$request->metadata;
        $result->keywords =$request->keywords;
        $result->description =$request->description;
        $result->status =$request->status;
        $result->duration =$request->duration;
        $result->save();
        
        toastr()->success('Quiz Updated');

        return redirect()->route('quiz.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result = Quiz::find($id);
        
        if ($result->image) {
            Storage::delete('public/' . $result->image);
        }

        $result->delete();

        toastr()->success('Quiz Deleted');

        return redirect()->route('quiz.index');
    }
    
    //add question
    
    public function addquestion($id)
    {
        $quiz_id = $id;
        
        $data = new Question();
        
        $optioncount =  Setting::where('type', 'OPTIONCOUNT')->where('status', 1)->get();
        

        return view('superadmin.question.create', compact('quiz_id', 'data', 'optioncount'));
    }
}
