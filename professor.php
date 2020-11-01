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
      top: 50px;
      right: 30px;
      width: 300px;
      height: 300px;
      border: 0px solid #73AD21;
    }

    a.pos {
      position: absolute;
      top: 5px;
      right: 1000px;
      border: 0px solid #FFFF;
    }
    }
  </style>
  <h1>Professor Table</h1>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <div id="table" class="students">
    <table class="studtable sortable jquery-tablesorter" border="1" style="text-align:right;">
      <thead>
        <tr>
          <th class="headerSort headerSortUP" tabindex="0" role="columnheader button" title="Sort ascending">ID </th>
          <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">First Name</th>
          <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Last Name</th>
          <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">office</th>
          <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">E-mail</th>
          <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">dep_name</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM professor;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {

          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";

            echo "<td>";
            echo $row['professor_id'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['f_name'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['l_name'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['office'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['email'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['dep_name'] . "<br>";
            echo "</td>";
          }
        }
        ?>
  </div>
  <div class="absolute">
    <form action="includes/prof.inc.php" method="POST">
      <h2>Modification<h2>
          <input type="text" name="first" value="Firstname">
          <br>
          <input type="text" name="last" value="Lastname">
          <br>
          <input type="number" min=100 max=900 name="office" value=100>
          <br>
          <input type="text" name="email" value="E-mail">
          <br>
          <input type="text" name="dep_name" value="Departmant">
          <br>

          <input type="number" min=7000001 max=9999999 placeholder="UpdateID" name="u_id">
          <br>
          <button type=" submit" name='insert'>Insert</button>
          <button type=" submit" name='update'>Update</button>
          <br>
          <input type="number" min=7000001 max=9999999 placeholder="Delete_ID" name="d_id">
          <br>
          <button type=" submit" name='delete'>Delete</button>
    </form>
  </div>

  </tbody>
  </table>
  <a href="../" class='pos'>GO HOME</a>
</body>

</html>