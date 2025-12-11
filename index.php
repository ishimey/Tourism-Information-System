<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Discover Nepal's Beauty</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  


  <style>
    /* ===== General ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(to right, #e0f7fa, #fff);
      color: #333;
    }

    h1, h2, h3 {
      margin-bottom: 150px;
    }

    p {
      line-height: 1.5;
    }

    /* ===== Navbar ===== */
    nav {
      background-color: #004d40;
      padding: 10px 0;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    nav ul {
      display: flex;
      justify-content: center;
      list-style: none;
      flex-wrap: wrap;
    }

    nav ul li {
      margin: 5px;
      color: white;
    }
    .username{
      font-weight: bold;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      font-weight: bold;
      transition: 0.3s;
    }

    nav ul li a:hover {
      background-color: #00796b;
      border-radius: 5px;
    }

    /* ===== Hero Section ===== */
    .hero {
      height: 60vh;
      background: url('images/hero.jpg') no-repeat center center/cover;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
      position: relative;
    }

    .hero h1 {
      font-size: 48px;
      background-color: rgba(0,0,0,0.5);
      padding: 20px;
      border-radius: 10px;
    }

    /* ===== Destinations Section ===== */
    .destinations {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      padding: 5px 10px;
    }

    .card {
      width: 300px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.3s ease;
      display: flex;
      flex-direction: column;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 15px;
      flex: 1;
    }

    .card-content h3 {
      color: #00796b;
      margin-bottom: 10px;
    }

    .card-content p {
      font-size: 14px;
      line-height: 1.5;
    }

    /* ===== Footer ===== */
    footer {
      padding: 20px;
      text-align: center;
      background-color: #004d40;
      color: #fff;
      margin-top: 40px;
    }

    /* ===== Responsive ===== */
    @media screen and (max-width: 1000px) {
      .card {
        width: 45%;
      }
    }

    @media screen and (max-width: 600px) {
      .card {
        width: 90%;
      }
      .hero h1 {
        font-size: 32px;
      }
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="destinations.php">Destinations</a></li>
      <li><a href="hotels.php">Hotels</a></li>
      <li><a href="contacts.php">Contact</a></li>
      <?php if(isset($_SESSION['username'])){ ?>
<li class="username" ><?php echo $_SESSION['username'] ?></li>
        <li><a href="logout.php">logout</a></li>
      <?php }else{ ?>
      <li><a href="login.php">Login</a></li>
      <?php }?>
    </ul>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Discover Nepal's Beauty</h1>
  </section>

  <!-- Destinations Section -->
  <section class="destinations">

    <div class="card">
      <img src="public/img1.png" alt="Himalayas">
      <div class="card-content">
        <h3>Himalayas</h3>
        <p>Explore the breathtaking Himalayan ranges and trekking adventures. Mountains are large natural elevations rising higher than the surrounding area.</p>
      </div>
    </div>

    <div class="card">
      <img src="public/img4.png" alt="Chitwan">
      <div class="card-content">
        <h3>Chitwan</h3>
        <p>Famous for jungle safari and wildlife experiences and cultural experiences of the Tharu community. Mesmerizing Narayani river holds religious importance with many temples and festivals along its banks.</p>
      </div>
    </div>

    <div class="card">
      <img src="public/img3.png" alt="Pokhara">
      <div class="card-content">
        <h3>Pokhara</h3>
        <p>City of lakes, adventure sports, and serene natural beauty. Nestled at the foothills of the Annapurna mountain range and perfect for both relaxation and adventure.</p>
      </div>
    </div>

    <div class="card">
      <img src="public/img2.png" alt="Lumbini">
      <div class="card-content">
        <h3>Lumbini</h3>
        <p>The sacred birthplace of Lord Buddha. Offers a serene and peaceful atmosphere with a blend of cultural heritage making it an unforgettable experience.</p>
      </div>
    </div>

  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 Tourism Information System | All Rights Reserved</p>
  </footer>

</body>
</html>
