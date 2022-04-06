<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminHome(){
        return view('admin.home');
    }
    public function AdminList(){
        return view('admin.adminlist');
    }
    public function AdminEditAdmin(){
        return view('admin.editadmin');
    }
    public function AdminEditUser(){
        return view('admin.edituser');
    }
    public function AdminEditLayanan(){
        return view('admin.editlayanan');
    }
    public function AdminEditPesanan(){
        return view('admin.editpesanan');
    }
    public function AdminEditQna(){
        return view('admin.editqna');
    }
    public function AdminLayanan(){
        return view('admin.layanan');
    }
    public function AdminPesanan(){
        return view('admin.pesanan');
    }
    public function AdminQna(){
        return view('admin.qna');
    }
    public function AdminAddAdmin(){
        return view('admin.tambahadmin');
    }
    public function AdminAddLayanan(){
        return view('admin.tambahlayanan');
    }
    public function AdminAddUser(){
        return view('admin.tambahuser');
    }
    public function AdminUserList(){
        return view('admin.userlist');
    }
}
