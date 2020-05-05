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
     $sql = "SELECT `first_name`, `last_name` FROM `users`";
     $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
     $firstnames = array();
     $lastnames = array();
     if (mysqli_num_rows($res) > 0){
         $result = mysqli_query($conn,$sql);
         while ($row = mysqli_fetch_array($result)){
             $firstnames[] = $row[0];
             $lastnames[] = $row[1];
         }
         $num_rows = count($firstnames);
 }
if (isset($_POST['submit'])){
        $date = $_POST['date'];
        $_date = strtotime($date);
        $Date = date('Y-m-d H:i:s' , $_date);
        $sql3 = "INSERT INTO `attendance`(`date`)
        VALUES ('$Date')";
        if ($conn->query($sql3) === TRUE) {
            for ( $i = 0; $i < $num_rows; $i++){
            $name = $firstnames[$i]." ".$lastnames[$i];
                if ($_POST[$i] === 'absent'){
                    $sql2 = "UPDATE `attendance` set `$name` = 'absent' ORDER BY id DESC LIMIT 1";
                    $sql4 = "UPDATE `profile` set `profile_absence_rehearsal` = `profile_absence_rehearsal` + 1 WHERE `profile_first` = '$name'";
                    if ($conn->query($sql2) === TRUE && $conn->query($sql4) === TRUE) {
                    } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
                }
}
if ($_SESSION['u_first'] === "Hao"){
header("Location: managers.php");
exit();
}else{
    header("Location: accounts.php");
}
}else{
       echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel = "stylesheet" type = "text/css" href = "draft.css">
    <style>
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
        <h1>Attendance</h1>
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
             Date: <input type = "date" name = "date">
             <br>
             <br>
                <?php
                for ( $i = 0; $i < $num_rows; $i++){
                    $name = $firstnames[$i]." ".$lastnames[$i];
                    echo $name;
                    echo "<select name = $i>
                    <option value = present>present</option>
                    <option value = absent> absent</option>
                    </select>
                    <br>";
                }
                ?>
                <button type="submit" name = "submit" id = "reg_btn">Submit</button>
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
