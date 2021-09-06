@extends('layouts.app')

@section('content')

<div class="container">
  <h1>create Post</h1>
  {{ Form::open(['action'=>'PostsController@store','method'=>'POST']) }}
  <div class="">
    {{Form::label('title','Full Name')}}
    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Full Name'])}}
  </div>
  <div class="">
  <h5><br/>Select your gender:</h5>
  {{Form::label('male','Male')}}
  {{ Form::radio('gender', 'male' , true) ,'',['class'=>'form-control','placeholder'=>'Title']}}
  {{Form::label('female','Female')}}
  {{ Form::radio('gender', 'female' , false),'',['class'=>'form-control','placeholder'=>'Title'] }}
</div>
<div class="">
<h5><br/>Please select your favorite Programming language:</h5>
  {{Form::label('PHP','PHP')}}
  {{ Form::checkbox('checkbox1', 'PHP' , false),'',['class'=>'form-control','placeholder'=>'Title'] }}
  
{{Form::label('Python','Python')}}
  {{ Form::checkbox('checkbox2', 'Python' , false),'',['class'=>'form-control','placeholder'=>'Title'] }}
  
{{Form::label('C','C')}}
  {{ Form::checkbox('checkbox3', 'C' , false),'',['class'=>'form-control','placeholder'=>'Title'] }}
  
{{Form::label('C++','C++')}}
  {{ Form::checkbox('checkbox4', 'C++' , false),'',['class'=>'form-control','placeholder'=>'Title'] }}
  
{{Form::label('Java','Java')}}
  {{ Form::checkbox('checkbox5', 'Java' , false),'',['class'=>'form-control','placeholder'=>'Title'] }}
 
</div>

<div class="">
    {{Form::select("category",['Fontend' => 'Fontend Developer', 'Backend' => 'Backend Devoloper ','FullStack'=>'Full Stack Developer'], null,
             [
                "class" => "form-group",
                "placeholder" => "Job Type"
             ])
           }}
  <div>
 
<div class="">
    {{Form::label('body','Description')}}
    {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Descripe your self...'])}}
  </div>
 
  </div>
  {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
  {{ Form::close() }}
</div>
@endsection
