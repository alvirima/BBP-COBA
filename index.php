<?php
require 'config.php';

session_start();

if (isset($_POST["login"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        $_SESSION['loggedin'] = true;
        header("Location: admin\admin.php");
        exit;
    } elseif ($_POST["username"] == "user" && $_POST["password"] == "456") {
        $_SESSION['loggedin'] = true;
        header("Location: user\user.php");
        exit;
    } else {
        $_SESSION['loggedin'] = false;
        echo "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap Link CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Risk Management</title>
  </head>
  <body>
    <!-- Logo Section -->
    <header class="header">
      <a href="#" class="logo"
        ><i class="bi bi-graph-down"></i> Risk Management System</a
      >
    </header>

    <!-- Login Section Start -->
    <section class="home">
      <div class="wrapper-login">
        <h2>LOGIN</h2>
        <form id="loginForm" action="" method="post">
          <div class="input-box">
            <span class="icon"><i class="bi bi-envelope"></i></span>
            <input type="text" id="username" name="username" required />
            <label for="username">Enter your email</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="bi bi-lock"></i></span>
            <input type="password" id="password" name="password" required />
            <label for="password">Enter your password</label>
          </div>
          <button type="submit" name="login" class="btn" id="login-btn">
            Login
          </button>
        </form>
      </div>
    </section>

    <!-- Bootstrap Link JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src=""></script>
  </body>
</html>
