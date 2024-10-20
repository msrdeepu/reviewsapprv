<?php

namespace App\Http\Controllers;

use App\Models\Childcategory;
use App\Models\Subcategory;
use App\Models\Setting;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ChildcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Childcategory::all();
        return view('superadmin.childcategory.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = new Childcategory();
        $list = Setting::where('type', 'LIST')->where('status', 1)->get();
        $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        $subcategories = Subcategory::where('status', 1)->get();
        return view('superadmin.childcategory.create', compact('data', 'list', 'status', 'categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
        
        
        $result = new Childcategory();
        $result->childcategory = $request->childcategory;
        
        if ($request->hasFile('image')) {
        // Handle the image upload
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('categories', $imageName, 'public');
        
        // Update the image path in the database
        $result->image = $imagePath;
    }
    
        $result->category_id =$request->category_id;
        $result->subcategory_id =$request->subcategory_id;
        $result->slug =Str::slug($request->childcategory);
        $result->description =$request->description;
        $result->status =$request->status;
        $result->save();
        
        toastr()->success('New Child Category Added');

        return redirect()->route('childcategory.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Childcategory $childcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Childcategory::find($id);
        $list = Setting::where('type', 'LIST')->where('status', 1)->get();
        $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        $subcategories = Subcategory::where('status', 1)->get();

        return view('superadmin.childcategory.edit', compact('data', 'list', 'status', 'categories', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = $request->except(['_token', '_method']);

        $result = Childcategory::find($id);
        $result->childcategory =$request->childcategory;
        
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
        $result->subcategory_id =$request->subcategory_id;
        $result->slug =Str::slug($request->childcategory);
        $result->description =$request->description;
        $result->status =$request->status;
        $result->save();

        toastr()->success('Childcategory Upated');

        return redirect()->route('childcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result = Childcategory::find($id);
        
        if ($result->image) {
            Storage::delete('public/' . $result->image);
        }

        $result->delete();

        toastr()->success('Childcategory Deleted');

        return redirect()->route('childcategory.index');
    }
}
