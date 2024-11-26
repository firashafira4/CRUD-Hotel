<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang yang lembut */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Mengisi tinggi layar */
            margin: 0;
        }

        .login-container {
            background: pink;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 400px;
            transition: transform 0.3s ease-in-out; /* Transisi lembut saat hover */
        }

        .login-container:hover {
            transform: translateY(-10px); /* Efek timbul saat hover */
        }

        h2 {
            color: #d5006d;
            margin-bottom: 30px;
            text-align: center;
            font-weight: bold;
        }

        .form-control {
            transition: border-color 0.3s ease, box-shadow 0.3s ease; /* Transisi pada form input */
        }

        .form-control:focus {
            border-color: #d5006d; /* Border warna pink saat fokus */
            box-shadow: 0 0 8px rgba(213, 0, 109, 0.5); /* Efek glow saat input aktif */
        }

        .btn {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-5px); /* Efek timbul saat hover pada tombol */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Bayangan lembut pada tombol */
        }

        .btn-outline-primary {
            background-color: #d5006d;
            color: white;
        }

        .btn-danger {
            background-color: #ff4c4c;
            color: white;
        }

        /* Responsif untuk layar lebih kecil */
        @media (max-width: 768px) {
            .login-container {
                width: 90%; /* Mengurangi lebar container pada layar kecil */
            }
        }

    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="ceklogin.php">
            <div class="mb-3">
                <label for="username" class="form-label" style="color: #d5006d">Username</label>
                <input type="text" class="form-control form-control-sm" id="username" placeholder="Masukkan username Anda" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" style="color: #d5006d">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan password Anda" name="password" required>
            </div>
            <button type="submit" class="btn btn-outline-primary w-100">Login</button>
            <button type="reset" class="btn btn-primary w-100 mt-3">Batal</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb+7NWmAzY6Zt3fv6c+gQgbK61LzUjYBgZDAFjFf3fX9I1xvH" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-Oz5I09eCVJpc8S2rSyQ4i7vVHzH09P9DJ2dXv1NjNKgk3qVOHhI8/Ko4T2LUK1oO" crossorigin="anonymous"></script>
</body>
</html>
