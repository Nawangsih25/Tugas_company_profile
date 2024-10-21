<?php
        if(isset($_POST['email']) ||  isset($_POST['password']))
             $email = $_POST['email'];
             $password = $_POST['password'];

        if($email == 'admin@morphos.com' &&  $password == 'admin') {
            header('Location: ./dasboard.php');
        }else{
            echo "email atau password yang ada masuk salah,silahkan cek kembali";
        }
    ?>
