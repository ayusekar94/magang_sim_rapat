<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Karyawan.karyawan',[
            'karyawan' => Karyawan::get(),
            'judul' => 'Karyawan'
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
        $validated = $request->validate([
            'NIP' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'divisi' => 'required',
            'jabatan' => 'required',
            'departemen' => 'required'

        ]);

        Karyawan::create([
            'NIP' => $validated['NIP'],
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'divisi' => $validated['divisi'],
            'jabatan' => $validated['jabatan'],
            'departemen' => $validated['departemen']
        ]);

        return redirect('/karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $NIP)
    {
        $validatedData=$request->validate([
            'nip-edit' => 'required',
            'nama-edit' => 'required',
            'email-edit' => 'required',
            'jabatan-edit' => 'required',
            'divisi-edit' => 'required',
        ]);

        $karyawans= Karyawan::find($NIP);

        $karyawans->Nip= $validatedData['nip-edit'];
        $karyawans->nama= $validatedData['nama-edit'];
        $karyawans->email= $validatedData['email-edit'];
        $karyawans->jabatan= $validatedData['jabatan-edit'];
        $karyawans->divisi= $validatedData['divisi-edit'];
        $karyawans->save();
    	
        // toast('Your data has been saved!','success');
    	return redirect('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($NIP)
    {
        Karyawan::destroy($NIP);

    	return redirect('/karyawan'); 
    }
}
