<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\UndanganMailable;
use Illuminate\Support\Facades\Mail;

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
}
