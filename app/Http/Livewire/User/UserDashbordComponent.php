<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserDashbordComponent extends Component
{
    public function render()
    {
        return view('livewire.user.user-dashbord-component')->layout('layouts.base');
    }
}
