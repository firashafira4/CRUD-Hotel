<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Our Hotel</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <style>
        /* Reset Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
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
    transition: color 0.3s ease, transform 0.3s ease;
}

.navbar a:hover {
    color: white;
    transform: translateY(-2px);
}

/* Kontak Section */
#contact {
    padding: 60px 20px;
    text-align: center;
    background-color: #fff;
    border-radius: 8px;
    margin: 30px auto;
    width: 80%;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

#contact:hover {
    transform: translateY(-5px); /* Efek sedikit terangkat saat hover */
}

#contact h2 {
    margin-bottom: 30px;
    font-size: 36px;
    color: #333;
    font-weight: bold;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan pada teks */
}

.contact-info {
    margin: 20px 0;
}

.contact-info h3 {
    font-size: 24px;
    color: #2c3e50;
    margin-bottom: 10px;
    font-weight: bold;
}

.contact-info p {
    font-size: 16px;
    color: #555;
    margin-bottom: 20px;
}

/* Kontak Links (Ikon Media Sosial) */
.contact-links {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.contact-links a {
    text-decoration: none;
    color: #fff;
    background-color: #d5006d;
    padding: 15px 25px;
    border-radius: 50%;
    text-align: center;
    font-size: 24px;
    width: 80px;
    height: 80px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s ease;
}

/* Hover effect pada ikon sosial media */
.contact-links a:hover {
    background-color: #0056b3;
    transform: translateY(-4px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Menambah bayangan saat hover */
}

.contact-links a i {
    transition: transform 0.3s ease; /* Menambahkan transisi pada ikon */
}

.contact-links a:hover i {
    transform: rotate(360deg); /* Efek putar ikon saat hover */
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
    #contact {
        width: 90%;
    }

    .contact-links {
        gap: 10px; /* Mengurangi jarak antara ikon pada layar kecil */
    }
}

@media (max-width: 480px) {
    .contact-links a {
        width: 60px;
        height: 60px;
        font-size: 20px;
    }
}


    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="daftar.php">Daftar Kamar</a>
        <a href="fasilitas.php">Fasilitas</a>
    </div>

    <!-- Kontak Section -->
    <section id="contact">
        <h2>Hubungi Kami</h2>

        <div class="contact-info">
            <h3>Kontak Melalui:</h3>
            <p>Anda dapat menghubungi kami melalui salah satu saluran berikut:</p>

            <div class="contact-links">
                <a href="https://wa.me/08175732569" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/shfiraprillia/profilecard/?igsh=MThveXQzMDhsczBhaA==" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="mailto:info@ourhotel.com" title="Email"><i class="fas fa-envelope"></i></a>
                <a href="tel:+6285870506396" title="Telepon"><i class="fas fa-phone-alt"></i></a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Our Hotel. All rights reserved.</p>
    </footer>

</body>
</html>
