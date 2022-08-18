<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class en_Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'text',
        'for',
        'status',
        'date_fa',
    ];
}
