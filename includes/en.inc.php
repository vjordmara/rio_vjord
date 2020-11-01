<?php
      include_once 'dbh.inc.php';

      $ID= mysqli_real_escape_string($conn,$_POST['st_id']);
      $name= mysqli_real_escape_string($conn,$_POST['cs_name']);
      $nr= mysqli_real_escape_string($conn,$_POST['cs_nr']);
      $cred= mysqli_real_escape_string($conn,$_POST['credits']);
      $grade= mysqli_real_escape_string($conn,$_POST['grade']);

      if (isset($_POST['insert'])){
        $sql = "INSERT INTO enrolled VALUES ('$ID','$nr','$cred','$name','$grade');";

        mysqli_query($conn,$sql);

        header("Location: ../Enrolled.php?insert=success");

      }
      if (isset($_POST['update'])){
        $u_id= mysqli_real_escape_string($conn,$_POST['u_id']);
        $sql1 = "UPDATE enrolled SET cs_nr = $nr, credits = $cred, grade = $grade WHERE enrolled.st_id = '$ID' AND enrolled.cs_name='$name';";

        mysqli_query($conn,$sql1);

        header("Location: ../Enrolled.php?update=success");

      }
      if (isset($_POST['delete'])){
        $d_id= mysqli_real_escape_string($conn,$_POST['d_id']);
        $sql2 = "DELETE FROM enrolled WHERE st_id = $ID AND cs_name='$name' AND cs_nr='$nr';";

        mysqli_query($conn,$sql2);

        header("Location: ../Enrolled.php?delete=success");

      }
