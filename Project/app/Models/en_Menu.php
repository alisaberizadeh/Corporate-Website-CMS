<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class en_Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'sub',
        'link',
        'count',
    ];
}
