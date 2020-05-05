<?php
session_start();
$_message = $_POST['message'];
$today = date("Y/m/d");
$host = "localhost:3306";
    $dbUsername = "hao_Harts";
    $dbPassword = "20020511h";
    $dbname = "hao_Vanstrings";
 $conn = new mysqli("127.0.0.1",$dbUsername, $dbPassword, $dbname,"3306");
        if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
            $message = mysqli_real_escape_string($conn, $_message);
            $name = $_SESSION['u_first']." ".$_SESSION['u_last'];
            $sql = "INSERT INTO `announcements`(`message`, `author`)
            VALUES ('$message', '$name')";
        }
        if ($conn->query($sql) === TRUE) {
            header("Location: announcements.php");
            exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
