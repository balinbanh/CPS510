<html>
  <head>
    <title> CPS510 Database</title>
    <meta http-equiv="Content-type"
       content="text/html; charset=utf-8"/>
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       <link rel="stylesheet" href="../style.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>

  <body class = "transparent">
    <div class="grey container">
      <br>
      <br>
      <div>
        <form align = "center" name="viewManual" method="post" action="view.html">
			<input type="submit" class="btn btn-primary" value="View Manual">
		</form>
		
		<form align = "center" name="dropTables" method="post" action="drop.php">
			<input type="submit" class="btn btn-primary" value="Drop Tables">
		</form>
		
		<form align = "center" name="createTables" method="post" action="create.php">
			<input type="submit" class="btn btn-primary" value="Create Tables">
		</form>
		
		<form align = "center" name="populateTables" method="post" action="populate.php">
			<input type="submit" class="btn btn-primary" value="Populate Tables">
		</form>
		
        <form align = "center" name="advQueries" method ="post" action="simpQuery.php">
			<select name="Simple Queries">
			<option value="SQ1">1</option>
			<option value="SQ2">2</option>
			<option value="SQ3">3</option>
			<option value="SQ4">4</option>
			<option value="SQ5">5</option>
			<option value="SQ6">6</option>
			<option value="SQ7">7</option>
			<option value="SQ8">8</option>
			<option value="SQ9">9</option>
			<option value="SQ10">10</option>
			</select>
			<br>
		<input type="submit" value="View Simple Query">
		</form>
		
		<form align = "center" name="advQueries" method ="post" action="advQuery.php">
			<select name="Advanced Queries">
			<option value="AQ1">1</option>
			<option value="AQ2">2</option>
			<option value="AQ3">3</option>
			<option value="AQ4">4</option>
			<option value="AQ5">5</option>
			<option value="AQ6">6</option>
			<option value="AQ7">7</option>
			</select>
			<br>
		<input type="submit" value="  View Advanced Query">
		</form>
		
		<br>
		<form align = "center" name="stopDB" method="post" action="stop.php">
			<input type="submit" class="btn btn-primary" value="Force/Stop/Kill Orable DB">
		</form>
		</div>
 
  </body>
  </html>
