<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #f8e1e7, #f9f9f9);
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: pink;
            padding: 15px;
            color: #d5006d;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: background-color 0.3s;
        }
        .header h2 {
            margin: 0;
        }
        .header:hover {
            background-color: white;
        }
        .btn-container {
            display: flex;
            gap: 10px;
        }
        .table-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .table-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .table th {
            background-color: #ff85a2;
            color: white;
            transition: background-color 0.3s;
        }
        .table th:hover {
            background-color: #ff5577;
        }
        .table td {
            transition: background-color 0.3s;
        }
        .table tr:hover td {
            background-color: #ffe6e9;
        }
        .btn-custom {
            padding: 5px 10px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-custom:hover {
            background-color: #ff5577;
            transform: scale(1.05);
        }
        footer {
            background: pink;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            color: white;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h2>Data Pemesanan</h2>
        <div class="btn-container">
            <a href="tambah.php" class="btn btn-primary btn-custom">+ Tambah Pemesanan</a>
            <a href="admin.php" class="btn btn-danger btn-custom">Dashboard</a>
        </div>
    </div>

    <div class="table-container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Pemesanan</th>
                    <th>Id Kamar</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Tanggal Check In</th>
                    <th>Tanggal Check Out</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM pemesanan");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['id_pemesanan']; ?></td>
                    <td><?php echo $d['id_kamar']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['email']; ?></td>
                    <td><?php echo $d['telepon']; ?></td>
                    <td><?php echo $d['tanggal_check_in']; ?></td>
                    <td><?php echo $d['tanggal_check_out']; ?></td>
                    <td><?php echo "Rp. " . number_format($d['total_harga'], 0, ',', '.'); ?></td>
                    <td>
                        <a href="ubah.php?id=<?php echo $d['id_pemesanan']; ?>" class="btn btn-warning btn-sm">✏️</a>
                        <a href="hapus.php?id=<?php echo $d['id_pemesanan']; ?>" class="btn btn-danger btn-sm">🗑️</a>
                    </td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Our Hotel. All rights reserved.</p>
    </footer>

</body>
</html>
                