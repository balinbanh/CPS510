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
<<<<<<< HEAD
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
=======

        <form action = "editPatient.php">
        <?php
         //if user is admin, loop... post method*
         echo "<tr>";
         echo "<td><input type=\"text\" name=\"first\" value=\"Jessica\"></td>";
         echo "<td><input type=\"text\" name=\"last\" value=\"Su\"></td>";
         echo "<td><input type=\"text\" name=\"gender\" value=\"F\"></td>";
         echo "<td><input type=\"text\" name=\"birth\" value=\"16-Nov-95\"></td>";
         echo "<td><input type=\"text\" name=\"sNum\" value=\"111\"></td>";
         echo "<td><input type=\"text\" name=\"street\" value=\"Toronto Avenue\"></td>";
         echo "<td><input type=\"text\" name=\"city\" value=\"Toronto\"></td>";
         echo "<td><input type=\"text\" name=\"ohip\" value=\"123596\"></td>";
         echo "<td><input type=\"text\" name=\"pNum\" value=\"9058898989\"></td>";
         echo "<td><input type=\"text\" name=\"doctor\" value=\"1004\"></td>";
         echo "</tr>";

         //if user is admin, loop .. replace Jack, Daniels, etc with $first, $last.. etc
          echo "<tr>";
          echo "<td id=\"first\" contenteditable=\"true\">Jack</td>";
          echo "<td id=\"last\" contenteditable=\"true\">Daniels</td>";
          echo "<td id=\"gender\" contenteditable=\"true\">M</td>";
          echo "<td id=\"birth\" contenteditable=\"true\">10-Oct-89</td>";
          echo "<td id=\"sNum\" contenteditable=\"true\">12</td>";
          echo "<td id=\"street\" contenteditable=\"true\">Church St</td>";
          echo "<td id=\"city\" contenteditable=\"true\">Toronto</td>";
          echo "<td id=\"ohip\" contenteditable=\"true\">123821</td>";
          echo "<td id=\"pNum\" contenteditable=\"true\">6125326161</td>";
          echo "<td id=\"doctor\" contenteditable=\"true\">1003</td>";
          echo "</tr>";

          //extra row example
          echo "<tr>";
          echo "<td id=\"first\" contenteditable=\"true\">Beverly</td>";
          echo "<td id=\"last\" contenteditable=\"true\">Li</td>";
          echo "<td id=\"gender\" contenteditable=\"true\">F</td>";
          echo "<td id=\"birth\" contenteditable=\"true\">30-Nov-93</td>";
          echo "<td id=\"sNum\" contenteditable=\"true\">116</td>";
          echo "<td id=\"street\" contenteditable=\"true\">Shaftsbury</td>";
          echo "<td id=\"city\" contenteditable=\"true\">Richmond Hill</td>";
          echo "<td id=\"ohip\" contenteditable=\"true\">238213</td>";
          echo "<td id=\"pNum\" contenteditable=\"true\">6125326161</td>";
          echo "<td id=\"doctor\" contenteditable=\"true\">1001</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Jack</td>";
          echo "<td>Daniels</td>";
          echo "<td>M</td>";
          echo "<td>10-Oct-89</td>";
          echo "<td>12</td>";
          echo "<td>Church St</td>";
          echo "<td>Toronto</td>";
          echo "<td>123821</td>";
          echo "<td>6125326161</td>";
          echo "<td>1003</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Jack</td>";
          echo "<td>Daniels</td>";
          echo "<td>M</td>";
          echo "<td>10-Oct-89</td>";
          echo "<td>12</td>";
          echo "<td>Church St</td>";
          echo "<td>Toronto</td>";
          echo "<td>123821</td>";
          echo "<td>6125326161</td>";
          echo "<td>1003</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Jack</td>";
          echo "<td>Daniels</td>";
          echo "<td>M</td>";
          echo "<td>10-Oct-89</td>";
          echo "<td>12</td>";
          echo "<td>Church St</td>";
          echo "<td>Toronto</td>";
          echo "<td>123821</td>";
          echo "<td>6125326161</td>";
          echo "<td>1003</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Jack</td>";
          echo "<td>Daniels</td>";
          echo "<td>M</td>";
          echo "<td>10-Oct-89</td>";
          echo "<td>12</td>";
          echo "<td>Church St</td>";
          echo "<td>Toronto</td>";
          echo "<td>123821</td>";
          echo "<td>6125326161</td>";
          echo "<td>1003</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Jack</td>";
          echo "<td>Daniels</td>";
          echo "<td>M</td>";
          echo "<td>10-Oct-89</td>";
          echo "<td>12</td>";
          echo "<td>Church St</td>";
          echo "<td>Toronto</td>";
          echo "<td>123821</td>";
          echo "<td>6125326161</td>";
          echo "<td>1003</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Jack</td>";
          echo "<td>Daniels</td>";
          echo "<td>M</td>";
          echo "<td>10-Oct-89</td>";
          echo "<td>12</td>";
          echo "<td>Church St</td>";
          echo "<td>Toronto</td>";
          echo "<td>123821</td>";
          echo "<td>6125326161</td>";
          echo "<td>1003</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Jack</td>";
          echo "<td>Daniels</td>";
          echo "<td>M</td>";
          echo "<td>10-Oct-89</td>";
          echo "<td>12</td>";
          echo "<td>Church St</td>";
          echo "<td>Toronto</td>";
          echo "<td>123821</td>";
          echo "<td>6125326161</td>";
          echo "<td>1003</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Jack</td>";
          echo "<td>Daniels</td>";
          echo "<td>M</td>";
          echo "<td>10-Oct-89</td>";
          echo "<td>12</td>";
          echo "<td>Church St</td>";
          echo "<td>Toronto</td>";
          echo "<td>123821</td>";
          echo "<td>6125326161</td>";
          echo "<td>1003</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Jack</td>";
          echo "<td>Daniels</td>";
          echo "<td>M</td>";
          echo "<td>10-Oct-89</td>";
          echo "<td>12</td>";
          echo "<td>Church St</td>";
          echo "<td>Toronto</td>";
          echo "<td>123821</td>";
          echo "<td>6125326161</td>";
          echo "<td>1003</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Jack</td>";
          echo "<td>Daniels</td>";
          echo "<td>M</td>";
          echo "<td>10-Oct-89</td>";
          echo "<td>12</td>";
          echo "<td>Church St</td>";
          echo "<td>Toronto</td>";
          echo "<td>123821</td>";
          echo "<td>6125326161</td>";
          echo "<td>1003</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Jack</td>";
          echo "<td>Daniels</td>";
          echo "<td>M</td>";
          echo "<td>10-Oct-89</td>";
          echo "<td>12</td>";
          echo "<td>Church St</td>";
          echo "<td>Toronto</td>";
          echo "<td>123821</td>";
          echo "<td>6125326161</td>";
          echo "<td>1003</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Jack</td>";
          echo "<td>Daniels</td>";
          echo "<td>M</td>";
          echo "<td>10-Oct-89</td>";
          echo "<td>12</td>";
          echo "<td>Church St</td>";
          echo "<td>Toronto</td>";
          echo "<td>123821</td>";
          echo "<td>6125326161</td>";
          echo "<td>1003</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Jack</td>";
          echo "<td>Daniels</td>";
          echo "<td>M</td>";
          echo "<td>10-Oct-89</td>";
          echo "<td>12</td>";
          echo "<td>Church St</td>";
          echo "<td>Toronto</td>";
          echo "<td>123821</td>";
          echo "<td>6125326161</td>";
          echo "<td>1003</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Jack</td>";
          echo "<td>Daniels</td>";
          echo "<td>M</td>";
          echo "<td>10-Oct-89</td>";
          echo "<td>12</td>";
          echo "<td>Church St</td>";
          echo "<td>Toronto</td>";
          echo "<td>123821</td>";
          echo "<td>6125326161</td>";
          echo "<td>1003</td>";
          echo "</tr>";
>>>>>>> origin/master
        ?>

        </tbody>
      </table>
    </div>

    <div class="container">
      <br>
      <br>
<<<<<<< HEAD
      <input type="submit" class="btn btn-primary" value="Save Changes">
      <a href="addPatient.html" target="iframe_a" class="btn btn-primary">  Add Patient</a>
    </div>
    </form>
=======
      <input type= "submit" class="btn btn-primary" value="Save Changes">
      <a href="addPatient.html" target="iframe_a" class="btn btn-primary">  Add Patient</a>
    </div>
  </form>

>>>>>>> origin/master
  </body>
  </html>
