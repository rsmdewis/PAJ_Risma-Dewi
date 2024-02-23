<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    // membuat method dengan nama index
    public function index(){
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
        // menampilkan view dalam folder task yang bernama index
        // return view('task.index');
    }
    // membuat method dengan nama create
    public function create(){
        // menampilkan view dalam folder task yang bernama create
        return view('task.create');
    }

    // mendeklarasikan method yang menerima parameter $request, instance dari TaskRequest.
    public function store(TaskRequest $request){
        $validatedData = $request->validated();
        Task::create($validatedData);
        // DB::table('tasks')->insert($validateData);
        return redirect('/task');
    
        

    }


    public function show(Task $task){
        return view('task.show',compact('task'));
    }

    public function edit($id)
    {
        $tasks= Task::findOrFail($id);
        return view('task.edit', compact('tasks'));
    }

    public function update(Request $request, $id)
    {
        $tasks = Task::findOrFail($id);
        $tasks->update($request->all());
        return redirect('/task');
    }
}


       // $validateData = $request->validated();

        // $data = [
        //     'name' => $request->name,
        //     'description' => $request->description,
        // ];

        // dd($data);
        // Task::create($data);
        // return redirect('/task');

        // Pastikan description tersedia sebelum menyimpannya
        // $description = $request->input('description', ''); 
    
        // $task = new Task();
        // $task->name = $validatedData['name'];
        // $task->description = $description; // Assign description
        // $task->save();
    
        // return redirect('/task');

