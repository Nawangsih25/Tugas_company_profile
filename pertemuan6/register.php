<?php
//prosedur logic sederhana yang akan kita jalanin
    require 'fungsi/db.php';

    if ($_SERVER['REQUEST_METHOD'] =='POST'){
        $nama_lengkap = $_POST['nama_lengkap'];
        $nomor_HP = $_POST['nomor_HP'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $foto = $_POST['foto'];

        // duplikat
        $stmt =$pdo->prepare("SELECT * FROM users WHERE username= ? OR email = ? OR nomor_HP = ?");
        $stmt->execute(([$username,$email,$nomor_HP]));
        $existing_user = $stmt->fetch();

        if ($existing_user){
            if ($existing_user['username'] == $username){
                $error = "username sudah Digunakan";
            }
            elseif($existing_user['email'] == $email){
                $error="Email sudah digunakan";
            }elseif($existing_user['nomor_HP'] == $nomor_HP){
                $error="Nomor hp sudah digunakan";
            }
        }else{
            if(isset($_FILES['FOTO']) && $_FILES['foto']['error'] == 0){
                $foto_name = $_FILES['foto']['name'];
                $foto_tmp = $_FILES['foto']['tmp_name'];
                $foto_extension= pathinfo($foto_name, PATHINFO_EXTENTION);
                $foto_path = 'uploads/' . $foto_new_name;

                if (move_uploaded_file($foto_tmp, $foto_path)){
                    $foto =$foto_new_name;
                }else{
                    $foto = null;
                    echo "Gagal mengunggah gambar";
                }
            }else{
                $foto= null;
            }
            $stmt = $pdo->prepare("INSERT INTO users ()nama_lengkap, nomor_HP, username, email password, role, foto) VALUES (?,?,?,?,?,?,?)");
            if ($stmt->execute([$nama_lengkap, $nomor_HP, $username, $email, $password, $role, $foto])){
                $succes = "registrasi berhasil <a href='login.php' class='btn btn-info'>L O G I N </a>";
            }else{
                $error = "registrasi gagal";
            }               
            }
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R E G I S T E R</title>
</head>
<body>
        <form method = 'post' action="" enctype='multipart/form-data'>
            <label for="foto">foto</label>
            <input type="file" id="foto" name="foto" enctype='image/*' requered >

            <label for="nama_lengkap">nama lengkap</label>
            <input type="text" id="nama_lengkap" placeholder='masukan nama lengkap' name="nama_lengkap"  requered >

            <label for="nomor_HP">no HP</label>
            <input type="number" id="nomor_HP" placeholder='masukan Nomor handphone' name="nomor_HP"  requered >

            <label for="username">username</label>
            <input type="text" id="username" placeholder='masukan username' name="username"  requered >

            <label for="email">email</label>
            <input type="email" id="email" placeholder='masukan email' name="email"  requered >

            <label for="password">password</label>
            <input type="password" id="password" placeholder='masukan password' name="password"  requered >

            <label for="role">Role</label>
            <select name="role" id="role" required>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>

            <button type= "sumbit">Submit</button>
            <p>Sudah ada akun ?<a href="login.pho">L O G I N</a></p>
            
        </form>
</body>
</html>