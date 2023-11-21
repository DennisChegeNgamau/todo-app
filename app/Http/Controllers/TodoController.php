<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Nette\Schema\ValidationException;

class TodoController extends Controller
{
    public function index()
    {
        $todo =Todo::all();
        return view('index')->with('todos', $todo);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'description'=>'required',
        ]);
        Todo::create($validateData);
        session()->flash('success','Task Created Successfully!');
        return redirect()->route('index');
    }


    public function details($id)
    {
       $todo = Todo::findOrFail($id);
       return view('details', compact('todo'));
    }

    public function edit($id)
    {
        $todo =Todo::findOrFail($id);
        return view('edit', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        // if($validateData->fails()){
        //     return redirect()->back()->withErrors($validateData)->withInput();         
        // }

        $todo = Todo::findOrFail($id);
        $todo->update($validateData);

        session()->flash('success', 'Todo updated successfully');
        return redirect()->route('index');
    }
    public function delete($id)
    {
        $todo=Todo::findOrFail($id);
        $todo->delete();

        session()->flash('success', 'Todo deleted successfully');
        return redirect()->route('index');
    }
   
}

