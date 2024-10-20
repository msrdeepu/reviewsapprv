<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Setting;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = Subcategory::all();
        return view('superadmin.subcategory.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = new Subcategory();
        $list = Setting::where('type', 'LIST')->where('status', 1)->get();
        $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        return view('superadmin.subcategory.create', compact('data', 'list', 'status', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
        
        
        $result = new Subcategory();
        
        if ($request->hasFile('image')) {
        // Handle the image upload
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('categories', $imageName, 'public');
        
        // Update the image path in the database
        $result->image = $imagePath;
    }
        
        
        $result->category_id =$request->category_id;
        $result->subcategory =$request->subcategory;
        $result->slug =Str::slug($request->subcategory);
        $result->description =$request->description;
        $result->status =$request->status;
        $result->save();
        
        toastr()->success('New Subcategory Added');

        return redirect()->route('subcategory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Subcategory::find($id);
        $list = Setting::where('type', 'LIST')->where('status', 1)->get();
        $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();
        $categories = Category::where('status', 1)->get();

        return view('superadmin.subcategory.edit', compact('data', 'list', 'status', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $input = $request->except(['_token', '_method']);

        $result = Subcategory::find($id);
        
        
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

        $result->category_id =$request->category_id;
        $result->subcategory =$request->subcategory;
        $result->slug =Str::slug($request->subcategory);
        $result->description =$request->description;
        $result->status =$request->status;
        $result->save();

        toastr()->success('Subcategory Upated');

        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result = Subcategory::find($id);
        
        if ($result->image) {
            Storage::delete('public/' . $result->image);
        }

        $result->delete();

        toastr()->success('Subcategory Deleted');

        return redirect()->route('subcategory.index');
    }
}
