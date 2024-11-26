<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Our Hotel</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Reset Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
}

/* Navbar */
.navbar {
    background-color: pink;
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

.navbar a {
    text-decoration: none;
    color: #d5006d;
    margin: 0 15px;
    font-weight: bold;
    transition: color 0.3s ease, transform 0.3s ease;
}

.navbar a:hover {
    color: white;
    transform: translateY(-2px);
}

/* Hero Section */
#hero {
    background: url('hotel1.jpg') no-repeat center center; /* Ganti dengan gambar hero Anda */
    background-size: cover; /* Menjaga gambar mengisi seluruh area */
    height: 70vh; /* Mengatur tinggi hero section menjadi full height */
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: relative;
}

/* Overlay untuk meningkatkan kontras */
#hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
}

#hero .hero-content {
    position: relative;
    z-index: 2;
    padding: 20px;
}

#hero h1 {
    font-size: 48px;
    margin-bottom: 20px;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7); /* Bayangan untuk teks */
}

#hero p {
    font-size: 24px;
    margin-bottom: 30px;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
}

/* Features Section */
#features {
    padding: 40px 20px;
    text-align: center;
    background-color: #fff;
}

#features h2 {
    margin-bottom: 30px;
    font-size: 36px;
    color: #333;
    font-weight: bold;
}

/* Desain Fasilitas */
.feature {
    background: bisque;
    border-radius: 8px;
    padding: 20px;
    margin: 15px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    display: inline-block;
    width: 30%;
    vertical-align: top;
    position: relative;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
}

/* Gambar dalam fitur */
.feature img {
    width: 100%; /* Mengatur gambar agar mengisi area lebar fitur */
    border-radius: 8px; /* Sudut gambar agar melengkung */
    margin-bottom: 10px; /* Jarak antara gambar dan teks */
    transition: transform 0.3s ease;
}

.feature h3 {
    font-size: 24px;
    color: #2c3e50;
    margin-bottom: 10px;
    font-weight: bold;
}

.feature p {
    font-size: 16px;
    color: #555;
}

/* Hover effect pada fitur */
.feature:hover {
    transform: translateY(-10px); /* Efek angkat saat hover */
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15); /* Bayangan lebih dalam saat hover */
}

.feature:hover img {
    transform: scale(1.05); /* Membesarkan gambar saat hover */
}

.feature:hover h3 {
    color: #d5006d; /* Mengubah warna judul fitur */
}

.feature:hover p {
    color: #333; /* Mengubah warna deskripsi saat hover */
}

/* Footer */
footer {
    background: pink;
    text-align: center;
    padding: 20px;
    margin-top: 40px;
    color: white;
    transition: background-color 0.3s ease;
}

footer:hover {
    background-color: #f7b0c3;
}

footer p {
    margin: 0;
    font-size: 14px;
}

/* Responsif */
@media (max-width: 768px) {
    .feature {
        width: 45%; /* Menyesuaikan ukuran fitur pada layar lebih kecil */
    }
}

@media (max-width: 480px) {
    .feature {
        width: 100%; /* Menyesuaikan ukuran fitur menjadi penuh pada layar kecil */
    }
}


    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="daftar.php">Daftar Kamar</a>
    </div>

    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-content">
            <h1>Welcome To Our Hotel</h1>
            <p>Experience luxury and comfort at an affordable price.</p>
            <a href="kontak.php" class="btn-hero" style="padding: 10px 20px; background-color: #d5006d; color: white; text-decoration: none; border-radius: 5px;">Hubungi Kami</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features">
        <h2>Fasilitas Yang Tersedia</h2>

        <div class="feature">
            <img src="w.jpg" alt="Wi-Fi Gratis"> <!-- Gambar untuk Wi-Fi Gratis -->
            <h3>Wi-Fi Gratis</h3>
            <p>Nikmati akses internet cepat di seluruh area hotel.</p>
        </div>

        <div class="feature">
            <img src="kl1.jpg" alt="Kolam Renang"> <!-- Gambar untuk Kolam Renang -->
            <h3>Kolam Renang</h3>
            <p>Relaks di kolam renang kami yang luas dan nyaman.</p>
        </div>

        <div class="feature">
            <img src="rs1.jpg" alt="Restoran"> <!-- Gambar untuk Restoran -->
            <h3>Restoran</h3>
            <p>Rasakan berbagai hidangan lezat di restoran hotel kami.</p>
        </div>

        <div class="feature">
            <img src="tm1.jpg" alt="Pusat Kebugaran"> <!-- Gambar untuk Pusat Kebugaran -->
            <h3>Pusat Kebugaran</h3>
            <p>Tersedia taman dengan pemandangan yang indah dan udara yang sejuk.</p>
        </div>

        <div class="feature">
            <img src="p.jpg" alt="Parkir Gratis"> <!-- Gambar untuk Parkir Gratis -->
            <h3>Parkir Gratis</h3>
            <p>Parkir luas dan aman tersedia untuk semua tamu.</p>
        </div>

        <div class="feature">
            <img src="l.jpg" alt="24/7 Layanan Pelanggan"> <!-- Gambar untuk Layanan Pelanggan -->
            <h3>24/7 Layanan Pelanggan</h3>
            <p>Staf kami siap membantu anda kapan saja, siang atau malam.</p>
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Our Hotel. All rights reserved.</p>
    </footer>

</body>
</html>
