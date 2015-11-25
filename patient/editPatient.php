<!DOCTYPE html>
<html>
<?
	$first = $_POST['first'];
	$last = $_POST['last'];
	$gender = $_POST['gender'];
	$birth = $_POST['birth'];
	$sNum =($_POST['sNum']);
	$street = $_POST['street'];
	$city = $_POST['city'];
	$ohip = ($_POST['ohip']);
	$pNum = ($_POST['pNum']);
	$doctor = ($_POST['doctor']);
	
	//echo "<h1>$sNum</h1>";
	
	for ($i = 0 ; $i < count($first) ; $i++) {
		$sNumCon = (int)$sNum[$i];
		$ohipCon = (int)$ohip[$i];
		$pNumCon = (int)$pNum[$i];
		$doctorCon = (int)$doctor[$i];
		
		require ("../../cps510/connect.php");
		/*echo "UPDATE PATIENTS 
		SET FIRST_NAME = '$first[$i]',
		LAST_NAME = '$last[$i]',
		SEX = '$gender[$i]',
		DATE_OF_BIRTH = '$birth[$i]',
		STREET_NUMBER = $sNumCon,
		STREET = '$street[$i]',
		CITY = '$city[$i]',
		PHONE_NUMBER = $pNumCon,
		DOCTOR = $doctorCon WHERE OHIP = $ohipCon";*/
		
		$stid = oci_parse($conn, "UPDATE PATIENTS 
		SET FIRST_NAME = '$first[$i]',
		LAST_NAME = '$last[$i]',
		SEX = '$gender[$i]',
		DATE_OF_BIRTH = '$birth[$i]',
		STREET_NUMBER = $sNumCon,
		STREET = '$street[$i]',
		CITY = '$city[$i]',
		PHONE_NUMBER = $pNumCon,
		DOCTOR = $doctorCon WHERE OHIP = $ohipCon");
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
	header("Refresh:0; url=index.php");
?>
<body>
<h1>hello</h1>
</body>
</html>