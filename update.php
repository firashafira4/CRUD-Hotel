<?php
// Include koneksi database
include('koneksi.php');

// Ambil data dari form
$id_pemesanan       = $_POST['id_pemesanan'];
$id_kamar           = $_POST['id_kamar'];
$nama               = $_POST['nama'];
$email              = $_POST['email'];
$telepon            = $_POST['telepon'];
$tanggal_check_in   = $_POST['tanggal_check_in'];
$tanggal_check_out  = $_POST['tanggal_check_out'];

// Query untuk mendapatkan harga per malam dari id_kamar
$query_harga = "SELECT harga_permalam FROM kamar WHERE id_kamar = '$id_kamar'";
$result_harga = mysqli_query($koneksi, $query_harga);
$data_harga = mysqli_fetch_assoc($result_harga);
$harga_permalam = $data_harga['harga_permalam'];

// Hitung jumlah malam menginap
$jumlah_malam = (strtotime($tanggal_check_out) - strtotime($tanggal_check_in)) / (60 * 60 * 24);

// Hitung total harga berdasarkan jumlah malam dan harga per malam
$total_harga = $jumlah_malam * $harga_permalam;

// Query update data ke dalam database berdasarkan ID
$query = "UPDATE pemesanan SET 
            id_kamar = '$id_kamar', 
            nama = '$nama', 
            email = '$email', 
            telepon = '$telepon', 
            tanggal_check_in = '$tanggal_check_in', 
            tanggal_check_out = '$tanggal_check_out', 
            total_harga = '$total_harga' 
          WHERE id_pemesanan = '$id_pemesanan'";

// Kondisi pengecekan apakah data berhasil disimpan atau tidak
if ($koneksi->query($query)) {
    // Menampilkan pesan sukses dan mengarahkan ke halaman tampil.php
    echo "<script>
            alert('Data pesanan berhasil diubah!');
            window.location.href = 'tampil.php';
          </script>";
} else {
    // Pesan error jika gagal menyimpan data
    echo "<script>
            alert('Data gagal disimpan!');
            window.location.href = 'ubah.php'; // Kembali ke halaman form jika gagal
          </script>";
}

?>
