@extends('layouts.app')
@section('content')
<h1>Posts Created!!</h1>  
    @if (Session::has('info'))
        <div class='row'>
            <div class='col-md-12'>
            <p class = 'alert alert-info'>{{Session::get('info')}}</p>
            </div>
        </div>
    @endif
    @foreach ($posts as $post)
        <h3>Title : {{$post->title}}</h3>
    <small><small>Written on : {{$post->created_at}} By : {{$post->user->name}}</small> 
        <h4><a href='/posts/{{$post->id}}'>Read More</a> </h4>
    @endforeach
     
@endsection