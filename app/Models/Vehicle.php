<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['regNo', 'manufacturer', 'model','type', 'mYear',
    'rYear', 'cost', 'status', 'description'];
}
