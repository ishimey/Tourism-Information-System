<?php
$connection = new mysqli("localhost", "root", "", "tourism");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $encrypt = md5($password);
  $query = "SELECT name from users WHERE email = '$email' AND password = '$encrypt'";
  $result = mysqli_query($connection, $query);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result); 
    $_SESSION['username'] = $row['name'];
    header("location: index.php");
    exit();
  } else {
    echo "invalid username poassword";
  }
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Tourism Information System - Login</title>
  <link rel="stylesheet" type="text/css" href="./public/login.css">
</head>

<body>
  <div class="login-box">
    <img src="images\logo.png" alt="Tourism Logo" class="logo">
    <h2>TOURISM INFORMATION SYSTEM</h2>
    <p>Welcome! Enter your phone or email to explore Nepal's tourism insights.</p>

    <form method="POST" action="">
      <input type="text" name="email" placeholder="Email or Phone" required>
      <div class="password-wrapper">
        <input type="password" name="password" id="password" placeholder="Password" required>
        <span onclick="togglePassword()" class="toggle-eye">👁️</span>
      </div>
      <a href="#" class="forgot">Forgot Password?</a>
      <button type="submit">Sign In</button>
    </form>
    <p class="signup">New here? <a href="register.php">Create Account</a></p>
  </div>

  <script>
    function togglePassword() {
      const pwd = document.getElementById("password");
      pwd.type = pwd.type === "password" ? "text" : "password";
    }
  </script>
</body>

</html>