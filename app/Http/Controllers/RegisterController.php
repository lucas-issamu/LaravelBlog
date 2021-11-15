<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()//show the create user page
    {
        return view('register.create');
    }

    public function store() //Create the user
    {
        $attributtes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
        ]);

        auth()->login(User::create($attributtes));

        return redirect('/')->with('success', 'Your account has been created');
    }

    public function edit(User $user)
    {
        return view('register.edit', ['user' => $user]);
    }

    public function update(User $user)
    {
        $attributtes = request()->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3','max:255', Rule::unique('users', 'username')->ignore($user)],
            'email' => ['required','email','max:255', Rule::unique('users', 'email')->ignore($user)],
            'old password' => 'current_password:api',
            'password' => 'required|min:5|max:255',
        ]);

        $user->update($attributtes);

        return redirect('/')->with('success', 'User Updated!');
    }        
}
