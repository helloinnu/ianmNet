package com.example.ianmnet;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;


@Controller
public class AppController {
    
    // User Views
    @GetMapping("/")
    public String viewHome() {return "user/home";}

    @GetMapping("/layanan")
    public String viewLayout() {return "user/layanan";}

    @GetMapping("/perusahaan")
    public String viewPerusahaan() {return "user/perusahaan";}

    @GetMapping("/profil")
    public String viewProfil() {return "user/profil";}
    
    @GetMapping("/qna")
    public String viewQna() {return "user/qna";}

    @GetMapping("/tim")
    public String viewTim() {return "user/tim";}

    @GetMapping("/login")
    public String viewLogin() {return "user/login";}

    @GetMapping("/register")
    public String viewRegister() {return "user/register";}


    // Admin Views
    @GetMapping("/dashboard")
    public String viewAdminhome() {return "admin/home";}

    @RequestMapping(value = "/dashboard", method = RequestMethod.POST)
    public String getLogin() {
        return "admin/home";
    }

    //=============================================================//
    @GetMapping("/admin-user")
    public String viewUserlist() {return "admin/userlist";}
    
    @GetMapping("/admin-tambah-user")
    public String viewAddUserlist() {return "admin/tambahuser";}

    @GetMapping("/tampil-update-user")
    public String viewEditUserlist() {return "admin/edituser";}

    @GetMapping("/delete-user")
    public String viewDelUserlist() {return "admin/edituser";}

    //=============================================================//
    @GetMapping("/admin-admin")
    public String viewAdminlist() {return "admin/adminlist";}

    @GetMapping("/admin-tambah-admin")
    public String viewAddAdminlist() {return "admin/tambahadmin";}

    @GetMapping("/admin-edit-admin")
    public String viewEditAdminlist() {return "admin/editadmin";}

    //=============================================================//
    @GetMapping("/admin-layanan")
    public String viewAdminlayanan() {return "admin/layanan";}

    @GetMapping("/admin-tambah-layanan")
    public String viewAddAdminlayanan() {return "admin/tambahlayanan";}

    @GetMapping("/tampil-update")
    public String viewEditAdminlayanan() {return "admin/editlayanan";}

    @GetMapping("/delete-layanan")
    public String viewDelAdminlayanan() {return "admin/editlayanan";}

    //=============================================================//
    @GetMapping("/admin-pesanan")
    public String viewAdminpesanan() {return "admin/pesanan";}

    @GetMapping("/admin-edit-pesanan")
    public String viewEditAdminpesanan() {return "admin/editpesanan";}

    //=============================================================//
    @GetMapping("/admin-qna")
    public String viewAdminqna() {return "admin/qna";}

    @GetMapping("/admin-edit-qna")
    public String viewEditAdminqna() {return "admin/editqna";}

    
    
}
