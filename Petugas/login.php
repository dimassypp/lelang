<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
      body {
          margin: 0;
          padding: 0;
          background: url(./gambar/bg_login.jpg) no-repeat center center fixed;
          background-size: cover;
          background-position: center;
          font-family: sans-serif
      }

      .loginbox {
          width: 320px;
          height: 400px;
          background: #061c21;
          color: #fff;
          top: 50%;
          left: 50%;
          position: absolute;
          transform: translate(-50%, -50%);
          box-sizing: border-box;
          padding: 70px 30px;
          
      }

      .avatar {
          width: 100px;
          height: 100px;
          border-radius: 50%;
          position: absolute;
          top: -50px;
          left: calc(50% - 50px)
      }

      h1 {
          margin: 0;
          padding: 0 0 20px;
          text-align: center;
          font-size: 22px
      }

      .loginbox p {
          margin: 0;
          padding: 0;
          font-weight: bold
      }

      .loginbox input {
          width: 100%;
          margin-bottom: 20px
      }

      .loginbox input[type="text"],
      input[type="password"] {
          border: none;
          border-bottom: 1px solid #fff;
          background: transparent;
          outline: none;
          height: 40px;
          color: #fff;
          font-size: 16px
      }

      .loginbox input[type="submit"] {
          border: none;
          outline: none;
          height: 40px;
          background: #ffffff;
          color: #000;
          font-size: 18px;
          border-radius: 20px
      }

      .loginbox input[type="submit"]:hover {
          cursor: pointer;
          background: #ffffff;
          color: #000
      }

      .loginbox a {
          text-decoration: none;
          font-size: 12px;
          line-height: 20px;
          color: darkgrey
      }

      .loginbox a:hover {
          color: #ff00d4
      }
    </style>
</head>
<body class="text-center">
  <div class="loginbox"> 
    <h1 style="font-weight: bold">Login Admin</h1>
    <form action="proses_login.php" method="POST">
        <p>Username</p> 
        <input type="text" name="username" placeholder="Enter Username" required>
        <p>Password</p> 
        <input type="password" name="password" placeholder="Enter Password" required> 
        <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
