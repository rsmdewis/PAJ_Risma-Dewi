<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    // membuat method dengan nama index
    public function index(){
        $tasks = Task::all(); // Mengambil semua tugas dari database
        // Menampilkan tampilan indeks tugas dengan data tugas yang telah diambil
        return view('task.index', compact('tasks'));
       
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

    // membuat method dengan nama show
    public function show(Task $task){
        // Menampilkan tampilan untuk menampilkan detail task
        return view('task.show',compact('task'));
    }

    // membuat method dengan nama edit
    public function edit($id)
    {
        $tasks= Task::findOrFail($id);// Mengambil tugas yang akan diedit
        return view('task.edit', compact('tasks'));// Menampilkan tampilan untuk mengedit tugas
    }
    // membuat method dengan nama update
    public function update(Request $request, $id)
    {
        $tasks = Task::findOrFail($id);// Mengambil tugas yang akan diperbarui
        $tasks->update($request->all()); // Memperbarui tugas dengan data dari permintaan
        return redirect('/task'); // Mengalihkan ke halaman tugas setelah pembaruan berhasil
    }

    // membuat method dengan nama delete
    public function destroy($id)
    {
        $user = User::findOrFail($id);// Mengambil pengguna yang akan dihapus (seharusnya Task)
        $user->delete(); // Menghapus pengguna (seharusnya Task)
        return redirect('/task'); // Mengalihkan ke halaman tugas setelah penghapusan berhasil
    }

    // membuat method dengan nama delete
    public function delete(Task $task)
    {
        $task->delete();// Menghapus tugas
        return redirect('/task'); // Mengalihkan ke halaman tugas setelah penghapusan berhasil
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

