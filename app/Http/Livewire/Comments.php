<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public function refresh()
    {
        return;
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
