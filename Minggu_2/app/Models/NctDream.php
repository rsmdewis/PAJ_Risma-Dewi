<?php
// app/Models/NctDream.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NctDream extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ayang',
        'address',
    ];
}
