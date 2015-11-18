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
      <h4 class = "grey">MEDICAL FILES</h4>
      <table class="table">
        <thead>
          <tr class = "different">
            <th>Patient</th>
            <th>Height(cm)</th>
            <th>Weight(pounds)</th>
            <th>Conditions</th>
            <th>Medical History</th>
            <th>Doctor Notes</th>
            <th>Prescription</th>
          </tr>
        </thead>
        <tbody>

        <?php

         //if user is admin, loop
          echo "<tr>";
          echo "<td id=\"pID\" contenteditable=\"true\">500002</td>";
          echo "<td id=\"height\" contenteditable=\"true\">172</td>";
          echo "<td id=\"weight\" contenteditable=\"true\">150</td>";
          echo "<td id=\"conditionsr\" contenteditable=\"true\">(null)</td>";
          echo "<td id=\"history\" contenteditable=\"true\">(null)</td>";
          echo "<td id=\"notes\" contenteditable=\"true\">Good Health</td>";
          echo "<td id=\"prescription\" contenteditable=\"true\">(null)</td>";
          echo "</tr>";

          //if user is not admin, loop this
          echo "<tr>";
          echo "<td>123780</td>";
          echo "<td>189</td>";
          echo "<td>330</td>";
          echo "<td>Obesity, diabetes, and high blood presure</td>";
          echo "<td>Angioplasty performed on 3/01/11</td>";
          echo "<td>Poor Health.</td>";
          echo "<td>Lipitor, Plavix, Ramipril, Beta Blockers</td>";
          echo "</tr>";
        ?>

        </tbody>
      </table>
    </div>

    <div class="container">
      <br>
      <br>
      <input type="button" class="btn btn-primary" value="Save Changes">
      <a href="addFile.html" target="iframe_a" class="btn btn-primary">Add Medical File</a>
    </div>

  </body>
  </html>
