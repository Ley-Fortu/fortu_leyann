<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PUpdate</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f6f9;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 500px;
      margin: 50px auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 25px;
    }
    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #555;
    }
    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 18px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
      transition: border 0.3s ease;
    }
    input[type="text"]:focus,
    input[type="number"]:focus {
      border: 1px solid #4CAF50;
      outline: none;
    }
    input[type="submit"] {
      width: 100%;
      padding: 12px;
      background: #4CAF50;
      border: none;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    input[type="submit"]:hover {
      background: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>✏ Update Profile</h1>
    <form action="" method="post">
      <label for="user_name">User Name:</label>
      <input type="text" id="user_name" name="user_name" value="<?=($data['user_name']); ?>" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" value="<?=($data['age']); ?>" required>

      <label for="address">Address:</label>
      <input type="text" id="address" name="address" value="<?=($data['address']); ?>" required>

      <input type="submit" value="Update Profile">
    </form>
  </div>
</body>
</html>
