<?php
session_start();
if(!isset($_SESSION['name'])){
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/morph/bootstrap.min.css">
    <style>
        /* Background cerah dengan gradien */
        body {
            background: linear-gradient(135deg, #FFB6C1, #F0E68C);
            font-family: 'Comic Sans MS', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .profile-card {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .profile-card h1 {
            color: #FF69B4;
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 30px;
            text-shadow: 2px 2px #FF1493;
            animation: bounce 1s ease-in-out infinite;
        }

        .profile-card p {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 20px;
        }

        .profile-card button {
            background-color: #FF1493;
            color: white;
            border-radius: 12px;
            padding: 12px 30px;
            border: none;
            font-size: 1.2rem;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
        }

        .profile-card button:hover {
            background-color: #FF69B4;
            transform: scale(1.1);
        }

        .profile-card button:active {
            transform: scale(0.9);
        }

        @keyframes bounce {
            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .profile-card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
            object-fit: cover;
        }

    </style>
</head>

<body>
    <div class="profile-card">
        <img src="butterfly.png" alt="Foto Profil">
        <h1>Halo, <?php echo $_SESSION['name']; ?>!</h1>
        
        <!-- Periksa apakah email ada dalam session -->
        <?php if (isset($_SESSION['email'])): ?>
            <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
        <?php else: ?>
            <p><strong>Email:</strong> Tidak tersedia</p>
        <?php endif; ?>

        <p><strong>Role:</strong> <?php echo ucfirst($_SESSION['role']); ?></p>
        <a href="edit.php">
            <button>Edit Profil</button>
        </a>
        <a href="./backend/logout.php">
            <button>Logout</button>
        </a>
    </div>
</body>

</html>
