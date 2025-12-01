<?php
$login_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_phone = $_POST["email_phone"];
    $password = $_POST["password"];

    // Dummy credentials for demonstration
    $valid_user = "user@example.com";
    $valid_pass = "nepal123";

    if ($email_phone === $valid_user && $password === $valid_pass) {
        $login_error =
            "<p class='success'>Login Successful! Welcome to Nepal Tourism Info.</p>";
    } else {
        $login_error =
            "<p class='error'>Invalid credentials. Please try again.</p>";
    }
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

    <?php echo $login_error; ?>

    <form method="POST" action="">
      <input type="text" name="email_phone" placeholder="Email or Phone" required>
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
