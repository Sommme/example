<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;

class AuthController extends Controller
{
    // Показ формы авторизации
    public function login()
    {
        return view('authorization');
    }

    // Авторизация пользователя
    public function login_confirm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        

        if (Auth::attempt($credentials)) {
            if (Auth::user()->hasRole('visitor')) {
                return redirect()->intended('/');
            } elseif (Auth::user()->hasRole('curator')) {
                return redirect()->intended('/');
            }
        }

        return back()->withErrors([
            'some_errors' => 'Invalid email or password',
        ]);
    }

    // Выход из аккаунта
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    // Регистрация пользователя
    public function register_confirm(Request $request)
    {
        $request->validate([
            'role' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Назначение роли пользователю
        $role = Role::findByName($request->role);
        $user->assignRole($role);

        // Auth::login($user);

        // Перенаправление пользователя на страницу входа с сообщением об успешной регистрации
        return redirect('/login')->with('status', 'Account created successfully!');
    }
}
