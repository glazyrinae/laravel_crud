<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('forms.registration');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required',
            'password1' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect()->to('/');
    }
}
