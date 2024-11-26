<?php 
// Include koneksi database
include('koneksi.php');

// Ambil data dari form
$id_kamar = $_POST['id_kamar'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$tanggal_check_in = $_POST['tanggal_check_in'];
$tanggal_check_out = $_POST['tanggal_check_out'];

// Ambil harga per malam dari tabel kamar berdasarkan id_kamar
$query_kamar = "SELECT harga_permalam FROM kamar WHERE id_kamar = '$id_kamar'";
$result_kamar = mysqli_query($koneksi, $query_kamar);
$data_kamar = mysqli_fetch_assoc($result_kamar);
$harga_permalam = $data_kamar['harga_permalam'];

// Hitung jumlah malam antara tanggal check-in dan check-out
$jumlah_malam = (strtotime($tanggal_check_out) - strtotime($tanggal_check_in)) / (60 * 60 * 24);

// Hitung total harga
$total_harga = $jumlah_malam * $harga_permalam;

// Query untuk menyimpan data ke dalam database
$query = "INSERT INTO pemesanan (id_kamar, nama, email, telepon, tanggal_check_in, tanggal_check_out, total_harga) 
          VALUES ('$id_kamar', '$nama', '$email', '$telepon', '$tanggal_check_in', '$tanggal_check_out', '$total_harga')";


// Kondisi pengecekan apakah data berhasil disimpan atau tidak
if ($koneksi->query($query)) {
    // Menampilkan pesan sukses dan mengarahkan ke halaman tampil.php
    echo "<script>
            alert('Data pesanan berhasil ditambahkan!');
            window.location.href = 'tampil.php';
          </script>";
} else {
    // Pesan error jika gagal menyimpan data
    echo "<script>
            alert('Data gagal disimpan!');
            window.location.href = 'tambah.php'; // Kembali ke halaman form jika gagal
          </script>";
}

?>
