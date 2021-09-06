@extends('layouts.app')
@section('content')
<div class="container">
  <a href="/post">
    <button  >Go Back</button>
  </a>
<div class="container">

      <h1>{{$post->title}}</h1
        <div class="">
          {{$post->body}}
          <small>Written on {{$post->created_at}}</small>
        </div>
        <hr>
        <hr>
        <a href="/post/{{$post->id}}/edit" class="btn btn-default" >Edit</a>

        {{Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])}}
          {{Form::hidden('_method','DELETE')}}
          {{Form::submit('delete',['class'=>'btn btn-danger'])}}
        {{Form::close()}}

        @include('footer.footer')
        <div class="page-footer font-small cyan darken-3">
        @yield('content')
        </div>

</div>


@endsection
