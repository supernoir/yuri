@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Some Content here</h1>
    <p>{{ 2 == 3 ? "Hello" : "Does not equal"  }}</p>
  </div>
</div>
@endsection