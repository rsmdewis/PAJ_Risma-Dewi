<?php
// app/Models/Nct127.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nct127 extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ayang',
        'address',
    ];
}
