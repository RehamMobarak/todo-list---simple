@extends('layouts.app')
@section('content')
<h1>Todos</h1>

@if (count($todos) > 0)
@foreach ($todos as $todo)
<div class="card m-2">
    <h2><a href="todos/{{$todo->id}}">{{$todo->Title}}</a></h2>
    <h3>{{$todo->Content}}</h3>
    <span class="label label-danger">{{$todo->Due}}</span>
</div>
@endforeach
@endif

@endsection