<?php 
    session_start();
    include 'koneksi.php';
 
    // menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        
        // Menampilkan pesan sukses dan mengarahkan ke halaman tampil.php
        echo "<script>
                alert('Login berhasil!, Hallo $username.');
                window.location.href = 'admin.php';
              </script>";
    } else {
        // Menampilkan pesan gagal dan kembali ke halaman login
        echo "<script>
                alert('Login gagal! Username dan password salahh.');
                window.location.href = 'login.php';
              </script>";
    }
?>
