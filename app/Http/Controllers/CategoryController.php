<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subject;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::all();
        return view('superadmin.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = new Category();
        $list = Setting::where('type', 'LIST')->where('status', 1)->get();
        $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();
        return view('superadmin.pages.create', compact('data', 'list', 'status'));
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
        

        $result = new Category();
        $result->category = $request->category;
        $result->slug =Str::slug($request->category);
        $result->description =$request->description;
        $result->status =$request->status;
        
        if ($request->hasFile('image')) {
        // Handle the image upload
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('categories', $imageName, 'public');
        
        // Update the image path in the database
        $result->image = $imagePath;
    }
        
        
        $result->save();

        toastr()->success('New Category Added');

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $data = Category::find($id);
        $list = Setting::where('type', 'LIST')->where('status', 1)->get();
        $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();

        return view('superadmin.category.edit', compact('data', 'list', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = $request->except(['_token', '_method']);

        $result = Category::find($id);
        
        if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($result->image) {
            Storage::delete('public/' . $result->image);
        }

        // Upload the new image
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('categories', $imageName, 'public');

        $result->image = $imagePath;
    }

        $result->category = $request->category;
        $result->slug =Str::slug($request->category);
        $result->description =$request->description;
        $result->status =$request->status;
        $result->save();

        toastr()->success('Category Upated');

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result = Category::find($id);

        if ($result->image) {
            Storage::delete('public/' . $result->image);
        }

        $result->delete();

        toastr()->success('Category Deleted');

        return redirect()->route('category.index');
    }
}
