<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

$message = "";

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $message = "<p class='error'>All fields are required!</p>";
    } else {
        if ($username === "admin" && $password === "1234") {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = "admin";
            header("Location: resume.php");
            exit;
        }

        if (isset($_SESSION['users'][$username]) && $_SESSION['users'][$username] === $password) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("Location: resume.php");
            exit;
        }

        $message = "<p class='error'>Invalid Username or Password</p>";
    }
}

if (isset($_POST['register'])) {
    $reg_username = trim($_POST['reg_username']);
    $reg_email = trim($_POST['reg_email']);
    $reg_password = trim($_POST['reg_password']);

    if (empty($reg_username) || empty($reg_email) || empty($reg_password)) {
        $message = "<p class='error'>All fields are required!</p>";
    } elseif (isset($_SESSION['users'][$reg_username])) {
        $message = "<p class='error'>Username already exists!</p>";
    } else {
        $_SESSION['users'][$reg_username] = $reg_password;
        $message = "<p class='success'>Registration successful! You can now log in.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login / Signup</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <div class="container">
    <div class="form-box">
      <?php if (!empty($message)) echo $message; ?>

      <form id="login-form" class="active" method="POST" action="">
        <div class="form-header"> 
            <span>Login</span>
        </div>
        <div class="input-box">
          <i class="fas fa-user"></i>
          <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="input-box">
          <i class="fas fa-lock"></i>
          <input type="password" id="login-password" name="password" placeholder="Password" required>
          <i class="fas fa-eye toggle-password" data-target="login-password"></i>
        </div>
        <div class="options">
          <label><input type="checkbox"> Remember me</label>
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit" name="login" class="btn">Login</button>
        <p class="switch">Don’t have an account? <a href="#" id="show-signup">Register</a></p>
      </form>

      <form id="signup-form" method="POST" action="">
        <div class="form-header">
            <span>Register</span>
        </div>
        <div class="input-box">
          <i class="fas fa-user"></i>
          <input type="text" name="reg_username" placeholder="Username" required>
        </div>
        <div class="input-box">
          <i class="fas fa-envelope"></i>
          <input type="email" name="reg_email" placeholder="Email" required>
        </div>
        <div class="input-box">
          <i class="fas fa-lock"></i>
          <input type="password" id="reg-password" name="reg_password" placeholder="Password" required>
          <i class="fas fa-eye toggle-password" data-target="reg-password"></i>
        </div>
        <button type="submit" name="register" class="btn">Sign Up</button>
        <p class="switch">Already have an account? <a href="#" id="show-login">Login</a></p>
      </form>
    </div>
  </div>
  <script src="./js/script.js"></script>
</body>
</html>
