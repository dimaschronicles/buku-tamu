<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'title' => 'Pengunjung'
        ]);
    }

    public function store(Request $request)
    {
        $messages = [
            'name_guest.required' => 'Nama Lengkap harus diisi!',
            'address_guest.required' => 'Alamat harus diisi!',
            'agency_guest.required' => 'Instansi harus diisi!',
            'email_guest.required' => 'Email harus diisi!',
            'email_guest.email' => 'Email tidak valid!',
            'telp_guest.required' => 'No HP/WA harus diisi!',
            'telp_guest.numeric' => 'No HP/WA harus angka!',
            'telp_guest.digits_between' => 'No HP/WA kurang dari 11 atau lebih dari 13!',
            'description_guest.required' => 'Keperluan harus diisi!',
        ];

        $validatedData = $request->validate([
            'name_guest' => 'required',
            'address_guest' => 'required',
            'agency_guest' => 'required',
            'email_guest' => 'required|email',
            'telp_guest' => 'required|numeric|digits_between:11,13',
            'description_guest' => 'required',
        ], $messages);

        $validatedData['date_created_guest'] = date('Y-m-d h:i:s');
        Guest::create($validatedData);

        return redirect()->to('/')->with('success', 'Terima Kasih Atas Kunjungan Anda!');
    }
}
