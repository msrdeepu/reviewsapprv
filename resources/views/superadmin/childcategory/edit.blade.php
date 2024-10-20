@extends('superadmin.layouts.master')

@section('title')
    <title>Edit Childcategory</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Childcategory</h1>
        </div>
        <div class="card">
            <div class="row">
                <div class="col-12 ">
                    <div class="">
                        <form method="POST" action="{{ route('childcategory.update', $data->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
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


@section('scripts')
    <script>
        $(document).ready(function() {



            var statusValue = @json($data->status);
            $('#status').val(statusValue).change();
            
              var categoryValue = @json($data->category_id);
            $('#category_id').val(categoryValue).change();
            
            var subCategoryValue = @json($data->subcategory_id);
            $('#subcategory_id').val(subCategoryValue).change();
        });
    </script>
@endsection
