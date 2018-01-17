@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <p class="quote">{{ $post['title'] }}</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h1 class="post-title">Learning Laravel</h1>
      <p class="">{{ $post['content']}}</p>
    </div>
@endsection