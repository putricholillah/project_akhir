<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dosens = Dosen::all();
        return view('dosens.index', compact('dosens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dosens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/dosens', $image->hashName());

        Dosen::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'image' => $image->hashName()
        ]);

        return redirect()->route('dosens.index')->with('success', 'Dosen created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
        return view('dosens.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        //
        return view('dosens.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen): RedirectResponse
    {

        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $image->storeAs('public/dosens', $image->hashName());
            Storage::delete('public/dosens/'. $dosen->image);

            $dosen->update([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'kota' => $request->kota,
                'image' => $hashName()
            ]);

        } else {
            $dosen->update([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'kota' => $request->kota,
            ]);
        }

        return redirect()->route('dosens.index')->with('success', 'Dosen updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        Storage::delete('public/dosens/' . $dosen->image);
        $dosen->delete();

        return redirect()->route('dosens.index')->with('success', 'Dosen deleted successfully.');
    }
}
