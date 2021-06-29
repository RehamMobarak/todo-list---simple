@extends('layouts.app')

@section('content')
<h1>Edit Todo</h1>
<form method="POST" action="/todos/{{$todo->id}}" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="col-6">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title"
                value="{{ $todo->Title }}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Enter content"
                value="{{ $todo->Content }}">
        </div>
        <div class="form-group">
            <label for="due">Due</label>
            <input type="text" class="form-control" name="due" id="due" placeholder="Enter due"
                value="{{ $todo->Due }}">
        </div>
        <button type="submit" class="btn btn-success m-2">Modify</button>
    </div>  
</form>
@endsection