@extends('layouts.app')

@section('content')

<div class="container">
  <h1>Update Information</h1>
  {{ Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST']) }}
  <div class="">
    {{Form::label('title','Full Name')}}
    {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Full Name'])}}
  </div>
  <div class="">
  <h5><br/>Select your gender:</h5>
  {{Form::label('male','Male')}}
  {{ Form::radio('gender', 'male' , true) ,'',['class'=>'form-control']}}
  {{Form::label('female','Female')}}
  {{ Form::radio('gender', 'female' , false),'',['class'=>'form-control'] }}
</div>
  <div class="">
    {{Form::label('body','Description')}}
    {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Description'])}}
  </div>
  {{Form::hidden('_method','PUT')}}
  {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
  {{ Form::close() }}
  @include('footer.footer')
  <div class="page-footer font-small cyan darken-3">
  @yield('content')
  </div>

</div>
@endsection
