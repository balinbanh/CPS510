<html>
  <head>
    <title> CPS510 Database</title>
    <meta http-equiv="Content-type"
       content="text/html; charset=utf-8"/>
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       <link rel="stylesheet" href="../style.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>

  <body class = "transparent">
    <div class="container">
      <br>
      <h4 class = "grey">APPOINTMENTS</h4>
      <table class="table">
        <thead>
          <tr>
            <th>Appointment Number</th>
            <th>Date of Appointment</th>
            <th>Time of Appointment</th>
            <th>Patient ID</th>
            <th>Doctor ID</th>
            <th>Scheduled By</th>
          </tr>
        </thead>
        <tbody>

        <form action = "editAppointment.php" method = "post">
		<?php
         require ("../../cps510/connect.php");
		$stid = oci_parse($conn, "SELECT * FROM APPOINTMENTS");
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
        $rows;
			while($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_LOBS))
				$rows[] = $row;
			//echo "<table>";
			echo count($rows);
			foreach ($rows as $row)
			{
				$index = 0;
				$type = "";
				echo '<tr>';
				foreach ($row as $key => $value) {
					if ($index == 0) 
						$type = 'appNum';
					if ($index == 1) 
						$type = 'appDate';
					if ($index == 2) 
						$type = 'appTime';
					if ($index == 3) 
						$type = 'patient';
					if ($index == 4) 
						$type = 'doctor';
					if ($index == 5) 
						$type = 'schedBy';
					$type = $type.'[]';
					echo "<td><input type = \"text\" name = \"$type\" value = $value></td>";
					//echo "<td>$value</td>";  //if they not admin cant edit
					$index = $index + 1;
				}
				echo "</tr>";
			}
			//echo "</table>";
			oci_free_statement($stid);
			oci_close($conn);
        ?>
        </tbody>
      </table>
    </div>

    <div class="container">
      <br>
      <br>
      <input type= "submit" class="btn btn-primary" value="Save Changes">
      <a href="addAppointment.html" target="iframe_a" class="btn btn-primary">  Add Appointment</a>
	  <a href="removeAppointment.html" target="iframe_a" class="btn btn-primary">  Remove Appointment</a>
    </div>
  </form>

  </body>
  </html>
