@extends('layouts.app')

@section('content')
<div class="content-wrapper">

    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Add New Category    </h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
    </div>
    </div>
    </div>

    <section class="content">
        <div class="container-fluid">
        <h5 class="mb-2">Info Box</h5>
        <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
        <div class="info-box-content">
        <span class="info-box-text">Post</span>
        <span class="info-box-number">{{$posts}}</span>
        </div>
        
        </div>
        
        </div>
        
        <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
        <div class="info-box-content">
        <span class="info-box-text">Category</span>
        <span class="info-box-number">{{$Category}}</span>
        </div>
        
        </div>
        
        </div>
        
        <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
        <div class="info-box-content">
        <span class="info-box-text">Page</span>
        <span class="info-box-number">{{$Page}}</span>
        </div>
        
        </div>
        
        </div>
        
        <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
        <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
        <div class="info-box-content">
        <span class="info-box-text">Ads</span>
        <span class="info-box-number">3 ADS Live</span>
        </div>
        
        </div>
        
        </div>
        
        </div>

    <h1>Last 7 Day Post</h1>
    <div>
        <canvas id="myChart"></canvas>
      </div>
    
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
      <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['{{$dateformated7}}', '{{$dateformated6}}', '{{$dateformated5}}', '{{$dateformated4}}', '{{$dateformated3}}', '{{$dateformated2}}', '{{$dateformatetoday}}'],
            datasets: [{
              label: 'Number Of Post',
              data: [{{$day7}}, {{$day6}}, {{$day5}}, {{$day4}}, {{$day3}}, {{$day2}},{{$today}}],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      </script>

   
    </div>
@endsection
