@extends('superadmin.layouts.master')

@section('title')
    <title>Create Childcategory</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create Childcategory</h1>
        </div>
        <div class="card">
            <div class="row">
                <div class="col-12 ">
                    <div class="">
                        <form method="POST" action="{{ route('childcategory.store') }}" enctype="multipart/form-data">
                            @csrf
                            @includeIf('superadmin.childcategory.form')

                            <div class="card-footer text-center">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <a class="btn btn-danger" href="{{ route('childcategory.index') }}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
    </section>
@endsection
