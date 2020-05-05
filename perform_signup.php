<?php
session_start();
$host = "localhost:3306";
    $dbUsername = "hao_Harts";
    $dbPassword = "20020511h";
    $dbname = "hao_Vanstrings";
 $conn = new mysqli("127.0.0.1",$dbUsername, $dbPassword, $dbname,"3306");
 if (mysqli_connect_error()) {
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}else{
    $sql = "SELECT  * FROM `seniorhome_performance` ORDER BY id DESC LIMIT 1";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $time = $row['time'];
    $location = $row['location'];
    $date = strtotime($row['date']);
    $fviolin1 = $row['first_violin'];
    $fviolin2 = $row['first_violin2'];
    $fviolin3 = $row['first_violin3'];
    $fviolin4 = $row['first_violin4'];
    $sviolin1 = $row['second_violin'];
    $sviolin2 = $row['second_violin2'];
    $sviolin3 = $row['second_violin3'];
    $sviolin4 = $row['second_violin4'];
    $tviolin1 = $row['third_violin'];
    $tviolin2 = $row['third_violin2'];
    $tviolin3 = $row['third_violin3'];
    $tviolin4 = $row['third_violin4'];
    $cello1 = $row['cello'];
    $cello2 = $row['cello2'];
    $cello3 = $row['cello3'];
    $cello4 = $row['cello4'];
}
?>
<!DOCTYPE html>
<html>
<title>Vanstrings</title>

<head>
<link rel = "stylesheet" type = "text/css" href = "draft.css">
</head>
<body>
    <header> <img src="VSCM.png" align="right">
        <h1>Vanstrings Chamber Music</h1>
    </header>
    <section>
        <nav>
            <ul>
                <li><a href="announcements.php">Announcements</a></li>
                <li><a href="members.php">Members</a></li>
                <li><a href = "managers.php">Back</a></li>
                </li>
                <li><a href="Information.php">Information</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
            <img src="calendar.png" align="right" style="float: left;width: 75%; height: 40%;">
        </nav>
        <article>
            <h1><?php echo "Performance on (m/d/y): ".date('m/d/y',$date)." at ".$time." at ".$location; ?></h1>
            <h3>first violins </h3>
            <?php
            if ($fviolin1 != NULL){
                echo "(".$fviolin1."); ";
            }
            if ($fviolin2 != NULL){
                echo "(".$fviolin2."); ";
            }
            if ($fviolin3 != NULL){
                echo "(".$fviolin3."); ";
            }
            if ($fviolin4 != NULL){
                echo "(".$fviolin4."); ";
            }
            ?>
            <h3>Second violins </h3>
            <?php
            if ($sviolin1 != NULL){
                echo "(".$sviolin1."); ";
            }
            if ($sviolin2 != NULL){
                echo "(".$sviolin2."); ";
            }
            if ($sviolin3 != NULL){
                echo "(".$sviolin3."); ";
            }
            if ($sviolin4 != NULL){
                echo "(".$sviolin4."); ";
            }
            ?>
            <h3>Third violins </h3>
            <?php
            if ($tviolin1 != NULL){
                echo "(".$tviolin1."); ";
            }
            if ($tviolin2 != NULL){
                echo "(".$tviolin2."); ";
            }
            if ($tviolin3 != NULL){
                echo "(".$tviolin3."); ";
            }
            if ($tviolin4 != NULL){
                echo "(".$tviolin4."); ";
            }
            ?>
            <h3>Cellos</h3>
            <?php
            if ($cello1 != NULL){
                echo "(".$cello1."); ";
            }
            if ($cello2 != NULL){
                echo "(".$cello2."); ";
            }
            if ($cello3 != NULL){
                echo "(".$cello3."); ";
            }
            if ($cello4 != NULL){
                echo "(".$cello4."); ";
            }
            ?>
        </article>
    </section>
    <footer>
        <dl style="list-style-type: none">
            <dt><b>Hao Shi</b></dt>
            <dd>778-2333986</dd>
            <dt><b>Martin Huang</b></dt>
            <dd>778-000-000</dd>
            <dt><b>Ethan Lee</b></dt>
            <dd>778-000-000</dd>
        </dl>
    </footer>
</body>
</html>
