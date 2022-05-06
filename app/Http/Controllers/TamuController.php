<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tamu.index', [
            'title' => 'Buku Tamu'
        ]);
    }

    public function _tamu()
    {
        return view('tamu.tamu', [
            'title' => 'Data Tamu',
            'tamu' => Guest::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute harus diisi!',
            'email' => ':attribute tidak valid!',
            'digits_between' => ':attribute tidak valid!',
            'numeric' => ':attribute harus angka!',
        ];

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|numeric|digits_between:11,13',
            'alamat' => 'required',
            'keperluan' => 'required',
        ], $message);

        $validatedData = $request->all();
        Guest::create($validatedData);
        Alert::success('Success', 'Data Created Successfully!');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('tamu.detail', [
            'title' => 'Detail Tamu',
            'tamu' => Guest::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('tamu.edit', [
            'title' => 'Edit Tamu',
            'tamu' => Guest::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = [
            'required' => ':attribute harus diisi!',
            'email' => ':attribute tidak valid!',
            'digits_between' => ':attribute tidak valid!',
            'numeric' => ':attribute harus angka!',
        ];

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|numeric|digits_between:11,13',
            'alamat' => 'required',
            'keperluan' => 'required',
        ], $message);

        Guest::find($id)->update($request->all());
        Alert::success('Success', 'Data Updated Successfully!');
        return redirect('/_tamu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guest::destroy($id);
        Alert::success('Success', 'Data Deleted Successfully!');
        return redirect('/_tamu');
    }
}
