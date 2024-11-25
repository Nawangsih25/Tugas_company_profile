<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tema Kupu-Kupu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/morph/bootstrap.min.css">
    <style>
        /* Mengatur latar belakang dengan gambar kupu-kupu dan gradient */
        body {
            background: linear-gradient(135deg, #FFD1DC, #FFF8DC);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-attachment: fixed;
        }

        .login-card {
            background: url('butterfly.png') no-repeat center;
            background-size: cover;
            border-radius: 25px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            padding: 25px;
            width: 100%;
            max-width: 400px;
            color: white;
            text-align: center;
            animation: float 5s ease-in-out infinite;
        }

        .login-card h1 {
            font-size: 28px;
            font-family: 'Comic Sans MS', sans-serif;
            margin-bottom: 20px;
            color: #FF69B4; /* Warna cerah untuk judul */
            animation: bounce 1s ease-in-out infinite;
        }


        .form-label,
        .btn {
            color: #FF69B4 !important; /* Warna tombol dan label cerah */
        }

        .form-control {
            border-radius: 10px;
            border: 2px solid #FF69B4; /* Warna border input */
            background-color: rgba(255, 255, 255, 0.8);
        }

        .btn-primary {
            background-color: #FF69B4;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #FF1493;
        }

        /* Animasi untuk efek bouncing judul */
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Animasi floating untuk card */
        @keyframes float {
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
    <div class="login-card">
        <h1>Login - Kupu-Kupu</h1>
        <form action="./backend/login.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password Anda" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary" name="submit">Login</button>
            </div>
        </form>
    </div>
</body>

</html>
