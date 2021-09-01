@extends('layouts.main')
@section('content')
<!-- 
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class = "alert alert-danger" role="alert">
    {{$error}}
    @endforeach
    @endif
</div> -->
<div class="container">
<h1 style=" text-align: center;margin-top:30px;">Add details</h1>
<form style="padding:40px" method="POST" action="{{route('store')}}">
{{ csrf_field()}}
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form3Example1">First name</label>
        <input type="text" name="fname" id="form3Example1" class="form-control" />
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form3Example2">Last name</label>
        <input type="text" name="lname" id="form3Example2" class="form-control" />
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form3Example3">Email address</label>
    <input type="email" name="email" id="form3Example3" class="form-control" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <label class="form-label"  for="form3Example4">Phone number</label>
    <input type="text" id="form3Example4" name="phone" class="form-control" />
  </div>


  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>

  <!-- Register buttons -->

</form>
</div>
@endsection