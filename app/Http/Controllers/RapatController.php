<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rapat;

class RapatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Rapat.rapat',[
            'judul' => 'Rapat'
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
            'nama_rapat' => 'required',
            'tanggal' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'deskripsi' => 'required',
            'ruangan' => 'required',
            'status' => 'required'

        ]);

        Rapat::create([
            'nama_rapat' => $validated['nama_rapat'],
            'tanggal' => $validated['tanggal'],
            'waktu_mulai' => $validated['waktu_mulai'],
            'waktu_selesai' => $validated['waktu_selesai'],
            'deskripsi' => $validated['deskripsi'],
            'ruangan' => $validated['ruangan'],
            'status' => $validated['status']
        ]);

        return redirect('/rapat');
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
    public function update(Request $request, $id)
    {
        $rapat = Rapat::where('id', session('NIP'))->first();
        $rapat->nama_rapat = $request->nama_rapat;
        $rapat->tanggal = $request->tanggal;
    	$rapat->waktu_mulai = $request->waktu_mulai;
    	$rapat->waktu_selesai = $request->waktu_selesai;
    	$rapat->deskripsi = $request->deskripsi;
        $rapat->ruangan = $request->ruangan;
    	$rapat->status = $request->status;

    	$rapat->update();

        return redirect('/rapat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rapat::destroy($id);

    	return redirect('/rapat'); 
    }
}
