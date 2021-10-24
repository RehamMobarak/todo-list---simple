<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodosApiController extends Controller
{
    public function index()
    {
        $todos = Todo::get();
        return response()->json($todos);
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        return response()->json($todo);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'due' => 'required',
        ]);

        if ($validator->fails()) {
            return ["response" => $validator->messages(), "success" => false];
        }

        $new_todo = new Todo();
        $new_todo->title = $request->input('title');
        $new_todo->content = $request->input('content');
        $new_todo->due = $request->input('due');
        $new_todo->save();

        return response()->json($new_todo);
    }

    public function update(Request $request, $id)
    {
        //* When testing: remember to add _method : put or patch in postman OR
        //* change method to PUT | PATCH in request itself

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'due' => 'required',
        ]);

        if ($validator->fails()) {
            return ["response" => $validator->messages(), "success" => false];
        }

        $todo = Todo::find($id);
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->due = $request->input('due');
        $todo->save();


        return response()->json($todo);
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return ["response" => "Todo deleted", "success" => true];
    }
}
