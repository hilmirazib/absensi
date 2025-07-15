<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login',[
            "title" => "Log In"
        ]);
    }

    public function showAdminLoginForm()
    {
        return view('auth.login_admin',[
            "title" => "Admin Log In"
        ]);
    }

    public function authenticate(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user) {
            if ($user->masa_berlaku && $user->masa_berlaku <= date('Y-m-d')) {
                Alert::error('Failed', 'Username / Password Salah / Akun Tidak Aktif');
                return back();
            } else {
                if (Auth::attempt($credentials)) {
                    if ($user->hasRole('admin')) {
                        $user->update([
                            'is_admin' => 'admin'
                        ]);
                    } else {
                        $user->update([
                            'is_admin' => 'user'
                        ]);
                    }

                    $request->session()->regenerate();
                    return redirect()->intended('/dashboard');
                } else {
                    Alert::error('Failed', 'Username / Password Salah / Akun Tidak Aktif');
                    return back();
                }
            }
        } else {
            Alert::error('Failed', 'Username / Password Salah / Akun Tidak Aktif');
            return back();
        }

    }

    public function checkinFace()
    {
        return view('auth.checkin_face', [
            "title" => "Presensi Masuk",
        ]);
    }

    public function checkoutFace()
    {
        return view('auth.checkout_face', [
            "title" => "Presensi Pulang",
        ]);
    }

    public function checkinQr()
    {
        return view('auth.checkin_qr', [
            "title" => "Presensi QR Code Masuk",
        ]);
    }

    public function checkoutQr()
    {
        return view('auth.checkout_qr', [
            "title" => "Presensi QR Code Pulang",
        ]);
    }
}
