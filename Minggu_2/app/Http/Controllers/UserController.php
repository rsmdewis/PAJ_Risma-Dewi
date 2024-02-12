<?php
// app/Http/Controllers/UserController.php
namespace App\Http\Controllers;

use App\Models\Student; // Mengimpor model Student
use App\Models\Teacher; // Mengimpor model Teacher
use App\Models\Admin; // Mengimpor model Admin
use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class UserController extends Controller
{
    // Method untuk menampilkan daftar student
    public function student(){
        
        // Mengambil semua data student dari model Student
        $students = Student::all();

        // Mengembalikan view 'student' dengan data student yang telah diambil
        return view('student', compact('students'));
    }
    
    // Method untuk menampilkan daftar teacher
    public function teacher(){

        // Mengambil semua data teacher dari model Teacher
        $teachers = Teacher::all();

        // Mengembalikan view 'teacher' dengan data teacher yang telah diambil
        return view('teacher', compact('teachers'));
    }
    
    // Method untuk menampilkan daftar admin
    public function admin(){

        // Mengambil semua data admin dari model Admin
        $admins = Admin::all();

        // Mengembalikan view 'admin' dengan data admin yang telah diambil
        return view('admin', compact('admins'));
    }
}
