<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer_Information extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'copy_text',
        'count_post',
    ];
}
