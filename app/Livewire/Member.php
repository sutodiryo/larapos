<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Member as Members;

class Member extends Component
{

    function getMemberProperty()
    {
        return Members::get();
    }

    public function render()
    {
        return view('livewire.member');
    }
}
