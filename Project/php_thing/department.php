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
  top: 150px;
  right: 400px;
  width: 300px;
  height: 300px;
  border: 0px solid #FFFF;
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
<h1>Departemnts Table</h1>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="table" class="students">
      <table class="studtable sortable jquery-tablesorter" border="1" style="text-align:right;">
        <thead>
          <tr>
            <th class="headerSort headerSortUP" tabindex="0" role="columnheader button" title="Sort ascending">Name</th>
            <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Floor</th>
            <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Building</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql ="SELECT * FROM department;";
          $result = mysqli_query($conn,$sql);
          $resultCheck = mysqli_num_rows($result);
          if ($resultCheck > 0){

            while ($row =mysqli_fetch_assoc($result)){
              echo "<tr>";

              echo "<td>";
              echo $row['dep_name'] ."<br>";
              echo "</td>";

              echo "<td>";
              echo $row['floor'] ."<br>";
              echo "</td>";

              echo "<td>";
              echo $row['building'] ."<br>";
              echo "</td>";

          }



      }
      ?>
    </div>
    <div class="absolute">
      <form action="includes/dep.inc.php" method="POST">
        <h2>Modification<h2>
        <input type="text" name="dep_name" value="Department Name">
        <br>
        <input type="number" min=2 max=9 class="numb" name="floor" placeholder="Floor">
        <input type="text" name="building" value="Building">
        <br>
        <button type=" submit" name='insert'>Insert</button>
        <button type=" submit" name='update'>Update</button>
        <button type=" submit" name='delete'>Delete</button>
      </form>
    </div>
  </tbody>
  <a href="../php_thing" class='pos' >GO HOME</a>
  </table>

  </body>
</html>
