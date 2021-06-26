<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All todos</title>
</head>

<body>
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

</body>

</html>