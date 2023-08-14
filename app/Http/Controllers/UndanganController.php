<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\UndanganMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\Undangan;

class UndanganController extends Controller
{
    public function sendEmail()
    {
        // $data = [
        //     'key' => 'value', // Data yang ingin Anda kirim ke view email
        // ];

        // Mail::to('email@example.com')->send(new NamaMailable($data));
        Mail::to('onynovii@gmail.com')->send(new UndanganMailable());

        return "Email berhasil dikirim.";
    }

    public function index(){
        return view('Emails.undangan',[
            'judul' => 'Dashboard',
            'undangan' => Undangan::get()
        ]);
    }

    public function getUndangan(){
        $data = Undangan::with('rapat')->get();
        return response()->json($data);
    }

    // Simpan Undangan
    public function store(Request $request)
    {
        // dd($request);
        $validatedData=$request->validate([
            'email_penerima' => 'required',
            'status_undangan' => 'required',
            'waktu_pengiriman' => 'required',
            'rapat_id' => 'required',
        ]);

        //upload image 
        $image = $request->image; 
        $slug = ($image->getClientOriginalName());
        $new_image = time() .'_'. $slug.'.' . $image->getClientOriginalExtension();
        $image->move('uploads/kegiatan/' ,$new_image);
        // dd($request->image);
        $validatedData['image'] = 'uploads/kegiatan/'.$new_image;
        Undangan::create($validatedData); //untuk menyimpan data
        // $kegiatan = new Kegiatan();
        // $kegiatan->image = 'uploads/kegiatan/'.$new_image;
        // $kegiatan->name= $request->name;
        // $kegiatan->tgl= $request->tgl;
        // $kegiatan->kegiatan= $request->kegiatan;
        // $kegiatan->karyawan_nip= $request->karyawan_nip;
        // $kegiatan->save();
        
        // toast('Registration has been successful','success');
        return redirect('/kegiatan');
    }
}
