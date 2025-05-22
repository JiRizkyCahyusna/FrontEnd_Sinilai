<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $inputUsername = $request->input('username');
        $inputPassword = $request->input('password');

        // Username dan password manual
        $correctUsername = 'admin';
        $correctPassword = '12345';

        if ($inputUsername === $correctUsername && $inputPassword === $correctPassword) {
            // Simulasi login sukses: simpan username di session
            session(['username' => $inputUsername]);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['username' => 'Username atau password salah!']);
    }
}
