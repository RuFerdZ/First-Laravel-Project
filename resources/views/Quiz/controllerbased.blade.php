
<br>
@extends('Quiz.master')

@section('content')

<h1>Controller based</h1>

<ul>
@foreach($names as $item)
    <li>{{$item}}</li>
@endforeach
</ul>

<p>About Page</p>
About details...
@endsection