<?php
      include_once 'dbh.inc.php';

      $name= mysqli_real_escape_string($conn,$_POST['dep_name']);
      $floor= mysqli_real_escape_string($conn,$_POST['floor']);
      $building= mysqli_real_escape_string($conn,$_POST['building']);

      if (isset($_POST['insert'])){
        $sql = "INSERT INTO `department` VALUES ('$name', '$floor', '$building');";

        mysqli_query($conn,$sql);

        header("Location: ../department.php?insert=success");

      }
      if (isset($_POST['update'])){
        $u_id= mysqli_real_escape_string($conn,$_POST['u_id']);
        $sql1 = "UPDATE `department` SET `floor` = '$floor', `building` = '$building' WHERE `department`.`dep_name` = '$name';";

        mysqli_query($conn,$sql1);

        header("Location: ../department.php?update=success");

      }
      if (isset($_POST['delete'])){
        $d_id= mysqli_real_escape_string($conn,$_POST['d_id']);
        $sql2 = "DELETE FROM department WHERE dep_name='$name';";

        mysqli_query($conn,$sql2);

        header("Location: ../department.php?delete=success");

      }
