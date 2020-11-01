<?php
      include_once 'dbh.inc.php';

      $first= mysqli_real_escape_string($conn,$_POST['first']);
      $last= mysqli_real_escape_string($conn,$_POST['last']);
      $major= mysqli_real_escape_string($conn,$_POST['major']);
      $email= mysqli_real_escape_string($conn,$_POST['email']);
      $gy= mysqli_real_escape_string($conn,$_POST['gy']);
      $gpa= mysqli_real_escape_string($conn,$_POST['gpa']);
      $advisor= mysqli_real_escape_string($conn,$_POST['Advisor']);

      if (isset($_POST['insert'])){
        $sql = "INSERT INTO student (f_name,l_name,major,email,grad_year,gpa,advisor_id) VALUES ('$first','$last','$major','$email','$gy','$gpa',$advisor);";

        mysqli_query($conn,$sql);

        header("Location: ../Students.php?insert=success");

      }
      if (isset($_POST['update'])){
        $u_id= mysqli_real_escape_string($conn,$_POST['u_id']);
        $sql1 = "UPDATE `student` SET `f_name` = '$first', `l_name` = '$last', `major` = '$major', `email` = '$email', `grad_year` = '$gy', `gpa` = '$gpa', `advisor_id` = '$advisor' WHERE `student`.`student_id` = $u_id;";

        mysqli_query($conn,$sql1);

        header("Location: ../Students.php?update=success");

      }
      if (isset($_POST['delete'])){
        $d_id= mysqli_real_escape_string($conn,$_POST['d_id']);
        $sql2 = "DELETE FROM student WHERE student_id = $d_id;";

        mysqli_query($conn,$sql2);

        header("Location: ../Students.php?delete=success");

      }
