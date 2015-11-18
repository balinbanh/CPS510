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
      <h4 class = "grey">APPOINTMENTS</h4>
      <table class="table">
        <thead>
          <tr>
            <th>Appointment Number</th>
            <th>Date of Appointment</th>
            <th>Time of Appointment</th>
            <th>Patient ID</th>
            <th>Doctor ID</th>
            <th>Scheduled By</th>
          </tr>
        </thead>
        <tbody>

        <form action = "editAppointment.php">
        <?php

        //if user is admin, loop this... post method
          echo "<tr>";
          echo "<td><input type=\"text\" name=\"appNum\" value=\"1\"></td>";
          echo "<td><input type=\"text\" name=\"appDate\" value=\"30-Oct-15\"></td>";
          echo "<td><input type=\"text\" name=\"appTime\" value=\"1200\"></td>";
          echo "<td><input type=\"text\" name=\"appPatient\" value=\"155200\"></td>";
          echo "<td><input type=\"text\" name=\"appDoc\" value=\"1001\"></td>";
          echo "<td><input type=\"text\" name=\"appSch\" value=\"4\"></td>";
          echo "</tr>";

         //if user is admin, loop .. table method... dont do this
          echo "<tr>";
          echo "<td id=\"appNum\" contenteditable=\"true\">1</td>";
          echo "<td id=\"appDate\" contenteditable=\"true\">30-Oct-15</td>";
          echo "<td id=\"appTime\" contenteditable=\"true\">1215</td>";
          echo "<td id=\"appPatient\" contenteditable=\"true\">152524</td>";
          echo "<td id=\"appDoc\" contenteditable=\"true\">1002</td>";
          echo "<td id=\"appSch\" contenteditable=\"true\">3</td>";
          echo "</tr>";

          //extra row example
          echo "<tr>";
          echo "<td id=\"appNum\" contenteditable=\"true\">2</td>";
          echo "<td id=\"appDate\" contenteditable=\"true\">24-Nov-15</td>";
          echo "<td id=\"appTime\" contenteditable=\"true\">1512</td>";
          echo "<td id=\"appPatient\" contenteditable=\"true\">224112</td>";
          echo "<td id=\"appDoc\" contenteditable=\"true\">1004</td>";
          echo "<td id=\"appSch\" contenteditable=\"true\">2</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>3</td>";
          echo "<td>29-Nov-15</td>";
          echo "<td>1610</td>";
          echo "<td>122333</td>";
          echo "<td>1001</td>";
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
      <a href="addAppointment.html" target="iframe_a" class="btn btn-primary">  Add Appointment</a>
    </div>
  </form>

  </body>
  </html>
