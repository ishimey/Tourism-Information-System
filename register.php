<?php 
$conn = mysqli_connect("localhost", "root", "", "tourism");
session_start();

if (isset($_POST['submit'])) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];

    // Check passwords match
    if ($password !== $repassword) {
        echo "<script>alert('Passwords do not match');</script>";
        exit();
    }

    // Hash password
    $encrypt = password_hash($password, PASSWORD_DEFAULT);

    // Correct column names
    $sql = "INSERT INTO users (username, email, password) 
            VALUES ('$username', '$email', '$encrypt')";

    if(mysqli_query($conn, $sql)){
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "SQL ERROR: " . mysqli_error($conn);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="./public/register.css" />
</head>
<body>
    <div class="register-box">
        <h2>Register</h2>
        <form action="" method="post">
            <label>Username
                <input name="username" type="text" placeholder="Username" required />
            </label>

            <label>Email
                <input name="email" type="email" placeholder="Email" required />
            </label>

            <label>Password
                <input name="password" type="password" placeholder="Password" required />
            </label>

            <label>Confirm Password
                <input name="repassword" type="password" placeholder="Confirm Password" required />
            </label>

            <button name="submit" type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>