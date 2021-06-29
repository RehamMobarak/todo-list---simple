@extends('layouts.app')
@section('content')
<a href="/" class="btn btn-secondary mt-2">Go Home</a>
<div class="card">
    <h1>{{$todo->Title}}</h1>
    <div class="badge rounded-pill bg-danger">{{$todo->Due}}</div>
    <hr>
    <p>{{$todo->Content}}</p>
</div>

@endsection