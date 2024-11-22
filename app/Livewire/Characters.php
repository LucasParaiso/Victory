<?php

namespace App\Livewire;

use App\Models\Sheet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Characters extends Component
{

    public function render()
    {
        return view('livewire.characters')->with([
            'sheets' => Sheet::where("user", Auth::user()->id)->get(),
        ]);
    }
}
