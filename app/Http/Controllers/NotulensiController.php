<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notulensi;

class NotulensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Notulensi.notulensi',[
            'judul' => 'Notulensi'
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
            'isi_notulensi' => 'required',
            'tindak_lanjut' => 'required',
            'catatan_penting' => 'required',
        ]);

        Notulensi::create([
            'isi_notulensi' => $validated['isi_notulensi'],
            'catatan_penting' => $validated['catatan_penting'],
            'tindak_lanjut' => $validated['tindak_lanjut']
        ]);

        return redirect('/notulensi');
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
        $notulensi = Notulensi::where('id', session('NIP'))->first();
        $notulensi->isi_notulensi = $request->isi_notulensi;
        $notulensi->tindak_lanjut = $request->tindak_lanjut;
        $notulensi->catatan_penting = $request->catatan_penting;

    	$notulensi->update();

        return redirect('/notulensi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notulensi::destroy($id);

    	return redirect('/notulensi'); 
    }
}
