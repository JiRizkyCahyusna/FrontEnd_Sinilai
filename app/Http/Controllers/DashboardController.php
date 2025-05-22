<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Cek kalau belum login (session username kosong)
        if (!$request->session()->has('username')) {
            return redirect()->route('login');
        }

        $username = $request->session()->get('username');
        return view('dashboard', compact('username'));
    }
}
