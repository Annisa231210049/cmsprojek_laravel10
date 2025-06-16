<?php

namespace App\Http\Controllers;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    // public function index()
    // {
    //     return view('peserta.index',[
    //         'peserta'=> Peserta::latest()->get()
    //     ]);
    // }

    public function index()
    {
        $allPeserta = Peserta::all();
        return view ('peserta.index', compact('allPeserta'));
    }
}

    