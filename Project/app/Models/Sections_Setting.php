<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections_Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_fa',
        'title',
        'count',
    ];
}
