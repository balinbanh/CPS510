<!DOCTYPE html>
<html>
<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$clinicName = $_POST['clinicName'];
		$clinicID = (int)($_POST['clinicID']);
		$cPhone = (int)($_POST['cPhone']);
		$cStreetNum = (int)($_POST['cStreetNum']);
		$cStreet = $_POST['cStreet'];
		$cCity = ($_POST['cCity']);
		
		
		echo "<h1>$first</h1>";

		require ("../../cps510/connect.php");
		echo "INSERT INTO MEDICAL_CLINIC(CLINIC_NAME,CLINIC_ID, PHONE, STREET_NUMBER, STREET, CITY)
		VALUES ('$clinicName', $clinicID, $cPhone, $cStreetNum, '$cStreet', '$cCity')";
		$stid = oci_parse($conn, "INSERT INTO MEDICAL_CLINIC(CLINIC_NAME,CLINIC_ID, PHONE, STREET_NUMBER, STREET, CITY)
		VALUES ('$clinicName', $clinicID, $cPhone, $cStreetNum, '$cStreet', '$cCity')");
		if (!$stid) {
		  $e = oci_error($conn);
		  trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		// Perform the logic of the query
		$r = oci_execute($stid);
		if (!$r) {
		  $e = oci_error($stid);
		  trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		  echo "dead";
		  oci_free_statement($stid);
		  oci_close($conn);
		}
		/*else if (($rows = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_LOBS)) != false) {
			foreach($rows as $id => $value) {
				echo "ID: $value";
			}
		} */
		header("Refresh:0; url=index.php");
		oci_free_statement($stid);
		oci_close($conn);
	}
?>
<body>
<h1>hello</h1>
</body>
</html>