@extends('superadmin.layouts.master')

@section('title')
    <title>Edit Settings</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Settings</h1>
        </div>
        <div class="card">
            <div class="row">
                <div class="col-12 ">
                    <div class="">
                        <form method="POST" action="{{ route('settings.update', $data->id) }}">
                            @csrf
                            @method('PUT')
                            @includeIf('superadmin.settings.form')

                            <div class="card-footer text-center">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <a class="btn btn-danger" href="{{ route('settings.index') }}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
    </section>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {

            var typeValue = @json($data->type);
            $('#type').val(typeValue).change();

            var statusValue = @json($data->status);
            $('#status').val(statusValue).change();
        });
    </script>
@endsection
