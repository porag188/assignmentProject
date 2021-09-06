@extends('layouts.app')

@section('content')

<div class="container">
  <h1>create Post</h1>
  {{ Form::open(['action'=>'PostsController@store','method'=>'POST']) }}
  <div class="">
    {{Form::label('title','Add Title')}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Home Title'])}}
  </div>
  <div class="">
    {{Form::label('image','Image')}}
    {{Form::image('image','',['class'=>'form-control','placeholder'=>'Upload Images'])}}
  </div>
  <div class="">
    {{Form::label('addres','Addres')}}
    {{Form::textarea('adress','',['class'=>'form-control','placeholder'=>'Home Address'])}}
  </div>
  <div class="">
    {{Form::label('house_details','house_details')}}
    {{Form::textarea('adress','',['class'=>'form-control','placeholder'=>'Home Address'])}}
  </div>
  <div class="">
    {{Form::label('road','Road')}}
    {{Form::text('road','',['class'=>'form-control','placeholder'=>'Road No'])}}
  </div>
  <h1>Detals Section</h1>
  <div class="from-group">


    {{Form::label('house_rent','House Rent')}}
    {{Form::text('house_rent','',['class'=>'form-control','placeholder'=>'House Rent'])}}
  </div>
  <div class="">
    {{Form::label('contact_number','Contact Number')}}
    {{Form::text('contact_number','',['class'=>'form-control','placeholder'=>'Contact Number'])}}
  </div>
  {{Form::submit('Submit Post',['class'=>'btn btn-primary'])}}
  {{ Form::close() }}


  @include('footer.footer')
  <div class="page-footer font-small cyan darken-3">
  @yield('content')
</div>
@endsection
