@extends('superadmin.layouts.master')

@section('title')
    <title>Edit Subcategory</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Subcategory</h1>
        </div>
        <div class="card">
            <div class="row">
                <div class="col-12 ">
                    <div class="">
                        <form method="POST" action="{{ route('question.update', $data->id) }}">
                            @csrf
                            @method('PUT')
                            @includeIf('superadmin.question.form')

                            <div class="card-footer text-center">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <a class="btn btn-danger" href="{{ route('question.index') }}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
    </section>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {



            var answerValue = @json($data->answer);
            $('#answer').val(answerValue).change();
            
             
        });
    </script>
@endsection
