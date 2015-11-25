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
      <h4 class = "grey">CLINIC INFORMATION</h4>
      <table class="table">
        <thead>
          <tr class = "different">
            <th>Clinic Name</th>
            <th>Clinic ID</th>
            <th>Clinic Phone Number</th>
            <th>Street Number</th>
            <th>Street</th>
            <th>City</th>
          </tr>
        </thead>
        <tbody>

        <form action = "editClinic.php">

        <?php
        //if user is admin, loop ..post method
          echo "<tr>";
          echo "<td><input type=\"text\" name=\"clinicName\" value=\"Toronto Walk-In Clinic\"></td>";
          echo "<td><input type=\"text\" name=\"clinicID\" value=\"3\"></td>";
          echo "<td><input type=\"text\" name=\"cPhone\" value=\"4168889135\"></td>";
          echo "<td><input type=\"text\" name=\"cStreetNum\" value=\"100\"></td>";
          echo "<td><input type=\"text\" name=\"cStreet\" value=\"Toronto Avenue\"></td>";
          echo "<td><input type=\"text\" name=\"cCity\" value=\"Toronto\"></td>";
          echo "</tr>";

         //if user is admin, loop
          echo "<tr>";
          echo "<td id=\"clinicName\" contenteditable=\"true\">Dundas Walk-In Clinic</td>";
          echo "<td id=\"clinicID\" contenteditable=\"true\">2</td>";
          echo "<td id=\"cPhone\" contenteditable=\"true\">4169671111</td>";
          echo "<td id=\"cStreetNum\" contenteditable=\"true\">4129</td>";
          echo "<td id=\"cStreet\" contenteditable=\"true\">Dundas W St</td>";
          echo "<td id=\"cCity\" contenteditable=\"true\">Toronto</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Shaftsbury Walk-In Clinic</td>";
          echo "<td>3</td>";
          echo "<td>905711111</td>";
          echo "<td>419</td>";
          echo "<td>Shaftsbury</td>";
          echo "<td>Richmond Hill</td>";
          echo "</tr>";
        ?>

        </tbody>
      </table>
    </div>

    <div class="container">
      <br>
      <br>
      <input type= "submit" class="btn btn-primary" value="Save Changes">
      <a href="addClinic.html" target="iframe_a" class="btn btn-primary">  Add Clinic</a>
	  <a href="removeClinic.html" target="iframe_a" class="btn btn-primary">  Remove Clinic</a>
    </div>
  </form>

  </body>
  </html>
