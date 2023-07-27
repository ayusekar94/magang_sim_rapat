<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Buka Halaman Dashboard
    public function index(){
        return view('Rapat.rapat',[
            'judul' => 'Dashboard'
        ]);
    }
}
