<!DOCTYPE html>
<html>
<?
	$sec_id = (int)($_POST['secID']);

		require ("../../cps510/connect.php");
		//echo "DELETE FROM PATIENTS
		//WHERE OHIP = $ohip";
		
		$stid = oci_parse($conn, "DELETE FROM SECRETARY
		WHERE ID = $sec_id");
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
		oci_free_statement($stid);
		oci_close($conn);
	header("Refresh:0; url=index.php");
?>
</html>