<?php
// app/Http/Controllers/SubjectController.php
namespace App\Http\Controllers;
use App\Models\Nct127; // Mengimpor model Nct127
use App\Models\NctDream; // Mengimpor model NctDream
use App\Models\WayV; // Mengimpor model Wayv
use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class SubjectController extends Controller
{
    // Method untuk menampilkan daftar nct127
    public function nct127(){
        
        // Mengambil semua data nct 127 dari model Nct127
        $nct127s = Nct127::all();

        // Mengembalikan view 'nct127' dengan nct 127 yang telah diambil
        return view('nct127', compact('nct127s'));
    }
    // Method untuk menampilkan daftar nctDream
    public function nctDream(){
        
        // Mengambil semua data nct dream dari model NctDream
        $nctdreams = NctDream::all();

        // Mengembalikan view 'nctdream' dengan data nct dream yang telah diambil
        return view('nctdream', compact('nctdreams'));
    }
    // Method untuk menampilkan daftar wayv
    public function wayV(){

        // Mengambil semua data way v dari model WayV
        $way_v_s = WayV::all();

        // Mengembalikan view 'wayv' dengan data way v yang telah diambil
        return view('wayv', compact('way_v_s'));
    }
}

