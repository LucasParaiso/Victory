<?php

namespace App\Models;

use Illuminate\Bus\Dispatcher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sheet extends Model
{
    protected $table = 'sheets';

    public function equipments()
    {
        return  $this->hasMany(Equipment::class, 'sheet', 'id');
    }

    public function advantages()
    {
        return  $this->hasMany(Advantage::class, 'sheet', 'id');
    }

    public function disadvantages()
    {
        return  $this->hasMany(Disadvantage::class, 'sheet', 'id');
    }

    public function techniques()
    {
        return  $this->hasMany(Technique::class, 'sheet', 'id');
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'skill_sheets', 'sheet', 'skill');
    }
}
