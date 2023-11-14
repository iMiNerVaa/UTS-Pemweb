<?php

require './../config/db.php';

if(isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = mysqli_query($db_connect,"SELECT * FROM users WHERE email = '$email'");
    if(mysqli_num_rows($user) > 0) {
        $data = mysqli_fetch_assoc($user);
        
        if(password_verify($password,$data['password'])) {
            echo "selamat datang ".$data['name'];
            die;

            //otorisasi
        } else {
            echo "password salah";
            die;
        }

    } else {
        echo "email atau password salah";
        die;
    }
}
?>