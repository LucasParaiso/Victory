<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipments';

    public function sheet()
    {
        return $this->belongsTo(Sheet::class, 'sheet', 'id');
    }
        
}
