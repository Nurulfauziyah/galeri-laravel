<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $gallerys = Gallery::all();
        return view('user.index', compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function udahlogin()
    {
        //
        
        $gallerys = Gallery::all();
        return view('admin.udahlogin', compact('gallerys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new Gallery();
        $data ->user_id= Auth::id();
        $data ->nama=$request->nama;
        $data ->gambar=$request->file('gambar')->store('public/gallery');
        $data ->save();

        return redirect()->route('admin.tabelgallery');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
         $data = Gallery::find($id);
        return view('admin.editgallery', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
          $request->validate([
        'gallery' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Cari produk yang ingin diedit
    $data = Gallery::find($id);

    $data ->user_id= Auth::id();
    $data ->nama=$request->nama;
    if ($request->hasFile('gambar')) {
        Storage::delete($data->gambar); 
        $data->gambar = $request->file('gallery')->store('public/gallery');
    }
        $data ->save();

        return redirect()->route('tabelgallery');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Gallery::find($id)->delete();

        return redirect()->route('tabelgallery');
    }
}
