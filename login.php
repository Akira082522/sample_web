<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];

    if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
        $query = "SELECT * FROM website WHERE email = ? LIMIT 1";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "s", $gmail);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data['pass'] == $password) {
                header("location: index.php");
                exit;
            }
        }
        echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
    } else {
        echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fun To Speak</title>
  <link rel="stylesheet" type="text/css" href="fts.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!--Boostrap link here-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header>
    <div>
      <img src="img/OLOGO.png" alt="Logo">
    </div>
    <nav>
      <ul>
        <li><a href="FunToSpeak.html"><i class="fas fa-home"></i> Home</a></li>
        
        <li><a href="teacher.html"><i class="fas fa-chalkboard-teacher"></i> Teacher</a></li>
        <li><a href="About.html"><i class="fas fa-info-circle"></i> About</a></li>
        <li><a href="signup.html" class="login-button"><i class="fas fa-sign-in-alt"></i> Log-In</a></li>
      </ul>
    </nav>
  </header>
  <!--Home title start here
<div class="background-text">Fun To Speak</div>-->
<!--Log In start-->
<div class="signup">
    <h1>Log In<h1>
    <form method="POST">
        <label>Email</label>
        <input type="text" name="mail" required>
        <label>Password</label>
        <input type="password" name="pass" required>
        <input type="submit" name="" value="submit">
    </form>
    <p>Not have an account? <a href="signup.php">Sign Up here</a></p>
</div>
<!--Log In end-->

<!--General Footer-->
<section class="footer">
  <div class="social">
    <a href="mailto:funtospeak23@gmail.com"><i class="far fa-envelope"></i></a>
    <a href="https://www.instagram.com/funtospeak_fts/"><i class="fab fa-instagram"></i></a>
    <a href="https://twitter.com/FunToSpeak0023"><i class="fab fa-twitter"></i></a>
    <a href="https://www.facebook.com/profile.php?id=100093688214209"><i class="fab fa-facebook"></i></a>
  </div>

  <ul class="list">
    <li><a href="FunToSpeak.html">Home</a></li>
    <li><a href="About.html">About Us</a></li>
    <li><a href="teacher.html">Teacher</a></li>
    <li><a href="mailto:funtospeak23@gmail.com">Contact Us</a></li>
  </ul>
  <p class="copyright">
    FunToSpeak online learning © 2023
  </p>
</section>
 
</body>
</html>
