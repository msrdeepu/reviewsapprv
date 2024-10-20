@extends('superadmin.layouts.master')

@section('title')
    <title>Edit Category</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Category</h1>
        </div>
        <div class="card">
            <div class="row">
                <div class="col-12 ">
                    <div class="">
                        <form method="POST" action="{{ route('category.update', $data->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
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


@section('scripts')
    <script>
        $(document).ready(function() {



            var statusValue = @json($data->status);
            $('#status').val(statusValue).change();
        });
    </script>
@endsection
