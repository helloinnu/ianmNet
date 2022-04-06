<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayananController extends Controller
{
    public function Show()
    {
       return view('admin.layanan');
    }
    
    public function Edit()
    {
        return view('admin.editlayanan');
    }
    public function Add()
    {
        return view('admin.tambahlayanan');
    }
    // public function InsertLayanan(Request $request){
    //     Layanan::create($request->all());
    //     return redirect()->route('/admin-layanan')->with('success','Data berhasil ditambahkan');
    // }
}
