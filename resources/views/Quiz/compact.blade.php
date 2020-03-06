
<h1>{{$title}}</h1>
<br>
@extends('Quiz.master')

@section('content')

<ul>
@foreach($names as $item)
    <li>{{$item}}</li>
@endforeach
</ul>

<p>About Page</p>
About details...
@endsection