<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountSetting extends Component
{
    public $current_password,
        $new_password,
        $confirm_new_password;

    public function update()
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        $currentPassword = $this->current_password;
        $newPassword = $this->new_password;
        $confirmPassword = $this->confirm_new_password;

        if (Hash::check($currentPassword, $user->password)) {
            $user->password = Hash::make($newPassword);
            $user->save();
            $this->reset('current_password', 'new_password', 'confirm_new_password');
            session()->flash('success', 'Password updated successfully.');
        } else {
            session()->flash('error', 'Current password is incorrect.');
        }
        $this->reset('current_password', 'new_password', 'confirm_new_password');
    }
    public function render()
    {
        return view('livewire.account-setting');
    }
}
