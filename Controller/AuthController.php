<?php

class AuthController
{
    private $model;

    public function __construct()
    {
        $this->model = new AuthModel();
    }

    public function index()
    {
        require_once("View/auth/loginadmin.php");
    }

   


    // -----> login pelanggan pakai database 
    public function authAdmin()
    {
        $email_user = $_POST['email_user'];
        $password_user = $_POST['password_user'];
        $data = $this->model->prosesAuthAdmin($email_user, $password_user);
        if ($data) {
            $_SESSION['email_user'] = $data;
            $_SESSION['password_user'] = $data;
            header("location: index.php?page=admin&aksi=view&pesan=berhasil login");
        } else {
            header("location: index.php?page=auth&aksi=view&pesan=password atau npm salah");
        }
    }

    // -----> logout 
    public function logout()
    {
        session_destroy();
        header("location: index.php?page=auth&aksi=view&pesan=berhasil logout!!");
    }

 
}