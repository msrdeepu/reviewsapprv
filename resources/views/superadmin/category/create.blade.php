@extends('superadmin.layouts.master')

@section('title')
    <title>Create Settings</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create Sujects</h1>
        </div>
        <div class="card">
            <div class="row">
                <div class="col-12 ">
                    <div class="">
                        <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                            @csrf
                            @includeIf('superadmin.category.form')

                            <div class="card-footer text-center">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <a class="btn btn-danger" href="{{ route('category.index') }}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
    </section>
@endsection
