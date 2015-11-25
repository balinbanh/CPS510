<!DOCTYPE html>
<html>
<?
	$first = $_POST['first'];
	$last = $_POST['last'];
	$docID = $_POST['docID'];
	$certYear = $_POST['certYear'];
	$certType = $_POST['certType'];
	$worksAt = $_POST['worksAt'];
	
	//echo "<h1>$sNum</h1>";
	
	for ($i = 0 ; $i < count($first) ; $i++) {
		$docIDCon = (int)$docID[$i];
		$certYearCon = (int)$certYear[$i];
		
		require ("../../cps510/connect.php");
		echo "UPDATE DOCTORS 
		SET FIRST_NAME = '$first[$i]',
		LAST_NAME = '$last[$i]',
		CERTIFICATE_YEAR = $certYearCon,
		CERTIFICATE_TYPE = '$certType[$i]',
		WORKS_AT = '$worksAt[$i]' WHERE DOC_ID = $docIDCon";
		
		$stid = oci_parse($conn, "UPDATE DOCTORS 
		SET FIRST_NAME = '$first[$i]',
		LAST_NAME = '$last[$i]',
		CERTIFICATE_YEAR = $certYearCon,
		CERTIFICATE_TYPE = '$certType[$i]',
		WORKS_AT = '$worksAt[$i]' WHERE DOC_ID = $docIDCon");
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