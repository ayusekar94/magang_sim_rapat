<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Auth;

class AutentikasiController extends Controller
{
    // Buka Halaman Login
    public function index(){
        return view('Autentikasi.login',[
            'title' => 'Halaman Login'
        ]);
    }

    // Buka Halaman Register
    public function create(){
        return view('Autentikasi.register',[
            'title' => 'Halaman Register'
        ]);
    }

    // Auth
    public function store(Request $request){
        $validatedData=$request->validate([
            'NIP' => 'required',
            'password' => 'required'
        ]);

        //jika username ada
        $user = DB::table('karyawans')->where('NIP', $request->NIP)->first();

        //jika password benar
        if($user){
            if(Hash::check($request->password,$user->password)){
                session([
                    'isLogin' => true,
                    'NIP' => $user->NIP,
                    'nama' => $user->nama,
                    'divisi' => $user->divisi,
                    'jabatan' => $user->jabatan,
                    'departemen' => $user->departemen
                    ]);
                // return redirect('/'.$request->role);
                return redirect('/dashboard');
            }
            //jika password salah
            return redirect('/auth')->with('error_password', 'Password Tidak Sesuai');
        }
        
        //jika username tidak ada
        return redirect('/auth')->with('error_username', 'Username Tidak Ditemukan');
        // $credentials = $request->only('NIP', 'password');
        // if (Auth::attempt($credentials)) {
        //     // Authentication passed...
        //     return redirect('/kegiatan');
        // }
        // return Redirect::to("auth")->with('Username atau password tidak sesuai!');
    }

    public function uindex(){
        return view('Autentikasi.my-account',[
            'karyawan' => Karyawan::where('NIP', session('NIP'))->first(),
            'judul' => 'Edit Profile',
        ]);
    }

    public function register(Request $request){
        // dd($request);
        $validatedData=$request->validate([
            'NIP' => 'required',
            'nama' => 'required|min:5',
            'password' => 'required|min:5|confirmed',
            'divisi' => 'required',
            'jabatan' => 'required',
            'departemen' => 'required'
        ]);
        $validatedData['password']=bcrypt($validatedData['password']);

        Karyawan::create($validatedData); //untuk menyimpan data

        // toast('Registration has been successful','success');
        return redirect('/auth')->with('registrasi_success','Selamat Anda berhasil melakukan registrasi! Sekarang Anda bisa login menggunakan akun Anda');
    }

    public function update(Request $request, $id)
    {
        $validated=$request->validate([
            'NIP' => 'required',
            'nama' => 'required',
            'divisi' => 'required',
            'jabatan' => 'required',
            'departemen' => 'required',
        ]);

    	$karyawan = Karyawan::where('NIP', session('NIP'))->first();
    	$karyawan->NIP = $request->NIP;
        $karyawan->nama = $request->nama;
    	$karyawan->divisi = $request->divisi;
    	$karyawan->jabatan = $request->jabatan;
        $karyawan->departemen = $request->departemen;
    	
    	$karyawan->update();

        return redirect('/profile');
    }

    // Logout
    public function logout(){
        session()->flush();
        return redirect('/logout-page');
    }

    // Buka Halaman Login
    public function logoutPage(){
        return view('Autentikasi.logout',[
            'title' => 'Halaman Logout'
        ]);
    }

    // Hapus Akun
    public function destroy($id)
    {
        Karyawan::destroy($id);

    	return redirect('/auth')->with('delete_success','Akun Anda Berhasil Dihapus. Terima kasih telah menggunakan layanan kami'); 
    }
}
