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
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
    </div>
    </div>
    </div>
    
   

    <form action="/add_post_post/" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Tittle</label>
          <input type="text" class="form-control" name="title"  placeholder="Add Tittle">
          <label for="exampleFormControlFile1">Slug</label>
          <input type="text" class="form-control" name="slug" placeholder="Add Slug">
          <label for="exampleFormControlFile1">Body</label>
          <textarea cols="300" rows="300" id="summernote" name="body"  ></textarea>
          
          <label for="exampleFormControlFile1">Categories</label>
          <select class="custom-select mr-sm-2" name="category">
            @foreach ($Category as $Category)
                
            
            <option value="{{$Category->name}}" >{{$Category->name}}</option>
            
            @endforeach
          </select>
          <label for="exampleFormControlFile1">Featured image  </label>
          <input type="file" class="form-control-file" name="featuredimage">
        </div>

        
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<!-- Initialize Summernote on the textarea with the ID 'summernote' -->
<script type="text/javascript">
  $(document).ready(function () {
      $('#summernote').summernote({
          height: 300,
      });
  });
</script>

@endsection