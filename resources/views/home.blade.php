@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <!-- Edit some lines stating -->
                        <a href="/post/create" class="btn btn-primary">Create Post</a>
                        <a href="/profile" class="btn btn-primary">Update Profile</a>
                        <h3>Your All post</h3>
                        @if(count($posts)>0)
                          <table class="table table-striped">
                            <tr>
                              <th>Title</th>
                              <th> </th>
                              <th>

                              </th>
                            </tr>
                            @foreach ( $posts as $post )
                            <tr>
                              <th>{{$post->title}}</th>
                              <th>{{$post->created_at}}</th>
                              <th><a href="/post/{{$post->id}}/edit" class="btn btn-warning">Edit</a></th>
                              <th>
                                {{Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])}}
                                  {{Form::hidden('_method','DELETE')}}
                                  {{Form::submit('delete',['class'=>'btn btn-danger'])}}
                                {{Form::close()}}
                              </th>
                            </tr>
                            @endforeach
                          </table>
                          @else
                          <p>You have no posts</p>
                          @endif
                    <!-- end editing -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
