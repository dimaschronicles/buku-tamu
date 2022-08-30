<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index', [
            'title' => 'Profil',
        ]);
    }

    public function editProfile()
    {
        return view('admin.profile.edit_profile', [
            'title' => 'Edit Profile',
            'user' => User::where('id', auth()->user()->id)->first(),
        ]);
    }

    public function updateProfile(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'name' => 'required',
            'email' => 'required|email',
        ]);

        User::where('id', $request->id)->update($validatedData);
        return redirect()->to('/profile')->with('success', 'Profil Anda berhasil disimpan!');
    }

    public function changePassword()
    {
        return view('admin.profile.change_password', [
            'title' => 'Ganti Password',
        ]);
    }

    public function updatePassword(Request $request)
    {
        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed',
            'new_password_confirmation' => 'required',
        ]);

        if (!Hash::check($request->get('current_password'), auth()->user()->password)) {
            return redirect()->back()->with('error', 'Password Saat Ini salah!');
        }

        if ($request->get('current_password') == $request->get('new_password')) {
            return redirect()->back()->with('error', 'Password Baru tidak boleh sama dengan Password Saat Ini!');
        }

        $user = User::find($request->id);
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->to('/profile')->with('success', 'Password Anda berhasil disimpan!');
    }
}
