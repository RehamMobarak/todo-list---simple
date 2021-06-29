@extends('layouts.app')
@section('content')
<h1>Todos</h1>

@if (count($todos) > 0)
@foreach ($todos as $todo)
<div class="card col-5  m-2 ">
    <div class="card-body m-2">
        <h2><a href="todos/{{$todo->id}}">{{$todo->Title}}</a></h2>
        <h3>{{$todo->Content}}</h3>
        <span class="badge rounded-pill bg-danger">{{$todo->Due}}</span>
    </div>
</div>
@endforeach
@endif

@endsection