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
        <h1>Dundas Walk-In Clinic.</h1>
          <?php
            $user = $_POST['user'];
            echo "<p> Welcome $user!</p>";
          ?>
        <ul class="nav nav-tabs">
          <li><a href="doctor.html" target="iframe_a">Doctors</a></li>
          <li><a href="patient.html" target="iframe_a">Patients</a></li>
          <li><a href="appointment.html" target="iframe_a">Appointments</a></li>
        </ul>

    <div class="container-fluid">
      <iframe src="" name="iframe_a">
        <p>Your browser does not support iframes.</p>
      </iframe>
    </div>

    <div class="container-fluid">
       <br>
       <footer> © 2015 Dundas Walk-In Clinic. </footer>
       <br>
    </div>

  </body>
  </html>
