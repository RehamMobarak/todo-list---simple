<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosApiController extends Controller
{
    public function index()
    {
        $todos = Todo::get();
        return response()->json($todos);
    }

    public function show($id){
        $todo = Todo::find($id);
        return response()->json($todo);
    }
    
}
