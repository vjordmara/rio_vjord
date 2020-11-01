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
    width: 10em;  height: 1em;
}
a.pos{
  position: absolute;
  top: 5px;
  right: 1000px;
  border: 0px solid #FFFF;
}
}
</style>
<h1>Courses Table</h1>
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
            <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Room</th>
            <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Building</th>
            <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Prof_ID</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql ="SELECT * FROM courses;";
          $result = mysqli_query($conn,$sql);
          $resultCheck = mysqli_num_rows($result);
          if ($resultCheck > 0){

            while ($row =mysqli_fetch_assoc($result)){
              echo "<tr>";

              echo "<td>";
              echo $row['corse_nr'] ."<br>";
              echo "</td>";

              echo "<td>";
              echo $row['corse_name'] ."<br>";
              echo "</td>";

              echo "<td>";
              echo $row['room'] ."<br>";
              echo "</td>";

              echo "<td>";
              echo $row['building'] ."<br>";
              echo "</td>";

              echo "<td>";
              echo $row['prof_id'] ."<br>";
              echo "</td>";

          }




      }
      ?>
    </div>
    <div class="absolute">
      <form action="includes/cs.inc.php" method="POST">
        <h2>Modification<h2>
        <input type="text" name="cs_name" value="Course Name">
        <br>
        <input type="number" min=101 max=500 class="numb" name="cs_nr" placeholder="Course Number">
        <input type="number" min=100 max=600 class="numb" name="room" placeholder="Room">
        <br>
        <input type="text" name="building" value="Building">
        <input type="number" min=7000001 max=9999999 class="numb" name="prof_id" placeholder="prof_id class="numb"">
        <br>
        <button type=" submit" name='insert'>Insert</button>
        <button type=" submit" name='update'>Update</button>
        <button type=" submit" name='delete'>Delete</button>
      </form>
    </div>

    </tbody>
  </table>
  <a href="../php_thing" class='pos' >GO HOME</a>

  </body>
</html>
