@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h2>{{$user->name}}'s Profile Picture</h2>
          <div class="text-center">
            <img src="{{asset('upload/profileimages')}}/{{$user->profileimages}}"  style="width: 150px; height: 150px;float: left;border-radius:50%;margin-right: 25px;"><br><br><br> <br><br>
            <br><br><br>
          </div>
<div class="container">
  <form enctype="multipart/form-data" class="form-inline" action="/profile" method="POST">
    <div class="form-group">
      <h3>Update Profile Image</h3>
      <input type="file" name="profileimages">
      <input type="hidden" name="_token" value="{{csrf_token()}} ">
      <input type="submit" class="pull-right btn btn-sm btn-primary" name="">
    </div>
  </form>
</div>

<a href="/home" class="btn btn-info btn-lg">
  <span class="glyphicon glyphicon-arrow-left"></span> Home
</a>


@endsection
