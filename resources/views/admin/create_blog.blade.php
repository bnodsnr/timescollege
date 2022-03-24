@extends('layouts.master')
@section('content')

<section id="main-content">

  <section class="wrapper site-min-height">

    <div class="row">

      <div class="col-sm-12">

        <form action="" method="post" class="">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Description</label>
            <textarea class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Status</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" name="status">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Date</label>
            <input type="text" name="date" class="form-control">
          </div>

          <div>
            <button type="submit" class="btn btn-danger">Save</button>
          </div>
        </form>

      </div>
    </div>
    @endsection