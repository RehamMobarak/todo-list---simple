@extends('layouts.app')
@section('content')
<h1>Todos</h1>
<div class="row">
    @if (count($todos) > 0)
    @foreach ($todos as $todo)

    <div class="col-6">
        <div class="card  m-2 ">
            <div class="card-body m-2">
                <h2><a href="todos/{{$todo->id}}">{{$todo->Title}}</a></h2>
                <p class="card-subtiltle">Last modified at {{$todo->updated_at}}</p>
                <span class="badge rounded-pill due-bg">{{$todo->Due}}</span>
            </div>
        </div>
    </div>

    @endforeach
    @endif

</div>

@endsection