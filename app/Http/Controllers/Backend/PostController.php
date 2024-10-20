<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::paginate(10);
        return view('superadmin.posts.index', compact('data'));
    }
    
    public function create()
    {
        $data = new Post();
        $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        $subcategories = Subcategory::where('status', 1)->get();
        
         return view('superadmin.posts.create', compact('data', 'status', 'categories', 'subcategories'));
    }
    
    public function store(Request $request)
    {
        $input = $request->except('_token');
        
        $request->validate([
        'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'thumb' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    
        $user = Auth::user();
        
  

        $result = new Post();
        $result->title = $request->title;
        $result->seotitle = $request->seotitle;
        $result->slug =Str::slug($request->seotitle);
        $result->meta =$request->meta;
        $result->keywords =$request->keywords;
        $result->category_id =$request->category_id;
        $result->subcategory_id =$request->subcategory_id;
        
         if ($request->hasFile('banner')) {
        // Handle the image upload
        $image = $request->file('banner');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('uploads', $imageName, 'public');
        
        // Update the image path in the database
        $result->banner = $imagePath;
    }
         if ($request->hasFile('featured_image')) {
        // Handle the image upload
        $image = $request->file('featured_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('uploads', $imageName, 'public');
        
        // Update the image path in the database
        $result->featured_image = $imagePath;
    }
         if ($request->hasFile('thumb')) {
        // Handle the image upload
        $image = $request->file('thumb');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('uploads', $imageName, 'public');
        
        // Update the image path in the database
        $result->thumb = $imagePath;
    }
        
        $result->author_id =$user->id;
        $result->body1 =$request->body1;
        $result->body2 =$request->body2;
        $result->body3 =$request->body3;
        $result->body4 =$request->body4;
        $result->body5 =$request->body5;
        $result->body6 =$request->body6;
        $result->status =$request->status;

        $result->save();

        toastr()->success('New Post Created');

        return redirect()->route('post.index');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $data = Post::find($id);
       $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        $subcategories = Subcategory::where('status', 1)->get();
        
        return view('superadmin.posts.edit', compact('data', 'status', 'categories', 'subcategories'));
    }
    
    public function update(Request $request, $id)
    {
        $input = $request->except(['_token', '_method']);
        
        
        $request->validate([
        'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'thumb' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    
        $user = Auth::user();

        $result = Post::find($id);
        $result->title = $request->title;
        $result->seotitle = $request->seotitle;
        $result->slug =Str::slug($request->seotitle);
        $result->meta =$request->meta;
        $result->keywords =$request->keywords;
        $result->category_id =$request->category_id;
        $result->subcategory_id =$request->subcategory_id;
        
         if ($request->hasFile('banner')) {
             
             if ($result->banner) {
            Storage::delete('public/' . $result->banner);
        }
        // Handle the image upload
        $image = $request->file('banner');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('uploads', $imageName, 'public');
        
        // Update the image path in the database
        $result->banner = $imagePath;
    }
         if ($request->hasFile('featured_image')) {
             
              if ($result->featured_image) {
            Storage::delete('public/' . $result->featured_image);
        }
        // Handle the image upload
        $image = $request->file('featured_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('uploads', $imageName, 'public');
        
        // Update the image path in the database
        $result->featured_image = $imagePath;
    }
         if ($request->hasFile('thumb')) {
             
             if ($result->thumb) {
            Storage::delete('public/' . $result->thumb);
        }
        // Handle the image upload
        $image = $request->file('thumb');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('uploads', $imageName, 'public');
        
        // Update the image path in the database
        $result->thumb = $imagePath;
    }
        
        $result->author_id =$user->id;
        $result->body1 =$request->body1;
        $result->body2 =$request->body2;
        $result->body3 =$request->body3;
        $result->body4 =$request->body4;
        $result->body5 =$request->body5;
        $result->body6 =$request->body6;
        $result->status =$request->status;

        $result->save();

        toastr()->success('Post Upated');

        return redirect()->route('post.index');
    }
    public function destroy($id)
    {
         $result = Post::find($id);
        
        if ($result->banner) {
            Storage::delete('public/' . $result->banner);
        }
        if ($result->thumb) {
            Storage::delete('public/' . $result->thumb);
        }
        if ($result->featured_image) {
            Storage::delete('public/' . $result->featured_image);
        }

        $result->delete();

        toastr()->success('Post Deleted');

        return redirect()->route('post.index');
    }
}
