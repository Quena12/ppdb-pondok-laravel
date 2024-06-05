<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
        // Ambil data santri dari database
        $santris = Santri::all();

        // Kirim data $santris ke view
        return view('santri.index', compact('santris'));
    }
}