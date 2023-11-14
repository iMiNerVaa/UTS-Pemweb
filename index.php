<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f2f2f2;
    }

    .login-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-form {
      display: flex;
      flex-direction: column;
    }

    .login-form h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .input-group {
      margin-bottom: 15px;
    }

    .input-group label {
      display: block;
      margin-bottom: 5px;
    }

    .input-group input {
      padding: 8px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 4px;
      border: none;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form action="./backend/login.php" method="post">
    <div class="input-group">
      <label for="username">Email</label>
      <input type="email" name="email" placeholder="masukkan email anda">
    </div>
    <div class="input-group">
      <label for="password">Password</label>
      <input type="password" name="password" placeholder="masukkan password anda">
    </div>
    <input type="submit" value="login" name="submit">
  </form>
</div>

</body>
</html>
