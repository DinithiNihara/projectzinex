<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverAssign extends Model
{
    use HasFactory;
    protected $fillable = ['rid','id','name'];
}
