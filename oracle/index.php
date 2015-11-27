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
		
		<form align = "center" name="queryTables" method="post" action="query.php">
			<input type="submit" class="btn btn-primary" value="Query Tables">
		</form>
		
		<form align = "center" name="stopDB" method="post" action="stop.php">
			<input type="submit" class="btn btn-primary" value="Force/Stop/Kill Orable DB">
		</form>
		
      </div>
    </div>
  </form>
  </body>
  </html>
