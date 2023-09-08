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
    
   

    <form action="{{ route('author_post',$author->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Author Name</label>
          <input type="text" class="form-control" value="{{$author->name}}" name="name"  >
          <label for="exampleFormControlFile1">Author About</label>
          
          <textarea class="ckeditor" name="about_me"  >{{$author->about_me}}</textarea>
          <label for="exampleFormControlFile1">Facebook Profile</label>
          <input type="text" class="form-control" value="{{$author->fb}}" name="fb" >
          <label for="exampleFormControlFile1">Twitter Profile</label>
          <input type="text" class="form-control" value="{{$author->twitter}}" name="twitter" >
          <label for="exampleFormControlFile1">Instagram Profile</label>
          <input type="text" class="form-control" value="{{$author->instagram}}" name="instagram" >
          <label for="exampleFormControlFile1">Profile Pic</label>
          <br>
          <img width="150" height="100" src="{{ asset('/mylogo/' . $author->pic) }}" alt="{{ $author->pic }}">
          <br>
          <br>
          <input type="file" class="form-control-file" name="pic">
        </div>

        
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>



@endsection