@extends('layouts.app')

@section('content')

<div class="content-wrapper">

    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">Add New Post    </h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
    </div>
    </div>
    </div>
    
   

    <form action="{{ route('ads_post',$ads->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Homepage Ads1</label>
          <input type="text" class="form-control" value="{{$ads->homepageads1}}" name="homepageads1"  >
          <label for="exampleFormControlFile1">Homepage Ads2</label>
          <input type="text" class="form-control" value="{{$ads->homepageads2}}" name="homepageads2" >
          <label for="exampleFormControlFile1">PostAds</label>
          <input type="text" class="form-control" value="{{$ads->postads}}" name="postads" >
        </div>

        
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>



@endsection