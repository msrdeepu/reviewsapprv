@extends('superadmin.layouts.master')

@section('title')
    <title>Settings</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Settings</h1>
        </div>


        {{-- table --}}

        <div class="card">
            <div class="card-header">

                <a href="{{ route('settings.create') }}" class="btn btn-primary"><i class="ion-ios-plus-outline"></i>Add
                    New</a>
            </div>

            <div class="row">
                <div class="col-12 table-responsive">
                    <div class="">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md" id="datatable">
                                    <thead>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Type</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Value</th>
                                        <th class="text-center">Display Order</th>

                                        <th>Status</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr class="text-left">

                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->type }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->value }}</td>
                                                <td>{{ $item->dorder }}</td>
                                                <td>
                                                    @if ($item->status == 1)
                                                        <div class="badge badge-success m-2">Active</div>
                                                    @else
                                                        <div class="badge badge-danger m-2">In Active</div>
                                                    @endif
                                                </td>
                                                <td class="d-flex flex-row justify-center">
                                                    <a href='{{ route('settings.edit', $item->id) }}'
                                                        class="btn btn-primary m-2">Edit</a>
                                                    <form action="{{ route('settings.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger m-2">Delete</button>
                                                    </form>
                                                </td>


                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            <div class="mt-4">
                {{-- {{ $data->links() }} --}}
            </div>



    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            $('#datatable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });



        });
    </script>
@endsection
