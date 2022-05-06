<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index', [
            'title' => 'Profil',
            'user' => auth()->user()
        ]);
    }

    public function changePassword()
    {
        return view('profile.change_password', [
            'title' => 'Ganti Password',
            'user' => auth()->user()
        ]);
    }

    public function savePassword(Request $request)
    {

        $message = [
            'required' => ':attribute harus diisi!',
            'min' => ':attribute minimal 8 karakter!',
            'same' => ':attribute tidak valid!'
        ];

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|same:new_conf_password|min:8|confirmed',
            'new_password_conf' => 'required|same:new_password',
        ], $message);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return back()->with('error', 'Password Saat Ini salah!');
        }

        if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
            // Current password and new password same
            return back()->with('error', 'Password Baru dan Password Saat Ini tidak boleh sama!');
        }

        if ($request->get('new_password') != $request->get('new_password_conf')) {
            // New password and new password confirmation
            return redirect()->back()->with("error", "New Password not same with new password confirmation.");
        }

        // //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        // $user->save();

        Alert::success('Success', 'Password Updated Successfully!');
        return redirect('/_tamu');
    }
}
