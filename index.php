<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Pink Palace</title>
    <link rel="stylesheet" href="styles.css"> <!-- Pastikan file CSS berada di lokasi yang benar -->
    <style>
   /* Reset Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

/* Notification Bar */
.notification-bar {
    background-color: #000;
    color: #fff;
    padding: 40px;
    text-align: center;
    font-size: 14px;
    letter-spacing: 1px;
    transition: background-color 0.3s ease;
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: pink;
    border-bottom: 1px solid #ddd;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.navbar:hover {
    background-color: #d5006d;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}

.navbar .logo {
    font-size: 24px;
    font-weight: bold;
    color: #d5006d;
    transition: color 0.3s ease;
}

.navbar:hover .logo {
    color: #ffebee;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
}

.nav-links li a {
    text-decoration: none;
    color: #d5006d;
    font-weight: 500;
    position: relative;
    padding-bottom: 5px;
    transition: color 0.3s ease, transform 0.3s ease;
}

.nav-links li a::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: #d5006d;
    bottom: 0;
    left: 0;
    transform: scaleX(0);
    transform-origin: bottom right;
    transition: transform 0.3s ease;
}

.nav-links li a:hover {
    color: #ffebee;
}

.nav-links li a:hover::after {
    transform: scaleX(1);
    transform-origin: bottom left;
}

/* Hero Section */
.hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 50px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease;
}

.hero:hover {
    background-color: #ffe0e0;
}

.hero-content {
    max-width: 50%;
    animation: fadeIn 1s ease-out;
}

.hero-content h1 {
    color: #2e3c2e;
    font-size: 48px;
    font-weight: bold;
    margin-bottom: 20px;
    transition: transform 0.3s ease;
}

.hero-content p {
    font-size: 16px;
    color: #2e3c2e;
    margin-bottom: 20px;
    transition: transform 0.3s ease;
}

.hero:hover .hero-content h1,
.hero:hover .hero-content p {
    transform: translateX(10px);
}

.booking-btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: pink;
    color: #d5006d;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.booking-btn:hover {
    background-color: #d5006d;
    color: white;
    transform: translateY(-5px);
}

.arrow {
    display: inline-block;
    animation: moveSide 1s ease-in-out infinite alternate;
}

@keyframes moveSide {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(5px);
    }
}

.hero-images {
    display: flex;
    gap: 5px;
}

.hero-images img {
    width: 305px;
    height: auto;
    border-radius: 5px;
    object-fit: cover;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hero-images img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
}

@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}
footer {
    background: pink;
    text-align: center;
    padding: 20px;
    margin-top: 40px;
    color: white;
}
</style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">THE PINK PALACE</div>
        <ul class="nav-links">
            <li><a href="index.php" class="home-btn">Home</a></li>
            <li><a href="fasilitas.php" class="home-btn">Fasilitas</a></li>
            <li><a href="daftar.php" class="daftar-btn">Daftar Kamar</a></li>
            <li><a href="kontak.php" class="kontak-btn">Kontak</a></li>
            <li><a href="login.php" class="login-btn">Login Admin</a></li>
        </ul>
        <div class="search-icon">🔍</div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Waktunya Liburan</h1>
            <p>Liburan adalah waktu untuk bersantai dan menikmati. Dengan berbagai pilihan kamar, kami siap memenuhi kebutuhan anda. Ayo booking sekarang ada diskon menarik loh!!</p>
        
            <a href="booking.php" class="booking-btn">BOOKING <span class="arrow">➔</span></a>
        </div>
        <div class="hero-images">
            <img src="hotel1.jpg" alt="Room 1"> <!-- Ganti dengan gambar Anda -->
            <img src="hotel3.jpg" alt="Room 2"> <!-- Ganti dengan gambar Anda -->
        </div>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Our Hotel. All rights reserved.</p>
    </footer>
</body>
</html>
