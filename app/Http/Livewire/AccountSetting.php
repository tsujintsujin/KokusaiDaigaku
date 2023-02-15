<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AccountSetting extends Component
{
    public $current_password,
        $new_password,
        $confirm_new_password;
    public function update()
    {
       $this->reset('current_password','new_password','confirm_new_password');
     
    }
    public function render()
    {
        return view('livewire.account-setting');
    }
}
