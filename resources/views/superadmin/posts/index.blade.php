@extends('superadmin.layouts.master')

@section('title')
    <title>Posts</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Posts</h1>
        </div>


        {{-- table --}}

        <div class="card">
            <div class="card-header">

                <a href="{{ route('post.create') }}" class="btn btn-primary"><i class="ion-ios-plus-outline"></i>Add
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
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Slug</th>
                                        <th class="text-center">Views</th>
                                        <th class="text-center">Status</th>
                                    
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td class="text-center">{{ $item->id}}</td>
                                                
                                                <td>
                                                    @if($item->thumb)
                                                        <img style='height:50px; width:50px;'  src="{{ asset('storage/' . $item->thumb) }}" alt="Thumb Image" width="100">
                                                    @else
                                                        <span>No Image</span>
                                                    @endif
                                                </td>
                                                
                                                <td class="text-center">{{ $item->title }}</td>
                                                <td class="text-center"><a href='#'>{{ $item->slug}}</a></td>
                                                <td class="text-center"><a href='#'>{{ $item->views}}</a></td>
                                               
                                                <td class="text-center">
                                                    @if ($item->status == 1)
                                                        <div class="badge badge-success m-2">Active</div>
                                                    @else
                                                        <div class="badge badge-danger m-2">In Active</div>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <div class='d-flex flex-row justify-center '>
                                                    <a href="{{ route('post.edit', $item->id) }}"
                                                        class="btn btn-primary m-2">Edit</a>
                                                    <form action="{{ route('post.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger m-2">Delete</button>
                                                    </form>
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
               {{$data->links()}}
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
