<?php

namespace App\Http\Controllers\Backend;

use App\Models\Page;
use App\Models\Setting;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = Page::paginate(10);
        return view('superadmin.pages.index', compact('data'));
    }
    
    public function create()
    {
        $data = new Page();
        $list = Setting::where('type', 'LIST')->where('status', 1)->get();
        $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();
        
         return view('superadmin.pages.create', compact('data', 'list', 'status'));
    }
    
    public function store(Request $request)
    {
        $input = $request->except('_token');


        $result = new Page();
        $result->name = $request->name;
        $result->slug =Str::slug($request->name);
        $result->meta =$request->meta;
        $result->keywords =$request->keywords;
        $result->body1 =$request->body1;
        $result->body2 =$request->body2;
        $result->body3 =$request->body3;
        $result->body4 =$request->body4;
        $result->body5 =$request->body5;
        $result->body6 =$request->body6;
        $result->status =$request->status;

        $result->save();

        toastr()->success('New Page Created');

        return redirect()->route('page.index');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $data = Page::find($id);
        $list = Setting::where('type', 'LIST')->where('status', 1)->get();
        $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();
        
        return view('superadmin.pages.edit', compact('data', 'list', 'status'));
    }
    
    public function update(Request $request, $id)
    {
        $input = $request->except(['_token', '_method']);

        $result = Page::find($id);
        $result->name = $request->name;
        $result->slug =Str::slug($request->name);
        $result->meta =$request->meta;
        $result->keywords =$request->keywords;
        $result->body1 =$request->body1;
        $result->body2 =$request->body2;
        $result->body3 =$request->body3;
        $result->body4 =$request->body4;
        $result->body5 =$request->body5;
        $result->body6 =$request->body6;
        $result->status =$request->status;
        $result->save();

        toastr()->success('Page Upated');

        return redirect()->route('page.index');
    }
    public function destroy($id)
    {
        $result = Page::find($id);

        $result->delete();

        toastr()->success('Page Deleted');

        return redirect()->route('page.index');
    }
}
