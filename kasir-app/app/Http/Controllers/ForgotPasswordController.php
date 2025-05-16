<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm() {
        return view('auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request) {
        $request->validate(['email' => 'required|email']);

        $token = Str::random(60);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        // Kirim email di sini (bisa pakai Mail::to... -> send())

        return back()->with('status', 'Link reset telah dikirim ke email Anda!');
    }

    public function showResetForm($token) {
        return view('auth.passwords.reset', ['token' => $token]);
    }

    public function reset(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'token' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if (!$updatePassword) {
            return back()->withErrors(['email' => 'Token tidak valid']);
        }

        $user = User::where('email', $request->email)->first();
        $user->password = bcrypt($request->password);
        $user->save();

        DB::table('password_resets')->where('email', $request->email)->delete();

        return redirect('/login')->with('status', 'Password berhasil direset!');
    }
}
