<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddUserModal extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $avatar;
    public $saved_avatar;
//    public $user; // to validation email unique
    public $user_id; // to validation email unique

    public $edit_mode = false;

    protected $listeners = [
        'update_user' => 'updateUser',
        'delete_user' => 'deleteUser',
    ];

//    protected $rules = [
//        'name' => 'required|string',
//        'email' => 'required|email',
//     //   'role' => 'required|string',
//        'avatar' => 'nullable|sometimes|image|max:1024',
//    ];

    protected function rules()
    {
        return [
            'name' => 'required|min:4',
//            'email' => ['required', 'email', 'unique:users,email,' . $this->user_id],
            'email' => ['required', 'email', 'unique:users,email,' . $this->user_id],
            'avatar' => 'nullable|sometimes|image|max:1024',
        ];
    }

    public function submit()
    {
        $this->validate();

        DB::transaction(function () {
            // Prepare the data for creating a new user
            $data = [
                'name' => $this->name,
            ];

            if ($this->avatar) {
                $data['avatar'] = $this->avatar->store('avatars', 'public');
            }

            if (!$this->edit_mode) {
                $data['password'] = Hash::make($this->email);
            }

            // Create a new user record in the database
            $user = User::updateOrCreate([
                'email' => $this->email,
            ], $data);

            if ($this->edit_mode) {
                // Assign selected role for user
             //   $user->syncRoles($this->role);

                // Emit a success event with a message
                $this->emit('success', __('User updated'));
            } else {
                // Assign selected role for user
          //      $user->assignRole($this->role);

                // Send a password reset link to the user's email
           //     Password::sendResetLink($user->only('email'));

                // Emit a success event with a message
                $this->emit('success', __('New user created'));
            }
        });
//        $this->dispatchBrowserEvent('close_modal');
        // Reset the form fields after successful submission
        $this->reset();
    }

    public function updateUser($id)
    {
        $this->edit_mode = true;

        $user = User::find($id);
        $this->saved_avatar = asset('storage/'.$user->avatar);
        $this->name = $user->name;
        $this->email = $user->email;
      //  $this->role = $user->roles?->first()->name ?? '';
        $this->user_id = $user->id;
    }

    public function deleteUser($id)
    {
        // Prevent deletion of current user
        if ($id == auth('web')->id()) {
            $this->emit('error', 'User cannot be deleted');
            return;
        }

        User::destroy($id);

        // Emit a success event with a message
        $this->emit('success', 'User successfully deleted');
    }

    public function render()
    {
        return view('livewire.user.add-user-modal');
    }

    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
