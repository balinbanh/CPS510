<!DOCTYPE html>
<html>
<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$dFirst = $_POST['dFirst'];
		$dLast = $_POST['dLast'];
		$docID = ($_POST['docID']);
		$certYear = ($_POST['certYear']);
		$cert = $_POST['cert'];
		$work = ($_POST['work']);
		
		$docID1 = (int)($docID);
		$certYear1 = (int)($certYear);
		$work1 = (int)($work);
		
		
		echo "<h1>$first</h1>";

		require ("../../cps510/connect.php");
		echo "INSERT INTO DOCTORS(FIRST_NAME,LAST_NAME, DOC_ID, CERTIFICATE_YEAR, CERTIFICATE_TYPE, WORKS_AT)
		VALUES ($dFirst, $dLast, $docID, $certYear, $cert, $work)";
		$stid = oci_parse($conn, "INSERT INTO DOCTORS(FIRST_NAME,LAST_NAME, DOC_ID, CERTIFICATE_YEAR, CERTIFICATE_TYPE, WORKS_AT)
		VALUES ('$dFirst', '$dLast', $docID1, $certYear1, '$cert', $work1)");
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