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
				$value = $value."yes";
				echo "<td><input type = \"text\" value = $value></td>"; 
					//echo "<td>$value</td>";  //if they not admin cant edit
				echo "</tr>";
			}
			//echo "</table>";
			oci_free_statement($stid);
			oci_close($conn);
        ?>