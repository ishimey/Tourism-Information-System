<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "tourism");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us | Tourism Information System</title>
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
      background: linear-gradient(to right, #e0f7fa, #f0f0f5);
      color: #333;
      line-height: 1.6;
    }

    a { text-decoration: none; }

    /* ===== Navbar ===== */
    nav {
      background-color: #00695c;
      padding: 12px 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 3px 8px rgba(0,0,0,0.2);
    }

    nav ul {
      display: flex;
      justify-content: center;
      list-style: none;
      flex-wrap: wrap;
      align-items: center;
    }

    nav ul li {
      margin: 5px;
      color: white;
    }

    .username {
      font-weight: bold;
      color: #ffeb3b;
      margin-left: 10px;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      font-weight: 600;
      border-radius: 8px;
      transition: 0.3s;
    }

    nav ul li a:hover {
      background-color: #004d40;
    }

    /* ===== Hero Section ===== */
    .hero {
      height: 50vh;
      background: url('images/nepal_hero.jpg') no-repeat center center/cover;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
      position: relative;
    }

    .hero h1 {
      font-size: 36px;
      font-weight: 700;
      background: linear-gradient(135deg, #DC143C, #003893);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      padding: 20px 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.4);
      line-height: 1.2;
      transition: transform 0.3s ease;
    }

    .hero h1:hover { transform: scale(1.05); }

    /* ===== Section Title ===== */
    .section-title {
      display: inline-block;
      padding: 20px 50px;
      font-size: 36px;
      font-weight: 700;
      text-align: center;
      border-radius: 16px;
      margin: 50px auto 30px;
      position: relative;
      overflow: hidden;
      box-shadow: 0 12px 35px rgba(0,0,0,0.25);
      background: linear-gradient(270deg, #DC143C, #003893, #DC143C);
      background-size: 600% 600%;
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
      content: "";
      display: block;
      width: 150px;
      height: 6px;
      background: #ffffff;
      margin: 15px auto 0;
      border-radius: 5px;
    }

    .section-title:hover { transform: scale(1.05); transition: transform 0.3s ease; }

    /* ===== About Section ===== */
    .about-section {
      max-width: 1000px;
      margin: 40px auto;
      padding: 0 20px;
      text-align: justify;
      font-size: 16px;
      color: #444;
    }

    .about-section p {
      margin-bottom: 20px;
    }

    .highlight {
      color: #DC143C;
      font-weight: 700;
    }

    /* ===== Destinations Cards ===== */
    .destinations {
      display: flex;
      flex-wrap: wrap;
      gap: 25px;
      justify-content: center;
      padding: 20px 15px;
    }

    .card {
      width: 300px;
      background: #fff;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      display: flex;
      flex-direction: column;
    }

    .card:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      transition: transform 0.4s ease;
    }

    .card:hover img {
      transform: scale(1.1);
    }

    .card-content {
      padding: 20px;
      flex: 1;
    }

    .card-content h3 {
      color: #00695c;
      margin-bottom: 12px;
      font-size: 20px;
      font-weight: 700;
    }

    .card-content p {
      font-size: 14px;
      color: #555;
      margin-bottom: 12px;
    }

    .card-content a {
      display: inline-block;
      margin-top: 10px;
      padding: 8px 18px;
      background-color: #00796b;
      color: white;
      border-radius: 25px;
      font-size: 14px;
      font-weight: 600;
      transition: 0.3s;
    }

    .card-content a:hover {
      background-color: #004d40;
    }

    /* ===== Footer ===== */
    footer {
      padding: 25px;
      text-align: center;
      background-color: #00695c;
      color: #fff;
      font-weight: 600;
      margin-top: 50px;
      box-shadow: 0 -5px 15px rgba(0,0,0,0.2);
    }

    /* ===== Responsive ===== */
    @media screen and (max-width: 1000px) {
      .card { width: 45%; }
    }

    @media screen and (max-width: 600px) {
      .card { width: 90%; }
      .hero h1 { font-size: 28px; }
      .section-title { font-size: 28px; }
      .about-section { font-size: 15px; }
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
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
    <h1>About Us</h1>
  </section>

  <!-- About Section -->
  <section class="about-section">
    <p>Welcome to our <span class="highlight">Tourism Information System</span>, your complete guide to exploring the natural beauty and cultural richness of Nepal. Our platform provides travelers, tourists, and locals with comprehensive details about destinations, hotels, activities, and cultural events.</p>

    <p>Nepal is a land of <span class="highlight">majestic mountains, serene lakes, and lush forests</span>. From the towering Himalayas to the spiritual city of Lumbini, the bustling streets of Kathmandu, and the peaceful lakes of Pokhara, our system ensures you have all the information you need to plan your journey efficiently.</p>

    <p>With features like <span class="highlight">destination descriptions, accommodation details, cultural insights, and interactive navigation</span>, our goal is to make exploring Nepal easier, safer, and more enjoyable. Whether you are an adventurer, culture enthusiast, or spiritual seeker, our platform is your perfect travel companion.</p>
  </section>

  <!-- Popular Destinations Section -->
  <h2 class="section-title">Popular Destinations</h2>
  <section class="destinations">
      <?php
      $sql = "SELECT * FROM destination";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="card">
          <img src="<?php echo $row["imageURL"]; ?>" alt="<?php echo $row["destination"]; ?>">
          <div class="card-content">
            <h3><?php echo $row["destination"]; ?></h3>
            <p><?php echo $row["description"]; ?></p>
            <a href="destinations.php?query=<?php echo $row["destinationID"]; ?>">View More</a>
          </div>
        </div>
      <?php } ?>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 Tourism Information System | All Rights Reserved</p>
  </footer>

</body>
</html>
