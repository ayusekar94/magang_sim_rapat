<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notulensi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

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
            'judul' => 'Notulensi',
            'notulensi' => Notulensi::with('rapat')->get(),
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
        // dd($request);
        $validatedData=$request->validate([
            'catatan' => 'required',
            'file' => 'required|file|mimes:pdf,word,exel'
        ]);

        //upload file 
        $file = $request->file; 
        $slug = ($file->getClientOriginalName());
        $new_file = time() .'_'. $slug.'.' . $file->getClientOriginalExtension();
        $file->move('uploads/notulensi/' ,$new_file);
        // dd($request->file);
        $validatedData['file'] = 'uploads/notulensi/'.$new_file;

        Notulensi::create($validatedData);

        return redirect('/notulensi')->with('success','Data baru telah ditambahkan!');
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
            'catatan_edit' => 'required',
        ]);

        $notulensis= Notulensi::find($id);

        if($request->hasFile('file-edit')){
            $request->validate([
                'file-edit' => 'required|file|mimes:pdf,word,exel'
            ]);

            // Detele gbr lama
            if(File::exists($notulensis->file)) {
                File::delete($notulensis->file);
            }
        
            $file = $request->file('file-edit');
            $slug = Str::slug($file->getClientOriginalName());
            $new_file = time() .'_'. $slug.'.' . $file->getClientOriginalExtension();;
            $file->move('uploads/notulensi/', $new_file);
            $notulensis->file = 'uploads/notulensi/'.$new_file;
            // dd($notulensi->file);
        }

        
        $notulensis->catatan= $validatedData['catatan-edit'];
        $notulensis->save();

        return redirect('/notulensi')->with('success','Data telah ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notulensis= Notulensi::find($id);
        $file_path =$notulensis->file;  // Value is not URL but directory file paths
        if(File::exists($file_path)) {
            File::delete($file_path);
        }
        
        Notulensi::destroy($id);

    	return redirect('/notulensi'); 
    }
}
