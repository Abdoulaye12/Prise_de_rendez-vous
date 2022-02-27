<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    html {
      height: 100%;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background: linear-gradient(#141e30, #243b55);
    }

    .login-box {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 400px;
      padding: 40px;
      transform: translate(-50%, -50%);
      background: rgba(0, 0, 0, .5);
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
      border-radius: 10px;
    }

    .login-box h2 {
      margin: 0 0 30px;
      padding: 0;
      color: #243b55;
      text-align: center;
    }

    .login-box .user-box {
      position: relative;
    }

    .login-box .user-box input {
      width: 100%;
      padding: 10px 0;
      font-size: 16px;
      color: #243b55;
      margin-bottom: 30px;
      border: none;
      border-bottom: 1px solid #243b55;
      outline: none;
      background: transparent;
    }

    .login-box .user-box label {
      position: absolute;
      top: 0;
      left: 0;
      padding: 10px 0;
      font-size: 16px;
      color: #fff;
      pointer-events: none;
      transition: .5s;
    }

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
      top: -20px;
      left: 0;
      color: white;
      font-size: 12px;
    }

    .login-box a span {
      position: absolute;
      display: block;
    }

    .btn1:hover {
      background-color: #d1d7df;
    }

    .btn1 {
      color: black;
      margin-top: 12px;
      display: block;
      width: 50%;
      margin-right: auto;
      margin-left: auto;
      padding: 10px;
      border: 1px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    .newcompte:hover {
      text-decoration: underline;
      color: #d1d7df;
    }

    .newcompte {
      text-align: center;
      display: block;
      width: 50%;
      margin-right: auto;
      margin-left: auto;
      color: white;
      padding: 5px;
      cursor: pointer;
    }

    a {
      color: white;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="login-box">
    <h2>Login</h2>
    <form method="POST" action="">
      <div class="user-box">
        <input type="text" name="e_mail" required="">
        <label>Username or Email</label>
      </div>
      <div class="user-box">
        <input type="password" name="mot_de_passe" required="">
        <label>Password</label>
      </div>
      <div class="bouton">
        <button type="submit" name="submit" class="btn1"> Se Connecter</button>
      </div>
      <hr style="margin-top:20px;margin-bottom: 15px;">
      <a class="newcompte" href="signUp.php">Créer un compte</a>
    </form>
  </div>
</body>

</html>