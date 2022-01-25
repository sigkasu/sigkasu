<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
    public function getSelectionNameAttribute()
        {
            return config('selection.'.$this->_id);
        }
}
