<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Setting::all();

        return view('superadmin.settings.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = new Setting();
        $list = Setting::where('type', 'LIST')->where('status', 1)->get();
        $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();
        return view('superadmin.settings.create', compact('data', 'list', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $input = $request->except('_token');

        $result = Setting::create($input);

        toastr()->success('New Setting Added');

        return redirect()->route('settings.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $data = Setting::find($id);
        $list = Setting::where('type', 'LIST')->where('status', 1)->get();
        $status = Setting::where('type', 'BOOLEAN')->where('status', 1)->get();

        return view('superadmin.settings.edit', compact('data', 'list', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = $request->except(['_token', '_method']);

        $result = Setting::find($id);

        $result->update($input);

        toastr()->success('Setting Upated');

        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result = Setting::find($id);

        $result->delete();

        toastr()->success('Setting Deleted');

        return redirect()->route('settings.index');
    }
}
