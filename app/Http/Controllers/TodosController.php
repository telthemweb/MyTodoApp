<?php

namespace App\Http\Controllers;

use App\Todo;
use Session;
use Illuminate\Http\Request;

class TodosController extends Controller
{
     public function index()
    {
    	$todos = Todo::all();
    	 return view('todos')->with('todos',$todos);
    }

     public function delete($id)
    {
    	$todo =Todo::find($id);
    	$todo->delete();
    	Session::flash('success','Your task has been deleted!!');
    	 return redirect()->back();
    	
    }

     public function store(Request $request)
    {
    	$todos = new Todo;
    	$todos->todo = $request->todo;
    	$todos->save();
    	Session::flash('success','Your task has been created!!');
    	return redirect()->back();
    	
    }

       public function update($id)
    {
    	$todo =Todo::find($id);
    	return view('update')->with('todo',$todo);
    	 return redirect()->back();
    	
    }

     public function save(Request $request,$id)
    {
    	$todos =Todo::find($id);
    	$todos->todo = $request->todo;
    	$todos->save();
    	Session::flash('success','Your task has been Updated!!');
    	return redirect()->route('todos');
    	
    }

     public function completed($id)
    {
    	$todos =Todo::find($id);
    	$todos->completed = 1;
    	$todos->save();
    	Session::flash('success','Your task is completed!!');
    	 return redirect()->back();
    	
    }
}
