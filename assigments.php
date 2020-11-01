<?php
include_once 'includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    div.absolute {
      position: absolute;
      top: 80px;
      right: 300px;
      width: 300px;
      height: 300px;
      border: 0px solid #73AD21;
    }

    input.numb {
      width: 10em;
      height: 1em;
    }

    a.pos {
      position: absolute;
      top: 5px;
      right: 1000px;
      border: 0px solid #FFFF;
    }
    }
  </style>
  <h1>Assigments Table</h1>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <div id="table" class="students">
    <table class="studtable sortable jquery-tablesorter" border="1" style="text-align:right;">
      <thead>
        <tr>
          <th class="headerSort headerSortUP" tabindex="0" role="columnheader button" title="Sort ascending">Course_Nr </th>
          <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Course_Name</th>
          <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Student_ID</th>
          <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Assigment</th>
          <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">grade</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM assigment;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {

          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";

            echo "<td>";
            echo $row['crs_nr'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['crs_name'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['st_id'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['as_name'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['grade'] . "<br>";
            echo "</td>";
          }
        }
        ?>
  </div>
  <div class="absolute">
    <form action="includes/as.inc.php" method="POST">
      <h2>Modification<h2>
          <input type="text" name="cs_name" value="Course Name">
          <br>
          <input type="number" min=101 max=500 class="numb" name="cs_nr" placeholder="Course Number">
          <input type="number" min=0 max=100 class="numb" name="grade" placeholder="Grade">
          <br>
          <input type="text" name="as_name" value="Assigment">
          <input type="number" min=1000000 max=6999999 class="numb" name="st_id" placeholder="Student_id">
          <br>
          <button type=" submit" name='insert'>Insert</button>
          <button type=" submit" name='update'>Update</button>
          <button type=" submit" name='delete'>Delete</button>
    </form>
  </div>

  </tbody>
  </table>
  <a href="../" class='pos'>GO HOME</a>

</body>

</html>