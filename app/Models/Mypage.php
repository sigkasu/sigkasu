<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mypage extends Model
{
    protected $fillable = [
        'movie',
        'image',
        'party',
        'birth',
        'gender',
        'career',
        'introduction',
        'history',
    ];
}
