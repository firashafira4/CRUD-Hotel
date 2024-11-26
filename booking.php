<?php 
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservasi";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengecek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $id_kamar = $_POST['id_kamar'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $tanggal_check_in = $_POST['tanggal_check_in'];
    $tanggal_check_out = $_POST['tanggal_check_out'];
    
    // Hitung jumlah malam
    $nights = (strtotime($tanggal_check_out) - strtotime($tanggal_check_in)) / (60 * 60 * 24);
    
    // Harga per malam
    $harga_permalam = 1000000;
    
    // Hitung total harga
    $total_harga = $nights * $harga_permalam;

    // Query untuk menyimpan data ke dalam database
    $sql = "INSERT INTO pemesanan (id_kamar, nama, email, telepon, tanggal_check_in, tanggal_check_out, total_harga)
            VALUES ('$id_kamar', '$nama', '$email', '$telepon', '$tanggal_check_in', '$tanggal_check_out', '$total_harga')";

    if ($conn->query($sql) === TRUE) {
        echo "<p class='success'>Pemesanan berhasil disimpan!</p>";
    } else {
        echo "<p class='error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pemesanan Kamar</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
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

/* Form Pemesanan */
#booking-form {
    background: pink;
    max-width: 600px;
    margin: 50px auto;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease;
}

#booking-form:hover {
    background: #f7b0c3;
}

h2 {
    text-align: center;
    color: #d5006d;
    font-size: 24px;
    transition: transform 0.3s ease;
}

#booking-form:hover h2 {
    transform: translateY(-5px);
}

label {
    margin-bottom: 10px;
    display: block;
    color: #d5006d;
    font-weight: 500;
}

/* Input fields */
input[type="text"],
input[type="email"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="date"]:focus {
    border-color: #d5006d;
    box-shadow: 0 0 5px rgba(213, 0, 109, 0.5);
    transform: translateY(-2px);
}

button {
    background-color: #d5006d;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 40%;
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

button:hover {
    background-color: #4cae4c;
    transform: translateY(-5px);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
}

/* Success and Error messages */
.success {
    color: #d5006d;
    text-align: center;
    margin-top: 20px;
}

.error {
    color: red;
    text-align: center;
    margin-top: 20px;
}

/* Footer */
footer {
    text-align: center;
    padding: 20px;
    background: pink;
    color: white;
    position: relative;
    bottom: 0;
    width: 100%;
    transition: background-color 0.3s ease;
}

footer:hover {
    background-color: #f7b0c3;
}

footer p {
    margin: 0;
    font-size: 14px;
}

    </style>
</head>
<body>
<div class="navbar">
        <a href="index.php">Home</a>
        <a href="daftar.php">Daftar Kamar</a>
        <a href="kontak.php">Kontak</a>
    </div>

    <!-- Form Pemesanan -->
    <section id="booking-form">
        <h2>Formulir Pemesanan Kamar</h2>
        <form action="confirmation.php" method="POST">
            <label for="id_pemesanan">Id Pemesanan:</label>
            <input type="text" name="id_pemesanan" required>

            <label for="id_kamar">Id kamar:</label>
            <input type="text" name="id_kamar" required>

            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="telepon">Nomor Telepon:</label>
            <input type="text" id="telepon" name="telepon" required>

            <label for="tanggal_check_in">Tanggal Check-In:</label>
            <input type="date" id="tanggal_check_in" name="tanggal_check_in" required>

            <label for="tanggal_check_out">Tanggal Check-Out:</label>
            <input type="date" id="tanggal_check_out" name="tanggal_check_out" required>

            <button type="submit">Konfirmasi Pemesanan</button>
        </form>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Our Hotel. All rights reserved.</p>
    </footer>
</body>
</html>