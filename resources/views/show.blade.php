@extends('layouts.app')
@section('content')
<a href="/" class="btn btn-default">Go Home</a>
<div class="card">
    <h1>{{$todo->Title}}</h1>
    <div class="label label-danger">{{$todo->Due}}</div>
    <hr>
    <p>{{$todo->Content}}</p>
</div>

@endsection