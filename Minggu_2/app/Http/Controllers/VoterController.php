<?php
// app/Http/Controllers/VoterController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class VoterController extends Controller
{
    // Method untuk menampilkan daftar voter
    public function viewVoter(){
        // Mengembalikan view dengan nama voter untuk ditampilkan
        return view('voters');
    }
}

