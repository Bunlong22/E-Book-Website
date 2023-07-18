<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $table = "test"; // the test table
    protected $fillable = [ //the table coloumn
        'name',
        'description',
        'done',
    ];
}
