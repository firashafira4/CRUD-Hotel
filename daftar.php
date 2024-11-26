<?php
// Koneksi ke database
include('koneksi.php'); // pastikan file koneksi database sudah ada

// Ambil data kamar dari tabel 'kamar'
$query = "SELECT id_kamar, tipe_kamar, harga_permalam, deskripsi, gambar FROM kamar";
$result = $koneksi->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kamar - Our Hotel</title>
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
    font-family: 'Arial', sans-serif;
    background-color: #f9f9f9;
    color: #333;
    line-height: 1.6;
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

/* Kamar Section */
#rooms {
    padding: 60px 20px;
    text-align: center;
    background-color: #fff;
}

#rooms h2 {
    margin-bottom: 40px;
    font-size: 36px;
    color: #2c3e50;
    font-weight: bold;
    transition: transform 0.3s ease;
}

#rooms:hover h2 {
    transform: translateY(-5px);
}

/* Grid layout untuk kamar */
.rooms-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 30px;
    justify-items: center;
}

/* Desain tiap kamar */
.room {
    background-color: bisque;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.room:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.room img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 8px 8px 0 0;
    transition: transform 0.3s ease;
}

.room:hover img {
    transform: scale(1.05);
}

.room h3 {
    font-size: 24px;
    margin: 20px 0;
    color: #2c3e50;
    font-weight: bold;
    transition: transform 0.3s ease, color 0.3s ease;
}

.room:hover h3 {
    transform: translateY(-5px);
    color: #d5006d;
}

.room p {
    font-size: 16px;
    color: #555;
    padding: 0 20px 20px;
    margin-bottom: 20px;
    transition: color 0.3s ease;
}

.room:hover p {
    color: #333;
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
    .rooms-container {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 480px) {
    .rooms-container {
        grid-template-columns: 1fr;
    }
}

    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="fasilitas.php">Fasilitas</a>
        <a href="kontak.php">Kontak</a>
    </div>

    <!-- Kamar Section -->
    <section id="rooms">
        <h2>Daftar Kamar Yang Tersedia</h2>

        <div class="rooms-container">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="room">
                    <img src="<?php echo $row['gambar']; ?>" alt="<?php echo $row['tipe_kamar']; ?>">
                    <h3><?php echo $row['id_kamar']; ?>. <?php echo $row['tipe_kamar']; ?></h3>
                    <p><?php echo $row['deskripsi']; ?></p>
                    <p>Harga: Rp. <?php echo number_format($row['harga_permalam'], 0, ',', '.'); ?> per malam</p>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Our Hotel. All rights reserved.</p>
    </footer>

</body>
</html>
