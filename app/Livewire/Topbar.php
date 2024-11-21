<?php

namespace App\Livewire;

use App\Livewire\Actions\Logout;
use Livewire\Component;

class Topbar extends Component
{
    public function logout (Logout $logout) {
        $logout();
    
        $this->redirect('/', navigate: true);
    }
    
    public function render()
    {
        return view('livewire.topbar');
    }
}
