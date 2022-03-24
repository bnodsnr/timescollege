@extends('layouts.master')
@section('content')
<main>
  <div class="container">
    <h1>Section Title</h1>
    <a href="{{route('addblog')}}" class="btn btn-success">Add New</a>
    <hr>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Author Name</th>
            <th scope="col">Status</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Blog Title</td>
            <td>Blog Description</td>
            <td>By Author</td>
            <td>Active</td>
            <td>2020/01/01</td>
            <td><a href="">Edit</a> <a href="">Delete</a> </ td>
          </tr>
        </tbody>
      </table>
    </div>
</main>

@endsection