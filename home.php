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
			if ( $_SESSION['loggedIn'] == false) {
				header("Location: index.php");
					exit;
			}
			
			$user = (int)($_SESSION['login']['user']);//['user'];
			$name = "";
			require ("../cps510/connect.php");
			//echo "SELECT FIRST_NAME FROM DOCTORS WHERE DOC_ID = $user SELECT FIRST_NAME FROM SECRETARY WHERE ID = $user";
			$stid = oci_parse($conn, "SELECT FIRST_NAME, LAST_NAME FROM DOCTORS WHERE DOC_ID = $user UNION SELECT FIRST_NAME, LAST_NAME FROM SECRETARY WHERE ID = $user");
			if (!$stid) {
			  $e = oci_error($conn);
			  trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
			}
			// Perform the logic of the query
			$r = oci_execute($stid);
			if (!$r) {
				$e = oci_error($stid);
				//trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
				//echo "dead";
			}
			else if (($rows = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_LOBS)) != false) {
				foreach($rows as $id => $value) {
					$name = $name." $value";
				}
			} 
			oci_free_statement($stid);
			oci_close($conn);
            //$user = $_SESSION['login']['user'];//['user'];
            echo "<p class = \"white\"> Welcome $name!</p>";
          ?>
        <ul class="nav nav-tabs">
          <li><a href="clinic" target="iframe_a">Medical Clinic</a></li>
          <li><a href="doctor" target="iframe_a">Doctors</a></li>
          <li><a href="patient" target="iframe_a">Patients</a></li>
          <li><a href="medical_files" target="iframe_a">Medical Files</a></li>
          <li><a href="appointment" target="iframe_a">Appointments</a></li>
          <li><a href="secretary" target="iframe_a">Secretary</a></li>
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
