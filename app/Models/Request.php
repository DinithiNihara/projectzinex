<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'name','email', 'contact','p_location', 'r_location','service', 'vehicle','passengers', 'p_date','p_time', 'r_date','r_time', 'message'];
}
