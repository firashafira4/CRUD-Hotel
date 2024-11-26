<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - The Pink Palace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #ffe6e9, #fff);
            color: #333;
        }
        .sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #ffb6c1;
            color: #d5006d;
            padding-top: 20px;
            transition: transform 0.3s ease-in-out;
        }
        .sidebar h2 {
            text-align: center;
            font-size: 1.8rem;
            font-weight: bold;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }
        .sidebar ul li {
            padding: 10px 20px;
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-size: 1rem;
            transition: background-color 0.3s, transform 0.3s;
        }
        .sidebar ul li a:hover {
            background-color: #ff85a2;
            border-radius: 5px;
            transform: translateX(5px);
        }
        .sidebar ul li a i {
            margin-right: 10px;
            font-size: 1.2rem;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }
        .header {
            background-color: #ff85a2;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-radius: 8px;
        }
        .header h3 {
            margin: 0;
        }
        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
        }
        .profile span {
            color: white;
            font-weight: bold;
        }
        .welcome-box {
            background-color: #ffe6e9;
            padding: 15px;
            border-radius: 8px;
            color: #ff85a2;
            font-weight: bold;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .welcome-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .widget-box {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .widget-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .widget-box h4 {
            color: #ff85a2;
            margin-bottom: 10px;
        }
        .icon {
            font-size: 3rem;
            color: #ff85a2;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>The Pink Palace</h2>
        <ul>
            <li><a href="admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="tampil.php"><i class="fas fa-book"></i> Data Pesanan</a></li>
            <li><a href="fasilitas.php"><i class="fas fa-concierge-bell"></i> Fasilitas</a></li>
            <li><a href="daftar.php"><i class="fas fa-bed"></i> Daftar Kamar</a></li>
            <li><a href="kontak.php"><i class="fas fa-phone"></i> Kontak</a></li>
            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <h3>Dashboard Control Panel</h3>
            <div class="profile">
                <img src="fira.jpg" alt="Admin Photo">
                <span>Administrator</span> |
                <a href="login.php" style="color: white; text-decoration: none;">Logout</a>
            </div>
        </div>

        <!-- Welcome Message -->
        <div class="welcome-box">
            <h4>Welcome To The Pink Palace Admin Dashboard</h4>
            <p>Hello, Shafira Aprillia! Use this system to manage hotel bookings and data efficiently.</p>
        </div>

        <!-- Widgets Section -->
        <div class="row">
            <!-- Calendar Box -->
            <div class="col-md-4">
                <div class="widget-box">
                    <i class="fas fa-calendar-alt icon"></i>
                    <h4>January 2020</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td><td>4</td></tr>
                            <tr><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td></tr>
                            <tr><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td></tr>
                            <tr><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td></tr>
                            <tr><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td><td>31</td><td></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
