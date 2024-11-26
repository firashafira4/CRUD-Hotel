<?php
include 'koneksi.php';

// Variabel untuk menyimpan data sementara dari formulir
$id_kamar = $nama = $email = $telepon = $tanggal_check_in = $tanggal_check_out = $total_harga = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $id_kamar = $_POST['id_kamar'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $tanggal_check_in = $_POST['tanggal_check_in'];
    $tanggal_check_out = $_POST['tanggal_check_out'];

    // Mengambil harga per malam dari tabel kamar berdasarkan id_kamar
    $query = mysqli_query($koneksi, "SELECT harga_permalam FROM kamar WHERE id_kamar = '$id_kamar'");
    $kamar = mysqli_fetch_assoc($query);
    $harga_permalam = $kamar['harga_permalam'];

    // Menghitung total harga (jumlah malam * harga per malam)
    $jumlah_malam = (strtotime($tanggal_check_out) - strtotime($tanggal_check_in)) / (60 * 60 * 24);
    $total_harga = $jumlah_malam * $harga_permalam;

    // Jika tombol "Konfirmasi" ditekan
    if (isset($_POST['konfirmasi'])) {
        $sql = "INSERT INTO pemesanan (id_kamar, nama, email, telepon, tanggal_check_in, tanggal_check_out, total_harga)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("ssssssd", $id_kamar, $nama, $email, $telepon, $tanggal_check_in, $tanggal_check_out, $total_harga);

        if ($stmt->execute()) {
            // Menampilkan pesan sukses dengan JavaScript alert dan mengarahkan kembali ke halaman awal
            echo "<script>
                    alert('Reservasi berhasil dikonfirmasi!');
                    window.location.href = 'index.php';
                  </script>";
        } else {
            // Menampilkan pesan error dengan JavaScript alert dan tetap di halaman yang sama
            echo "<script>alert('Terjadi kesalahan: " . $stmt->error . "');</script>";
        }
        

        $stmt->close();
        $koneksi->close();
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: pink;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

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
        }

        h2 {
            color: #d5006d;
            text-align: center;
            margin-bottom: 20px;
        }

        .booking-details {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .booking-details p {
            margin: 10px 0;
            line-height: 1.6;
        }

        .btn-confirm {
            display: block;
            width: 100%;
            background: #d5006d;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            transition: background 0.3s;
            margin-top: 20px;
        }

        .btn-confirm:hover {
            background: #c7005b;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="booking.php">Kembali</a>
    </div>
    <div class="container">
    <h2>Konfirmasi Pemesanan</h2>

<div class="booking-details">
    <p><strong>Id Kamar:</strong> <?php echo htmlspecialchars($id_kamar); ?></p>
    <p><strong>Nama Lengkap:</strong> <?php echo htmlspecialchars($nama); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Telepon:</strong> <?php echo htmlspecialchars($telepon); ?></p>
    <p><strong>Tanggal Check-In:</strong> <?php echo htmlspecialchars($tanggal_check_in); ?></p>
    <p><strong>Tanggal Check-Out:</strong> <?php echo htmlspecialchars($tanggal_check_out); ?></p>
    <p><strong>Total Harga:</strong> Rp <?php echo number_format($total_harga, 0, ',', '.'); ?></p>
</div>

<form method="POST" action="confirmation.php">
    <input type="hidden" name="id_kamar" value="<?php echo htmlspecialchars($id_kamar); ?>">
    <input type="hidden" name="nama" value="<?php echo htmlspecialchars($nama); ?>">
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
    <input type="hidden" name="telepon" value="<?php echo htmlspecialchars($telepon); ?>">
    <input type="hidden" name="tanggal_check_in" value="<?php echo htmlspecialchars($tanggal_check_in); ?>">
    <input type="hidden" name="tanggal_check_out" value="<?php echo htmlspecialchars($tanggal_check_out); ?>">
    <input type="hidden" name="total_harga" value="<?php echo htmlspecialchars($total_harga); ?>">

    <button type="submit" name="konfirmasi" class="btn-confirm">Konfirmasi Pemesanan</button>
</form>
    </div>

</body>
</html>
