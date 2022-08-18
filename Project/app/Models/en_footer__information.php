<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class en_footer__information extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'copy_text',
        'count_post',
    ];
}
