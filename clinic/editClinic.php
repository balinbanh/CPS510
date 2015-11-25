<!DOCTYPE html>
<html>
<?
	$name = $_POST['name'];
	$id = $_POST['id'];
	$phone = $_POST['phone'];
	$sNum = $_POST['sNum'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	
	//echo "<h1>$sNum</h1>";
	
	for ($i = 0 ; $i < count($name) ; $i++) {
		$phoneCon = (int)$phone[$i];
		$sNumCon = (int)$sNum[$i];
		$idCon = (int)$id[$i];
		
		require ("../../cps510/connect.php");
		echo "UPDATE MEDICAL_CLINIC 
		SET CLINIC_NAME = '$name[$i]',
		PHONE = $phoneCon,
		STREET_NUMBER = $sNumCon,
		STREET = '$street[$i]',
		CITY = '$city[$i]' WHERE CLINIC_ID = $idCon";
		
		$stid = oci_parse($conn, "UPDATE MEDICAL_CLINIC 
		SET CLINIC_NAME = '$name[$i]',
		PHONE = $phoneCon,
		STREET_NUMBER = $sNumCon,
		STREET = '$street[$i]',
		CITY = '$city[$i]' WHERE CLINIC_ID = $idCon");
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