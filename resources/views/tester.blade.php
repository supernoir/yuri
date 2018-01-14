@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Control Structures</h1>
    <p>{{ 2 == 3 ? "Hello" : "Does not equal"  }}</p>
    @if(false)
    <p>This only displays if true</p>
    @else
    <p>This only displays if it is false</p>
    @endif
    <hr/>
    @for($i = 0; $i < 5; $i++)
      <p>{{ $i +1 }}. Iteration</p>
    @endfor
  <hr/>
  <h2>XSS Protection</h2>
    <p>Not escaped HTML (renders alert)</p>
   <!-- <p>{!! "<script>alert('hello')</script>"  !!}</p>-->
  </div>
</div>
@endsection