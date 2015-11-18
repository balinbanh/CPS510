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
            <th>First Name</th>
            <th>Last Name</th>
            <th>Doctor ID</th>
            <th>Certificate Year</th>
            <th>Certificate Type</th>
            <th>Works At</th>
          </tr>
        </thead>
        <tbody>

        <form action = "editDoctor.php">
        <?php
        //if user is admin, loop... post method .. 
         echo "<tr>";
         echo "<td><input type=\"text\" name=\"fName\" value=\"Beverly\"></td>";
         echo "<td><input type=\"text\" name=\"dLast\" value=\"Li\"></td>";
         echo "<td><input type=\"text\" name=\"docID\" value=\"1005\"></td>";
         echo "<td><input type=\"text\" name=\"certYear\" value=\"2006\"></td>";
         echo "<td><input type=\"text\" name=\"cert\" value=\"OD\"></td>";
         echo "<td><input type=\"text\" name=\"work\" value=\"1\"></td>";
         echo "</tr>";

         //if user is admin, loop... ignore this (table method)
          echo "<tr>";
          echo "<td id=\"dFirst\" contenteditable=\"true\">James</td>";
          echo "<td id=\"dLast\" contenteditable=\"true\">Dean</td>";
          echo "<td id=\"docID\" contenteditable=\"true\">1004</td>";
          echo "<td id=\"certYear\" contenteditable=\"true\">2005</td>";
          echo "<td id=\"cert\" contenteditable=\"true\">OD</td>";
          echo "<td id=\"work\" contenteditable=\"true\">1</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>Daniel</td>";
          echo "<td>Jones</td>";
          echo "<td>1001</td>";
          echo "<td>1989</td>";
          echo "<td>MD</td>";
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
      <a href="addDoctor.html" target="iframe_a" class="btn btn-primary">Add Doctor</a>
    </div>
  </form>

  </body>
  </html>
