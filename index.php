<?php

//memanggil helper
require_once "Koneksi.php";

//memanggil Model
require_once "Model/AdminModel.php";
require_once "Model/AuthModel.php";

// //memanggil Controller
require_once "Controller/AuthController.php";
require_once "Controller/AdminController.php";

//Routing dari URL ke Obyek Class PHP
if (isset($_GET['page']) && isset($_GET['aksi'])) {
    session_start();
    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page

    // require_once akan Dirubah Saat Modul 2
    if ($page == "auth") {
        $auth = new AuthController();
            // -----> login admin
        if ($aksi == 'view') {
            $auth->index(); 
            // -----> User Authentication Admin 
        } else if ($aksi == 'authAdmin') {
            $auth->authAdmin();
            // -----> user logout 
        } else if ($aksi == 'logout') {
            $auth->logout();
        } else {
            require_once "View/menu/error-404.php";
        }
    }
    
    // admin
    else if ($page == "admin") {
            $admin = new AdminController();
            // require_once "View/menu/menu_admin.php";
            if ($_SESSION['email_user'] && $_SESSION['password_user'] ) {

                // -----> dashboard 
                  if ($aksi == 'view') {
                       $admin->index();

                 }else {
                    require_once "View/menu/error-404.php";
                }
            } 
            else {
                header("location: index.php?page=auth&aksi=view");
            }
        }
                
            

        }  else {
    header("location: index.php?page=auth&aksi=view"); //Jangan ada spasi habis location
}