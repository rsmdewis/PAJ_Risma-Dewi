<?php
// app/Models/WayV.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WayV extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ayang',
        'address',
    ];
}
