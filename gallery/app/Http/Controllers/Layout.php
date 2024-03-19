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
    public function udahlogin(){
       $gallerys = Gallery::latest()->paginate(8);
    return view('admin.udahlogin', compact('gallerys'));
    }
    public function tambahgallery(){
        return view ('admin.tambahgallery');
    }
     public function tabelgallery(){
        $user = Auth::user();
        $gallerys = $user->gallery;
        $gallerys = Gallery::paginate(3);
        return view ('admin.tabelgallery', compact('gallerys'));
    }
     public function editgallery(){
        return view ('admin.editgallery');
    }
}
