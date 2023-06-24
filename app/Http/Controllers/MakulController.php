<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makul;

class MakulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $makuls = Makul::all();
        return view('makuls.index', compact('makuls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('makuls.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode_mk' => 'required',
            'matkul' => 'required',
            'kelas' => 'required',
            'dosen_pengampu' => 'required',
            'hari' => 'required',
            'ruang' => 'required',
            'jam' => 'required',
            'sks' => 'required'
        ]);

        Makul::create($request->all());

        return redirect()->route('makuls.index')->with('success', 'Makul created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Makul $makul)
    {
        //
        return view('makuls.show', compact('makul'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Makul $makul)
    {
        //
        return view('makuls.edit', compact('makul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Makul $makul)
    {
        //
        $request->validate([
            'kode_mk' => 'required',
            'matkul' => 'required',
            'kelas' => 'required',
            'dosen_pengampu' => 'required',
            'hari' => 'required',
            'ruang' => 'required',
            'jam' => 'required',
            'sks' => 'required'
        ]);

        $makul->update($request->all());

        return redirect()->route('makuls.index')->with('success', 'Makul updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Makul $makul)
    {
        //
        $makul->delete();

        return redirect()->route('makuls.index')->with('success', 'Makul deleted successfully.');
    }
}