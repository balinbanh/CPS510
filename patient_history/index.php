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
    <div class="container">
      <br>
      <h4 class = "grey">PATIENT HISTORY</h4>
      <table class="table">
        <thead>
          <tr class = "different">
            <th>Patient Number</th>
            <th>Medical Notes</th>
          </tr>
        </thead>
        <tbody>

        <form action = "editHistory.php">

        <?php
        ?>

        </tbody>
      </table>
    </div>

    <div class="container">
      <br>
      <br>
      <input type= "submit" class="btn btn-primary" value="Save Changes">
      <a href="addHistory.html" target="iframe_a" class="btn btn-primary">Add Patient History</a>
    </div>
  </form>

  </body>
  </html>
