<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('admin.users.list');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'avatar' => 'nullable|image|max:1024',
        ]);
        $data = $request->except('avatar');

        if ($request->avatar) {
            $data['avatar'] = $request->avatar->store('avatars', 'public');
        }
        $data['password'] = Hash::make($request->name);

        $user = User::create($data);

        return response()->json([
            'message' =>  __('New user created'),
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return 'delete';
    }
}
