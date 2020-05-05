<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$age = $_POST['age'];
$email = $_POST['email'];
$first_name = $_POST['name1'];
$last_name= $_POST['name2'];
$school = $_POST['school'];
$home = $_POST['home'];
$grade = $_POST['grade'];
$error = "";
$host = "localhost:3306";
    $dbUsername = "hao_Harts";
    $dbPassword = "20020511h";
    $dbname = "hao_Vanstrings";
 $conn = new mysqli("127.0.0.1",$dbUsername, $dbPassword, $dbname,"3306");
        if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
            $_username = mysqli_real_escape_string($conn,$username);
            $_password = mysqli_real_escape_string($conn,$password);
            $_age = mysqli_real_escape_string($conn,$age);
            $_email = mysqli_real_escape_string($conn,$email);
            $_first_name = mysqli_real_escape_string($conn,$first_name);
            $_last_name= mysqli_real_escape_string($conn,$last_name);
            $_school = mysqli_real_escape_string($conn,$school);
            $_home = mysqli_real_escape_string($conn,$home);
if ($grade != "no change"){
    $temp =  $_SESSION['u_email'];
    $sql = "UPDATE  `users` SET `grade` = $grade WHERE `email` =  '$temp'";
    if ($conn->query($sql) === TRUE) {
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
if ($username != NULL){
    $temp =  $_SESSION['u_email'];
    $sql = "UPDATE  `users` SET `username` = '$_username' WHERE `email` =  '$temp'";
    if ($conn->query($sql) === TRUE) {
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
if ($password != NULL){
    $temp =  $_SESSION['u_email'];
    $sql = "UPDATE  `users` SET `password` = '$_password' WHERE `email` =  '$temp'";
    if ($conn->query($sql) === TRUE) {
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
if ($age != NULL){
    $temp =  $_SESSION['u_email'];
    $sql = "UPDATE  `users` SET `age` = '$_age' WHERE `email` =  '$temp'";
    if ($conn->query($sql) === TRUE) {
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
if ($_first_name != NULL){
    $temp =  $_SESSION['u_email'];
    $sql = "UPDATE  `users` SET `first_name` = '$_first_name' WHERE `email` =  '$temp'";
    if ($conn->query($sql) === TRUE) {
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
if ($_last_name != NULL){
    $temp =  $_SESSION['u_email'];
    $sql = "UPDATE  `users` SET `last_name` = '$_last_name' WHERE `email` =  '$temp'";
    if ($conn->query($sql) === TRUE) {
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
if ($home != NULL){
    $temp =  $_SESSION['u_email'];
    $sql = "UPDATE  `users` SET `home` = '$_home' WHERE `email` =  '$temp'";
    if ($conn->query($sql) === TRUE) {
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
if ($school != NULL){
    $temp =  $_SESSION['u_email'];
    $sql = "UPDATE  `users` SET `school` = '$_school' WHERE `email` =  '$temp'";
    if ($conn->query($sql) === TRUE) {
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
if ($email != NULL){
    $temp =  $_SESSION['u_email'];
    $sql = "UPDATE  `users` SET `email` = '$_email' WHERE `email` =  '$temp'";
    if ($conn->query($sql) === TRUE) {
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
header('Location: profile.php');
exit();
}

?>
