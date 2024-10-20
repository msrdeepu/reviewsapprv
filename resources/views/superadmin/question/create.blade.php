@extends('superadmin.layouts.master')

@section('title')
    <title>Create Question</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create Question</h1>
        </div>
        <div class="card">
            <div class="row">
                <div class="col-12 ">
                    <div class="mb-3">
                        <form method="POST" action="{{ route('question.store') }}">
                            @csrf
                            @includeIf('superadmin.question.form')

                            <div class="card-footer text-center">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <a class="btn btn-danger" href="{{ route('subcategory.index') }}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
    </section>
@endsection
