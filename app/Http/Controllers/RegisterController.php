<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        $validateFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(User::where('email', $validateFields['email'])->exists()){
            return redirect(route('user.registration'))->withErrors([
                'email' => 'Such user regisrated'
            ]);
        }

        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect()->to(route('user.private'));
        }
        return redirect()->to(route('user.login'))->withErrors([
            'formError' => "Save user error"
        ]);
    }
}
