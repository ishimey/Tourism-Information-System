<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "tourism");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Discover Nepal's Beauty</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    /* ===== General ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(to right, #e0f7fa, #f9f9fb);
      color: #333;
      line-height: 1.6;
    }

    a { text-decoration: none; }

    /* ===== Navbar ===== */
    nav {
      background-color: #004d40;
      padding: 14px 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      border-bottom: 3px solid #DC143C;
    }

    nav ul {
      display: flex;
      justify-content: center;
      list-style: none;
      flex-wrap: wrap;
      align-items: center;
    }

    nav ul li {
      margin: 5px 15px;
      color: white;
    }

    .username {
      font-weight: bold;
      color: #FFD700;
      margin-left: 10px;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      font-weight: 600;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    nav ul li a:hover {
      background: linear-gradient(135deg, #DC143C, #003893);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      transform: scale(1.05);
    }

    /* ===== Hero Section ===== */
    .hero {
      height: 75vh;
      background: url('public/nepal.jpeg') no-repeat center center/cover;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      top:0; left:0;
      width:100%; height:100%;
      background: rgba(0,0,0,0.35);
    }

    .hero h1 {
      position: relative;
      font-size: 42px;
      font-weight: 700;
      color: #fff;
      background: rgba(0,0,0,0.4);
      padding: 25px 40px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.5);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .hero h1:hover {
      transform: scale(1.06);
      box-shadow: 0 15px 30px rgba(0,0,0,0.6);
    }

    /* ===== Section Title ===== */
    .section-title {
      display: inline-block;
      padding: 18px 45px;
      font-size: 38px;
      font-weight: 700;
      text-align: center;
      border-radius: 16px;
      margin: 40px auto 30px;
      position: relative;
      background: linear-gradient(270deg, #DC143C, #003893, #DC143C);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: gradientMove 6s ease infinite;
    }

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .section-title::after {
      content: '';
      display: block;
      width: 140px;
      height: 5px;
      background: #DC143C;
      margin: 15px auto 0;
      border-radius: 5px;
    }

    .section-title:hover {
      transform: scale(1.05);
      transition: transform 0.3s ease;
    }

    /* ===== Info Section ===== */
    .info-section {
      max-width: 1200px;
      margin: 50px auto;
      padding: 0 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      justify-content: center;
    }

    .info-card {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      overflow: hidden;
      width: 340px;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .info-card:hover {
      transform: translateY(-10px) scale(1.03);
      box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }

    .info-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      transition: transform 0.4s ease;
    }

    .info-card:hover img {
      transform: scale(1.08);
    }

    .info-card-content {
      padding: 20px;
    }

    .info-card-content h3 {
      font-size: 22px;
      color: #004d40;
      margin-bottom: 12px;
      font-weight: 700;
    }

    .info-card-content p {
      font-size: 15px;
      color: #555;
      line-height: 1.5;
    }

    /* ===== Footer ===== */
    footer {
      padding: 30px;
      text-align: center;
      background-color: #004d40;
      color: #fff;
      font-weight: 600;
      margin-top: 50px;
      box-shadow: 0 -5px 15px rgba(0,0,0,0.2);
    }

    /* ===== Responsive ===== */
    @media screen and (max-width: 1000px) {
      .info-card { width: 45%; }
    }

    @media screen and (max-width: 600px) {
      .hero h1 { font-size: 28px; }
      .section-title { font-size: 32px; }
      .info-card { width: 90%; }
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav>
    <ul>
      <li><a href="About_Us.php">About Us</a></li>
      <li><a href="cities.php">Cities</a></li>
      <li><a href="contacts.php">Contact</a></li>
      <?php if (isset($_SESSION["username"])) { ?>
        <li class="username"><?php echo $_SESSION["username"]; ?></li>
        <li><a href="logout.php">Logout</a></li>
      <?php } else { ?>
        <li><a href="login.php">Login</a></li>
      <?php } ?>
    </ul>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Experience the Beauty of Nepal</h1>
  </section>

  <!-- Section Title -->
  <h2 class="section-title">Tourism in Nepal</h2>

  <!-- Info Section -->
  <section class="info-section">
    <div class="info-card">
      <img src="public/adv.png" alt="Adventure">
      <div class="info-card-content">
        <h3>Adventure</h3>
        <p>Nepal offers thrilling experiences including trekking, mountaineering, paragliding, rafting, and mountain biking. The Himalayas and rivers provide the perfect playground for adventure lovers.</p>
      </div>
    </div>

    <div class="info-card">
      <img src="public/cult.png" alt="Cultural">
      <div class="info-card-content">
        <h3>Cultural</h3>
        <p>Explore Nepal's rich heritage through ancient temples, historic palaces, traditional festivals, and vibrant local customs. Cities like Kathmandu and Bhaktapur reflect centuries of culture.</p>
      </div>
    </div>

    <div class="info-card">
      <img src="public/eco&wild.png" alt="Eco & Wildlife">
      <div class="info-card-content">
        <h3>Eco & Wildlife</h3>
        <p>Nepal’s national parks like Chitwan and Bardia offer jungle safaris, bird watching, and wildlife exploration. Eco-tourism initiatives promote conservation and sustainable travel.</p>
      </div>
    </div>

    <div class="info-card">
      <img src="public/spirit.png" alt="Spiritual">
      <div class="info-card-content">
        <h3>Spiritual</h3>
        <p>Nepal is a hub of spiritual travel with sacred sites like Lumbini (birthplace of Buddha) and numerous temples and monasteries where visitors seek peace, meditation, and enlightenment.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 Tourism Information System | All Rights Reserved</p>
  </footer>

</body>
</html>
