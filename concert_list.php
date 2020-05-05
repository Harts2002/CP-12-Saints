<?php
session_start();
$host = "localhost:3306";
    $dbUsername = "hao_Harts";
    $dbPassword = "20020511h";
    $dbname = "hao_Vanstrings";
 $conn = new mysqli("127.0.0.1",$dbUsername, $dbPassword, $dbname,"3306");
 if (mysqli_connect_error()) {
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
 } else {
      $sql = "SELECT * FROM `seniorhome_performance` ORDER BY `id` DESC LIMIT 1";
      $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
      $row = mysqli_fetch_assoc($res);
      $date = $row['date'];
      $time = $row['time'];
      $location = $row['location'];
      $member1 = $row['member1'];
      $member2 = $row['member2'];
      $member3 = $row['member3'];
 }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <meta name = "description" content = "Vanstring managers page">
    <meta name = "viewport" content = "width = device-width, initial-scale=1">
    <title>Vanstrings Management Page</title>
<link rel = "stylesheet" type = "text/css" href = "managers.css">
</head>
<body>
    <header> <img src="VSCM.png" align="right">
        <h1>My Account</h1>
    </header>
    <section>
        <nav>
            <ul>
                <li><a href="requirements.php">Requirement data</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><?php if (isset($_SESSION['u_email'])){
                    if ($_SESSION['u_first'] === "Hao"){
                        echo '<a href = "managers.php">My account</a>';
                    }else{
                    echo '<a href = "accounts.php">My account</a>';
                }
            }
            ?></a></li>
                <li><a href = "changerequest.php">replacement request</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
            <img src="calendar.png" align="right" style="float: left;width: 70%; height: 50%;">
        </nav>
        <article>
            <?php
            echo "Next seniorhome performance at ".$location." at ".$date." and the time is ".$time.".";
            echo "<br>";
            echo "Members Going: ".$member1.", ".$member2.", ".$member3.", ";
        ?>
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
