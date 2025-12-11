<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Destinations - Tourism Information System</title>
    <link rel="stylesheet" href="public/Destinations.css"> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #a0db9aff;
        }
        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .destination-box {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .back-btn {
            display: inline-block;
            padding: 10px 20px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .back-btn:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">

    <!-- Back to Home Button -->
    <a href="index.php" class="back-btn">← Back to Home</a>

    <h2>Famous Tourist Destinations in Nepal</h2>

    <div class="destination-box">
        <h3>Pokhara</h3>
        <p>Pokhara is famous for its lakes, mountain views, and adventure tourism such as paragliding and boating.</p>
    </div>

    <div class="destination-box">
        <h3>Lumbini</h3>
        <p>Lumbini is the birthplace of Lord Buddha and a peaceful UNESCO World Heritage site.</p>
    </div>

    <div class="destination-box">
        <h3>Chitwan</h3>
        <p>Chitwan is known for Chitwan National Park, wildlife safari, and rich Tharu culture.</p>
    </div>

    <div class="destination-box">
        <h3>Mount Everest Region</h3>
        <p>This region is popular for trekking, mountaineering, and breathtaking Himalayan scenery.</p>
    </div>

    <div class="destination-box">
        <h3>Narayani River</h3>
        <p>Narayani River is famous for boating, riverbanks, and scenic peaceful beauty.</p>
    </div>
    
    <div class="destination-box">
        <h3>Janakpur</h3>
        <p>Janakpur is a significant religious site, known for the Janaki Mandir and its cultural heritage.</p>
</div>
    <div class="destination-box">
        <h3>Rara Lake</h3>
        <p>Rara Lake is the largest lake in Nepal, known for its pristine beauty and tranquil environment.</p>
</div>
    <div class="destination-box">
        <h3>Kathmandu</h3>
        <p>Kathmandu a vibrant city known for its rich history, ancient temples, and bustling streets.</p>
</div>
    <div class="destination-box">
        <h3>Bandipur</h3>
        <p>Bandipur a picturesque hilltop town known for its preserved cultural heritage, stunning mountain views, and traditional Newari architecture.</p>
</div>
</div>
</body>
</html>
