@extends('layouts.app')
@section('content')
<br>
<a href="/posts"  class="btn btn-default" >Go Back </a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>  
    <hr>
    <small>Written on {{$post->created_at}} by  {{$post->user->name}} </small>  
    <hr>
   {{-- for Guest not see  --}}
   @if (!Auth::guest())
   {{-- for the spicefice user  --}}
        @if (Auth::user()->id == $post->user_id)
                    <a href="/posts/{{$post->id}}/edit"  class="btn btn-default" >Edit </a>

                    {{-- Give data to controller from view --}}
                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{--Next are deleted butten pass data to   --}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!! Form::close() !!}
            @endif
    @endif
@endsection