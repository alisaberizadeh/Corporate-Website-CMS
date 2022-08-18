<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class en_Cat extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
}
