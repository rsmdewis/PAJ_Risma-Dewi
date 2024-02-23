<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Voter; 
use App\Models\Student; 
use Illuminate\Http\View\View;

class VoterController extends Controller
{
    //mendeklasrasikan method bernama viewVoter
    public function viewVoter(){ 
        //mengambil semua data dari tabel voters menggunakan query
        $voter = DB::table('voters')->get(); 
        //mengembalikan sebuah view dengan nama voters dan 
        //mengambil data voters yang disimpan dengan variabel $voter.
        return view('voters', compact('voter')); 
    }
    // public function viewVoter(){
        
    //     $voter = Voter::all();

    //     return view('voters', compact('voter'));
    // }
    public function student(){
        
        // Mengambil semua data student dari model Student
        $students = Student::all();

        // Mengembalikan view 'student' dengan data student yang telah diambil
        return view('student', compact('students'));
    }
    
}
