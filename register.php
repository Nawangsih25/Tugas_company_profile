<?php 
session_start();
// Cek jika sudah login dan tidak perlu akses register lagi
if(isset($_SESSION['role'])){
    header('Location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/morph/bootstrap.min.css">
    <style>
        /* Background lucu dengan gradien cerah */
        body {
            background: linear-gradient(135deg, #FFC0CB, #F0E68C);
            font-family: 'Comic Sans MS', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .register-card {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .register-card h1 {
            color: #FF69B4;
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 30px;
            text-shadow: 2px 2px #FF1493;
            animation: bounce 1s ease-in-out infinite;
        }

        .register-card form {
            text-align: left;
        }

        .register-card input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 10px;
            border: 2px solid #FF1493;
            font-size: 1rem;
            outline: none;
        }

        .register-card input:focus {
            border-color: #FF69B4;
        }

        .btn-register {
            background-color: #FF1493;
            color: white;
            border-radius: 12px;
            padding: 12px 30px;
            border: none;
            font-size: 1.2rem;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-register:hover {
            background-color: #FF69B4;
            transform: scale(1.1);
        }

        .btn-register:active {
            transform: scale(0.9);
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>

<body>
    <div class="register-card">
        <h1>Daftar Akun</h1>
        <form action="./backend/register.php" method="POST">
            <input type="text" name="name" placeholder="Nama Lengkap" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Konfirmasi Password" required>
            <button type="submit" class="btn-register">Daftar</button>
        </form>
    </div>
</body>

</html>
