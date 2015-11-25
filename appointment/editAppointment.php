<!DOCTYPE html>
<html>
<?
	$appNum = $_POST['appNum'];
	$appDate = $_POST['appDate'];
	$appTime = $_POST['appTime'];
	$patient = $_POST['patient'];
	$doctor = $_POST['doctor'];
	$schedBy = $_POST['schedBy'];
	
	//echo "<h1>$sNum</h1>";
	
	for ($i = 0 ; $i < count($appNum) ; $i++) {
	
		$appNumCon = (int)($appNum[$i]);
		$appTimeCon = (int)($appTime[$i]);
		$patientCon = (int)($patient[$i]);
		$doctorCon = (int)($doctor[$i]);
		$schedByCon = (int)($schedBy[$i]);
		
		require ("../../cps510/connect.php");
		/*echo "UPDATE APPOINTMENTS 
		SET TIME_OF_APT = $appTimeCon,
		DATE_OF_APT = '$appDate[$i]',
		PATIENT = $patientCon,
		DOCTOR = $doctorCon,
		SCHEDULED_BY = $schedByCon WHERE APPOINTMENT_NUMBER = $appNumCon";*/
		
		$stid = oci_parse($conn, "UPDATE APPOINTMENTS 
		SET TIME_OF_APT = $appTimeCon,
		DATE_OF_APT = '$appDate[$i]',
		PATIENT = $patientCon,
		DOCTOR = $doctorCon,
		SCHEDULED_BY = $schedByCon
		WHERE APPOINTMENT_NUMBER = $appNumCon");
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
	}
	//header("Refresh:0; url=index.php");
?>
</html>