@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">

 <h1>{{$title}}</h1> 
 <p>{{$secret}}</p> 

 <p><a class="btn btn-primary btn-large" href='/login'>Login</a>  
    <a class="btn btn-success btn-large" href='/register'>Register</a>  
 </p>
 </div>

@endsection