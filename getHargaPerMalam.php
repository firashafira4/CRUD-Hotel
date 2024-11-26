<?php
// koneksi ke database
include('koneksi.php');

$id_kamar = $_GET['id_kamar'];

// Query untuk mendapatkan harga per malam
$query = "SELECT harga_permalam FROM kamar WHERE id_kamar = '$id_kamar'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    $data = mysqli_fetch_assoc($result);
    echo json_encode($data); // Kembalikan data sebagai JSON
} else {
    echo json_encode(['harga_permalam' => 0]); // Default jika tidak ada data
}
?>
