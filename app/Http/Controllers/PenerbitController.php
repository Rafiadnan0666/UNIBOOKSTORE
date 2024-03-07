<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $penerbit = Penerbit::all();
        return view('penerbit.index', compact('penerbit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'kode' => 'required|unique:penerbit',
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'telepon' => 'required|numeric',
        ]);

        Penerbit::create($validated);
        return redirect('/penerbit');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penerbit $penerbit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerbit $penerbit)
    {
        //
        return view('penerbit.edit', ['penerbit'=>$penerbit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerbit $penerbit)
    {
        //
        $rules = [
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'telepon' => 'required|numeric',
        ];

        if ($request->get('nama') != $penerbit->nama){
            $rules['kode'] = 'required|unique:penerbits';
            }
        
        $validated = $request->validate($rules);

        Penerbit::where('id', $penerbit->id)
                ->update($validated);
                
        return redirect('/penerbit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerbit $penerbit)
    {
        //
        Penerbit::destroy($penerbit->id);
        return redirect('/penerbit'); 
    }
}
