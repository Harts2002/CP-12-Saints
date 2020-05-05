<?php
$username = $_POST['username'];
$password = $_POST['password'];
$age = $_POST['age'];
$email = $_POST['email'];
$first_name = $_POST['name1'];
$last_name= $_POST['name2'];
$section = $_POST['section'];
$school = $_POST['school'];
$home = $_POST['home'];
$grade = $_POST['grade'];
$confirmation = $_POST['confirm'];
$vpass = $_POST['vpass'];
$error = "";
$host = "localhost:3306";
    $dbUsername = "hao_Harts";
    $dbPassword = "20020511h";
    $dbname = "hao_Vanstrings";
 $conn = new mysqli("127.0.0.1",$dbUsername, $dbPassword, $dbname,"3306");
     if ($password === $confirmation){
        if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
            $_username = mysqli_real_escape_string($conn,$username);
            $_password = mysqli_real_escape_string($conn,$password);
            $_age = $age;
            $_email = mysqli_real_escape_string($conn,$email);
            $_first_name = mysqli_real_escape_string($conn,$first_name);
            $_last_name= mysqli_real_escape_string($conn,$last_name);
            $_section = mysqli_real_escape_string($conn,$section);
            $_school = mysqli_real_escape_string($conn,$school);
            $_home = mysqli_real_escape_string($conn,$home);
            $_grade = $grade;
            $_fullname = $_first_name." ".$_last_name;
            $_confirmation = mysqli_real_escape_string($conn,$confirmation);
            $fullname = mysqli_real_escape_string($conn, $_fullname);
            $sql = "INSERT INTO `users`(`first_name`, `last_name`, `section`, `home`,`age`,`email`,`school`,`grade`,`username`,`password`)
            VALUES ('$_first_name','$_last_name', '$_section','$_home', $_age, '$_email','$_school',$_grade,'$_username','$_password')";
            $sql2 = "INSERT INTO `profile`(`profile_first`, `profile_absence_rehearsal`,`profile_absence_seniorhome`,`profile_concert`,`profile_hours`,`profile_VTC`,`profile_status`,`username`)
            VALUES ('$fullname',0,0,0,0,'pending','good','$_username')";
            $sql3 = "ALTER TABLE `attendance` ADD `$fullname` VARCHAR(40)";
            if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE) {
                header("Location: submittedpage.php");
                exit();
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
   }
}else{
    echo  "Password confirmation failed. Please go back and fill in the password again.";
}

?>
