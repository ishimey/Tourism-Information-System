<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add cities</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background-color: #f4f4f4;
    }
    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      max-width: 500px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }
    select, input[type="text"], textarea, input[type="file"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    button {
      margin-top: 20px;
      width: 100%;
      padding: 10px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>

  <form action="add_hotel_destination.php" method="POST" enctype="multipart/form-data">
    <h2>Add cities</h2>

    <label for="city">Select City:</label>
    <select name="city" id="city" required>
      <option value="">--Select City--</option>
      <!-- Dynamically populate cities from database -->
    </select>

    

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" placeholder="cities Name" required>

    <label for="description">Description:</label>
    <textarea name="description" id="description" placeholder="Description" rows="4" required></textarea>

    <label for="image">Image:</label>
    <input type="file" name="image" id="image" accept="image/*">

    <button type="submit">Add</button>
  </form>

</body>
</html>