@extends('layouts.master')
@section('content')
<p>I am in profile page</p>

<a href="{{route('profile-show')}}">View Profile</a>
@endsection