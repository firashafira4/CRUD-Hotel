<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: white;
            font-family: Arial, sans-serif;
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
        h2{
            text-align: center;
            color: #d5006d;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
            background-color: pink;
			color: #d5006d;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        table {
            width: 100%;
        }
        td {
            padding: 10px;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
        }
        .btn-primary {
            width: 100%;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .back-link {
            display: block;
            text-align: center;
            margin: 20px 0;
            text-decoration: none;
            color: #007bff;
        }
        .back-link:hover {
            text-decoration: underline;
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
	<div class="navbar">
        <a href="tampil.php">Kembali</a>
    </div>
    <div class="container">
        <h2>Update Data Pesanan</h2>
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE id_pemesanan='$id'");
        while($d = mysqli_fetch_array($data)){
        ?>
            <form method="post" action="update.php">
                <table>
                    <tr>
                        <td>Id Kamar</td>
                        <td>
                            <input type="hidden" name="id_pemesanan" value="<?php echo $d['id_pemesanan']; ?>">
                            <input class="form-control" type="text" name="id_kamar" value="<?php echo $d['id_kamar']; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input class="form-control" type="text" name="nama" value="<?php echo $d['nama']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input class="form-control" type="email" name="email" value="<?php echo $d['email']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td><input class="form-control" type="text" name="telepon" value="<?php echo $d['telepon']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Tanggal Check In</td>
                        <td><input class="form-control" type="date" name="tanggal_check_in" value="<?php echo $d['tanggal_check_in']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Tanggal Check Out</td>
                        <td><input class="form-control" type="date" name="tanggal_check_out" value="<?php echo $d['tanggal_check_out']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td><input class="form-control" type="text" name="total_harga" value="<?php echo $d['total_harga']; ?>" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" class="btn btn-primary" value="SIMPAN"></td>
                    </tr>
                </table>
            </form>
        <?php 
        }
        ?>
    </div>
	<footer>
        <p>&copy; <?php echo date("Y"); ?> Our Hotel. All rights reserved.</p>
    </footer>
    <script>
    // Fungsi untuk mengambil harga per malam berdasarkan id_kamar
    async function getHargaPerMalam(idKamar) {
        const response = await fetch(`getHargaPerMalam.php?id_kamar=${idKamar}`);
        const data = await response.json();
        return data.harga_permalam;
    }

    // Fungsi untuk menghitung total harga
    async function hitungTotalHarga() {
        const idKamar = document.getElementsByName("id_kamar")[0].value;
        const hargaPerMalam = await getHargaPerMalam(idKamar);
        const checkInDate = new Date(document.getElementsByName("tanggal_check_in")[0].value);
        const checkOutDate = new Date(document.getElementsByName("tanggal_check_out")[0].value);

        if (checkInDate && checkOutDate && checkOutDate > checkInDate) {
            // Hitung jumlah malam
            const jumlahMalam = (checkOutDate - checkInDate) / (1000 * 60 * 60 * 24);
            // Hitung total harga
            const totalHarga = jumlahMalam * hargaPerMalam;
            // Tampilkan total harga
            document.getElementsByName("total_harga")[0].value = totalHarga.toLocaleString("id-ID");
        } else {
            document.getElementsByName("total_harga")[0].value = "";
        }
    }

    // Tambahkan event listener untuk menghitung total harga setiap kali tanggal atau id kamar diubah
    document.getElementsByName("id_kamar")[0].addEventListener("change", hitungTotalHarga);
    document.getElementsByName("tanggal_check_in")[0].addEventListener("change", hitungTotalHarga);
    document.getElementsByName("tanggal_check_out")[0].addEventListener("change", hitungTotalHarga);

    // Panggil fungsi hitungTotalHarga ketika halaman pertama kali dimuat (misalnya saat edit data)
    window.onload = hitungTotalHarga;
</script>

</body>
</html>