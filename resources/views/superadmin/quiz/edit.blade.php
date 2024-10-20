@extends('superadmin.layouts.master')

@section('title')
    <title>Edit Quiz</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Quiz</h1>
        </div>
        <div class="card">
            <div class="row">
                <div class="col-12 ">
                    <div class="">
                        <form method="POST" action="{{ route('quiz.update', $data->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @includeIf('superadmin.quiz.form')

                            <div class="card-footer text-center">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <a class="btn btn-danger" href="{{ route('quiz.index') }}">Cancel</a>
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
            
              var categoryValue = @json($data->category_id);
            $('#category_id').val(categoryValue).change();
            
              var subCategoryValue = @json($data->subcategory_id);
            $('#subcategory_id').val(subCategoryValue).change();
            
            
              var childCategoryValue = @json($data->childcategory_id);
            $('#childcategory_id').val(childCategoryValue).change();
        });
    </script>
@endsection
