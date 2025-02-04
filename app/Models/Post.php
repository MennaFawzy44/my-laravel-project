<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // ✅ Import this!
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; // ✅ Now this will work

    protected $fillable = ['title', 'description'];
}
