<?php
      include_once 'dbh.inc.php';

      $name= mysqli_real_escape_string($conn,$_POST['cs_name']);
      $nr= mysqli_real_escape_string($conn,$_POST['cs_nr']);
      $st_id= mysqli_real_escape_string($conn,$_POST['st_id']);
      $as_name= mysqli_real_escape_string($conn,$_POST['as_name']);
      $grade= mysqli_real_escape_string($conn,$_POST['grade']);

      if (isset($_POST['insert'])){
        $sql = "INSERT INTO `assigment` VALUES ('$nr', '$name', '$st_id', '$as_name', '$grade');";

        mysqli_query($conn,$sql);

        header("Location: ../assigments.php?insert=success");

      }
      if (isset($_POST['update'])){
        $u_id= mysqli_real_escape_string($conn,$_POST['u_id']);
        $sql1 = "UPDATE `assigment` SET `grade` = '$grade' WHERE `assigment`.`crs_nr` = $nr AND `assigment`.`crs_name` = '$name' AND `assigment`.`st_id` = $st_id AND `assigment`.`as_name` = '$as_name';";

        mysqli_query($conn,$sql1);

        header("Location: ../assigments.php?update=success");

      }
      if (isset($_POST['delete'])){
        $d_id= mysqli_real_escape_string($conn,$_POST['d_id']);
        $sql2 = "DELETE FROM assigment WHERE crs_name='$name' AND crs_nr='$nr' AND st_id='$st_id' AND as_name='$as_name';";

        mysqli_query($conn,$sql2);

        header("Location: ../assigments.php?delete=success");

      }
