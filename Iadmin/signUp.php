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
      margin:0;
      padding:0;
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
      background: rgba(0,0,0,.5);
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(0,0,0,.6);
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
      top:0;
      left: 0;
      padding: 10px 0;
      font-size: 16px;
      color: #fff;
      pointer-events: none;
      transition: .5s;
    }
    
    .login-box .user-box input:focus ~ label,
    .login-box .user-box input:valid ~ label {
      top: -20px;
      left: 0;
      color: white;
      font-size: 12px;
    }
    
    .login-box form a {
      position: relative;
      display: inline-block;
      padding: 10px 20px;
      color: white;
      font-size: 16px;
      text-decoration: none;
      text-transform: uppercase;
      overflow: hidden;
      transition: .5s;
      margin-top: 40px;
      letter-spacing: 4px
    }
    
    .login-box a span {
      position: absolute;
      display: block;
    }
    .btn1
    {
      margin-left: 35%;
      background: #dc3545;
      padding: 10px;
      border: 1px;
      color:white;
      font-size:16px;
      border-radius:5px;
      cursor:pointer;
    }
    .btn
    {
      margin-left:45px;
      background: #198754;
      padding: 10px;
      border: 1px;
      color:white;
      font-size:16px;
      border-radius:5px;
      cursor:pointer;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Inscription</h2>
    <form>
      <div class="user-box">
        <input type="text" name="" required="">
        <label>Nom</label>
      </div>
      <div class="user-box">
        <input type="text" name="" required="">
        <label>Prénom</label>
      </div>
      <div class="user-box">
        <input type="text" name="" required="">
        <label>Username or Email</label>
      </div>
      <div class="user-box">
        <input type="password" name="" required="">
        <label>Password</label>
      </div>
      <div class="boutons">
          <button class="btn" type="submit">Valider</button>
          <button class="btn1" type="reset">Retour</button>
      </div>
    </form>
  </div>
</body>
</html>