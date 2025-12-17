<?php
session_start();

// Database connection
$connection = new mysqli("localhost", "root", "", "tourism");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        $stmt = $connection->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if ($stmt->execute()) {
            $success = "Message sent successfully!";
        } else {
            $error = "Something went wrong. Try again.";
        }

        $stmt->close();
    } else {
        $error = "All fields are required.";
    }
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - Tourism Information System</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #e6f2ff;
            padding: 20px;
        }
        .contact-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .contact-header h1 {
            color: #004080;
        }
        .contact-header p {
            color: #333;
        }
        .contact-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px #aaa;
        }
        .contact-info, .contact-form {
            flex: 1;
            min-width: 300px;
            margin: 10px;
        }
        .contact-info h2, .contact-form h2 {
            color: #004080;
        }
        .contact-info p {
            margin: 8px 0;
            color: #555;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px;
            width: 100%;
            background: #0073e6;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background: #005bb5;
        }
        .success { color: green; }
        .error { color: red; }
        a {
            text-decoration: none;
            color: #004080;
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="contact-header">
    <h1>Contact Tourism Support</h1>
    <p>Planning a trip or need help? Reach out to our tourism help desk for guidance and support.</p>
</div>

<div class="contact-container">
    <div class="contact-info">
        <h2>Tourism Office Information</h2>
        <p><i class="fas fa-map-marker-alt"></i> Tourism Board, Chitwan , Nepal</p>
        <p><i class="fas fa-phone"></i> +977-9847494444</p>
        <p><i class="fas fa-envelope"></i> info@tourismnepal.gov.np</p>
        <p><i class="fas fa-globe"></i> www.tourismnepal.gov.np</p>
    </div>

    <div class="contact-form">
        <h2>Send Us a Message</h2>

        <?php if ($success) echo "<p class='success'>$success</p>"; ?>
        <?php if ($error) echo "<p class='error'>$error</p>"; ?>

        <form method="POST" action="">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Enter subject" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

<a href="index.php">⬅ Back to Home</a>

</body>
</html>
