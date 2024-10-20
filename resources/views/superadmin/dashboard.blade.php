@extends('superadmin.layouts.master')

@section('title')
    <title>Super Admin Panel</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>


       <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                
                <div class="card-icon shadow-primary bg-primary">
                  <i class="text-white fa fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Users</h4>
                  </div>
                  <div class="card-body">
                    {{$userscount}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-brain"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Quizzes</h4>
                  </div>
                  <div class="card-body">
                   {{$quizcount}}
                  </div>
                </div>
              </div>
            </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-book"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Posts</h4>
                  </div>
                  <div class="card-body">
                     {{$postcount}}
                  </div>
                </div>
              </div>
            </div>
          </div>


       
         <div class="card p-2 mt-5">
         
          <div id="chart"></div>
        </div>


    </section>
@endsection

@section('scripts')
 <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
  // Get the data from PHP (using Blade syntax)
  const dates = @json($dates); // PHP array to JavaScript
  const totals = @json($totals); // PHP array to JavaScript

  const options = {
    chart: {
      type: 'line',
      height: 350,
    },
    series: [{
      name: 'New Users',
      data: totals,
    }],
    xaxis: {
      categories: dates,
    },
    title: {
      text: 'New Users Over the Last 15 Days',
      align: 'left',
    },
  };

  // Render the chart
  const chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
</script>

@endsection
