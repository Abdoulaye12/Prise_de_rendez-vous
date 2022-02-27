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
      padding: 30px 40px;
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

    .login-box a span {
      position: absolute;
      display: block;
    }

    .btn1 {
      width: 30%;
      margin-left: 25%;
      background: #dc3545;
      padding: 10px;
      border: 1px;
      color: white;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn {
      width: 30%;
      margin-left: 25px;
      background: #198754;
      padding: 10px;
      border: 1px;
      color: white;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    .boutons {
      margin: 7px 0px;
    }
  </style>
</head>

<body>
  <div class="login-box">
    <h2>Inscription</h2>
    <form action="" method="POST">
      <div class="user-box">
        <input type="text" name="nom" required="">
        <label>Nom</label>
      </div>
      <div class="user-box">
        <input type="text" name="prenom" required="">
        <label>Prénom</label>
      </div>
      <div class="user-box">
        <input type="email" name="e_mail" required="">
        <label>Username or Email</label>
      </div>
      <div class="user-box">
        <input type="password" name="mot_de_passe" required="">
        <label>Password</label>
      </div>
      <div class="boutons">
        <button class="btn" name="submit" type="submit">Valider</button>
        <button class="btn1" type="reset"><a href="login.php">Retour</a></button>
      </div>
      <hr style="margin-top:15px;margin-bottom: 15px;">
      <a class="newcompte" href="login.php">Se connecter</a>
    </form>
  </div>
</body>

</html>