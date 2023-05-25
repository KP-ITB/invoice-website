<?php 

    class AuthModel{
        
        public function prosesAuthAdmin($email_user,$password_user)
        {
            $sql = "SELECT * from user where email_user = '$email_user' AND password_user ='$password_user' ";
            $query = koneksi()->query($sql);
            return $query->fetch_assoc();
        }

      
    }