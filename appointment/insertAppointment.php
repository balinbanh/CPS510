<!DOCTYPE html>
<html>
<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$appNum = (int)($_POST['appNum']);
		$appDate = ($_POST['appDate']);
		$appTime = (int)($_POST['appTime']);
		$appPatient = (int)($_POST['appPatient']);
		$appDoc = (int)($_POST['appDoc']);
		$appSch = (int)($_POST['appSch']);
		
		echo "<h1>$first</h1>";

		require ("../../cps510/connect.php");
		$stid = oci_parse($conn, "INSERT INTO APPOINTMENTS
		(APPOINTMENT_NUMBER, DATE_OF_APT, TIME_OF_APT, PATIENT, DOCTOR, SCHEDULED_BY) 
		VALUES($appNum, '$appDate', $appTime, $appPatient, $appDoc, $appSch)");
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
		
		oci_free_statement($stid);
		oci_close($conn);
		header("Refresh:0; url=index.php");
	}
?>
<body>
<h1>hello</h1>
</body>
</html>