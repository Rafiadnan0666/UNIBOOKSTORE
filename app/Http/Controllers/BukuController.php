<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $penerbit = Penerbit::all();
        return view('buku.create', compact('penerbit'));
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'kategori' => 'required',
            'nama_buku' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'penerbit' => 'required',
        ]);

        Buku::create($request->all());

        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     *

     */
    public function show(Buku $buku)
    {
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
e
     */
    public function edit(Buku $buku)
    {
        $penerbit = Penerbit::all();
        return view('buku.edit', compact('buku', 'penerbit'));
    }

    /**
     * Update the specified resource in storage.

     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'kode' => 'required',
            'kategori' => 'required',
            'nama_buku' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'penerbit' => 'required',
        ]);

        $buku->update($request->all());

        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     *

     */
    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->route('buku.index');
    }
}
