@extends('layouts.app')
@section('content')

<div class="container">
  <h1> {{$title}}</h1>
  <p>This paragraph is that first paragraph to laravel Newapp</p>
  @include('footer.footer')
</div>

<div class="page-footer font-small cyan darken-3">
@yield('content')
</div>
@endsection
