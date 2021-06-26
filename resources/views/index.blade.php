@extends('layouts.app')
@section('content')
<h1>Todos</h1>

@if (count($todos) > 0)
    @foreach ($todos as $todo)
    <div class="card">
        <h2>{{$todo->Title}}</h2>
        <h3>{{$todo->Content}}</h3>
        <span class="label label-danger">{{$todo->Due}}</span>
    </div>
    @endforeach
@endif

@endsection
