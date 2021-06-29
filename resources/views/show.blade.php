@extends('layouts.app')
@section('content')
<a href="/" class="btn btn-secondary m-2">Go Home</a>
<div class="card col-8   m-2">
    <div class="card-body m-2">
        <h1>{{$todo->Title}}</h1>
        <div class="badge rounded-pill bg-danger">{{$todo->Due}}</div>
        <hr>
        <p>{{$todo->Content}}</p>
        <a href="/todos/{{$todo->id}}/edit" class="btn btn-success m-2">Edit</a>
        <form action="/todos/{{$todo->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger m-2">Delete</button>
        </form>
    </div>
</div>

@endsection