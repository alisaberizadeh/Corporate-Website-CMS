<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class en_about__element extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'text',
        'title',
        'icon',
    ];
}
