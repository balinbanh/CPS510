<!DOCTYPE html>
<html>
<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$first = $_POST['first'];
		$last = $_POST['last'];
		$id = ($_POST['id']);
		$worksAt = ($_POST['worksAt']);
		
		$idCon = (int)($id);
		$worksAtCon = (int)($worksAt);
		
		
		echo "<h1>$first</h1>";

		require ("../../cps510/connect.php");
		echo "INSERT INTO SECRETARY(FIRST_NAME,LAST_NAME, ID, WORKS_AT)
		VALUES ('$first', '$last', $idCon, $worksAtCon)";
		$stid = oci_parse($conn, "INSERT INTO SECRETARY(ID, FIRST_NAME, LAST_NAME, WORKS_AT)
		VALUES ($idCon, '$first', '$last', $worksAtCon)");
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
</html>