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
    
   

    <form action="{{ route('edit_post_post',$post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Tittle</label>
          <input type="text" class="form-control" value="{{$post->title}}" name="title"  placeholder="Add Tittle">
          <label for="exampleFormControlFile1">Slug</label>
          <input type="text" class="form-control" value="{{$post->slug}}" name="slug" placeholder="Add Slug">
          <label for="exampleFormControlFile1">Body</label>
          <textarea id="summernote" name="body"  >{{$post->body}}</textarea>
          <label for="exampleFormControlFile1">Categories</label>
          <select class="custom-select mr-sm-2" name="category">
            @foreach ($Category as $Category)
                
            
            <option value="{{$Category->name}}" {{$Category->name == 'category' ? 'selected' : ''}}>{{$Category->name}}</option>
            
            @endforeach
          </select>
          <label for="exampleFormControlFile1">Featured image  </label>
          <br>
          <img width="150" height="100" src="{{ asset('/pic/' . $post->featuredimage) }}" alt="{{ $post->featuredimage }}">
          <br>
          <br>
          <input type="file" class="form-control-file" value="{{$post->featuredimage}}" name="featuredimage">
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