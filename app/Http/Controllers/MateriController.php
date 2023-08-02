<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\Materi;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Materi.materi',[
            'materi' => Materi::get(),
            'judul' => 'Materi'
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
            'judul_materi' => 'required',
            'deskripsi_materi' => 'required',
            'file_materi' => 'required|file|mimes:pdf,word,exel|max:2040'

        ]);

        //upload file_materi 
        $file_materi = $request->file_materi; 
        $slug = ($file_materi->getClientOriginalName());
        $new_file_materi = time() .'_'. $slug.'.' . $file_materi->getClientOriginalExtension();
        $file_materi->move('uploads/materi/' ,$new_file_materi);
        // dd($request->file_materi);
        $validatedData['file_materi'] = 'uploads/materi/'.$new_file_materi;

        Materi::create($validated);

        return redirect('/materi');
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
        $validatedData=$request->validate([
            'judul_materi' => 'required',
            'deskripsi_materi-edit' => 'required',
        ]);

        $materis= Materi::find($id);

        if($request->hasFile('file_materi-edit')){
            $request->validate([
                'file_materi-edit' => 'required|file|mimes:png,jpg|max:2040'
            ]);

            // Detele gbr lama
            if(File::exists($materis->file_materi)) {
                File::delete($materis->file_materi);
            }
        
            $file_materi = $request->file('file_materi-edit');
            $slug = Str::slug($file_materi->getClientOriginalName());
            $new_file_materi = time() .'_'. $slug.'.' . $file_materi->getClientOriginalExtension();;
            $file_materi->move('uploads/materi/', $new_file_materi);
            $materis->file_materi = 'uploads/materi/'.$new_file_materi;
            // dd($materi->file_materi);
        }

        
        $materis->judul_materi= $validatedData['judul_materi-edit'];
        $materis->deskripsi_materi= $validatedData['deskripsi_materi-edit'];
        $materis->save();
    	
        // toast('Your data has been saved!','success');
    	return redirect('/kegiatan'); // untuk diarahkan kemana
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materis= Materi::find($id);
        $file_materi_path =$materis->file;  
        if(File::exists($file_materi_path)) {
            File::delete($file_materi_path);
        }
        Materi::destroy($id);

    	return redirect('/materi');
    }
}
