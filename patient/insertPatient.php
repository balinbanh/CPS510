<!DOCTYPE html>
<html>
<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$first = $_POST['first'];
		$last = $_POST['last'];
		$gender = $_POST['gender'];
		$birth = $_POST['birth'];
		$sNum = $_POST['sNum'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$ohip = $_POST['ohip'];
		$pNum = $_POST['pNum'];
		$doctor = $_POST['doctor'];
		
		$sNum1 = (int)$sNum;
		$ohip1 = (int)$ohip;
		$pNum1 = (int)$pNum;
		$doctor1 = (int)$doctor;
		
		echo "<h1>$first</h1>";

		require ("../../cps510/connect.php");
		echo "INSERT INTO PATIENTS
		(FIRST_NAME, LAST_NAME, SEX, DATE_OF_BIRTH, STREET_NUMBER, STREET, CITY, OHIP, PHONE_NUMBER, DOCTOR) 
		VALUES($first, $last, $gender, $birth, $sNum1, $street, $city, $ohip1, $pNum1, $doctor1)";
		$stid = oci_parse($conn, "INSERT INTO PATIENTS
		(FIRST_NAME, LAST_NAME, SEX, DATE_OF_BIRTH, STREET_NUMBER, STREET, CITY, OHIP, PHONE_NUMBER, DOCTOR) 
		VALUES('$first', '$last', '$gender', '$birth', $sNum1, '$street', '$city', $ohip1, $pNum1, $doctor1)");
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