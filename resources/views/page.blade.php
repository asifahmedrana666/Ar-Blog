@extends('layouts.app')

@section('content')
<div class="content-wrapper">

    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">All Page</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
    </div>
    </div>
    </div>
    
    <a class="btn btn-info" href="/add_page">Add New Page</a>
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
            <th scope="col">Page Name</th>
            
            <th scope="col">Slug</th>
            
            <th scope="col">Action</th>
            
            
          </tr>
        </thead>
        <tbody>
          @foreach ($page as $index => $page)

          <tr>
              <td>{{ $index + 1 }}</td>
              
              <td>{{ $page->name }}</td>
              <td>{{ $page->slug }}</td>
              
              <td>
                <a class="btn btn-primary" href="{{ route('edit_page',$page->id) }}">Edit</a>
                <a class="btn btn-danger" href="{{ route('delete_page',$page->id) }}">Delete</a>
              </td>
              
          </tr>
      @endforeach
          
        
          
        </tbody>
      </table>
@endsection