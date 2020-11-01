<?php
      include_once 'dbh.inc.php';

      $first= mysqli_real_escape_string($conn,$_POST['first']);
      $last= mysqli_real_escape_string($conn,$_POST['last']);
      $office= mysqli_real_escape_string($conn,$_POST['office']);
      $email= mysqli_real_escape_string($conn,$_POST['email']);
      $dep= mysqli_real_escape_string($conn,$_POST['dep_name']);

      if (isset($_POST['insert'])){
        $sql = "INSERT INTO professor (f_name,l_name,office,email,dep_name) VALUES ('$first','$last','$office','$email','$dep');";

        mysqli_query($conn,$sql);

        header("Location: ../professor.php?insert=success");

      }
      if (isset($_POST['update'])){
        $u_id= mysqli_real_escape_string($conn,$_POST['u_id']);
        $sql1 = "UPDATE `professor` SET `f_name` = '$first', `l_name` = '$last', `office` = '$office', `email` = '$email', `dep_name` = '$dep' WHERE `professor`.`professor_id` = $u_id;";

        mysqli_query($conn,$sql1);

        header("Location: ../professor.php?update=success");

      }
      if (isset($_POST['delete'])){
        $d_id= mysqli_real_escape_string($conn,$_POST['d_id']);
        $sql2 = "DELETE FROM professor WHERE professor_id = $d_id;";

        mysqli_query($conn,$sql2);

        header("Location: ../professor.php?delete=success");

      }
