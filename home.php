<?
session_start();
?>

<html>
  <head>
    <title> Dundas Walk-In Clinic </title>
    <meta http-equiv="Content-type"
       content="text/html; charset=utf-8"/>
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       <link rel="stylesheet" href="style.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>

  <body class = "blue">
   <div class="container-fluid">
        <br>
        <header><h1>Dundas Walk-In Clinic.</h1></header>
          <?php
            $user = $_SESSION['login']['user'];//['user'];
            echo "<p class = \"white\"> Welcome $user!</p>";
          ?>
        <ul class="nav nav-tabs">
          <li><a href="medclinic.php" target="iframe_a">Medical Clinic</a></li>
          <li><a href="doctor.php" target="iframe_a">Doctors</a></li>
          <li><a href="patient.php" target="iframe_a">Patients</a></li>
          <li><a href="medfile.php" target="iframe_a">Medical Files</a></li>
          <li><a href="appointment.php" target="iframe_a">Appointments</a></li>
          <li><a href="secretary.php" target="iframe_a">Secretary</a></li>
        </ul>

    <div class="container-fluid">
      <iframe src="" name="iframe_a">
        <p>Your browser does not support iframes.</p>
      </iframe>
    </div>

    <div class="container-fluid">
       <br>
       <hr size ="1" color="white" width:"100% ">
       <footer> © 2015 Dundas Walk-In Clinic. </footer>
       <br>
    </div>

  </body>
  </html>
