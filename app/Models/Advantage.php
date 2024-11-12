<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
{
    protected $table = 'advantages';

    public function sheet()
    {
        return $this->belongsTo(Sheet::class, 'sheet', 'id');
    }
}
