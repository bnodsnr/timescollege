@extends('layouts.master')
@section('content')
<main>
  <div class="container">
    <h1>Section Title</h1>


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <a href="{{route('blog')}}" class="btn btn-success">View List</a>
    <hr>
    <form class="row g-3" action="{{route('saveblog')}}" method="post">
      @csrf
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="title">
      </div>
      <div class="form-floating">
        <textarea class="form-control" name="description"></textarea> <label for="floatingPassword">Description</label>
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Author Name</label>
        <input type="text" name="author_name" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Author Name</label>
        <input type="text" name="publish_date" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Publish Date</label>
        <input type="text" name="publish_date" class="form-control" id="" placeholder="">
      </div>

      <div class="mb-3">
        <button type="submit" class="btn btn-secondary">Save</button>
      </div>
    </form>
</main>

@endsection