<?php 
session_start();
if($_SESSION['role'] == 'admin'){
    // header('Location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Administrator</title>
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

        .welcome-card {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .welcome-card h1 {
            color: #FF69B4;
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 30px;
            text-shadow: 2px 2px #FF1493;
            animation: bounce 1s ease-in-out infinite;
        }

        .welcome-card p {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .btn-logout {
            background-color: #FF1493;
            color: white;
            border-radius: 12px;
            padding: 12px 30px;
            border: none;
            font-size: 1.2rem;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-logout:hover {
            background-color: #FF69B4;
            transform: scale(1.1);
        }

        .btn-logout:active {
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
    <div class="welcome-card">
        <h1>Selamat Datang, Administrator!</h1>
        <p>Halo, <?php echo $_SESSION['name']; ?>! Anda berhasil login dengan role: <strong><?php echo $_SESSION['role']; ?></strong></p>
        <a href="./backend/logout.php" class="btn-logout">Logout</a>
    </div>
</body>

</html>
