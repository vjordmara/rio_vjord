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
      top: 10px;
      right: 0;
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
  <h1>Students Table</h1>
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
          <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Major</th>
          <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">E-mail</th>
          <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Grad Year</th>
          <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Gpa</th>
          <th class="headerSort" tabindex="0" role="columnheader button" title="Sort ascending">Advisord ID</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM student;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {

          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";

            echo "<td>";
            echo $row['student_id'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['f_name'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['l_name'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['major'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['email'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['grad_year'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['gpa'] . "<br>";
            echo "</td>";

            echo "<td>";
            echo $row['advisor_id'] . "<br>";
            echo "</td>";
            echo "</tr>";
          }
        }
        ?>
  </div>
  <div class="absolute">
    <form action="includes/insert.inc.php" method="POST">
      <h2>Modification<h2>
          <input type="text" name="first" placeholder="Firstname">
          <br>
          <input type="text" name="last" placeholder="Lastname">
          <br>
          <input type="text" name="major" placeholder="Major">
          <br>
          <input type="text" name="email" placeholder="E-mail">
          <br>
          <input type="number" min=2019 max=2025 name="gy" placeholder="2019">
          <br>
          <input type="number" min=0 max=4.0 step="0.01" name="gpa" placeholder=2.0>
          <input type="number" min=1000000 max=6999999 placeholder="UpdateID" name="u_id">
          <br>
          <input type="number" min=7000000 max=7000100 name="Advisor" placeholder=7000000>
          <button type=" submit" name='insert'>Insert</button>
          <button type=" submit" name='update'>Update</button>
          <br>
          <input type="number" min=1000000 max=6999999 placeholder="Delete_ID" name="d_id">
          <br>
          <button type=" submit" name='delete'>Delete</button>
    </form>
  </div>

  </tbody>
  </table>
  <a href="../" class='pos'>GO HOME</a>

</body>

</html>