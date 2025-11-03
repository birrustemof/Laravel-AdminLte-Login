<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Debug üçün
        \Log::info('Register attempt:', [
            'name' => $request->name,
            'email' => $request->email,
            'password_length' => strlen($request->password)
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Yaranan useri logla
        \Log::info('User created:', [
            'id' => $user->id,
            'email' => $user->email
        ]);

        return redirect('/login')->with('success', 'Qeydiyyat uğurla tamamlandı! İndi giriş edə bilərsiniz.');
    }
}
