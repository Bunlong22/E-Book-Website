<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories"; // the test table
    protected $fillable = [ //the table coloumn
        'name',
        'description',
    ];

}
