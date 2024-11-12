<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    protected $table = 'techniques';

    public function sheet()
    {
        return $this->belongsTo(Sheet::class, 'sheet', 'id');
    }
}
