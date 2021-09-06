@extends('layouts.app')
@section('content')

<div class="container">
<main role="main">
  <div class="album py-5 bg-light">

    @include('footer.footer1')
    <div class="page-footer font-small cyan darken-3">
    @yield('content')
    </div>
  </div>





@endsection
