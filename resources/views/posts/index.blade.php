@extends('layouts.app')

@section('content')

<div class="container">
  <h1>All Submit information</h1>
    @if(count($post) >1)
            @foreach($post as $posts)
            <div class="well">
            <h3><a href="/post/{{$posts->id}}"> {{$posts->title}}</a> </h3>
              <small>Writen on {{$posts->created_at}}</small>
            </div>
            @endforeach

    @else
        <p>No posts fount</p>
    @endif
    @include('footer.footer')
    <div class="page-footer font-small cyan darken-3">
    @yield('content')
</div>
@endsection
