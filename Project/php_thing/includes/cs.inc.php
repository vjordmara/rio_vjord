<?php
      include_once 'dbh.inc.php';

      $name= mysqli_real_escape_string($conn,$_POST['cs_name']);
      $nr= mysqli_real_escape_string($conn,$_POST['cs_nr']);
      $room= mysqli_real_escape_string($conn,$_POST['room']);
      $building= mysqli_real_escape_string($conn,$_POST['building']);
      $prof_id= mysqli_real_escape_string($conn,$_POST['prof_id']);

      if (isset($_POST['insert'])){
        $sql = "INSERT INTO courses VALUES ('$nr','$name','$room','$building','$prof_id');";

        mysqli_query($conn,$sql);

        header("Location: ../courses.php?insert=success");

      }
      if (isset($_POST['update'])){
        $u_id= mysqli_real_escape_string($conn,$_POST['u_id']);
        $sql1 = "UPDATE `courses` SET `room` = '$room', `building` = '$building', `prof_id` = '$prof_id' WHERE `courses`.`corse_nr` = $nr AND `courses`.`corse_name` = '$name';;";

        mysqli_query($conn,$sql1);

        header("Location: ../courses.php?update=success");

      }
      if (isset($_POST['delete'])){
        $d_id= mysqli_real_escape_string($conn,$_POST['d_id']);
        $sql2 = "DELETE FROM courses WHERE corse_nr = $nr AND corse_name ='$name';";

        mysqli_query($conn,$sql2);

        header("Location: ../courses.php?delete=success");

      }
