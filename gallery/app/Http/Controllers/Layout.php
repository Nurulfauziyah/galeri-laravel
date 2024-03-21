<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Layout extends Controller
{
    //
public function index(){
    $gallerys = Gallery::latest()->paginate(8);
    return view('user.index', compact('gallerys'));
}
    public function sudahlogin(){
    $gallerys = Gallery::latest()->paginate(12);
    return view('admin.sudahlogin', compact('gallerys'));
    }
    public function tambah_gallery(){
        return view ('admin.tambah_gallery');
    }
     public function edit_gallery(){
        return view ('admin.edit_gallery');
    }
}
