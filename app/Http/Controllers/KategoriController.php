<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori ::all();
        return view ('kategori',['kategori'=>$kategori]);
    }
    public function create()
    {
        return view ('create_kategori');
    }
    public function store(request $request)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        Kategori::create([
            'nama_kategori' =>$request->nama_kategori
        ]);

        return redirect ('/kategori') ->with('succes','Kategori berhasil ditambahkan');
    }
}
