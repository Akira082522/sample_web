<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $firstname = $_POST['fname'];
      $lastname = $_POST['lname'];
      $Gender = $_POST['gender'];
      $num = $_POST['number'];
      $address = $_POST['add'];
      $gmail = $_POST['mail'];
      $password = $_POST['pass'];

      if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
      {

          $query = "insert into website (fname, lname, gender, cnum, address, email, pass) values ('$firstname', '$lastname', '$Gender', '$num', '$address', '$gmail', '$password')";

          mysqli_query($con, $query);

          echo "<script type='text/javascript'> alert('Successfully Register')</script>";
      }
      else
      {
        echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
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
        <li><a href="signup.html" class="login-button"><i class="fas fa-sign-in-alt"></i> Sign Up</a></li>
      </ul>
    </nav>
  </header>

  <!--Home title start here-->
<!--Sign Up start-->
<div class="signup">
    <h1>Sign Up</h1>
    <h4></h4>
    <form method="POST">
        <label>First Name</label>
        <input type="text" name="fname" required>
        <label>Last Name</label>
        <input type="text" name="lname" required>
        <label>Gender</label>
        <input type="text" name="gender" required>
        <label>Contact Address</label>
        <input type="tel" name="number" required>
        <label>Address</label>
        <input type="text" name="add" required>
        <label>Email</label>
        <input type="text" name="mail" required>
        <label>Password</label>
        <input type="password" name="pass" required>
        <input type="submit" name="" value="submit">
    </form>
    <p>By clicking the Sign Up button, you agree to our<br>
    <a href="">Terms and Conditon</a> and <a href="#">Policy Privacy</a>
    </p>
    <p>Already have an account? <a href="login.php">Login Here</a></p>
</div>
<!--Sign Up end-->

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
