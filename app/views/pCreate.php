<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PCreate</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f6f9;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: #fff;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      width: 350px;
      text-align: center;
    }

    h1 {
      margin-bottom: 20px;
      color: #333;
      font-size: 22px;
    }

    label {
      display: block;
      text-align: left;
      margin-bottom: 6px;
      font-weight: bold;
      color: #555;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: 0.3s;
    }

    input[type="text"]:focus,
    input[type="number"]:focus {
      border-color: #007BFF;
      box-shadow: 0 0 5px rgba(0,123,255,0.5);
    }

    input[type="submit"] {
      width: 100%;
      padding: 12px;
      background: #28a745;
      border: none;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }

    input[type="submit"]:hover {
      background: #218838;
    }

    .back-link {
      display: block;
      margin-top: 15px;
      color: #007BFF;
      text-decoration: none;
      font-size: 14px;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Create New Profile</h1>
    <form action="" method="post">
      <label for="user_name">User Name:</label>
      <input type="text" id="user_name" name="user_name" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" required>

      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>

      <input type="submit" value="Create Profile">
  </div>
</body>
</html>
