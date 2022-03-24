@extends('layouts.master')
@section('content')

<a href="{{ route('blogCreate') }}" class="btn btn-success">Add New Blog</a>
<hr>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>SN</th>
      <th>Title</th>
      <th>Description</th>
      <th>Author</th>
      <th>Publish Date</th>
      <th>Action</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
@endsection