<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disadvantage extends Model
{
    protected $table = 'disadvantages';

    public function sheet()
    {
        return $this->belongsTo(Sheet::class, 'sheet', 'id');
    }
}
