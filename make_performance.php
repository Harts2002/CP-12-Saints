<?php
session_start();
if (isset($_POST['submit'])){
    $location = $_POST['location'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $host = "localhost:3306";
        $dbUsername = "hao_Harts";
        $dbPassword = "20020511h";
        $dbname = "hao_Vanstrings";
     $conn = new mysqli("127.0.0.1",$dbUsername, $dbPassword, $dbname,"3306");
     if (mysqli_connect_error()) {
      die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
     } else {
        $_location = mysqli_real_escape_string($conn,$location);
        $_time = mysqli_real_escape_string($conn,$time);
        $_date = strtotime($date);
        $Date = date('Y-m-d H:i:s' , $_date);
         $sql2 = "SELECT * FROM `groups` WHERE `id` = '1'";
         $res = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
         $row = mysqli_fetch_assoc($res);
         $checker = $row['checker'];
         if ($checker === '1'){
             $sql3 = "SELECT * FROM `groups` WHERE `id` = '1'";
             $res2 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
             $row2 = mysqli_fetch_assoc($res2);
         }else if ($checker === '2'){
             $sql3 = "SELECT * FROM `groups` WHERE `id` = '2'";
             $res2 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
             $row2 = mysqli_fetch_assoc($res2);
         }else if ($checker === '3')
             $sql3 = "SELECT * FROM `groups` WHERE `id` = '3'";
             $res2 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));
             $row2 = mysqli_fetch_assoc($res2);
         }
         if ($checker === '3'){
             $checker = 1;
         }else{
             $checker = $checker+1;
         }
         $member1 = $row2['member1'];
         $member2 = $row2['member2'];
         $member3 = $row2['member3'];
         $sql = "UPDATE `groups` SET `checker` = '$checker' WHERE `id` = '1'";
         $sql4 = "INSERT INTO `seniorhome_performance`(`date`,`time`,`location`,`member1`,`member2`,`member3`) VALUES ('$Date','$_time','$_location','$member1','$member2','$member3')";
         if ($conn->query($sql) === TRUE && $conn->query($sql4) === TRUE) {
             header("Location: index.php");
             exit();
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}
     }

?>
<!DOCTYPE html>
<html>

<head>
    <style>
        body {background-color: #C0C0C0}
* {
  box-sizing: border-box;
}
body
    header {
      background-color: #800000;
     font-family: Apple Chancery;
      padding: 20px;
      text-align: center;
      font-size: 30px;
      color: #CCCC00;
    }

    nav {
      float: left;
      font-size: 20px;
      width: 30%;
      background: #FF6347;
      padding: 20px;
    }
    nav ul {
      list-style-type: none;
      padding: 0px;
    }

    article {
      float: left;
      padding: 20px;
      width: 70%;
      background-color: "gray";
    }

    section:after {
      content: "";
      display: table;
      clear: both;
    }

    footer {
      background-color: #800000;
      padding: 10px;
      text-align: left;
      color: white;
    }


    @media (max-width: 600px) {
      nav, article {
        width: 100%;
        height: auto;
      }
  }
#reg_btn{
    height: 20px;
    width: 10%;
    margin: 5px 10%;
    color: white;
    background: #3B5998;
    border: none;
    border-radius: 5px;
}
</style>
</head>

<body>
    <header> <img src="VSCM.png" align="right">
        <h1>Login</h1>
    </header>
    <section>
        <nav>
            <ul>
                <li><a href="announcements.php">Announcements</a></li>
                <li><a href="members.php">Members</a></li>
                <li><a href="Information.php">Information</a></li>
                <li><?php if ($_SESSION['u_first'] === "Hao"){
                    echo '<a href = "managers.php">My account</a>';
                }else if (isset($_SESSION['u_first'])){
                    echo '<a href = "accounts.php">My account</a>';
                }else{
                    echo'<a href = "loginpage.php">Login</a>';
                }
                ?></a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
            <img src="calendar.png" align="right" style="float: left;width: 70%; height: 50%;">
        </nav>
        <article>
            <form  method = "POST">
                Location: <input type = "text" name ="location">
                Date: <input type = "date" name = "date">
                Time: <input type = "text" name = "time">
                <button type="submit" name = "submit">Submit</button>
            </form>
        </article>
    </section>
    <footer>
        <dl style="list-style-type: none">
            <dt>Hao Shi</dt>
            <dd>778-2333986</dd>
            <dt>Martin Huang</dt>
            <dd>778-000-000</dd>
            <dt>Ethan Lee</dt>
            <dd>778-000-000</dd>
        </dl>
    </footer>
</body>
</html>
