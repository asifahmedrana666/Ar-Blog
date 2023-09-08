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
    
   

    <form action="{{ route('setting_post',$setting->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Site Title</label>
          <input type="text" class="form-control" value="{{$setting->title}}" name="title"  >
          <label for="exampleFormControlFile1">Site Description</label>
          <input type="text" class="form-control" value="{{$setting->description}}" name="description" >
          <label for="exampleFormControlFile1">Site Keywords</label>
          <input type="text" class="form-control" value="{{$setting->keywords}}" name="keywords" >
          <label for="exampleFormControlFile1">Footer Text</label>
          <input type="text" class="form-control" value="{{$setting->footertext}}" name="footertext" >
          <label for="exampleFormControlFile1">Logo</label>
          <br>
          <img width="150" height="100" src="{{ asset('/mylogo/' . $setting->logo) }}" alt="{{ $setting->logo }}">
          <br>
          <br>
          <input type="file" class="form-control-file" name="logo">
        </div>

        
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>



@endsection