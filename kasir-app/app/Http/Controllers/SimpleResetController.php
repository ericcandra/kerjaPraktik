<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SimpleResetController extends Controller
{
    public function showEmailForm()
    {
        return view('auth.forgot-password');
    }

    public function checkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email tidak ditemukan']);
        }

        // ✅ Tambahkan notifikasi sukses
        return redirect()
            ->route('password.reset.simple', ['email' => $user->email])
            ->with('success', 'Email ditemukan. Silakan ubah password Anda.');
    }
    public function showResetForm($email)
{
    
    return view('auth.reset-password', ['email' => $email]);
}


    public function reset(Request $request)
{
    // dd($request->all()); // debug input yang dikirim

    $request->validate([
        'email' => 'required|email',
        'password' => 'required|confirmed|min:6',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->withErrors(['email' => 'Email tidak valid']);
    }

    $user->password = Hash::make($request->password);
    $user->save();

    return redirect()->route('login')->with('status', 'Password berhasil diubah!');
}



}

