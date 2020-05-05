<?php
session_start();
if (isset($_POST['submit'])){
$_replacement = $_POST['name'];
$host = "localhost:3306";
    $dbUsername = "hao_Harts";
    $dbPassword = "20020511h";
    $dbname = "hao_Vanstrings";
 $conn = new mysqli("127.0.0.1",$dbUsername, $dbPassword, $dbname,"3306");
 if (mysqli_connect_error()) {
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
 } else {
     $replacement = mysqli_real_escape_string($conn,$_replacement);
     $replaced = $_SESSION['u_first'];
     $sql = "SELECT * FROM `seniorhome_performance` ORDER BY `id` DESC LIMIT 1";
     $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
     $row = mysqli_fetch_assoc($res);
     if ($row['member1'] === $replaced){
         $sql2 = "UPDATE `seniorhome_performance` SET `member1` = '$replacement' ORDER BY `id` DESC LIMIT 1";
     }else if ($row['member2'] === $replaced){
         $sql2 = "UPDATE `seniorhome_performance` SET `member2` = '$replacement' ORDER BY `id` DESC LIMIT 1";
     }else if ($row['member3'] === $replaced){
         $sql2 = "UPDATE `seniorhome_performance` SET `member3` = '$replacement' ORDER BY `id` DESC LIMIT 1";
     }
      if ($conn->query($sql2) === TRUE){
          header('Location: index.php');
          exit();
      }
      }
 }
?>
<html>
<head>
    <meta charset = "utf-8">
    <meta name = "description" content = "Vanstring members profile page">
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title>Personal Profile of members</title>
    <link rel = "stylesheet" href = "profile.css">
    <link rel ="stylesheet" type = "text/css" href ="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel ="stylesheet" type = "text/css" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class = "main-body">
    <form method = "POST">
        <input type="text" name="name" placeholder = "Name" required>The person replacing you
        <br>
        <input type="checkbox" name="confirmed" value="yes" required>I confirm I checked with the individual replacing me
        <br>
        <input type="submit" name = "submit" value = "Get Replaced">
    </form>
</div>
            <footer>
                    <dl><?php
                        if ($_SESSION['u_first'] === "Hao"){
                            echo '<a class = "active" href = "managers.php">My account</a>';
                        }else{
                        echo '<a class = "active" href = "accounts.php">My account</a>';
                    }
                    ?>
                    </dl>
                </div>
            </footer>
</div>
</body>
</html>
