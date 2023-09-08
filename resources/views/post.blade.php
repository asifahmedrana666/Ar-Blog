@extends('layouts.app')

@section('content')


<div class="content-wrapper">

    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">All Post</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
    </div>
    </div>
    </div>
    
    <a class="btn btn-info" href="/add_post">Add New Post</a>
    </div>
    @if(session()->has('success'))
    <div class="btn btn-info">
     {{ session()->get('success') }}
    </div>
  @endif
  @if(session()->has('status'))
  <div class="btn btn-info">
  {{ session()->get('danger') }}
  </div>
  @endif
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Post Image</th>
            <th scope="col">Tittle</th>
            <th scope="col">slug</th>
            <th scope="col">category</th>
            <th scope="col">action</th>
            
            
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $index => $post)

          <tr>
              <td>{{ $index + 1 }}</td>
              <td>
                <img width="150" height="100" src="{{ asset('/pic/' . $post->featuredimage) }}" alt="{{ $post->featuredimage }}">
              </td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->slug }}</td>
              <td>{{ $post->category }}</td>
              <td>
                <a class="btn btn-primary" href="{{ route('edit_post',$post->id) }}">Edit</a>
                <a class="btn btn-danger" href="{{ route('delete_post',$post->id) }}">Delete</a>
              </td>
              
          </tr>
      @endforeach
      
        
          
        </tbody>

      </table>
      <div class="pagination">
        {{ $posts->links() }}
    </div>
@endsection