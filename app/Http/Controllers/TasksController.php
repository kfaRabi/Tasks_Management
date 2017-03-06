<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index(){
    
    	// $tasks = DB::table('tasks')->get();
		// return $tasks;

		$tasks = Task::all();

		return view('/tasks/index', compact('tasks'));
    
    }
    public function show($id){
    	// $task = DB::table('tasks')->find($id);
		// dd($task);

		 $task = Task::find($id);

		/*
		or:
		$task = Task::where('id', $id)->first();
		OR:
		$task = Task::where('id', '=', $id)->first();
		*/
		return view('/tasks/task', compact('task'));
    }

    /*
		if the passed wild card is an primary key, then we don't need to do manuall query for that row
		we can declare an Object, which's name is same as our wild card name
		laravel will find it for us

		public function show(Task $task){
			return view('tasks/task', compact(task));
		}
	
		simple as that
    */
}
