<html>
  <head>
    <title> CPS510 Database</title>
    <meta http-equiv="Content-type"
       content="text/html; charset=utf-8"/>
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       <link rel="stylesheet" href="style.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>

  <body class = "transparent">
    <div class="container">
      <br>
      <h4 class = "grey">PATIENTS</h4>
      <table class="table">
        <thead>
          <tr class = "different">
            <th>First name</th>
            <th>Last name</th>
            <th>Sex</th>
            <th>Date of Birth</th>
            <th>Street Number</th>
            <th>Street</th>
            <th>City</th>
            <th>OHIP</th>
            <th>Phone Number</th>
            <th>Doctor</th>
          </tr>
        </thead>
        <tbody>
		<form action = "editPatient.php">
        <?php
        require ("../cps510/connect.php");
		$stid = oci_parse($conn, "SELECT * FROM PATIENTS");
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
				echo '<tr>';
				foreach ($row as $key => $value)
				echo "<td><input type = \"text\" value = $value></td>"; 
					//echo "<td>$value</td>";  //if they not admin cant edit
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
      <input type="submit" class="btn btn-primary" value="Save Changes">
      <a href="addPatient.html" target="iframe_a" class="btn btn-primary">  Add Patient</a>
    </div>
    </form>
  </body>
  </html>
