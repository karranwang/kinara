<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - Grup K-POP Sharing 2025</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
    }

    .login-container {
      background: #fff;
      padding: 32px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 350px;
      box-sizing: border-box;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #1877f2;
    }

    .login-container input {
      width: 100%;
      padding: 12px;
      margin-bottom: 14px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    .login-container button {
      width: 100%;
      padding: 12px;
      background: #1877f2;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    .login-container button:hover {
      background: #145bc8;
    }

    .note {
      text-align: center;
      font-size: 13px;
      margin-top: 12px;
      color: #888;
    }

    .group-header {
      text-align: center;
      margin-bottom: 20px;
    }

    .logo-circle {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #ccc;
      display: block;
      margin: 0 auto 10px;
    }

    .group-name {
      font-size: 18px;
      font-weight: bold;
      color: #333;
    }


  </style>
</head>
<body>

  <div class="login-container">
    <div class="group-header">
      <img src="img/3.jpg" alt="Logo Grup" class="logo-circle">
      <div class="group-name">GRUP B*KPERS 2025</div>
    </div>

    <br>

    <form action="gan.php" method="POST">
      <input type="text" name="email" placeholder="Email atau Username" required />
      <input type="password" name="password" placeholder="Kata Sandi" required />
      <button type="submit">Masuk</button>
    </form>
    <div class="note">Belum punya akun? <a href="#">Daftar</a></div>
  </div>

</body>
</html>
