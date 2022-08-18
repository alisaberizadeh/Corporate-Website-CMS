<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class en_Company_Information extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'name_fa',
        'value',
        'icon',
        'status',
    ];
}
