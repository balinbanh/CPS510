<html>
  <head>
    <title> CPS510 Database</title>
    <meta http-equiv="Content-type"
       content="text/html; charset=utf-8"/>
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       <link rel="stylesheet" href="style.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>

  <body class = "transparent">
    <div class="container">
      <br>
      <h4 class = "grey">DOCTORS</h4>
      <table class="table">
        <thead>
          <tr class = "different">
            <th>Secretary ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Works At</th>
          </tr>
        </thead>
        <tbody>

        <form action = "editSecretary.php">
        <?php
         //if user is admin, loop
         echo "<tr>";
         echo "<td><input type=\"text\" name=\"secID\" value=\"1\"></td>";
         echo "<td><input type=\"text\" name=\"sFirst\" value=\"Emily\"></td>";
         echo "<td><input type=\"text\" name=\"sLast\" value=\"Kim\"></td>";
         echo "<td><input type=\"text\" name=\"sWork\" value=\"1\"></td>";
         echo "</tr>";

         //if user is admin, loop
          echo "<tr>";
          echo "<td id=\"secID\" contenteditable=\"true\">2</td>";
          echo "<td id=\"sFirst\" contenteditable=\"true\">Jane</td>";
          echo "<td id=\"sLast\" contenteditable=\"true\">Smith</td>";
          echo "<td id=\"sWork\" contenteditable=\"true\">1</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>3</td>";
          echo "<td>Erica</td>";
          echo "<td>Tomah</td>";
          echo "<td>1</td>";
          echo "</tr>";
        ?>

        </tbody>
      </table>
    </div>

    <div class="container">
      <br>
      <br>
      <input type= "submit" class="btn btn-primary" value="Save Changes">
      <a href="addSecretary.html" target="iframe_a" class="btn btn-primary">Add Secretary</a>
    </div>
  </form>
  </body>
  </html>
