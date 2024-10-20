<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Setting;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Subject::all();
        return view('superadmin.subjects.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = new Subject();
        $list = Setting::where('type', 'LIST')->where('status', 1)->get();
        $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();
        return view('superadmin.subjects.create', compact('data', 'list', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');

        $result = Subject::create($input);

        toastr()->success('New Subject Added');

        return redirect()->route('subjects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $data = Subject::find($id);
        $list = Setting::where('type', 'LIST')->where('status', 1)->get();
        $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();

        return view('superadmin.subjects.edit', compact('data', 'list', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = $request->except(['_token', '_method']);

        $result = Subject::find($id);

        $result->update($input);

        toastr()->success('Subject Upated');

        return redirect()->route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result = Subject::find($id);

        $result->delete();

        toastr()->success('Subject Deleted');

        return redirect()->route('subjects.index');
    }
}
