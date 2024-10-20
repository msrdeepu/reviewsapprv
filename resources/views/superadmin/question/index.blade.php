@extends('superadmin.layouts.master')

@section('title')
    <title>Questions List</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Questions List</h1>
        </div>


        {{-- table --}}

       
              
                  
            @foreach($data as $item)
             <div class="card">

              <div class="row">
                      <div class="col-12 table-responsive mt-3">
                        <div class="card-body">
                                <h5 class="card-title">Q: {!!$item->question!!}</h5>
                                <ul>
                                    <li>{!!$item->option_1!!}</li>
                                    <li>{!!$item->option_2!!}</li>
                                    <li>{!!$item->option_3!!}</li>
                                    <li>{!!$item->option_4!!}</li>
                                </ul>
                                
                                @php
                                    $answerMessage = '';
                                    if ($item->answer == 'option_1') {
                                        $answerMessage = $item->option_1;
                                    } elseif ($item->answer == 'option_2') {
                                        $answerMessage = $item->option_2;
                                    } elseif ($item->answer == 'option_3') {
                                        $answerMessage = $item->option_3;
                                    } elseif ($item->answer == 'option_4') {
                                        $answerMessage = $item->option_4;
                                    }
                                @endphp
                              
                                <h5 class='text-success'>Ans: {{$item->answer}} - {!! $answerMessage !!}</h5>
                                
                                <p>Hint: {{$item->hint}}</p>
                                <p>Explanation: {{$item->explanation}}</p>
                        </div>
                        <div class='d-flex flex-row justify-content-center m-3'>
                            <a class='btn btn-primary m-2' href="{{route('question.edit', $item->id)}}">Edit</a>
                           <form action="{{route('question.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger m-2">Delete</button>
                        </form>
                        </div>
                  </div> 
               </div>
             </div>
                       
            @endforeach
                   
              
<div class='d-flex flex-row justify-content-center'>
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
