<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;

class AddUserModal extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $avatar;
    public $saved_avatar;

    public $edit_mode = false;

    public function render()
    {
        return view('livewire.user.add-user-modal');
    }
}
