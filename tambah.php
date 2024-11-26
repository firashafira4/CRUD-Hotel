<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: pink;  /* Warna navbar tetap sama */
            padding: 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .navbar a {
            text-decoration: none;
            color: #d5006d;  /* Warna navbar link tetap sama */
            margin: 0 15px;
            font-weight: bold;
        }
        h3 {
            margin-top: 30px;
            text-align: center;
            color: #2c3e50;
            font-weight: bold;
        }
        .container {
            max-width: 600px;
            background: pink; /* Warna dasar tetap pink */
            border-radius: 10px;
            padding: 30px;
            margin-top: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .form-label {
            font-weight: bold;
            color: #d5006d; /* Warna label tetap sama */
        }
        .form-control-lg {
            border: 1px solid #ced4da;
            border-radius: 5px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .form-control-lg:focus {
            border-color: #ff5577;  /* Warna border fokus tetap pink cerah */
            box-shadow: 0 0 5px rgba(255, 87, 119, 0.6);
        }
        .btn-primary {
            width: 100%;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            margin-top: 20px;
            background-color: #d5006d;  /* Warna tombol tetap sama */
            border: none;
        }
        .btn-primary:hover {
            background-color: #ff5577;  /* Warna tombol saat hover */
            transform: scale(1.05);
        }
        footer {
            background: #ffc0cb; /* Warna footer tetap sama */
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
    <h3>Tambah Data Pesanan</h3>
    <div class="container">
        <form method="post" action="inputdata.php">
            <div class="mb-3">
                <label for="id_pemesanan" class="form-label">Id Pemesanan</label>
                <input type="text" class="form-control form-control-lg" id="id_pemesanan" name="id_pemesanan" required>
            </div>
            <div class="mb-3">
                <label for="id_kamar" class="form-label">Id Kamar</label>
                <input type="text" class="form-control form-control-lg" id="id_kamar" name="id_kamar" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control form-control-lg" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" class="form-control form-control-lg" id="telepon" name="telepon" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_check_in" class="form-label">Tanggal Check In</label>
                <input type="date" class="form-control form-control-lg" id="tanggal_check_in" name="tanggal_check_in" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_check_out" class="form-label">Tanggal Check Out</label>
                <input type="date" class="form-control form-control-lg" id="tanggal_check_out" name="tanggal_check_out" required>
            </div>
            <div class="mb-3">
                <label for="total_harga" class="form-label">Total Harga</label>
                <input type="text" class="form-control form-control-lg" id="total_harga" name="total_harga" readonly>
            </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Our Hotel. All rights reserved.</p>
    </footer>

    <script>
        async function getHargaPerMalam(idKamar) {
            const response = await fetch(`getHargaPerMalam.php?id_kamar=${idKamar}`);
            const data = await response.json();
            return data.harga_permalam;
        }

        async function hitungTotalHarga() {
            const idKamar = document.getElementById("id_kamar").value;
            const hargaPerMalam = await getHargaPerMalam(idKamar);
            const checkInDate = new Date(document.getElementById("tanggal_check_in").value);
            const checkOutDate = new Date(document.getElementById("tanggal_check_out").value);

            if (checkInDate && checkOutDate && checkOutDate > checkInDate) {
                const jumlahMalam = (checkOutDate - checkInDate) / (1000 * 60 * 60 * 24);
                const totalHarga = jumlahMalam * hargaPerMalam;
                document.getElementById("total_harga").value = totalHarga.toLocaleString("id-ID");
            } else {
                document.getElementById("total_harga").value = "";
            }
        }

        document.getElementById("id_kamar").addEventListener("change", hitungTotalHarga);
        document.getElementById("tanggal_check_in").addEventListener("change", hitungTotalHarga);
        document.getElementById("tanggal_check_out").addEventListener("change", hitungTotalHarga);
    </script>
</body>
</html>
