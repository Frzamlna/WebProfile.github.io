<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // (opsional) proses kirim pesan atau simpan ke DB
        // Contoh sederhana:
        // Mail::to('admin@website.com')->send(new ContactMail($request->all()));

        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
