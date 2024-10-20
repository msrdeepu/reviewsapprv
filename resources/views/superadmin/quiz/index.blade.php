@extends('superadmin.layouts.master')


@section('title')
    <title>Quiz</title>
    
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Quiz</h1>
        </div>


        {{-- table --}}

        <div class="card">
            <div class="card-header">

                <a href="{{ route('quiz.create') }}" class="btn btn-primary"><i class="ion-ios-plus-outline"></i>Add
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
                                        <th class="text-center">Thumb</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Slug</th>
                                        <th class="text-center">Marks</th>
                                        <th class="text-center">Duration</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Status</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td class="text-center">{{ $item->id }}</td>
                                                <td>
                                                    @if($item->image)
                                                        <img  src="{{ asset('storage/' . $item->image) }}" alt="Quiz Image" width="100">
                                                    @else
                                                        <span>No Image</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">{{ $item->name }}</td>
                                                <td class="text-center">{{ $item->slug }}</td>
                                                <td class="text-center">{{ $item->marks }}</td>
                                                <td class="text-center">{{ $item->duration }}</td>
                                                <td class="text-center">{{ $item->description }}</td>
                                                <td class="text-center">
                                                    @if ($item->status == 1)
                                                        <div class="badge badge-success m-2">Active</div>
                                                    @else
                                                        <div class="badge badge-danger m-2">In Active</div>
                                                    @endif
                                                </td>
                                               <td class="text-center">
                                                    <div class="dropdown">
                                                        <a href="#" class="text-dark" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                                            <li><a class="dropdown-item btn" href="{{ route('quiz.newquestion', $item->id) }}">Add Question</a></li>
                                                            <li><a class="dropdown-item btn" href="{{ route('quiz.viewuestion', $item->id) }}">All Questions</a></li>
                                                            <li><a class="dropdown-item btn" href="{{ route('quiz.edit', $item->id) }}">Edit</a></li>
                                                            <li>
                                                                <form action="{{ route('quiz.destroy', $item->id) }}" method="POST" class="d-inline">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="dropdown-item btn text-danger">Delete</button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
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
