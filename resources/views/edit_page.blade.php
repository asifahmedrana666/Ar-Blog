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
    
   

    <form action="{{ route('edit_page_post',$page->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Page Name</label>
          <input type="text" class="form-control" value="{{$page->name}}" name="name"  >
          <label for="exampleFormControlFile1">Slug</label>
          <input type="text" class="form-control" value="{{$page->slug}}" name="slug" >
          <br>
          <textarea name="body" class="ckeditor" >{{$page->body}}</textarea>
        </div>

        
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>



@endsection