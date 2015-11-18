<?
session_start();
?>

<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-type"
         content="text/html; charset=utf-8"/>
      <link rel="stylesheet" href="style.css">
      <title>CPS510 Database</title>
   </head>
   <body class = "blue">

   <?
   $user;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		//echo $_POST["user"]; 
		$user = $_POST['user'];
		require ("../cps510/connect.php");
		$stid = oci_parse($conn, "SELECT DOC_ID FROM DOCTORS WHERE DOC_ID = $user UNION SELECT ID FROM SECRETARY WHERE ID = $user");
		if (!$stid) {
		  $e = oci_error($conn);
		  trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		// Perform the logic of the query
		$r = oci_execute($stid);
		if (!$r) {
		  $e = oci_error($stid);
		  //trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		  echo "dead";
		  oci_free_statement($stid);
		  oci_close($conn);
		}
		else if (($rows = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_LOBS)) != false) {
			foreach($rows as $id => $value) {
				echo "ID: $value";
			}
		} 
		
		oci_free_statement($stid);
		oci_close($conn);
	}
   
   if (!$rows)
   {
	   echo '
  <form action= "" method="post">
   <br>
   <br>
   <br>
   <h1> Medical Clinic System </h1>
   Username: <input type = "text" name = "user">
   <br>
   <br>
   <input type = "submit" value = "Login"/>
   </form>';
   if (isset($_POST['user']))
	   echo '<p>Invalid ID</p>';
   }
   else if ($rows) {//sucecssful login, direct to homepage 
	   echo "Logged in as " . $_POST['user'];
	   $_SESSION['login'] = $_POST;
	   header("Location: home.php");
			exit;
   }
	   
	
	?>

   </body>
</html>
