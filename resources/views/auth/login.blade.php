<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login/Register</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      height: 100vh;
    }
    .left {
      flex: 1;
      background-image: url('/images/login-image.jpg');
      background-size: cover;
      border-bottom-right-radius: 50%;
    }
    .right {
      flex: 1;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    input {
      width: 80%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    button {
      width: 80%;
      padding: 10px;
      background-color: #75e6f0;
      border: none;
      border-radius: 5px;
      color: white;
      font-weight: bold;
      margin-top: 10px;
      cursor: pointer;
    }
    .social-btn {
      width: 80%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin: 5px 0;
      text-align: center;
      background-color: white;
    }
    .note {
      margin-top: 10px;
      font-size: 12px;
      color: gray;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="left"></div>
  <div class="right">
    <h2>Login/Register</h2>
    <form method="POST" action="{{ route('login.submit') }}">
      @csrf
      <input type="email" name="email" placeholder="Masukkan email" required />
      <input type="password" name="password" placeholder="Masukkan password" required />
      <button type="submit">Login</button>
    </form>
    <div class="social-btn">Google</div>
    <div class="social-btn">Apple</div>
    <div class="social-btn">Facebook</div>
    <p class="note">Dengan melanjutkan, kamu menyetujui Syarat & Ketentuan ini dan kamu sudah diberitahu mengenai Pemberitahuan Privasi kami.</p>
  </div>
</body>
</html>
